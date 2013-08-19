<?php

/* base.twig */
class __TwigTemplate_6b212657ca69d39fd7062afb351b9542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t<script type=\"text/javascript\" src=\"./js/jquery-1.9.1.js\"></script>
\t<script type=\"text/javascript\" src=\"./js/jquery-ui-1.10.3.custom.js\"></script>
\t<script type=\"text/javascript\" src=\"./js/jquery-ui-1.10.3.custom.min.js\"></script>
\t<script type=\"text/javascript\" src=\"./js/form.js\"></script>
\t\t<title>Recipe World</title>
\t<link rel=\"stylesheet\" href=\"./app/view/css/ui-lightness/jquery-ui-1.10.3.custom.css\">
\t<link rel=\"stylesheet\" href=\"./app/view/css/ui-lightness/jquery-ui-1.10.3.custom.min.css\">
\t<link rel=\"stylesheet\" href=\"./app/view/css/style.css\">
\t</head>
<body>

\t<header>
\tciao
\t</header>
\t
\t<nav>
\t\t";
        // line 20
        $this->env->loadTemplate("menu.twig")->display($context);
        // line 21
        echo "\t</nav>
\t
\t<section>
\t\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "\t</section>
\t
\t<aside>
\t</aside>
</body>
</html>";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  59 => 24,  50 => 26,  48 => 24,  43 => 21,  41 => 20,  20 => 1,);
    }
}
