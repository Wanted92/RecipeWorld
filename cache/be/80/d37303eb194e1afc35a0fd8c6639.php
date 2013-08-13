<?php

/* signup.twig */
class __TwigTemplate_be80d37303eb194e1afc35a0fd8c6639 extends Twig_Template
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
        echo "
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "SignupAddPost"), "method"), "html", null, true);
        echo "\" method=\"post\" >

\t<label for=\"name\"> Name: </label>
\t<input type=\"text\" name=\"name_signup\" id=\"name\" maxlength=\"20\"/></br></br>
\t
\t<label for=\"surname\"> Surname: </label>
\t<input type=\"text\" name=\"name_signup\" id=\"surname\" maxlength=\"20\"/></br></br>
\t
\t<label for=\"username\"> Username: </label>
\t<input type=\"text\" name=\"user_signup\" id=\"username\" /> </br></br>
\t
\t<label for=\"email\"> Email: </label>
\t<input type=\"email\" name=\"email\" id=\"email\" /> </br></br>
\t
\t<label for=\"password\"> Password: </label>
\t<input type=\"password\" name=\"pass\" id=\"pass\" /> </br></br>
\t
\t<label for=\"bornDate\"> Born date: </label>
\t<input type=\"text\" name=\"date\" id=\"date\" /> </br></br>
\t
\t<input type=\"submit\" name=\"submit_signup\" value=\"Sign up\">
\t
</form>
";
    }

    public function getTemplateName()
    {
        return "signup.twig";
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
