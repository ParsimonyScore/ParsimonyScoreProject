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
        $__internal_fedde889e12e7e4425b51fe098f92d18ba77833311106c626d74cd8d75a9b7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedde889e12e7e4425b51fe098f92d18ba77833311106c626d74cd8d75a9b7f2->enter($__internal_fedde889e12e7e4425b51fe098f92d18ba77833311106c626d74cd8d75a9b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fedde889e12e7e4425b51fe098f92d18ba77833311106c626d74cd8d75a9b7f2->leave($__internal_fedde889e12e7e4425b51fe098f92d18ba77833311106c626d74cd8d75a9b7f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_952bedfe3c30737a36d4f9d975118ca37733d85aba2ff6a76a8303589959ef45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952bedfe3c30737a36d4f9d975118ca37733d85aba2ff6a76a8303589959ef45->enter($__internal_952bedfe3c30737a36d4f9d975118ca37733d85aba2ff6a76a8303589959ef45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_952bedfe3c30737a36d4f9d975118ca37733d85aba2ff6a76a8303589959ef45->leave($__internal_952bedfe3c30737a36d4f9d975118ca37733d85aba2ff6a76a8303589959ef45_prof);

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
