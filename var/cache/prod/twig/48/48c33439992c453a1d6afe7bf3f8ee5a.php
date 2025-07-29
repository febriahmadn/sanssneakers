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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig */
class __TwigTemplate_93b55b455544d7a7a979135f80cb6497 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"row mt-4\">
  <div class=\"col\">
    <div class=\"media\">
      ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 29), "customerId", [], "any", false, false, false, 29)) {
            // line 30
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_view", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 30), "customerId", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
          <i class=\"material-icons thread-customer-icon\">
            person
          </i>
        </a>
      ";
        } else {
            // line 36
            echo "        <i class=\"material-icons thread-customer-icon\">
          person
        </i>
      ";
        }
        // line 40
        echo "
      <div class=\"media-body\">
        <h2 class=\"mt-0 mb-0\">
          ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 43), "firstName", [], "any", false, false, false, 43)) {
            // line 44
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_view", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 44), "customerId", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
              ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 45), "firstName", [], "any", false, false, false, 45), "html", null, true);
            echo "
              ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 46), "lastName", [], "any", false, false, false, 46), "html", null, true);
            echo "
              <small class=\"text-muted\">(";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
            echo ")</small>
            </a>
          ";
        } else {
            // line 50
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 50), "email", [], "any", false, false, false, 50), "html", null, true);
            echo "
          ";
        }
        // line 52
        echo "        </h2>
        <p>
          ";
        // line 54
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "contactName", [], "any", false, false, false, 54))) {
            // line 55
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            <span class=\"badge badge-primary rounded\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "contactName", [], "any", false, false, false, 56), "html", null, true);
            echo "</span>
          ";
        }
        // line 58
        echo "        </p>
      </div>

    </div>
  </div>
  <div class=\"col\">
    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 64), "validatedOrdersCount", [], "any", false, false, false, 64)) {
            // line 65
            echo "      ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1]%count%[/1] order(s) validated for a total amount of [2]%total%[/2]", ["%count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 66
($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 66), "validatedOrdersCount", [], "any", false, false, false, 66), "%total%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 67
($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 67), "validatedOrdersAmount", [], "any", false, false, false, 67), "[1]" => "<span class=\"badge badge-primary rounded\">", "[/1]" => "</span>", "[2]" => "<span class=\"badge badge-success rounded\">", "[/2]" => "</span>"], "Admin.Orderscustomers.Feature");
            // line 72
            echo "
    ";
        } else {
            // line 74
            echo "      ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No order validated for the moment. By default, an order is considered validated when its payment is accepted.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    ";
        }
        // line 76
        echo "
    <p class=\"text-muted\">
      ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer since: %s", ["%s" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 79), "customerSinceDate", [], "any", false, false, false, 79)], "Admin.Orderscustomers.Feature"), "html", null, true);
        // line 81
        echo "
    </p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 81,  139 => 79,  138 => 78,  134 => 76,  128 => 74,  124 => 72,  122 => 67,  121 => 66,  119 => 65,  117 => 64,  109 => 58,  104 => 56,  99 => 55,  97 => 54,  93 => 52,  87 => 50,  81 => 47,  77 => 46,  73 => 45,  68 => 44,  66 => 43,  61 => 40,  55 => 36,  45 => 30,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig");
    }
}
