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
            'onready' => array($this, 'block_onready'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06f121a97f54591e8ff1155c3ae6f19b1f85e7beff3f6cb0c6e3bcefceac0dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f121a97f54591e8ff1155c3ae6f19b1f85e7beff3f6cb0c6e3bcefceac0dac->enter($__internal_06f121a97f54591e8ff1155c3ae6f19b1f85e7beff3f6cb0c6e3bcefceac0dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f121a97f54591e8ff1155c3ae6f19b1f85e7beff3f6cb0c6e3bcefceac0dac->leave($__internal_06f121a97f54591e8ff1155c3ae6f19b1f85e7beff3f6cb0c6e3bcefceac0dac_prof);

    }

    // line 3
    public function block_onready($context, array $blocks = array())
    {
        $__internal_8022c16e87beb787b150214595ae294c88179d5fde9a19088901c5e0b02e1c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8022c16e87beb787b150214595ae294c88179d5fde9a19088901c5e0b02e1c01->enter($__internal_8022c16e87beb787b150214595ae294c88179d5fde9a19088901c5e0b02e1c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "onready"));

        // line 4
        echo "  \t\t";
        if (array_key_exists("score", $context)) {
            // line 5
            echo "  \t\t\t<script type=\"text/javascript\">
\t\t  \t\t\$( document ).ready(function() {
\t\t\t\t    ScoreCaclul(\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")), "id", array()), "html", null, true);
            echo "\", \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_calculScore");
            echo "\");
\t\t\t\t});
  \t\t\t</script>
\t\t";
        }
        // line 11
        echo "
  \t";
        
        $__internal_8022c16e87beb787b150214595ae294c88179d5fde9a19088901c5e0b02e1c01->leave($__internal_8022c16e87beb787b150214595ae294c88179d5fde9a19088901c5e0b02e1c01_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f62bca58ad72014e485e82a48641b7b0fd0a5ca500ec79bad1ea13dc0082fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f62bca58ad72014e485e82a48641b7b0fd0a5ca500ec79bad1ea13dc0082fd2->enter($__internal_5f62bca58ad72014e485e82a48641b7b0fd0a5ca500ec79bad1ea13dc0082fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "\t\t\t
\t\t\t\t\t\t  <div class=\"x_title\">
\t\t\t\t\t\t\t<h2 id=\"addScoreFrom_title\"></h2>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"x_content\">
\t\t\t\t\t\t  ";
        // line 20
        if (array_key_exists("error", $context)) {
            // line 21
            echo "\t\t\t\t\t\t\t <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<strong> <script> document.write(lang.pages.addScoreFrom.error) </script> </strong> [  ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " ]
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  ";
        }
        // line 27
        echo "\t\t\t\t\t\t  
\t\t\t\t\t\t  ";
        // line 28
        if (array_key_exists("success", $context)) {
            // line 29
            echo "\t\t\t\t\t\t\t  <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<strong> <script> document.write(lang.pages.addScoreFrom.success) </script> </strong> [  ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo " ]
\t\t\t\t\t\t\t  </div> 
\t\t\t                  <ul class=\"list-unstyled timeline\" >
\t\t\t                    <li id=\"calculScore\">
\t\t\t                      <div class=\"block\">
\t\t\t                        <div class=\"tags\">
\t\t\t                          <a href=\"\" class=\"tag\">
\t\t\t                            <span id=\"calculScore_tag\" ></span>
\t\t\t                          </a>
\t\t\t                        </div>
\t\t\t                        <div class=\"block_content\">
\t\t\t                          <h2 class=\"title\" id=\"calculScore_title\"></h2>
\t\t\t                          <div class=\"byline\" id=\"calculScore_time\">
\t\t\t                          </div>
\t\t\t                          <p class=\"excerpt\">
\t\t\t                          \t\t<center><img id=\"calculScore_lod\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/lod.gif"), "html", null, true);
            echo "\" width=\"150\"/> </center>
\t\t\t                          \t\t<button style=\"display:none\" type=\"button\" id=\"calculScore_show_log\"
\t\t\t                          \t\t\t\tonclick=\"showLog()\"></button> <br/>
\t\t\t                          \t\t<textarea id=\"calculScore_log\" rows=\"10\" class=\"form-control\" style=\"display:none\" readonly></textarea>
\t\t\t                          \t\t<br/>
\t\t\t                          \t\t<table class=\"table\" id=\"table_scoreTmp\" style=\"display:none\">
\t\t\t                          \t\t\t<tr>
\t\t\t                          \t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t                          \t\t\t</tr>
\t\t\t                          \t\t\t<tbody id=\"calculScore_content\">
\t\t\t                          \t\t\t</tbody>
\t\t\t                          \t\t</table>

\t\t\t                          </p>
\t\t\t                        </div>
\t\t\t                      </div>
\t\t\t                    </li>
\t\t\t                    <li id=\"compScore\" style=\"display:none\">
\t\t\t                      <div class=\"block\">
\t\t\t                        <div class=\"tags\">
\t\t\t                          <a href=\"javascipt:void(0)\" class=\"tag\">
\t\t\t                            <span id=\"compScore_tag\" ></span>
\t\t\t                          </a>
\t\t\t                        </div>
\t\t\t                        <div class=\"block_content\">
\t\t\t                          <h2 class=\"title\" id=\"compScore_title\"></h2>
\t\t\t                          <div class=\"byline\" id=\"compScore_time\">
\t\t\t                          </div>
\t\t\t                          <p class=\"excerpt\" id=\"compScore_content\">
\t\t\t                          \t\t<center><img id=\"compScore_lod\" src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/lod.gif"), "html", null, true);
            echo "\" width=\"150\"/> </center>
\t\t\t                          </p>
\t\t\t                        </div>
\t\t\t                      </div>
\t\t\t                    </li>
\t\t\t                  </ul>

\t\t\t               ";
        } else {
            // line 98
            echo "\t\t\t\t\t\t  
\t\t\t\t\t\t \t\t\t\t\t\t  
\t\t\t\t\t\t\t<form id=\"addScoreFrom\" action=\"";
            // line 100
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
\t\t\t\t\t\t ";
        }
        // line 144
        echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t
\t\t\t\t\t\t
        <!-- /page content -->
\t\t";
        
        $__internal_5f62bca58ad72014e485e82a48641b7b0fd0a5ca500ec79bad1ea13dc0082fd2->leave($__internal_5f62bca58ad72014e485e82a48641b7b0fd0a5ca500ec79bad1ea13dc0082fd2_prof);

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
        return array (  227 => 144,  180 => 100,  176 => 98,  165 => 90,  119 => 47,  101 => 32,  96 => 29,  94 => 28,  91 => 27,  85 => 24,  80 => 21,  78 => 20,  65 => 14,  57 => 11,  48 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}\t

  \t{% block onready %}
  \t\t{% if score is defined %}
  \t\t\t<script type=\"text/javascript\">
\t\t  \t\t\$( document ).ready(function() {
\t\t\t\t    ScoreCaclul(\"{{ score.id }}\", \"{{ path('pages_calculScore') }}\");
\t\t\t\t});
  \t\t\t</script>
\t\t{% endif %}

  \t{% endblock %}

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
\t\t\t                  <ul class=\"list-unstyled timeline\" >
\t\t\t                    <li id=\"calculScore\">
\t\t\t                      <div class=\"block\">
\t\t\t                        <div class=\"tags\">
\t\t\t                          <a href=\"\" class=\"tag\">
\t\t\t                            <span id=\"calculScore_tag\" ></span>
\t\t\t                          </a>
\t\t\t                        </div>
\t\t\t                        <div class=\"block_content\">
\t\t\t                          <h2 class=\"title\" id=\"calculScore_title\"></h2>
\t\t\t                          <div class=\"byline\" id=\"calculScore_time\">
\t\t\t                          </div>
\t\t\t                          <p class=\"excerpt\">
\t\t\t                          \t\t<center><img id=\"calculScore_lod\" src=\"{{ asset('img/lod.gif') }}\" width=\"150\"/> </center>
\t\t\t                          \t\t<button style=\"display:none\" type=\"button\" id=\"calculScore_show_log\"
\t\t\t                          \t\t\t\tonclick=\"showLog()\"></button> <br/>
\t\t\t                          \t\t<textarea id=\"calculScore_log\" rows=\"10\" class=\"form-control\" style=\"display:none\" readonly></textarea>
\t\t\t                          \t\t<br/>
\t\t\t                          \t\t<table class=\"table\" id=\"table_scoreTmp\" style=\"display:none\">
\t\t\t                          \t\t\t<tr>
\t\t\t                          \t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t                          \t\t\t</tr>
\t\t\t                          \t\t\t<tbody id=\"calculScore_content\">
\t\t\t                          \t\t\t</tbody>
\t\t\t                          \t\t</table>

\t\t\t                          </p>
\t\t\t                        </div>
\t\t\t                      </div>
\t\t\t                    </li>
\t\t\t                    <li id=\"compScore\" style=\"display:none\">
\t\t\t                      <div class=\"block\">
\t\t\t                        <div class=\"tags\">
\t\t\t                          <a href=\"javascipt:void(0)\" class=\"tag\">
\t\t\t                            <span id=\"compScore_tag\" ></span>
\t\t\t                          </a>
\t\t\t                        </div>
\t\t\t                        <div class=\"block_content\">
\t\t\t                          <h2 class=\"title\" id=\"compScore_title\"></h2>
\t\t\t                          <div class=\"byline\" id=\"compScore_time\">
\t\t\t                          </div>
\t\t\t                          <p class=\"excerpt\" id=\"compScore_content\">
\t\t\t                          \t\t<center><img id=\"compScore_lod\" src=\"{{ asset('img/lod.gif') }}\" width=\"150\"/> </center>
\t\t\t                          </p>
\t\t\t                        </div>
\t\t\t                      </div>
\t\t\t                    </li>
\t\t\t                  </ul>

\t\t\t               {% else %}
\t\t\t\t\t\t  
\t\t\t\t\t\t \t\t\t\t\t\t  
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
\t\t\t\t\t\t {% endif %}
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t
\t\t\t\t\t\t
        <!-- /page content -->
\t\t{% endblock %}
\t
";
    }
}
