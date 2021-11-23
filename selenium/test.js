const webdriver = require("selenium-webdriver"),
    By = webdriver.By,
    until = webdriver.until;

const assert = require("assert");
const driver = new webdriver.Builder().forBrowser("chrome").build();

const generateEmail = (mail) => {
    const random = Math.floor(Math.random() * 10000);

    return mail.replace("%num%", random);
};

const clickElementById = async (id) => {
    await driver.findElement(By.id(id)).click();
};

const goBack = async () => {
    await driver.navigate().back();
};

const goToCart = async () => {
    await driver.findElement(By.css(".blockcart")).click();
};

const isCartValid = async (sum) => {
    await new Promise((r) => setTimeout(r, 1000));
    const cartCount = await driver
        .findElement(By.css(".js-subtotal"))
        .getText();

    assert.equal(sum, parseInt(cartCount.split(" ")[0]));
};

const removeFirstProduct = async () => {
    const quantity = await driver
        .findElement(By.css(".js-cart-line-product-quantity"))
        .getAttribute("value");

    await driver.findElement(By.css(".remove-from-cart")).click();

    return parseInt(quantity);
};

const goToCategory = async (id, counts) => {
    await clickElementById(id);

    for (let [index, val] of counts.entries()) {
        let product = await driver.findElement(
            By.css(`.product:nth-child(${index + 1})`)
        );
        await product.click();
        await driver.findElement(By.css("#quantity_wanted")).clear();
        await driver.findElement(By.css("#quantity_wanted")).sendKeys(val);
        await driver.findElement(By.css(".add-to-cart")).click();
        await driver.wait(until.elementLocated(By.css("h6")));
        await goBack();
    }
};

const createAccount = async () => {
    let mail = "presta%num%@rsites.pl";
    const random = Math.floor(Math.random() * 10000);
    mail = mail.replace("%num%", random);

    await driver.findElement(By.css(".user-info")).click();
    await driver.findElement(By.css(".no-account")).click();
    await driver.findElement(By.css('input[value="1"]')).click();
    await driver.findElement(By.css('input[name="firstname"]')).sendKeys("Jan");
    await driver
        .findElement(By.css('input[name="lastname"]'))
        .sendKeys("Kowalski");
    await driver
        .findElement(By.css('input[name="email"]'))
        .sendKeys(generateEmail("presta%num%@rsites.pl"));
    await driver
        .findElement(By.css('input[name="password"]'))
        .sendKeys("Kowalski123");
    await driver.findElement(By.css('input[name="customer_privacy"]')).click();
    await driver.findElement(By.css('input[name="psgdpr"]')).click();
    await driver.findElement(By.css(".form-control-submit")).click();

    const account = await driver.findElement(By.css(".account span")).getText();

    assert.equal("Jan Kowalski", account);
};

const createOrder = async () => {
    await driver.findElement(By.css(".checkout a")).click();
    await driver
        .findElement(By.css('input[name="address1"]'))
        .sendKeys("TestowyAdres 12");
    await driver
        .findElement(By.css('input[name="postcode"]'))
        .sendKeys("54-842");
    await driver.findElement(By.css('input[name="city"]')).sendKeys("Testowo");
    await driver
        .findElement(By.css('button[name="confirm-addresses"]'))
        .click();
    await driver
        .findElement(By.css('button[name="confirmDeliveryOption"]'))
        .click();
    await driver.findElement(By.css('input[id="payment-option-1"]')).click();
    await driver
        .findElement(
            By.css('input[id="conditions_to_approve[terms-and-conditions]"]')
        )
        .click();
    await driver.findElement(By.css("#payment-confirmation button")).click();
};

const checkStatus = async () => {
    await driver.findElement(By.css(".account")).click();
    await driver.findElement(By.css("#history-link")).click();
    await driver.findElement(By.css(".order-actions a:first-child")).click();
};

const ignoreProtection = async () => {
    await clickElementById("details-button");
    await clickElementById("proceed-link");
};

(async function example() {
    await driver.get("https://localhost");

    await ignoreProtection();

    const array1 = [1, 2, 4, 3, 5];
    const array2 = [7, 4, 6, 2, 2];

    await goToCategory("category-10", array1);

    await goToCategory("category-18", array2);

    let sum = array1
        .map((item, idx) => item + array2[idx])
        .reduce((sum, x) => sum + x, 0);

    await goToCart();

    await isCartValid(sum);

    const removed = await removeFirstProduct();

    await isCartValid(sum - removed);

    await createAccount();

    await goToCart();

    await createOrder();

    await checkStatus();

    // driver.close();
    // driver.quit();

    // let products2 = (await driver.findElements(By.css(".product"))).slice(0, 5);

    // for (const product of products2) {
    //     await new Promise((r) => setTimeout(r, 5000));
    //     await actions.move({ origin: product }).perform();
    // }

    // let firstResult = await driver.wait(
    //     until.elementLocated(By.css("h2")),
    //     10000
    // );

    // console.log(await firstResult.getAttribute("textContent"));
})();
