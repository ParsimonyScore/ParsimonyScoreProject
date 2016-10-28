<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1e19073902d4ef68687b141505ebd794afa6d353284260801bb6bfe504815970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_e99ac4afc7579e7265c234caba8ccfef1e8fa077b90c3fd3245a31e534a30d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99ac4afc7579e7265c234caba8ccfef1e8fa077b90c3fd3245a31e534a30d4d->enter($__internal_e99ac4afc7579e7265c234caba8ccfef1e8fa077b90c3fd3245a31e534a30d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99ac4afc7579e7265c234caba8ccfef1e8fa077b90c3fd3245a31e534a30d4d->leave($__internal_e99ac4afc7579e7265c234caba8ccfef1e8fa077b90c3fd3245a31e534a30d4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4616d9aa4856bf6433d562bf1857167ccd8a1c958071f59de5ba87dfa4a6d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4616d9aa4856bf6433d562bf1857167ccd8a1c958071f59de5ba87dfa4a6d8d->enter($__internal_c4616d9aa4856bf6433d562bf1857167ccd8a1c958071f59de5ba87dfa4a6d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c4616d9aa4856bf6433d562bf1857167ccd8a1c958071f59de5ba87dfa4a6d8d->leave($__internal_c4616d9aa4856bf6433d562bf1857167ccd8a1c958071f59de5ba87dfa4a6d8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
