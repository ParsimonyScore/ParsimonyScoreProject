<?php

/* PagesBundle:Default:contact.html.twig */
class __TwigTemplate_a60a512437b0f9fbf3648dc43a3972b16bc8a3785d97ed2adcff5060a2572264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PagesBundle:Default:contact.html.twig", 1);
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
        $__internal_bba26c8ed95369a4100bf3f27bda0ae2cc691b8cb9845c69262f0e886c5c7300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba26c8ed95369a4100bf3f27bda0ae2cc691b8cb9845c69262f0e886c5c7300->enter($__internal_bba26c8ed95369a4100bf3f27bda0ae2cc691b8cb9845c69262f0e886c5c7300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba26c8ed95369a4100bf3f27bda0ae2cc691b8cb9845c69262f0e886c5c7300->leave($__internal_bba26c8ed95369a4100bf3f27bda0ae2cc691b8cb9845c69262f0e886c5c7300_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e80ec264efb87b0783f5713af0bae522d775269b1fc362ea2d2214ae77d411d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80ec264efb87b0783f5713af0bae522d775269b1fc362ea2d2214ae77d411d7->enter($__internal_e80ec264efb87b0783f5713af0bae522d775269b1fc362ea2d2214ae77d411d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 <div class=\"row\">
\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t<div class=\"x_panel\">
\t\t  <div class=\"x_title\">
\t\t\t<h2 id=\"contactForm_title\"></h2>
\t\t\t<div class=\"clearfix\"></div>
\t\t  </div>
\t\t  <div class=\"x_content\">
\t\t\t  ";
        // line 13
        if (array_key_exists("error", $context)) {
            // line 14
            echo "\t\t\t\t <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t</button>
\t\t\t\t\t<strong> <script> document.write(lang.pages.contactForm.error) </script> </strong> [ ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " ]
\t\t\t\t  </div>
\t\t\t  ";
        }
        // line 20
        echo "\t\t\t  
\t\t\t  ";
        // line 21
        if (array_key_exists("success", $context)) {
            // line 22
            echo "\t\t\t\t  <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t</button>
\t\t\t\t\t<strong> <script> document.write(lang.pages.contactForm.success) </script> </strong> 
\t\t\t\t  </div>
\t\t\t  ";
        }
        // line 28
        echo "\t\t\t  
\t\t\t<form id=\"contactForm\" action=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_contact");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate class=\"form-horizontal form-label-left\" >
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"contactForm_email\" for=\"id_email\"><span class=\"required\">*</span>
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t  <input type=\"email\" id=\"id_email\" name=\"email\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t</div>
\t\t\t  </div>\t
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"contactForm_msg\" for=\"id_msg\"><span class=\"required\">*</span>
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t  <textarea id=\"id_msg\" name=\"msg\" rows=\"12\" required=\"required\" class=\"form-control\"></textarea>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"ln_solid\"></div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
\t\t\t\t  <button type=\"submit\" class=\"btn btn-success\" id=\"contactForm_submit\"></button>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</div>
 </div>


";
        
        $__internal_e80ec264efb87b0783f5713af0bae522d775269b1fc362ea2d2214ae77d411d7->leave($__internal_e80ec264efb87b0783f5713af0bae522d775269b1fc362ea2d2214ae77d411d7_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  77 => 28,  69 => 22,  67 => 21,  64 => 20,  58 => 17,  53 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block body %}

 <div class=\"row\">
\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t<div class=\"x_panel\">
\t\t  <div class=\"x_title\">
\t\t\t<h2 id=\"contactForm_title\"></h2>
\t\t\t<div class=\"clearfix\"></div>
\t\t  </div>
\t\t  <div class=\"x_content\">
\t\t\t  {% if error is defined %}
\t\t\t\t <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t</button>
\t\t\t\t\t<strong> <script> document.write(lang.pages.contactForm.error) </script> </strong> [ {{ error }} ]
\t\t\t\t  </div>
\t\t\t  {% endif %}
\t\t\t  
\t\t\t  {% if success is defined %}
\t\t\t\t  <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t</button>
\t\t\t\t\t<strong> <script> document.write(lang.pages.contactForm.success) </script> </strong> 
\t\t\t\t  </div>
\t\t\t  {% endif %}
\t\t\t  
\t\t\t<form id=\"contactForm\" action=\"{{ path('pages_contact') }}\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate class=\"form-horizontal form-label-left\" >
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"contactForm_email\" for=\"id_email\"><span class=\"required\">*</span>
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t  <input type=\"email\" id=\"id_email\" name=\"email\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t</div>
\t\t\t  </div>\t
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"contactForm_msg\" for=\"id_msg\"><span class=\"required\">*</span>
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t  <textarea id=\"id_msg\" name=\"msg\" rows=\"12\" required=\"required\" class=\"form-control\"></textarea>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"ln_solid\"></div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
\t\t\t\t  <button type=\"submit\" class=\"btn btn-success\" id=\"contactForm_submit\"></button>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</div>
 </div>


{% endblock %}";
    }
}
