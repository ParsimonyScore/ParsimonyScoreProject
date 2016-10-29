<?php

/* PagesBundle:Default:index.html.twig */
class __TwigTemplate_5be9670dac4b730a3b03a3fd7c32ceac460a7f94302934636c75a97c148d6851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PagesBundle:Default:index.html.twig", 1);
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
        $__internal_0b00da9bd930306fffd5ad5c9ce5d36e5285926f06d217dffcbae604345c138c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b00da9bd930306fffd5ad5c9ce5d36e5285926f06d217dffcbae604345c138c->enter($__internal_0b00da9bd930306fffd5ad5c9ce5d36e5285926f06d217dffcbae604345c138c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b00da9bd930306fffd5ad5c9ce5d36e5285926f06d217dffcbae604345c138c->leave($__internal_0b00da9bd930306fffd5ad5c9ce5d36e5285926f06d217dffcbae604345c138c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20820aef9119a68be3c7e35eb9a397015c2b51cf4b4f60663619318097044d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20820aef9119a68be3c7e35eb9a397015c2b51cf4b4f60663619318097044d24->enter($__internal_20820aef9119a68be3c7e35eb9a397015c2b51cf4b4f60663619318097044d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "\t\t\t
\t\t\t\t\t\t  <div class=\"x_title\">
\t\t\t\t\t\t\t<h2 id=\"addScoreFrom_title\"></h2>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"x_content\">
\t\t\t\t\t\t  ";
        // line 9
        if (array_key_exists("error", $context)) {
            // line 10
            echo "\t\t\t\t\t\t\t <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<strong> <script> document.write(lang.pages.addScoreFrom.error) </script> </strong> [  ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " ]
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  ";
        }
        // line 16
        echo "\t\t\t\t\t\t  
\t\t\t\t\t\t  ";
        // line 17
        if (array_key_exists("success", $context)) {
            // line 18
            echo "\t\t\t\t\t\t\t  <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<strong> <script> document.write(lang.pages.addScoreFrom.success) </script> </strong> [  ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo " ]
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  ";
        }
        // line 24
        echo "\t\t\t\t\t\t  
\t\t\t\t\t\t\t<form id=\"addScoreFrom\" action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_addScore");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate class=\"form-horizontal form-label-left\" >
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"addScoreFrom_problem\" for=\"id_problem\"><span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t  <input type=\"text\" id=\"id_problem\" name=\"problem\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"addScoreFrom_type\"></label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t  <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\" onclick=\"setTypeSelected('file')\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\"  name=\"type\" value=\"file\"> &nbsp; <span id=\"addScoreFrom_type_file\" ></span> &nbsp;
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\" onclick=\"setTypeSelected('text')\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\"  name=\"type\" value=\"text\"> <span id=\"addScoreFrom_type_text\" ></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"form-group\" id=\"type_file\" style=\"display:none\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"addScoreFrom_file\" for=\"file_data\"><span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t  <input type=\"file\" id=\"file_data\" name=\"file_data\" class=\"form-control file_style\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"form-group\" id=\"type_text\" style=\"display:none\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"addScoreFrom_text\" for=\"text_data\"><span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t  <textarea id=\"text_data\" rows=\"15\" name=\"text_data\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <div class=\"ln_solid\"></div>
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
\t\t\t\t\t\t\t\t  <button type=\"reset\" class=\"btn btn-primary\" id=\"addScoreFrom_cancel\"></button>
\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-success\" id=\"addScoreFrom_submit\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t
        <!-- /page content -->
\t\t";
        
        $__internal_20820aef9119a68be3c7e35eb9a397015c2b51cf4b4f60663619318097044d24->leave($__internal_20820aef9119a68be3c7e35eb9a397015c2b51cf4b4f60663619318097044d24_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  76 => 24,  70 => 21,  65 => 18,  63 => 17,  60 => 16,  54 => 13,  49 => 10,  47 => 9,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}\t

  {% block body %}\t\t\t
\t\t\t\t\t\t  <div class=\"x_title\">
\t\t\t\t\t\t\t<h2 id=\"addScoreFrom_title\"></h2>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"x_content\">
\t\t\t\t\t\t  {% if error is defined %}
\t\t\t\t\t\t\t <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<strong> <script> document.write(lang.pages.addScoreFrom.error) </script> </strong> [  {{ error }} ]
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  {% endif %}
\t\t\t\t\t\t  
\t\t\t\t\t\t  {% if success is defined %}
\t\t\t\t\t\t\t  <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<strong> <script> document.write(lang.pages.addScoreFrom.success) </script> </strong> [  {{ success }} ]
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  {% endif %}
\t\t\t\t\t\t  
\t\t\t\t\t\t\t<form id=\"addScoreFrom\" action=\"{{ path('pages_addScore') }}\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate class=\"form-horizontal form-label-left\" >
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"addScoreFrom_problem\" for=\"id_problem\"><span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t  <input type=\"text\" id=\"id_problem\" name=\"problem\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"addScoreFrom_type\"></label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t  <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\" onclick=\"setTypeSelected('file')\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\"  name=\"type\" value=\"file\"> &nbsp; <span id=\"addScoreFrom_type_file\" ></span> &nbsp;
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\" onclick=\"setTypeSelected('text')\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\"  name=\"type\" value=\"text\"> <span id=\"addScoreFrom_type_text\" ></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"form-group\" id=\"type_file\" style=\"display:none\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"addScoreFrom_file\" for=\"file_data\"><span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t  <input type=\"file\" id=\"file_data\" name=\"file_data\" class=\"form-control file_style\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"form-group\" id=\"type_text\" style=\"display:none\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" id=\"addScoreFrom_text\" for=\"text_data\"><span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t  <textarea id=\"text_data\" rows=\"15\" name=\"text_data\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <div class=\"ln_solid\"></div>
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
\t\t\t\t\t\t\t\t  <button type=\"reset\" class=\"btn btn-primary\" id=\"addScoreFrom_cancel\"></button>
\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-success\" id=\"addScoreFrom_submit\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t
        <!-- /page content -->
\t\t{% endblock %}
\t";
    }
}
