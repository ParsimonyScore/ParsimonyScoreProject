<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_cff7480745226b4a6d0555931295aba4d9c3a85ffb05f98625dc70dbde470c0e extends Twig_Template
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
        $__internal_638716bbdc9ec2653135c9737ac93de517f1ac7d672329187518ea94aedf3739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638716bbdc9ec2653135c9737ac93de517f1ac7d672329187518ea94aedf3739->enter($__internal_638716bbdc9ec2653135c9737ac93de517f1ac7d672329187518ea94aedf3739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_638716bbdc9ec2653135c9737ac93de517f1ac7d672329187518ea94aedf3739->leave($__internal_638716bbdc9ec2653135c9737ac93de517f1ac7d672329187518ea94aedf3739_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de3071e527ac52f5c4b2ca0848951d2e04c45c1277e2956fe19fd27f08d8ff5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3071e527ac52f5c4b2ca0848951d2e04c45c1277e2956fe19fd27f08d8ff5f->enter($__internal_de3071e527ac52f5c4b2ca0848951d2e04c45c1277e2956fe19fd27f08d8ff5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_de3071e527ac52f5c4b2ca0848951d2e04c45c1277e2956fe19fd27f08d8ff5f->leave($__internal_de3071e527ac52f5c4b2ca0848951d2e04c45c1277e2956fe19fd27f08d8ff5f_prof);

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
