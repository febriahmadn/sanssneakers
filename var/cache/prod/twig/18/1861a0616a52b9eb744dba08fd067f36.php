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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_f0f4a5ddba3e4961985ea4fbacfc242c extends Template
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
";
        // line 26
        $context["actions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 26), "actions", [], "any", false, false, false, 26);
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty(($context["actions"] ?? null))) {
            // line 29
            echo "    ";
            $context["inlineActions"] = [];
            // line 30
            echo "    ";
            $context["regularActions"] = [];
            // line 31
            echo "
    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 33
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["action"], "isApplicable", [0 => ($context["record"] ?? null)], "method", false, false, false, 33)) {
                    // line 34
                    echo "        ";
                    if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["action"], "options", [], "any", false, false, false, 34)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["use_inline_display"] ?? null) : null) == true)) {
                        // line 35
                        echo "            ";
                        $context["inlineActions"] = twig_array_merge(($context["inlineActions"] ?? null), [0 => $context["action"]]);
                        // line 36
                        echo "          ";
                    } else {
                        // line 37
                        echo "            ";
                        $context["regularActions"] = twig_array_merge(($context["regularActions"] ?? null), [0 => $context["action"]]);
                        // line 38
                        echo "        ";
                    }
                    // line 39
                    echo "      ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    <div class=\"btn-group-action text-right\">
      ";
            // line 43
            if ( !twig_test_empty(($context["inlineActions"] ?? null))) {
                // line 44
                echo "        <div class=\"btn-group d-flex justify-content-between text-right\">
          ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["inlineActions"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["inlineAction"]) {
                    // line 46
                    $context["class"] = ("dropdown-item inline-dropdown-item " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inlineAction"], "options", [], "any", false, true, false, 46), "attr", [], "any", false, true, false, 46), "class", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inlineAction"], "options", [], "any", false, true, false, 46), "attr", [], "any", false, true, false, 46), "class", [], "any", false, false, false, 46), "")) : ("")));
                    // line 47
                    echo "
              ";
                    // line 48
                    echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . twig_get_attribute($this->env, $this->source, $context["inlineAction"], "type", [], "any", false, false, false, 48)) . ".html.twig"), ["grid" =>                     // line 49
($context["grid"] ?? null), "column" =>                     // line 50
($context["column"] ?? null), "attributes" => ["class" => twig_trim_filter(                    // line 51
($context["class"] ?? null)), "tooltip_name" => true], "record" =>                     // line 52
($context["record"] ?? null), "action" =>                     // line 53
$context["inlineAction"]]);
                    // line 54
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inlineAction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </div>
      ";
            }
            // line 58
            echo "
      ";
            // line 59
            if ( !twig_test_empty(($context["regularActions"] ?? null))) {
                // line 60
                echo "        <div class=\"btn-group\">
          ";
                // line 61
                list($context["skippedActions"], $context["isFirstRendered"]) =                 [0, false];
                // line 62
                echo "
          ";
                // line 64
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["regularActions"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 65
                    echo "            ";
                    if ( !($context["isFirstRendered"] ?? null)) {
                        // line 66
                        echo "              ";
                        $context["skippedActions"] = (($context["skippedActions"] ?? null) + 1);
                        // line 67
                        echo "            ";
                    }
                    // line 68
                    echo "
            ";
                    // line 69
                    if ( !($context["isFirstRendered"] ?? null)) {
                        // line 70
                        echo "              ";
                        $context["class"] = ("dropdown-item " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "options", [], "any", false, true, false, 70), "attr", [], "any", false, true, false, 70), "class", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "options", [], "any", false, true, false, 70), "attr", [], "any", false, true, false, 70), "class", [], "any", false, false, false, 70), "")) : ("")));
                        // line 71
                        echo "
              ";
                        // line 72
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 72)) . ".html.twig"), ["grid" =>                         // line 73
($context["grid"] ?? null), "column" =>                         // line 74
($context["column"] ?? null), "attributes" => ["class" => twig_trim_filter(                        // line 75
($context["class"] ?? null)), "tooltip_name" => true], "record" =>                         // line 76
($context["record"] ?? null), "action" =>                         // line 77
$context["action"]]);
                        // line 78
                        echo "

              ";
                        // line 80
                        $context["isFirstRendered"] = true;
                        // line 81
                        echo "            ";
                    }
                    // line 82
                    echo "          ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "
          ";
                // line 85
                echo "          ";
                if ((twig_length_filter($this->env, ($context["regularActions"] ?? null)) > ($context["skippedActions"] ?? null))) {
                    // line 86
                    echo "            <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\"
            >
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["regularActions"] ?? null), ($context["skippedActions"] ?? null)));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 95
                        echo "                ";
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 95)) . ".html.twig"), ["grid" =>                         // line 96
($context["grid"] ?? null), "column" =>                         // line 97
($context["column"] ?? null), "attributes" => ["class" => "dropdown-item", "tooltip_name" => false], "record" =>                         // line 99
($context["record"] ?? null), "action" =>                         // line 100
$context["action"]]);
                        // line 101
                        echo "
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "            </div>
          ";
                }
                // line 105
                echo "        </div>
      ";
            }
            // line 107
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 107,  284 => 105,  280 => 103,  265 => 101,  263 => 100,  262 => 99,  261 => 97,  260 => 96,  258 => 95,  241 => 94,  231 => 86,  228 => 85,  225 => 83,  211 => 82,  208 => 81,  206 => 80,  202 => 78,  200 => 77,  199 => 76,  198 => 75,  197 => 74,  196 => 73,  195 => 72,  192 => 71,  189 => 70,  187 => 69,  184 => 68,  181 => 67,  178 => 66,  175 => 65,  157 => 64,  154 => 62,  152 => 61,  149 => 60,  147 => 59,  144 => 58,  140 => 56,  125 => 54,  123 => 53,  122 => 52,  121 => 51,  120 => 50,  119 => 49,  118 => 48,  115 => 47,  113 => 46,  96 => 45,  93 => 44,  91 => 43,  87 => 41,  81 => 40,  78 => 39,  75 => 38,  72 => 37,  69 => 36,  66 => 35,  63 => 34,  60 => 33,  56 => 32,  53 => 31,  50 => 30,  47 => 29,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "/home/u1573007/public_html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/action.html.twig");
    }
}
