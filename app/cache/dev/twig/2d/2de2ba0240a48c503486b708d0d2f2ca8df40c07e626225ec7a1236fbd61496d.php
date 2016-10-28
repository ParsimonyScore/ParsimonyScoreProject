<?php

/* PagesBundle:Default:about.html.twig */
class __TwigTemplate_a4d3092d7fa04804d9dcc691e21c2acbb1e784d0908accf40e967e6142066002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PagesBundle:Default:about.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecf8bd83d5e2e688c84cad07f5190df1134fdeabbcf3cf8b59db87c93402ada9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf8bd83d5e2e688c84cad07f5190df1134fdeabbcf3cf8b59db87c93402ada9->enter($__internal_ecf8bd83d5e2e688c84cad07f5190df1134fdeabbcf3cf8b59db87c93402ada9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf8bd83d5e2e688c84cad07f5190df1134fdeabbcf3cf8b59db87c93402ada9->leave($__internal_ecf8bd83d5e2e688c84cad07f5190df1134fdeabbcf3cf8b59db87c93402ada9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48ccc29922c26b1dd5e5b6baeca17c3c1fe6d2b541c766e87b32882fc5910f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ccc29922c26b1dd5e5b6baeca17c3c1fe6d2b541c766e87b32882fc5910f4a->enter($__internal_48ccc29922c26b1dd5e5b6baeca17c3c1fe6d2b541c766e87b32882fc5910f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 <div class=\"row\">
\t<div class=\"col-md-12 col-sm-12 col-xs-12\" id=\"about\" >
\t\t<div class=\"x_panel\">
\t\t  <div class=\"x_title\">
\t\t\t<h2 id=\"about_title\"></h2>
\t\t\t<div class=\"clearfix\"></div>
\t\t  </div>
\t\t  <div class=\"x_content\">
\t\t\t<p id=\"about_text\"></p>
\t\t\t<small id=\"about_devloppers\"></small>
\t\t  </div>
\t\t</div>
\t</div>
 </div>

";
        
        $__internal_48ccc29922c26b1dd5e5b6baeca17c3c1fe6d2b541c766e87b32882fc5910f4a->leave($__internal_48ccc29922c26b1dd5e5b6baeca17c3c1fe6d2b541c766e87b32882fc5910f4a_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:about.html.twig";
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
        return "{% extends \"::base.html.twig\" %}

{% block body %}

 <div class=\"row\">
\t<div class=\"col-md-12 col-sm-12 col-xs-12\" id=\"about\" >
\t\t<div class=\"x_panel\">
\t\t  <div class=\"x_title\">
\t\t\t<h2 id=\"about_title\"></h2>
\t\t\t<div class=\"clearfix\"></div>
\t\t  </div>
\t\t  <div class=\"x_content\">
\t\t\t<p id=\"about_text\"></p>
\t\t\t<small id=\"about_devloppers\"></small>
\t\t  </div>
\t\t</div>
\t</div>
 </div>

{% endblock %}";
    }
}
