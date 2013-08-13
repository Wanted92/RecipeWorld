<?php

/* registrazione.twig */
class __TwigTemplate_dc46509a947d6182ddd7fafd07ea3d8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'subtitle' => array($this, 'block_subtitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_subtitle($context, array $blocks = array())
    {
        echo "- Sign Up";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<form action=\"\" method=\"post\"> <!-- da mettere l'action -->
\t<label for=\"name\"> Name: </label> <br>
\t<input type=\"text\" name=\"name\" id=\"name\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "registrazione.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
