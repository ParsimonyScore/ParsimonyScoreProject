<?php

/* PagesBundle:Default:contact.html.twig */
class __TwigTemplate_a4c3894c79375dcddf990e31df59aee7e2dc2d7c1720ff87bce7ae798cc2ca51 extends Twig_Template
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
        $__internal_8a005d5ca24b635e1a90337c30761cb4f2771a583530b2162ebac6c3675f61aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a005d5ca24b635e1a90337c30761cb4f2771a583530b2162ebac6c3675f61aa->enter($__internal_8a005d5ca24b635e1a90337c30761cb4f2771a583530b2162ebac6c3675f61aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a005d5ca24b635e1a90337c30761cb4f2771a583530b2162ebac6c3675f61aa->leave($__internal_8a005d5ca24b635e1a90337c30761cb4f2771a583530b2162ebac6c3675f61aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b96f0f24e7c0c02084ebe037c17e91d990d3f7ebd100b5a16f3bbba8c0fdca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b96f0f24e7c0c02084ebe037c17e91d990d3f7ebd100b5a16f3bbba8c0fdca5->enter($__internal_5b96f0f24e7c0c02084ebe037c17e91d990d3f7ebd100b5a16f3bbba8c0fdca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b96f0f24e7c0c02084ebe037c17e91d990d3f7ebd100b5a16f3bbba8c0fdca5->leave($__internal_5b96f0f24e7c0c02084ebe037c17e91d990d3f7ebd100b5a16f3bbba8c0fdca5_prof);

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
