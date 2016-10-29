<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4a4a65e92869f10a5b5c0d33a27d0e48da160712c21aaec66da0f81e22993f33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c30a1e570b8159c0e482cc1cbb60fa3f94f8aff30cafafb42a431cfea64833e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c30a1e570b8159c0e482cc1cbb60fa3f94f8aff30cafafb42a431cfea64833e->enter($__internal_4c30a1e570b8159c0e482cc1cbb60fa3f94f8aff30cafafb42a431cfea64833e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c30a1e570b8159c0e482cc1cbb60fa3f94f8aff30cafafb42a431cfea64833e->leave($__internal_4c30a1e570b8159c0e482cc1cbb60fa3f94f8aff30cafafb42a431cfea64833e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf5bfd79d56c755320e52da86f8c8199e73296c77964301b651a59c780e91c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5bfd79d56c755320e52da86f8c8199e73296c77964301b651a59c780e91c38->enter($__internal_cf5bfd79d56c755320e52da86f8c8199e73296c77964301b651a59c780e91c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf5bfd79d56c755320e52da86f8c8199e73296c77964301b651a59c780e91c38->leave($__internal_cf5bfd79d56c755320e52da86f8c8199e73296c77964301b651a59c780e91c38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_260a8f616a30c6a16f4f8a55c0b2a8e108ba2cd04d3358626d5e6587cd127200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260a8f616a30c6a16f4f8a55c0b2a8e108ba2cd04d3358626d5e6587cd127200->enter($__internal_260a8f616a30c6a16f4f8a55c0b2a8e108ba2cd04d3358626d5e6587cd127200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_260a8f616a30c6a16f4f8a55c0b2a8e108ba2cd04d3358626d5e6587cd127200->leave($__internal_260a8f616a30c6a16f4f8a55c0b2a8e108ba2cd04d3358626d5e6587cd127200_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c113728b7a4a7fcd7781ce3b4913663d011930f2e8e5f86a1a9bb4b5567d68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c113728b7a4a7fcd7781ce3b4913663d011930f2e8e5f86a1a9bb4b5567d68d->enter($__internal_5c113728b7a4a7fcd7781ce3b4913663d011930f2e8e5f86a1a9bb4b5567d68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c113728b7a4a7fcd7781ce3b4913663d011930f2e8e5f86a1a9bb4b5567d68d->leave($__internal_5c113728b7a4a7fcd7781ce3b4913663d011930f2e8e5f86a1a9bb4b5567d68d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
