const axios = require("axios");
const cheerio = require("cheerio");
const fs = require("fs/promises");

const categoryLinks = [
  "https://mlamp.pl/6-lampy-wewnetrzne?order=product.name.asc&resultsPerPage=200",
  "https://mlamp.pl/7-lampy-zewnetrzne?order=product.name.asc&resultsPerPage=200",
  "https://mlamp.pl/4-zarowki-zrodla-swiatla?order=product.name.asc&resultsPerPage=150",
];

let items = [];
let links = [];
let counter = 0;

const main = async () => {
  for (let i = 0; i < categoryLinks.length; i++) {
    const productsResponse = await axios.get(categoryLinks[i]);
    const productUrls = productsResponse.data.products.map((item) => item.url);

    for (let j = 0; j < productUrls.length; j++) {
      if (links.includes(productUrls[j])) {
        continue;
      }
      counter++;

      links.push(productUrls[j]);

      const product = await axios.get(productUrls[j], {
        headers: {
          Accept: "*/*",
        },
      });
      const $ = cheerio.load(product.data);

      const attrName = $(".data-sheet .name");
      const attrValue = $(".data-sheet .value");
      const attr = [];

      for (let i = 0; i < attrName.length; i++) {
        attr[i] = {
          name: attrName.eq(i).text().replace(/\n/g, " "),
          value: attrValue.eq(i).text().replace(/\n/g, " "),
        };
      }

      const description = $(
        ".product-description .rte-content tr:nth-child(1) td:nth-child(1)"
      ).html()
        ? $(
            ".product-description .rte-content tr:nth-child(1) td:nth-child(1)"
          ).html()
        : $(".product-description .rte-content").html();

      const item = {
        title: $(".page-title span").text(),
        price: $(".current-price .product-price")
          .text()
          .slice(0, -3)
          .replace(",", ".")
          .replaceAll(/\s/g, ""),
        category: $("li[itemprop=itemListElement]:nth-child(2) span").text(),
        subcategory: product.data.match(/'category': '(.*?)',/)[1],
        image: $(".product-cover img").attr("src"),
        description: description.replace(/\n/g, " "),
        attributes: attr,
      };

      items.push(item);

      console.log(
        `Scrapped url number ${counter}. Category: ${item.category}. Url: ${productUrls[j]}`
      );
    }
  }

  await fs.writeFile("./data.json", JSON.stringify([...items]), "utf-8");
};

main();
