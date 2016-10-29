<?php

/* AdminBundle:Default:message.html.twig */
class __TwigTemplate_364203d3dc3bd4e617628d0420903369d015dbd425cebd839cdee664b7e6dc56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:message.html.twig", 1);
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
        $__internal_09eb608a0dc12f5a2d8d11e01ed6a0ab93cff7b5b5d7e0a99298d6ab1930337c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09eb608a0dc12f5a2d8d11e01ed6a0ab93cff7b5b5d7e0a99298d6ab1930337c->enter($__internal_09eb608a0dc12f5a2d8d11e01ed6a0ab93cff7b5b5d7e0a99298d6ab1930337c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09eb608a0dc12f5a2d8d11e01ed6a0ab93cff7b5b5d7e0a99298d6ab1930337c->leave($__internal_09eb608a0dc12f5a2d8d11e01ed6a0ab93cff7b5b5d7e0a99298d6ab1930337c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28c250c495c9130409c3ba8aac63abad2ec10dee04f26d03757369d71f48bc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c250c495c9130409c3ba8aac63abad2ec10dee04f26d03757369d71f48bc19->enter($__internal_28c250c495c9130409c3ba8aac63abad2ec10dee04f26d03757369d71f48bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\" id=\"message\">
\t<div class=\"col-md-12\">
\t\t<div class=\"x_panel\">
\t\t\t<div class=\"x_title\">
\t\t\t\t<h2 id=\"message_title\"></h2>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t\t<div class=\"x_content\">
\t\t\t\t  <div class=\"col-sm-9 mail_view\">
\t\t\t\t\t<div class=\"inbox-body\">
\t\t\t\t\t  <div class=\"mail_heading row\">
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-default\" type=\"button\" onclick=\"window.print()\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Print\"><i class=\"fa fa-print\"></i></button>
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-default\" type=\"button\" onclick=\"document.location.href='";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_removeMessage");
        echo "?id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id", array()), "html", null, true);
        echo "'\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Trash\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t  <p class=\"date\"> 
\t\t\t\t\t\t  ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "ParsimonyScore_lang"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "ParsimonyScore_lang"), "method") == "EN"))) {
            // line 25
            echo "\t\t\t\t\t\t\t ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "sendDate", array()), "format", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "sendDate", array()), "format", array(0 => "H:i"), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t  ";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\tLe ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "sendDate", array()), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo " a ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "sendDate", array()), "format", array(0 => "H:i"), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t  ";
        }
        // line 29
        echo "\t\t\t\t\t\t  </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t  <h4 id=\"message_obj\"></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"sender-info\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t  <div class=\"col-md-12\">
\t\t\t\t\t\t\t<strong> <span class=\"fa fa-tag\"></span> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "email", array()), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"view-mail\">
\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "message", array()), "html", null, true);
        echo "
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t<button class=\"btn btn-sm btn-default\" onclick=\"window.print()\" type=\"button\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Print\"><i class=\"fa fa-print\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-sm btn-default\" type=\"button\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Trash\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t </div>\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
\t
\t
\t\t\t\t  

";
        
        $__internal_28c250c495c9130409c3ba8aac63abad2ec10dee04f26d03757369d71f48bc19->leave($__internal_28c250c495c9130409c3ba8aac63abad2ec10dee04f26d03757369d71f48bc19_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  96 => 38,  85 => 29,  77 => 27,  69 => 25,  67 => 24,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block body %}

<div class=\"row\" id=\"message\">
\t<div class=\"col-md-12\">
\t\t<div class=\"x_panel\">
\t\t\t<div class=\"x_title\">
\t\t\t\t<h2 id=\"message_title\"></h2>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t\t<div class=\"x_content\">
\t\t\t\t  <div class=\"col-sm-9 mail_view\">
\t\t\t\t\t<div class=\"inbox-body\">
\t\t\t\t\t  <div class=\"mail_heading row\">
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-default\" type=\"button\" onclick=\"window.print()\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Print\"><i class=\"fa fa-print\"></i></button>
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-default\" type=\"button\" onclick=\"document.location.href='{{ path('admin_removeMessage')}}?id={{  message.id }}'\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Trash\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t  <p class=\"date\"> 
\t\t\t\t\t\t  {% if app.request.cookies.has('ParsimonyScore_lang') and app.request.cookies.get('ParsimonyScore_lang') == \"EN\" %}
\t\t\t\t\t\t\t {{ message.sendDate.format('Y-m-d') }} at {{ message.sendDate.format('H:i') }}
\t\t\t\t\t\t  {% else %}
\t\t\t\t\t\t\tLe {{ message.sendDate.format('d/m/Y') }} a {{ message.sendDate.format('H:i') }}
\t\t\t\t\t\t  {% endif %}
\t\t\t\t\t\t  </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t  <h4 id=\"message_obj\"></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"sender-info\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t  <div class=\"col-md-12\">
\t\t\t\t\t\t\t<strong> <span class=\"fa fa-tag\"></span> {{ message.email }}</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"view-mail\">
\t\t\t\t\t\t{{ message.message }}
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t<button class=\"btn btn-sm btn-default\" onclick=\"window.print()\" type=\"button\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Print\"><i class=\"fa fa-print\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-sm btn-default\" type=\"button\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Trash\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t </div>\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
\t
\t
\t\t\t\t  

{% endblock %}
";
    }
}
