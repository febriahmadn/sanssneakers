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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig */
class __TwigTemplate_97a681b47426362b5370a0d3f3c2377b extends Template
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
<div class=\"card\" data-role=\"messages_timeline\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders and messages timeline", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"timeline\">
      ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerThreadView"] ?? null), "timeline", [], "any", false, false, false, 32), "timelineItems", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["timelineItem"]) {
            // line 33
            echo "        ";
            // line 34
            echo "        <div class=\"timeline-item ";
            if ((twig_get_attribute($this->env, $this->source, $context["timelineItem"], "arrow", [], "any", false, false, false, 34) == "right")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "\">

          ";
            // line 37
            echo "          <div class=\"timeline-icon-wrapper\">
            <div class=\"timeline-icon\" 
              ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["timelineItem"], "color", [], "any", false, false, false, 39)) {
                // line 40
                echo "                style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timelineItem"], "color", [], "any", false, false, false, 40), "html", null, true);
                echo ";\"
              ";
            }
            // line 42
            echo "            >
              <i class=\"material-icons text-white\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timelineItem"], "icon", [], "any", false, false, false, 43), "html", null, true);
            echo "</i>
            </div>
          </div>

          ";
            // line 47
            echo " 
          <div class=\"timeline-date-wrapper\">
            <div class=\"timeline-date\">
              <i class=\"material-icons font-16\">calendar_today</i>
              <span class=\"timeline-date-day\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getFunction('format_date')->getCallable()(twig_get_attribute($this->env, $this->source, $context["timelineItem"], "date", [], "any", false, false, false, 51)), "html", null, true);
            echo "</span>
              <i class=\"material-icons font-16\">access_time</i>
              <span>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timelineItem"], "date", [], "any", false, false, false, 53), "H:i"), "html", null, true);
            echo "</span>
            </div>
          </div>

          ";
            // line 58
            echo "          <div class=\"timeline-content-wrapper\">
            <div class=\"timeline-content\">
              <div>
                ";
            // line 61
            echo twig_nl2br(twig_get_attribute($this->env, $this->source, $context["timelineItem"], "content", [], "any", false, false, false, 61));
            echo "
              </div>
              ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, $context["timelineItem"], "relatedOrderId", [], "any", false, false, false, 63)) {
                // line 64
                echo "                <p class=\"mb-0 mt-2\">
                  <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminOrders", true, ["vieworder" => 1, "id_order" => twig_get_attribute($this->env, $this->source, $context["timelineItem"], "relatedOrderId", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\"
                      class=\"btn btn-outline-secondary btn-sm\"
                      target=\"_blank\"
                  >
                    ";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("See more", [], "Admin.Actions"), "html", null, true);
                echo "
                  </a>
                </p>
              ";
            }
            // line 73
            echo "            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timelineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 77,  134 => 73,  127 => 69,  120 => 65,  117 => 64,  115 => 63,  110 => 61,  105 => 58,  98 => 53,  93 => 51,  87 => 47,  80 => 43,  77 => 42,  71 => 40,  69 => 39,  65 => 37,  55 => 34,  53 => 33,  49 => 32,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig");
    }
}
