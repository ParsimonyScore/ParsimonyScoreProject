<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a280e75ecceca659c0e1c7ae2164d5a7b1424659e35fc84373f05ce151d74c6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3918956620398a85713ab4daf86f4248dc5647e6d9b0c55b0e8c0d4d24353503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3918956620398a85713ab4daf86f4248dc5647e6d9b0c55b0e8c0d4d24353503->enter($__internal_3918956620398a85713ab4daf86f4248dc5647e6d9b0c55b0e8c0d4d24353503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3918956620398a85713ab4daf86f4248dc5647e6d9b0c55b0e8c0d4d24353503->leave($__internal_3918956620398a85713ab4daf86f4248dc5647e6d9b0c55b0e8c0d4d24353503_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14df055d790123ecd64243f599f33f71c42a1e53ec0a1137b7e333be689793cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14df055d790123ecd64243f599f33f71c42a1e53ec0a1137b7e333be689793cf->enter($__internal_14df055d790123ecd64243f599f33f71c42a1e53ec0a1137b7e333be689793cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_14df055d790123ecd64243f599f33f71c42a1e53ec0a1137b7e333be689793cf->leave($__internal_14df055d790123ecd64243f599f33f71c42a1e53ec0a1137b7e333be689793cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
