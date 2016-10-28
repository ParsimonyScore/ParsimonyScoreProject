<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6acc3c4502ed6285f18278bb4ce1f221f8aeffe0a04b84030c2fe6bab786f140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_632441d7d949d5725428e70881506a38e7099a0ffaf2a437bb5ad0781396a843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632441d7d949d5725428e70881506a38e7099a0ffaf2a437bb5ad0781396a843->enter($__internal_632441d7d949d5725428e70881506a38e7099a0ffaf2a437bb5ad0781396a843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_632441d7d949d5725428e70881506a38e7099a0ffaf2a437bb5ad0781396a843->leave($__internal_632441d7d949d5725428e70881506a38e7099a0ffaf2a437bb5ad0781396a843_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9337bbebb409be7ae3e209353062f3e5b3d1d98fb96a5696d79b0d47b9b424c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9337bbebb409be7ae3e209353062f3e5b3d1d98fb96a5696d79b0d47b9b424c0->enter($__internal_9337bbebb409be7ae3e209353062f3e5b3d1d98fb96a5696d79b0d47b9b424c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_9337bbebb409be7ae3e209353062f3e5b3d1d98fb96a5696d79b0d47b9b424c0->leave($__internal_9337bbebb409be7ae3e209353062f3e5b3d1d98fb96a5696d79b0d47b9b424c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
