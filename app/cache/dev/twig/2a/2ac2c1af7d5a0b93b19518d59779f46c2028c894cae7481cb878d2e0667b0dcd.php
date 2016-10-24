<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_46bc0317a9368a09c8a78ec7c3658139663688041ee1c770410fcbfb1a2e281d extends Twig_Template
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
        $__internal_f256b4dcbb0d515b45da49d07e16ded1cf994c4bb68b0e6d844084b946b206a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f256b4dcbb0d515b45da49d07e16ded1cf994c4bb68b0e6d844084b946b206a6->enter($__internal_f256b4dcbb0d515b45da49d07e16ded1cf994c4bb68b0e6d844084b946b206a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f256b4dcbb0d515b45da49d07e16ded1cf994c4bb68b0e6d844084b946b206a6->leave($__internal_f256b4dcbb0d515b45da49d07e16ded1cf994c4bb68b0e6d844084b946b206a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8b2dae556203bbe4fc8ff6d3b5402f2a96238103deb6f2a13e4a0f9c2ba6c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b2dae556203bbe4fc8ff6d3b5402f2a96238103deb6f2a13e4a0f9c2ba6c10->enter($__internal_b8b2dae556203bbe4fc8ff6d3b5402f2a96238103deb6f2a13e4a0f9c2ba6c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8b2dae556203bbe4fc8ff6d3b5402f2a96238103deb6f2a13e4a0f9c2ba6c10->leave($__internal_b8b2dae556203bbe4fc8ff6d3b5402f2a96238103deb6f2a13e4a0f9c2ba6c10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a3452e3cb4561435de08dd99b2f562457fc5faf1c830b365234611ee11447a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3452e3cb4561435de08dd99b2f562457fc5faf1c830b365234611ee11447a9c->enter($__internal_a3452e3cb4561435de08dd99b2f562457fc5faf1c830b365234611ee11447a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3452e3cb4561435de08dd99b2f562457fc5faf1c830b365234611ee11447a9c->leave($__internal_a3452e3cb4561435de08dd99b2f562457fc5faf1c830b365234611ee11447a9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff0e634076511fbaf301e4c7a4e832de38ea5037b4f73d2b5a38ee5b50770763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0e634076511fbaf301e4c7a4e832de38ea5037b4f73d2b5a38ee5b50770763->enter($__internal_ff0e634076511fbaf301e4c7a4e832de38ea5037b4f73d2b5a38ee5b50770763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff0e634076511fbaf301e4c7a4e832de38ea5037b4f73d2b5a38ee5b50770763->leave($__internal_ff0e634076511fbaf301e4c7a4e832de38ea5037b4f73d2b5a38ee5b50770763_prof);

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
