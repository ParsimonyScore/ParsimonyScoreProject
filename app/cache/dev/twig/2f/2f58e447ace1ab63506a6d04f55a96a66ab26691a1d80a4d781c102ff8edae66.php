<?php

/* ::modulesUsed/header_options/options.html.twig */
class __TwigTemplate_e0b30e12ab74edfa2a1885a2b29e680cf56512350dee4e462b12dfe00619d745 extends Twig_Template
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
        $__internal_ad88885c7086724b79b981b4b65234dd3e1c8cb9e47b5f801cd32b86751c5afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad88885c7086724b79b981b4b65234dd3e1c8cb9e47b5f801cd32b86751c5afe->enter($__internal_ad88885c7086724b79b981b4b65234dd3e1c8cb9e47b5f801cd32b86751c5afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/header_options/options.html.twig"));

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
        
        $__internal_ad88885c7086724b79b981b4b65234dd3e1c8cb9e47b5f801cd32b86751c5afe->leave($__internal_ad88885c7086724b79b981b4b65234dd3e1c8cb9e47b5f801cd32b86751c5afe_prof);

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