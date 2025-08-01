<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig */
class __TwigTemplate_e69540060ccacb6805a778a548aaa1c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_showcase_card' => [$this, 'block_meta_showcase_card'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('meta_showcase_card', $context, $blocks);
    }

    public function block_meta_showcase_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        if ( !($context["showcaseCardIsClosed"] ?? null)) {
            // line 30
            echo "  <div id=\"seo-urls-showcase-card\" class=\"showcase-card card\">
    <div class=\"showcase-card__left shape-one helper-card__meta-background img-rtl\">
      <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/helper-card/seo@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
    <div class=\"showcase-card__right\">
      <h2>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Improve your SEO", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit information about your pages to gain visibility and therefore reach more visitors. We advise you to start with the index page, it stands for your homepage.", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["helperDocLink"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "</a>
      ";
            // line 38
            if ((($context["indexPageId"] ?? null) && ($context["isGridDisplayed"] ?? null))) {
                // line 39
                echo "        <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_metas_edit", ["metaId" => ($context["indexPageId"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure index page", [], "Admin.Shopparameters.Feature"), "html", null, true);
                echo "</a>
      ";
            }
            // line 41
            echo "    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\" data-card-name=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["metaShowcaseCardName"] ?? null), "html", null, true);
            echo "\" data-close-url=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_close_showcase_card");
            echo "\">close</i>
  </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  88 => 41,  80 => 39,  78 => 38,  72 => 37,  68 => 36,  64 => 35,  58 => 32,  54 => 30,  51 => 29,  44 => 28,  41 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig");
    }
}
