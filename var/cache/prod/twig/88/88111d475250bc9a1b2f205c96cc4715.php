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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig */
class __TwigTemplate_f017a231f94e0e4e0d4d04501c7b2753 extends Template
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
<div class=\"card\">
  <div class=\"card-body\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "actions", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 29
            echo "      <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_threads_view_update_status", ["customerThreadId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
($context["customerThreadView"] ?? null), "customerThreadId", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30)]), "html", null, true);
            // line 31
            echo "\" method=\"post\" class=\"d-inline\">
        <input type=\"hidden\" name=\"newStatus\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "value", [], "any", false, false, false, 32), "html", null, true);
            echo "\"/>
        <button class=\"btn btn-outline-secondary\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 33), "html", null, true);
            echo "</button>
      </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    <button class=\"btn btn-outline-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#forwardThreadModal\">
      ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward this discussion to another employee", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </button>

    ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig", 41)->display($context);
        // line 42
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 42,  76 => 41,  70 => 38,  66 => 36,  57 => 33,  53 => 32,  50 => 31,  48 => 30,  46 => 29,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig");
    }
}
