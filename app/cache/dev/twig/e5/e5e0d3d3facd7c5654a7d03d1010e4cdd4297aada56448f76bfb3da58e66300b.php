<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_115cd4159ae3ae8c90d7e823bfc93c78649fa434e90fc9be2e439eee41254b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1381bacb1cec7db091f1f51eb141649306b611d301a6ba2911505fbd3014b470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1381bacb1cec7db091f1f51eb141649306b611d301a6ba2911505fbd3014b470->enter($__internal_1381bacb1cec7db091f1f51eb141649306b611d301a6ba2911505fbd3014b470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1381bacb1cec7db091f1f51eb141649306b611d301a6ba2911505fbd3014b470->leave($__internal_1381bacb1cec7db091f1f51eb141649306b611d301a6ba2911505fbd3014b470_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_244bcdf4f414d39ef18b5adb0b5798cc84db00a23214728adf4dd4f541fc7f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244bcdf4f414d39ef18b5adb0b5798cc84db00a23214728adf4dd4f541fc7f80->enter($__internal_244bcdf4f414d39ef18b5adb0b5798cc84db00a23214728adf4dd4f541fc7f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_244bcdf4f414d39ef18b5adb0b5798cc84db00a23214728adf4dd4f541fc7f80->leave($__internal_244bcdf4f414d39ef18b5adb0b5798cc84db00a23214728adf4dd4f541fc7f80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
