<?php

/* login.twig */
class __TwigTemplate_dfb46aec41c12e387b0ada07bc7903f6 extends Twig_Template
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
        echo "- Login";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "LoginPost"), "method"), "html", null, true);
        echo "\" method=\"post\" >

\t<label for=\"email\"> Email: </label></br>
\t<input type=\"text\" name=\"email\" id=\"email\" size=\"20\" maxlength=\"20\" /></br>
\t<span id=\"feed_email\"></span></br></br>
\t
\t<label for=\"password\"> Password: </label></br>
\t<input type=\"password\" name=\"password\" id=\"password\" size=\"20\" maxlength=\"20\" /></br>
\t<span id=\"feed_password\"></span></br></br>
\t
\t<input type=\"submit\" id = \"signup\" value=\"Sign up\">
</form>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
