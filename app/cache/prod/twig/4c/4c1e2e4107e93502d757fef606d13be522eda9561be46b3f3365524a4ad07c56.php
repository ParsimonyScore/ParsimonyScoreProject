<?php

/* ::modulesUsed/header.html.twig */
class __TwigTemplate_8b33b16ace50c62e4036a2c4957be12ad987418c00a6357b7d3f8d14f8c9ff49 extends Twig_Template
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
        echo "<!-- Header -->
<div class=\"top_nav\">
  <div class=\"nav_menu\">
    <nav>
      <div class=\"nav toggle\">
        <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
      </div>
      <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"\">
          <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "ParsimonyScore_lang"), "method") != null)) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "ParsimonyScore_lang"), "method"), "html", null, true);
            echo "
      \t\t\t";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "has", array(0 => "ParsimonyScore_lang"), "method") != null)) {
            echo " 
      \t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "ParsimonyScore_lang"), "method"), "html", null, true);
            echo "
            ";
        } else {
            // line 16
            echo "                FR
            ";
        }
        // line 18
        echo "            <span class=\" fa fa-angle-down\"></span>
          </a>

          <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_index");
        echo "?lang=FR\">FR</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_index");
        echo "?lang=EN\">EN</a></li>
          </ul>
        </li>
\t\t
\t\t    ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "            ";
            $this->loadTemplate("::modulesUsed/header_options/notification.html.twig", "::modulesUsed/header.html.twig", 28)->display($context);
            // line 29
            echo "        ";
        }
        // line 30
        echo "      </ul>
               
    </nav>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  73 => 29,  70 => 28,  68 => 27,  61 => 23,  57 => 22,  51 => 18,  47 => 16,  42 => 14,  38 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }

    public function getSource()
    {
        return "<!-- Header -->
<div class=\"top_nav\">
  <div class=\"nav_menu\">
    <nav>
      <div class=\"nav toggle\">
        <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
      </div>
      <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"\">
          <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
            {% if app.session.get('ParsimonyScore_lang') != null %}
                {{ app.session.get('ParsimonyScore_lang') }}
      \t\t\t{% elseif app.request.cookies.has('ParsimonyScore_lang') != null%} 
      \t\t\t\t{{ app.request.cookies.get('ParsimonyScore_lang') }}
            {% else %}
                FR
            {% endif %}
            <span class=\" fa fa-angle-down\"></span>
          </a>

          <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"{{ path('pages_index') }}?lang=FR\">FR</a></li>
            <li><a href=\"{{ path('pages_index') }}?lang=EN\">EN</a></li>
          </ul>
        </li>
\t\t
\t\t    {% if is_granted('ROLE_ADMIN') %}
            {% include '::modulesUsed/header_options/notification.html.twig' %}
        {% endif %}
      </ul>
               
    </nav>
  </div>
</div>
";
    }
}
