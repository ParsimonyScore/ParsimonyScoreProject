<?php

/* ::modulesUsed/header_options/options.html.twig */
class __TwigTemplate_f1d4d136e23676edc799f6583492d250cd5dd52414229244b3b7a36786b66665 extends Twig_Template
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
        return array (  26 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% if is_granted('ROLE_ADMIN') %}
  <li id=\"li_super_admin\" ><a href=\"{{path('fos_user_registration_register')}}\"><i class=\"fa fa-magnet\"></i></a></li>
  <li><a href=\"{{path('admin_admin_list')}}\"><i class=\"fa fa-users\"></i></a></li>
{% endif %}";
    }
}
