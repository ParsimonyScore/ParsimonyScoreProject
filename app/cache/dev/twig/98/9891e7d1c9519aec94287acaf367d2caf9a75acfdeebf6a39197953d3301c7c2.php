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
        $__internal_79b209f70c59d6a326942164a7c55538fdb6f28cf408c1d947f8e36e8047914d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b209f70c59d6a326942164a7c55538fdb6f28cf408c1d947f8e36e8047914d->enter($__internal_79b209f70c59d6a326942164a7c55538fdb6f28cf408c1d947f8e36e8047914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b209f70c59d6a326942164a7c55538fdb6f28cf408c1d947f8e36e8047914d->leave($__internal_79b209f70c59d6a326942164a7c55538fdb6f28cf408c1d947f8e36e8047914d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77c0a7b0500903036d2e22290f62c5d796c713f8bb08a1e8ca849f0806e532b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c0a7b0500903036d2e22290f62c5d796c713f8bb08a1e8ca849f0806e532b6->enter($__internal_77c0a7b0500903036d2e22290f62c5d796c713f8bb08a1e8ca849f0806e532b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77c0a7b0500903036d2e22290f62c5d796c713f8bb08a1e8ca849f0806e532b6->leave($__internal_77c0a7b0500903036d2e22290f62c5d796c713f8bb08a1e8ca849f0806e532b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d81cb23d01bbfe1639552b4f02d05876b515ab5d5840f06a0e09a84dc88c305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d81cb23d01bbfe1639552b4f02d05876b515ab5d5840f06a0e09a84dc88c305->enter($__internal_4d81cb23d01bbfe1639552b4f02d05876b515ab5d5840f06a0e09a84dc88c305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d81cb23d01bbfe1639552b4f02d05876b515ab5d5840f06a0e09a84dc88c305->leave($__internal_4d81cb23d01bbfe1639552b4f02d05876b515ab5d5840f06a0e09a84dc88c305_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ad43a84b8902d5e6baf6ca05526b93f07a89001528912ed4a010141ef545574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad43a84b8902d5e6baf6ca05526b93f07a89001528912ed4a010141ef545574->enter($__internal_5ad43a84b8902d5e6baf6ca05526b93f07a89001528912ed4a010141ef545574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ad43a84b8902d5e6baf6ca05526b93f07a89001528912ed4a010141ef545574->leave($__internal_5ad43a84b8902d5e6baf6ca05526b93f07a89001528912ed4a010141ef545574_prof);

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
