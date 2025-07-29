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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig */
class __TwigTemplate_042f09e5dbcda4bc128d6f1d94a9491a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'reply_to_customer_form_rest' => [$this, 'block_reply_to_customer_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["replyToCustomerThreadForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_threads_reply", ["customerThreadId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["customerThreadView"] ?? null), "customerThreadId", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27)])]);
        // line 28
        echo "
  <div class=\"card\" data-role=\"employee-answer\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your answer to", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "

      ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 33), "firstName", [], "any", false, false, false, 33)) {
            // line 34
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 34), "firstName", [], "any", false, false, false, 34), "html", null, true);
            echo "
        ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 35), "lastName", [], "any", false, false, false, 35), "html", null, true);
            echo "
      ";
        } else {
            // line 37
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerInformation", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "html", null, true);
            echo "
      ";
        }
        // line 39
        echo "    </h3>

    <div class=\"card-body\">
      <div class=\"media\">
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["employeeAvatarUrl"] ?? null), "html", null, true);
        echo "\" class=\"mr-3 rounded-circle thread-message-employee-image\">
        <div class=\"media-body\">
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["replyToCustomerThreadForm"] ?? null), "reply_message", [], "any", false, false, false, 45), 'widget', ["attr" => ["rows" => 5]]);
        echo "
        </div>
      </div>

      <div class=\"d-none\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["replyToCustomerThreadForm"] ?? null), "_token", [], "any", false, false, false, 50), 'widget');
        echo "
      </div>

      ";
        // line 53
        $this->displayBlock('reply_to_customer_form_rest', $context, $blocks);
        // line 56
        echo "    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["replyToCustomerThreadForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 53
    public function block_reply_to_customer_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["replyToCustomerThreadForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  118 => 53,  112 => 64,  105 => 60,  99 => 56,  97 => 53,  91 => 50,  83 => 45,  78 => 43,  72 => 39,  66 => 37,  61 => 35,  56 => 34,  54 => 33,  49 => 31,  44 => 28,  42 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig");
    }
}
