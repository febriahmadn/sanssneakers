<?php
/* Smarty version 4.3.4, created on 2025-06-23 09:50:29
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6858c0f54d8167_89982981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1708941642,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6858c0f54d8167_89982981 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
                      <figure>
              <img src="https://sanssneakers.com/modules/ps_imageslider/images/aa7fe230fffd023fe160eb7cf98dcbe3a64fec00_Final_Sneaker_Display_1870x620_HD.jpeg" alt="Step Into Comfort – Sneakers Designed for Movement" loading="lazy" width="1110" height="340">
                          </figure>
                  </li>
              <li class="carousel-item " role="option" aria-hidden="true">
                      <figure>
              <img src="https://sanssneakers.com/modules/ps_imageslider/images/f349466eb6d6b2491e6ebd76d966b8e03e55e47b_Banner_1900x620_HD.jpeg" alt="sample-2" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Step Up Your Style </h2>
                  <div class="caption-description"><p>Find Your Perfect Sneakers at SansSneakers</p></div>
                </figcaption>
                          </figure>
                  </li>
              <li class="carousel-item " role="option" aria-hidden="true">
                      <figure>
              <img src="https://sanssneakers.com/modules/ps_imageslider/images/e6e12dc77685a7408775113a479c92c253d59bf7_Banner_1870x620_HD.jpeg" alt="sample-3" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Comfort Meets Style</h2>
                  <div class="caption-description"><h3><span style="font-size:12.87px;">Discover Your New Favorite Sneakers Today</span></h3></div>
                </figcaption>
                          </figure>
                  </li>
          </ul>
    <div class="direction" aria-label="Carousel buttons">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Previous">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
