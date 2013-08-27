<?php

/* menu.twig */
class __TwigTemplate_0a8b44564a7f00cc490d28e7989c1192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        $context["links"] = array("Homepage" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "Homepage"), "method"), "Sign up" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "Sign up"), "method"), "Login" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "Login"), "method"));
        // line 11
        echo "<ul id=\"menu\">
\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["link"]) {
            // line 13
            echo "\t    <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>
\t
<br style=\"clear:both\" />
";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  31 => 13,  27 => 12,  24 => 11,  22 => 4,  19 => 2,  62 => 25,  59 => 24,  50 => 26,  48 => 24,  43 => 21,  41 => 20,  20 => 1,);
    }
}
