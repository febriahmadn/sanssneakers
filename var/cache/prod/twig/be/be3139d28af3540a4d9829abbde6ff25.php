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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig */
class __TwigTemplate_2fedb847b192a4d8b100c4ea3e02d72b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'forward_customer_thread_form_rest' => [$this, 'block_forward_customer_thread_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<div class=\"modal fade\"
     id=\"forwardThreadModal\"
     tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"forwardThreadModalLabel\"
     aria-hidden=\"true\"
>
  <div class=\"modal-dialog\" role=\"document\">
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["forwardCustomerThreadForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_threads_forward", ["customerThreadId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["customerThreadView"] ?? null), "customerThreadId", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35)]), "attr" => ["class" => "form-horizontal"]]);
        // line 38
        echo "
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"forwardThreadModalLabel\">
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward this discussion", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </h5>
          <button type=\"button\"
                  class=\"close\"
                  data-dismiss=\"modal\"
                  aria-label=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\"
          >
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward this discussion to an employee:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["forwardCustomerThreadForm"] ?? null), "employee_id", [], "any", false, false, false, 58), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row d-none\">
            <label for=\"customer_email\" class=\"form-control-label\">
              ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["forwardCustomerThreadForm"] ?? null), "someone_else_email", [], "any", false, false, false, 67), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              ";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Comment:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["forwardCustomerThreadForm"] ?? null), "comment", [], "any", false, false, false, 76), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can add a comment here.", [], "Admin.Orderscustomers.Help")]]);
        // line 78
        echo "
            </div>
          </div>

          <div class=\"d-none\">
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["forwardCustomerThreadForm"] ?? null), "_token", [], "any", false, false, false, 83), 'widget');
        echo "
          </div>

          ";
        // line 86
        $this->displayBlock('forward_customer_thread_form_rest', $context, $blocks);
        // line 89
        echo "        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
            ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["forwardCustomerThreadForm"] ?? null), 'form_end');
        echo "
  </div>
</div>
";
    }

    // line 86
    public function block_forward_customer_thread_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["forwardCustomerThreadForm"] ?? null), 'rest');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 87,  155 => 86,  147 => 99,  140 => 95,  134 => 92,  129 => 89,  127 => 86,  121 => 83,  114 => 78,  112 => 76,  106 => 73,  97 => 67,  91 => 64,  82 => 58,  76 => 55,  65 => 47,  57 => 42,  51 => 38,  49 => 35,  48 => 33,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig");
    }
}
