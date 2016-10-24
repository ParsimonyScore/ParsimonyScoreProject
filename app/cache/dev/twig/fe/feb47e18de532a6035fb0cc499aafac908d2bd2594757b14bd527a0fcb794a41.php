<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_8612990fc19cd4f9d2ab01abdc36c63c359d58aaefbd63e5fb9f8b6b5a5aaee8 extends Twig_Template
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
        $__internal_14ed080bdce2d0d814e6142f84a69167a17606819ad4e763e32f2d4ac7491ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ed080bdce2d0d814e6142f84a69167a17606819ad4e763e32f2d4ac7491ab0->enter($__internal_14ed080bdce2d0d814e6142f84a69167a17606819ad4e763e32f2d4ac7491ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
            echo "\t\t<li><a href=\"#\"><i class=\"fa fa-tasks\"></i></a></li>
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
        
        $__internal_14ed080bdce2d0d814e6142f84a69167a17606819ad4e763e32f2d4ac7491ab0->leave($__internal_14ed080bdce2d0d814e6142f84a69167a17606819ad4e763e32f2d4ac7491ab0_prof);

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
        return array (  83 => 29,  78 => 27,  74 => 26,  71 => 25,  69 => 24,  65 => 23,  59 => 20,  55 => 19,  50 => 16,  45 => 14,  40 => 13,  38 => 12,  34 => 11,  22 => 1,);
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
\t\t<li><a href=\"#\"><i class=\"fa fa-tasks\"></i></a></li>
\t\t<li><a href=\"{{path('admin_listScoreTmp')}}\"><i class=\"fa fa-hourglass-half\"></i></a></li>
\t\t<li><a href=\"{{path('fos_user_security_logout')}}\"><i class=\"fa fa-power-off\"></i></a></li>
\t{% endif %}

\t</ul>
  </div>
</div>


";
    }
}
