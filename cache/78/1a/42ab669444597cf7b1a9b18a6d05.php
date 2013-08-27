<?php

/* emailConfirm.twig */
class __TwigTemplate_781a42ab669444597cf7b1a9b18a6d05 extends Twig_Template
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
        echo "- Email Confirm";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<textarea>We have send and email to confirm your account. Thank you.</textarea>
";
    }

    public function getTemplateName()
    {
        return "emailConfirm.twig";
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
