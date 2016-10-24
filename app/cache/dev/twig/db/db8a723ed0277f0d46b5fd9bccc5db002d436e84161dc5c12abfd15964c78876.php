<?php

/* ::modulesUsed/header_options/options.html.twig */
class __TwigTemplate_173e865d1ae08db0102a8f67fcc25dae43a3ea420146383d68b8d1776a61ee48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bad6d970c17e3b61a965dbe94497f38e70f39fb589777dd463306b561ba2cfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad6d970c17e3b61a965dbe94497f38e70f39fb589777dd463306b561ba2cfd9->enter($__internal_bad6d970c17e3b61a965dbe94497f38e70f39fb589777dd463306b561ba2cfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/header_options/options.html.twig"));

        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 2
            echo "  <li id=\"li_super_admin\" ><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><i class=\"fa fa-magnet\"></i></a></li>
  <li><a href=\"";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_list");
            echo "\"><i class=\"fa fa-users\"></i></a></li>
";
        }
        
        $__internal_bad6d970c17e3b61a965dbe94497f38e70f39fb589777dd463306b561ba2cfd9->leave($__internal_bad6d970c17e3b61a965dbe94497f38e70f39fb589777dd463306b561ba2cfd9_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/header_options/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if is_granted('ROLE_ADMIN') %}
  <li id=\"li_super_admin\" ><a href=\"{{path('fos_user_registration_register')}}\"><i class=\"fa fa-magnet\"></i></a></li>
  <li><a href=\"{{path('admin_admin_list')}}\"><i class=\"fa fa-users\"></i></a></li>
{% endif %}";
    }
}
