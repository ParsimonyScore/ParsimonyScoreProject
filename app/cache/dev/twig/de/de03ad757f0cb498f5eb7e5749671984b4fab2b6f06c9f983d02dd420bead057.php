<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a182244ad55bc79e7c3032aab0e977380595169086547b98586a2aa87acfa77f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_746824d489de8b956510acda4fe4be52eb7a85b11565da4770d3bdf17bdb5e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746824d489de8b956510acda4fe4be52eb7a85b11565da4770d3bdf17bdb5e20->enter($__internal_746824d489de8b956510acda4fe4be52eb7a85b11565da4770d3bdf17bdb5e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_746824d489de8b956510acda4fe4be52eb7a85b11565da4770d3bdf17bdb5e20->leave($__internal_746824d489de8b956510acda4fe4be52eb7a85b11565da4770d3bdf17bdb5e20_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6436df1a85718cfeb92f8f253083be477e6c753f9681f8555442c39c18420d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6436df1a85718cfeb92f8f253083be477e6c753f9681f8555442c39c18420d4->enter($__internal_a6436df1a85718cfeb92f8f253083be477e6c753f9681f8555442c39c18420d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a6436df1a85718cfeb92f8f253083be477e6c753f9681f8555442c39c18420d4->leave($__internal_a6436df1a85718cfeb92f8f253083be477e6c753f9681f8555442c39c18420d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
