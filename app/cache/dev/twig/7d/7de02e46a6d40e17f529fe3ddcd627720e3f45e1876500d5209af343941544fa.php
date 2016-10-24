<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_87585ea76a83d7d214e50b8b435fc10226d472424f9f99ec606dabb733cae374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:index.html.twig", 1);
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
        $__internal_e7cff3bb2a59a50dc80d0f8e945bfd2eded127dcd621535cc902e6cd36b0d4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cff3bb2a59a50dc80d0f8e945bfd2eded127dcd621535cc902e6cd36b0d4a5->enter($__internal_e7cff3bb2a59a50dc80d0f8e945bfd2eded127dcd621535cc902e6cd36b0d4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7cff3bb2a59a50dc80d0f8e945bfd2eded127dcd621535cc902e6cd36b0d4a5->leave($__internal_e7cff3bb2a59a50dc80d0f8e945bfd2eded127dcd621535cc902e6cd36b0d4a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b8b0ba41025f06f40b92316a3644f8a6f88c86360f7fbfe54fca8868fd4fa95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8b0ba41025f06f40b92316a3644f8a6f88c86360f7fbfe54fca8868fd4fa95->enter($__internal_6b8b0ba41025f06f40b92316a3644f8a6f88c86360f7fbfe54fca8868fd4fa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\tListe des Sequences From db...

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6b8b0ba41025f06f40b92316a3644f8a6f88c86360f7fbfe54fca8868fd4fa95->leave($__internal_6b8b0ba41025f06f40b92316a3644f8a6f88c86360f7fbfe54fca8868fd4fa95_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
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
\t <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\tListe des Sequences From db...

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
";
    }
}
