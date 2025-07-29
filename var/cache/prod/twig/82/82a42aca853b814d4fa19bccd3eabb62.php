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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/view.html.twig */
class __TwigTemplate_1a6eab478e9bca11afd1fc0258fd10a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'customer_thread_actions' => [$this, 'block_customer_thread_actions'],
            'customer_information' => [$this, 'block_customer_information'],
            'customer_thread_messages' => [$this, 'block_customer_thread_messages'],
            'customer_thread_reply' => [$this, 'block_customer_thread_reply'],
            'customer_thread_timeline' => [$this, 'block_customer_thread_timeline'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/view.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <div class=\"card\" data-role=\"messages-thread\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thread", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      <strong>#";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "customerThreadId", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "html", null, true);
        echo "</strong>
    </h3>
    <div class=\"card-body\">
      ";
        // line 35
        $this->displayBlock('customer_thread_actions', $context, $blocks);
        // line 38
        echo "
      ";
        // line 39
        $this->displayBlock('customer_information', $context, $blocks);
        // line 42
        echo "
      ";
        // line 43
        $this->displayBlock('customer_thread_messages', $context, $blocks);
        // line 46
        echo "    </div>
  </div>

  ";
        // line 49
        $this->displayBlock('customer_thread_reply', $context, $blocks);
        // line 52
        echo "
  ";
        // line 53
        $this->displayBlock('customer_thread_timeline', $context, $blocks);
        // line 56
        echo "
";
    }

    // line 35
    public function block_customer_thread_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/view.html.twig", 36)->display($context);
        // line 37
        echo "      ";
    }

    // line 39
    public function block_customer_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/view.html.twig", 40)->display($context);
        // line 41
        echo "      ";
    }

    // line 43
    public function block_customer_thread_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/view.html.twig", 44)->display($context);
        // line 45
        echo "      ";
    }

    // line 49
    public function block_customer_thread_reply($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/view.html.twig", 50)->display($context);
        // line 51
        echo "  ";
    }

    // line 53
    public function block_customer_thread_timeline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/view.html.twig", 54)->display($context);
        // line 55
        echo "  ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/customer_thread_view.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  158 => 60,  154 => 59,  150 => 55,  147 => 54,  143 => 53,  139 => 51,  136 => 50,  132 => 49,  128 => 45,  125 => 44,  121 => 43,  117 => 41,  114 => 40,  110 => 39,  106 => 37,  103 => 36,  99 => 35,  94 => 56,  92 => 53,  89 => 52,  87 => 49,  82 => 46,  80 => 43,  77 => 42,  75 => 39,  72 => 38,  70 => 35,  64 => 32,  60 => 31,  56 => 29,  52 => 28,  41 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/view.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/view.html.twig");
    }
}
