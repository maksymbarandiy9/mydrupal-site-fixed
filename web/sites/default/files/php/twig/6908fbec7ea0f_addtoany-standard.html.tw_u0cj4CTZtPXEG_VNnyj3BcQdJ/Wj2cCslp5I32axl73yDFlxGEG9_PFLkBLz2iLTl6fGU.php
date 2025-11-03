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

/* modules/contrib/addtoany/templates/addtoany-standard.html.twig */
class __TwigTemplate_27811b5e30425fcdb0b1eb248be825e4 extends Template
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
        // line 20
        if ((($context["button_setting"] ?? null) != "none")) {
            // line 21
            ob_start(function () { return ''; });
            // line 22
            echo "<a class=\"a2a_dd addtoany_share\" href=\"https://www.addtoany.com/share#url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 22, $this->source)), "html", null, true);
            echo "&amp;title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 22, $this->source)), "html", null, true);
            echo "\">";
            // line 23
            if (($context["button_image"] ?? null)) {
                // line 24
                echo "<img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_image"] ?? null), 24, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share"));
                echo "\">";
            }
            // line 26
            echo "</a>";
            $context["universal_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 30
        echo "<span class=\"a2a_kit a2a_kit_size_";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buttons_size"] ?? null), 30, $this->source), "html", null, true);
        echo " addtoany_list\" data-a2a-url=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 30, $this->source), "html", null, true);
        echo "\" data-a2a-title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 30, $this->source), "html", null, true);
        echo "\">";
        // line 31
        if ((($context["universal_button_placement"] ?? null) == "before")) {
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["universal_button"] ?? null), 32, $this->source), "html", null, true);
        }
        // line 35
        if (($context["addtoany_html"] ?? null)) {
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["addtoany_html"] ?? null), 36, $this->source));
        }
        // line 39
        if ((($context["universal_button_placement"] ?? null) == "after")) {
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["universal_button"] ?? null), 40, $this->source), "html", null, true);
        }
        // line 42
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/addtoany/templates/addtoany-standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 42,  82 => 40,  80 => 39,  77 => 36,  75 => 35,  72 => 32,  70 => 31,  62 => 30,  58 => 26,  51 => 24,  49 => 23,  43 => 22,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/addtoany/templates/addtoany-standard.html.twig", "/var/www/web/modules/contrib/addtoany/templates/addtoany-standard.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 21);
        static $filters = array("escape" => 22, "url_encode" => 22, "t" => 24, "raw" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'url_encode', 't', 'raw'],
                []
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
