{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div class="block-contact col-md-3 links wrapper">
  <div class="title clearfix hidden-md-up" data-target="#contact-infos" data-toggle="collapse">
    <span class="h3">{l s='Store information' d='Shop.Theme.Global'}</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">keyboard_arrow_down</i>
        <i class="material-icons remove">keyboard_arrow_up</i>
      </span>
    </span>
  </div>

  <p class="h4 text-uppercase block-contact-title hidden-sm-down">{l s='Store information' d='Shop.Theme.Global'}</p>
  <div id="contact-infos" class="collapse">
    {$contact_infos.address.formatted nofilter}
    {if $contact_infos.phone}
      <br>
      {* [1][/1] is for a HTML tag. *}
      {l s='Call us: [1]%phone%[/1]'
        sprintf=[
        '[1]' => "<a href='tel:{$contact_infos['phone']|replace:' ':''}'>",
        '[/1]' => '</a>',
        '%phone%' => $contact_infos.phone
        ]
        d='Shop.Theme.Global'
      }
    {/if}
    {if $contact_infos.fax}
      <br>
      {* [1][/1] is for a HTML tag. *}
      {l
        s='Fax: [1]%fax%[/1]'
        sprintf=[
          '[1]' => '<span>',
          '[/1]' => '</span>',
          '%fax%' => $contact_infos.fax
        ]
        d='Shop.Theme.Global'
      }
    {/if}
    {if $contact_infos.email && $display_email}
      <br>
        {l s='Email us:' d='Shop.Theme.Global'}
        {mailto address=$contact_infos.email encode="javascript"}
    {/if}
    <br>
    <a href="https://pin.it/1EFQWJGSi" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i> Pinteres</a><br>
    <a href="https://www.instagram.com/y_sstore77?igsh=MWthMjF2NDI2ZHJpcg==" target="_blank"><i class="fa fa-instagram"></i> Instagram</a><br>
    <a href="https://youtube.com/@worldoffootwear?si=b0xwQuYVP49Ocaww" target="_blank"><i class="fa fa-youtube"></i> Youtube</a><br>
    <a href="https://wa.me/qr/JQWE6DFYTYTQN1" target="_blank"><i class="fa fa-whatsapp"></i> WhatsApp</a>
  </div>
</div>
