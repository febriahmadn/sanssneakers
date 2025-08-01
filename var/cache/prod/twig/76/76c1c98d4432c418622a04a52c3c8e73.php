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

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig */
class __TwigTemplate_758dfe462141b2aa6089adf940dd539e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'customer_preferences_general' => [$this, 'block_customer_preferences_general'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["generalForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('customer_preferences_general', $context, $blocks);
    }

    public function block_customer_preferences_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"alert alert-danger d-none\" role=\"alert\" id=\"configurationFormAlertMessageOptin\">
          <div class=\"alert-text\">
            <p>";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1]Make[/1] sure partner offers are not set as required in the [2]Customers[/2] section of the back office before disabling them. Otherwise, new customers won't be able to create an account and [1]proceed[/1] to checkout.", ["[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => (("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_index")) . "\">"), "[/2]" => "</a>"], "Admin.Shopparameters.Help");
        // line 45
        echo "</p>
          </div>
        </div>

        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? null), 'widget');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"form-general-save-button\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 54,  76 => 49,  70 => 45,  68 => 40,  59 => 34,  53 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig");
    }
}
