<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_b4c9cd2a3db2c3fdf19c55c03da2510c9b384fae4e23b35965eeaafb224c85f2 extends Twig_Template
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
        $__internal_83225bf9010a5b14d08c8ba1bdad8639f2f6dd414c1a395aa01729926a44cc4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83225bf9010a5b14d08c8ba1bdad8639f2f6dd414c1a395aa01729926a44cc4b->enter($__internal_83225bf9010a5b14d08c8ba1bdad8639f2f6dd414c1a395aa01729926a44cc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"navbar nav_title\" style=\"border: 0;\">   
\t<a href=\"\" class=\"site_title\"><i class=\"fa fa-tree\"></i> <span>ParsimonyScore</span></a>
</div>

<div class=\"clearfix\"></div>

<div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
  <div class=\"menu_section\">
   
   <ul class=\"nav side-menu\" id=\"id_menu\" >
\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_index");
        echo "\" ><i class=\"fa fa-home\"></i></a></li>
\t";
        // line 12
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 13
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_about");
            echo "\" ><i class=\"fa fa-info\"></i></a></li>
\t\t<li><a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_contact");
            echo "\" ><i class=\"fa fa-envelope\"></i></a></li>
\t";
        } else {
            // line 16
            echo "\t\t<li>
\t\t\t<a><i class=\"fa fa-gears\"></i> Conf <span class=\"fa fa-chevron-down\"></span></a>
\t\t    <ul class=\"nav child_menu\">
\t\t      <li><a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\"></a></li>
\t\t      <li><a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\"></a></li>
\t\t    </ul>
\t\t</li>
\t\t<li><a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa-child\"></i></a></li>
\t\t";
            // line 24
            $this->loadTemplate("::modulesUsed/header_options/options.html.twig", "::modulesUsed/navigation.html.twig", 24)->display($context);
            // line 25
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("allScores");
            echo "\"><i class=\"fa fa-tasks\"></i></a></li>
\t\t<li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listScoreTmp");
            echo "\"><i class=\"fa fa-hourglass-half\"></i></a></li>
\t\t<li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-power-off\"></i></a></li>
\t";
        }
        // line 29
        echo "
\t</ul>
  </div>
</div>


";
        
        $__internal_83225bf9010a5b14d08c8ba1bdad8639f2f6dd414c1a395aa01729926a44cc4b->leave($__internal_83225bf9010a5b14d08c8ba1bdad8639f2f6dd414c1a395aa01729926a44cc4b_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  80 => 27,  76 => 26,  71 => 25,  69 => 24,  65 => 23,  59 => 20,  55 => 19,  50 => 16,  45 => 14,  40 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"navbar nav_title\" style=\"border: 0;\">   
\t<a href=\"\" class=\"site_title\"><i class=\"fa fa-tree\"></i> <span>ParsimonyScore</span></a>
</div>

<div class=\"clearfix\"></div>

<div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
  <div class=\"menu_section\">
   
   <ul class=\"nav side-menu\" id=\"id_menu\" >
\t<li><a href=\"{{ path('pages_index') }}\" ><i class=\"fa fa-home\"></i></a></li>
\t{% if not app.user   %}
\t\t<li><a href=\"{{ path('pages_about') }}\" ><i class=\"fa fa-info\"></i></a></li>
\t\t<li><a href=\"{{ path('pages_contact') }}\" ><i class=\"fa fa-envelope\"></i></a></li>
\t{% else %}
\t\t<li>
\t\t\t<a><i class=\"fa fa-gears\"></i> Conf <span class=\"fa fa-chevron-down\"></span></a>
\t\t    <ul class=\"nav child_menu\">
\t\t      <li><a href=\"{{path('fos_user_profile_edit')}}\"></a></li>
\t\t      <li><a href=\"{{path('fos_user_change_password')}}\"></a></li>
\t\t    </ul>
\t\t</li>
\t\t<li><a href=\"{{path('fos_user_profile_show')}}\"><i class=\"fa fa-child\"></i></a></li>
\t\t{% include '::modulesUsed/header_options/options.html.twig' %}
\t\t<li><a href=\"{{path('allScores')}}\"><i class=\"fa fa-tasks\"></i></a></li>
\t\t<li><a href=\"{{path('admin_listScoreTmp')}}\"><i class=\"fa fa-hourglass-half\"></i></a></li>
\t\t<li><a href=\"{{path('fos_user_security_logout')}}\"><i class=\"fa fa-power-off\"></i></a></li>
\t{% endif %}

\t</ul>
  </div>
</div>


";
    }
}
