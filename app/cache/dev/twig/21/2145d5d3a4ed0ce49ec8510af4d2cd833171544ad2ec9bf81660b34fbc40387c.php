<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_519090731ce8f0f356ac0179c05ff398a4bbc63967f91d291ccc1350bcbef219 extends Twig_Template
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
        $__internal_b9a75bcd2c970f5dfe3e58e5e294dd5391ad44466df6be7bf8b07d02ae82a436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a75bcd2c970f5dfe3e58e5e294dd5391ad44466df6be7bf8b07d02ae82a436->enter($__internal_b9a75bcd2c970f5dfe3e58e5e294dd5391ad44466df6be7bf8b07d02ae82a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9a75bcd2c970f5dfe3e58e5e294dd5391ad44466df6be7bf8b07d02ae82a436->leave($__internal_b9a75bcd2c970f5dfe3e58e5e294dd5391ad44466df6be7bf8b07d02ae82a436_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca01e162ae61a524e9fa3b269d6271562668df55892d77b6cefccdc0b8d07a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca01e162ae61a524e9fa3b269d6271562668df55892d77b6cefccdc0b8d07a6a->enter($__internal_ca01e162ae61a524e9fa3b269d6271562668df55892d77b6cefccdc0b8d07a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca01e162ae61a524e9fa3b269d6271562668df55892d77b6cefccdc0b8d07a6a->leave($__internal_ca01e162ae61a524e9fa3b269d6271562668df55892d77b6cefccdc0b8d07a6a_prof);

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
