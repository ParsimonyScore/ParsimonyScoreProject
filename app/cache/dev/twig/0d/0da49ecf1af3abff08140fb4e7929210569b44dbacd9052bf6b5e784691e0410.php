<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3823ba2efb1ea53cb6cedad5eb82c1df36e967ce824dadb9ac710b496560db75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edb617104cddb8bc33baa4af76c7f18bcd656a7a80d83c468a2759838cb8a505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb617104cddb8bc33baa4af76c7f18bcd656a7a80d83c468a2759838cb8a505->enter($__internal_edb617104cddb8bc33baa4af76c7f18bcd656a7a80d83c468a2759838cb8a505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edb617104cddb8bc33baa4af76c7f18bcd656a7a80d83c468a2759838cb8a505->leave($__internal_edb617104cddb8bc33baa4af76c7f18bcd656a7a80d83c468a2759838cb8a505_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1220d1e3efc3cb05b0f56a8e6a30b4d196a82eaafb02c5a88b1516dc4cfd6f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1220d1e3efc3cb05b0f56a8e6a30b4d196a82eaafb02c5a88b1516dc4cfd6f30->enter($__internal_1220d1e3efc3cb05b0f56a8e6a30b4d196a82eaafb02c5a88b1516dc4cfd6f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1220d1e3efc3cb05b0f56a8e6a30b4d196a82eaafb02c5a88b1516dc4cfd6f30->leave($__internal_1220d1e3efc3cb05b0f56a8e6a30b4d196a82eaafb02c5a88b1516dc4cfd6f30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7975742ec61db6f64397a0ede2cb6e7becb543c0155faa0a79c9ca827d733364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7975742ec61db6f64397a0ede2cb6e7becb543c0155faa0a79c9ca827d733364->enter($__internal_7975742ec61db6f64397a0ede2cb6e7becb543c0155faa0a79c9ca827d733364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7975742ec61db6f64397a0ede2cb6e7becb543c0155faa0a79c9ca827d733364->leave($__internal_7975742ec61db6f64397a0ede2cb6e7becb543c0155faa0a79c9ca827d733364_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_83fccae883dea1435bfec877a925ab5cc8f74c152489c45996431284120a7316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fccae883dea1435bfec877a925ab5cc8f74c152489c45996431284120a7316->enter($__internal_83fccae883dea1435bfec877a925ab5cc8f74c152489c45996431284120a7316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_83fccae883dea1435bfec877a925ab5cc8f74c152489c45996431284120a7316->leave($__internal_83fccae883dea1435bfec877a925ab5cc8f74c152489c45996431284120a7316_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
