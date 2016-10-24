<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d4de399d00b844dc2a6985b13421e3c7ae10a9f00c28b836e026874bdb0907cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_086a5bfb184a0791ec87dd784ac5da8ca4e28f01cc266807d31201109a8dada3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086a5bfb184a0791ec87dd784ac5da8ca4e28f01cc266807d31201109a8dada3->enter($__internal_086a5bfb184a0791ec87dd784ac5da8ca4e28f01cc266807d31201109a8dada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086a5bfb184a0791ec87dd784ac5da8ca4e28f01cc266807d31201109a8dada3->leave($__internal_086a5bfb184a0791ec87dd784ac5da8ca4e28f01cc266807d31201109a8dada3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_770d2673774a8cf34c3ff6b8d12e57a1da1434f9bb11581b7addb729c4974942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770d2673774a8cf34c3ff6b8d12e57a1da1434f9bb11581b7addb729c4974942->enter($__internal_770d2673774a8cf34c3ff6b8d12e57a1da1434f9bb11581b7addb729c4974942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_770d2673774a8cf34c3ff6b8d12e57a1da1434f9bb11581b7addb729c4974942->leave($__internal_770d2673774a8cf34c3ff6b8d12e57a1da1434f9bb11581b7addb729c4974942_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
