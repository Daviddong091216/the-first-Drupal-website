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

/* core/modules/forum/templates/forum-list.html.twig */
class __TwigTemplate_d7a5c103928ff9bc3ffb1c2f61c30fb6da698124b4b8bd586eeef5f8ba85673a extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "<table>
  <thead>
    <tr>
      <th>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Forum"));
        echo "</th>
      <th>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Topics"));
        echo "</th>
      <th>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Posts"));
        echo "</th>
      <th>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last post"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forums"] ?? null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 46
            echo "    <tr>
      <td";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 47) == true)) {
                echo " colspan=\"4\"";
            }
            echo ">
        ";
            // line 53
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 53) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 53)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "<div class=\"indent\">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 54
            echo "          <div title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "\">
            <span class=\"visually-hidden\">";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</span>
          </div>
          <div><a href=\"";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "link", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "label", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</a></div>
          ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58)) {
                // line 59
                echo "            <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 61
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 61) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 61)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "</div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 62
            echo "      </td>
      ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 63) == false)) {
                // line 64
                echo "        <td>
          ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "num_topics", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "
          ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, $context["forum"], "new_topics", [], "any", false, false, true, 66) == true)) {
                    // line 67
                    echo "            <br />
            <a href=\"";
                    // line 68
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "new_url", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "new_text", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "</a>
          ";
                }
                // line 70
                echo "        </td>
        <td>";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "num_posts", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "</td>
        <td>";
                // line 72
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "last_reply", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "</td>
      ";
            }
            // line 74
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['child_id'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/forum/templates/forum-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 76,  160 => 74,  155 => 72,  151 => 71,  148 => 70,  141 => 68,  138 => 67,  136 => 66,  132 => 65,  129 => 64,  127 => 63,  124 => 62,  112 => 61,  106 => 59,  104 => 58,  98 => 57,  93 => 55,  88 => 54,  76 => 53,  70 => 47,  67 => 46,  63 => 45,  56 => 41,  52 => 40,  48 => 39,  44 => 38,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/forum/templates/forum-list.html.twig", "/app/web/core/modules/forum/templates/forum-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 45, "if" => 47);
        static $filters = array("t" => 38, "escape" => 54);
        static $functions = array("range" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['t', 'escape'],
                ['range']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
