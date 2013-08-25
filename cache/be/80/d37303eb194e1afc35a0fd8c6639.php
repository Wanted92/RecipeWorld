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
\t<input type=\"text\" name=\"name\" id=\"name\" size=\"20\" maxlength=\"20\" onkeyup = \"validate(this.id)\" />
\t<span id=\"feed_name\"></span></br></br>
\t
\t<label for=\"surname\"> Surname: </label>
\t<input type=\"text\" name=\"surname\" id=\"surname\" size=\"20\" maxlength=\"20\" onkeyup = \"validate(this.id)\"/>
\t<span id=\"feed_surname\"></span></br></br>
\t
\t<label for=\"username\"> Username: </label>
\t<input type=\"text\" name=\"username\" id=\"username\" size=\"20\" maxlength=\"20\" onkeyup = \"validate(this.id)\"/>
\t<span id=\"feed_username\"></span></br></br>
\t
\t<label for=\"email\"> Email: </label>
\t<input type=\"email\" name=\"email\" id=\"email\" onkeyup = \"validate(this.id)\"/>
\t<span id=\"feed_email\"></span></br></br>
\t
\t<label for=\"password\"> Password: </label>
\t<input type=\"password\" name=\"password\" id=\"password\" size=\"20\" maxlength=\"20\" onkeyup = \"validate(this.id)\"/>
\t<span id=\"feed_password\"></span></br></br>
\t
\t<!--  <label for=\"password_check\"> Password: </label>
\t<input type=\"password\" name=\"password_check\" id=\"password_check\" size=\"20\" maxlength=\"20\" onkeyup = \"validate(this.id)\"/>
\t<span id=\"feed_password_check\"></span></br></br> -->
\t
\t<label for=\"bornDate\"> Born date: </label>
\t<input type=\"text\" name=\"date\" id=\"born_date\" onkeyup = \"validate(this.id)\"/>
\t<span id=\"feed_born_date\"></span></br></br>
\t
\t<label for=\"country\"> Country: </label>
\t<input type=\"text\" name=\"country\" id=\"country\" maxlength=\"20\" onkeyup = \"validate(this.id)\"/>
\t<span id=\"feed_country\"></span></br></br>
\t
\t<input type=\"submit\" id = \"signup\" value=\"Sign up\">
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
