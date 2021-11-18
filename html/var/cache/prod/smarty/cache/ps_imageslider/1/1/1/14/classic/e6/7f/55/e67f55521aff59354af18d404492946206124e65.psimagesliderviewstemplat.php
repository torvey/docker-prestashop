<?php
/* Smarty version 3.1.39, created on 2021-11-18 18:39:01
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61968fb5dc4b61_39104499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1637087750,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_61968fb5dc4b61_39104499 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost/10-lampy-wewntrzne">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/aec30ee3ad90677edf17eb60ebf92de054e6a8b2_lampyz.jpg" alt="">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-PL&amp;utm_content=download">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/e523165a9095ab35e78cbdafdd2e3d4a32ae23f6_lampy4.jpg" alt="">
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
