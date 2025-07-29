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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig */
class __TwigTemplate_1705637ecbdf00e7366148fcf1c605f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_form_rest' => [$this, 'block_meta_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["metaForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta tags", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </div>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["metaForm"] ?? null), 'errors');
        echo "

        ";
        // line 37
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["metaForm"] ?? null), "page_name", [], "any", false, false, false, 37), ["attr" => ["class" => "js-meta-page-name", "data-toggle" => "select2", "data-minimumResultsForSearch" => "7"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page name", [], "Admin.Shopparameters.Feature"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name of the related page.", [], "Admin.Shopparameters.Help")]], 37, $context, $this->getSourceContext());
        // line 46
        echo "

        ";
        // line 48
        ob_start(function () { return ''; });
        // line 49
        echo "          ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title of this page.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 50
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . "  <>={}"), "html", null, true);
        echo "
        ";
        $context["pageTitleHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
        ";
        // line 53
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["metaForm"] ?? null), "page_title", [], "any", false, false, false, 53), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page title", [], "Admin.Shopparameters.Feature"), "help" =>         // line 55
($context["pageTitleHelpLabel"] ?? null)]], 53, $context, $this->getSourceContext());
        // line 56
        echo "

        ";
        // line 58
        ob_start(function () { return ''; });
        // line 59
        echo "          ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A short description of your shop.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 60
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . " <>={}"), "html", null, true);
        echo "
        ";
        $context["metaDescriptionHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
        ";
        // line 63
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["metaForm"] ?? null), "meta_description", [], "any", false, false, false, 63), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta description", [], "Admin.Global"), "help" =>         // line 65
($context["metaDescriptionHelpLabel"] ?? null)]], 63, $context, $this->getSourceContext());
        // line 66
        echo "

        ";
        // line 68
        ob_start(function () { return ''; });
        // line 69
        echo "          ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of keywords for search engines.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 71
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . " <>={}"), "html", null, true);
        echo "
        ";
        $context["metaKeywordsHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
        ";
        // line 74
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["metaForm"] ?? null), "meta_keywords", [], "any", false, false, false, 74), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 76
($context["metaKeywordsHelpLabel"] ?? null)]], 74, $context, $this->getSourceContext());
        // line 77
        echo "

        ";
        // line 79
        ob_start(function () { return ''; });
        // line 80
        echo "          ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For instance, \"contacts\" for http://example.com/shop/contacts to redirect to http://example.com/shop/contact-form.php", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Only letters and hyphens are allowed.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        $context["rewriteUrlHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "
        ";
        // line 84
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["metaForm"] ?? null), "url_rewrite", [], "any", false, false, false, 84), ["attr" => ["class" => "js-url-rewrite"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rewritten URL", [], "Admin.Shopparameters.Feature"), "help" =>         // line 86
($context["rewriteUrlHelpLabel"] ?? null)]], 84, $context, $this->getSourceContext());
        // line 87
        echo "

        ";
        // line 89
        $this->displayBlock('meta_form_rest', $context, $blocks);
        // line 92
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_metas_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["metaForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 89
    public function block_meta_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["metaForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 90,  194 => 89,  188 => 105,  181 => 101,  174 => 97,  170 => 96,  164 => 92,  162 => 89,  158 => 87,  156 => 86,  155 => 84,  152 => 83,  147 => 81,  142 => 80,  140 => 79,  136 => 77,  134 => 76,  133 => 74,  130 => 73,  125 => 71,  121 => 70,  116 => 69,  114 => 68,  110 => 66,  108 => 65,  107 => 63,  104 => 62,  99 => 60,  94 => 59,  92 => 58,  88 => 56,  86 => 55,  85 => 53,  82 => 52,  77 => 50,  72 => 49,  70 => 48,  66 => 46,  64 => 37,  59 => 35,  52 => 31,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig");
    }
}
