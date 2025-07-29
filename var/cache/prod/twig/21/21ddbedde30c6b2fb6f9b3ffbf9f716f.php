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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig */
class __TwigTemplate_50a7fcde8a8d84aa6787765e119ddddf extends Template
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
<ul class=\"list-unstyled ml-5\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "messages", [], "any", false, false, false, 27));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 28)) {
                // line 29
                echo "      <li>
        <hr class=\"mb-3 mt-0\">
      </li>
    ";
            }
            // line 33
            echo "
    <li class=\"media\">
      ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 35) == "customer")) {
                // line 36
                echo "        <i class=\"material-icons thread-message-icon\">person</i>
      ";
            } else {
                // line 38
                echo "        <img class=\"rounded-circle thread-message-employee-image\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "employeeImage", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
      ";
            }
            // line 40
            echo "
      <div class=\"media-body ml-2\">
        <h4 class=\"mt-0 mb-1\">
          <i class=\"material-icons text-muted\">reply</i>

          ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 45) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\CustomerService\\ValueObject\\CustomerThreadMessageType::CUSTOMER"))) {
                // line 46
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "customerName", [], "any", false, false, false, 46), "html", null, true);
                echo "
          ";
            } else {
                // line 48
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "employeeName", [], "any", false, false, false, 48), "html", null, true);
                echo "
          ";
            }
            // line 50
            echo "
          <span class=\"text-muted\">
            <i class=\"material-icons text-muted font-16\">calendar_today</i>
            -
            ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getFunction('format_date')->getCallable()(twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 54)), "html", null, true);
            echo "
            <i class=\"material-icons text-muted font-16\">access_time</i>
            -
            ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 57), "H:i"), "html", null, true);
            echo "
          </span>

          ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["message"], "attachmentFile", [], "any", false, false, false, 60)) {
                // line 61
                echo "            <i class=\"material-icons font-16\">attachment</i>
            <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_secured_file_image_reader", ["fileName" => twig_get_attribute($this->env, $this->source, $context["message"], "attachmentFile", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\" target=\"_blank\">
              ";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attachment", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 66
            echo "
          ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, $context["message"], "productId", [], "any", false, false, false, 67)) {
                // line 68
                echo "            <i class=\"material-icons font-16\">library_books</i>
            <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "productId", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\">
              ";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
                echo "
              ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "productName", [], "any", false, false, false, 71), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 74
            echo "        </h4>
        <p class=\"pl-2 thread-message\">";
            // line 75
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 75), "html", null, true));
            echo "</p>
      </div>
    </li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 79,  162 => 75,  159 => 74,  153 => 71,  149 => 70,  145 => 69,  142 => 68,  140 => 67,  137 => 66,  131 => 63,  127 => 62,  124 => 61,  122 => 60,  116 => 57,  110 => 54,  104 => 50,  98 => 48,  92 => 46,  90 => 45,  83 => 40,  77 => 38,  73 => 36,  71 => 35,  67 => 33,  61 => 29,  58 => 28,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig");
    }
}
