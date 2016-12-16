<?php

/* AdminBundle:Default:listeScore.html.twig */
class __TwigTemplate_bb324eea9c763398ece3e53cb4730e74131ae4a31ea036c526cd07585e72b8af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:listeScore.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_onready($context, array $blocks = array())
    {
        // line 4
        echo "  <script>
  \$( document ).ready(function() {
    score= new Score();
    score.url= \"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_allScores");
        echo "\";
    score.url_accept_remove= \"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_removeScore");
        echo "\";
    score.url_files= \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/data"), "html", null, true);
        echo "\";
    score.tab= \$('#table_score').dataTable({ \"bPaginate\": false });
    score.getScores();
  }); 
  </script>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    <div id=\"scores\">
    ";
        // line 19
        if (array_key_exists("error", $context)) {
            // line 20
            echo "         <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
            </button>
            <strong> <script> document.write(lang.pages.addScoreFrom.error) </script> </strong> [  ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo " ]
          </div>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        if (array_key_exists("success", $context)) {
            // line 28
            echo "          <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
            </button>
            <strong> <script> document.write(lang.pages.addScoreFrom.success) </script> </strong> [  ";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo " ]
          </div>
      ";
        }
        // line 34
        echo "  
    
  <div class=\"row\"> 
      <div class=\"x_content\">
        
            <div class=\"x_panel \">
                 <div class=\"\"  style=\"margin-left:25%\" >
                     <button id=\"scores_addOne\" type=\"button\" class=\"btn btn-primary col-md-3 col-sm-3 col-xs-3\" data-toggle=\"modal\" data-target=\"#modal_add\" style=\"margin-right:12%\"></button> 
                       
                     <button id=\"scores_addMany\" type=\"button\" class=\"btn btn-primary col-md-3 col-sm-3 col-xs-3\" data-toggle=\"modal\" data-target=\"#modal_insertion\"> </button> 
                 </div>
            </div>
     </div>
      
  </div>
    
    
     <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2 id=\"scores_title\"></h2> <!--  a traduire -->
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">
                <table class=\"table table-striped table-bordered\" id=\"table_score\">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Option</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                  <center><img id=\"loading\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/lod.gif"), "html", null, true);
        echo "\" width=\"150\" /></center>
                  <!-- div to show file content -->
                  <div id=\"fileContent\" style=\"display:none\"> 
                    <div class=\"col-md-12 col-sm-12 col-xs-12\" >
                      <textarea id=\"fileContent_data\" rows=\"10\" class=\"form-control\" target=\"_blank\" readonly>#my_data#</textarea>
                      <button type=\"button\" id=\"fileContent_download\" onclick=\"#download#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
                      <button type=\"button\" id=\"fileContent_close\" onclick=\"#close#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
                    </div>
                  </div>
                </div>
            </div>
         </div>
    </div>


    <!-- Modal  add one score-->
    <div id=\"modal_add\" class=\"modal fade\" role=\"dialog\">
      <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content modal-lg\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\" id=\"scores_addOneScoreForm_title\" >Ajouter une data </h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"container\" style=\"margin-left:8%\">
            <form id=\"addOneScoreForm\" action=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_score");
        echo "\" method=\"post\" data-parsley-validate class=\"form-horizontal\" >

                  <div class=\"form-group\">

                    <label class=\"control-label col-sm-1\" id=\"scores_addOneScoreForm_name\" for=\"name\"><span  class=\"required\">Nom</span>
                    </label>
                    <div class=\"col-sm-2\" >
                      <input type=\"text\" id=\"name\" name=\"name\" required=\"required\" class=\"form_control\">
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_K\" for=\"K\"><span class=\"required\">K</span>
                    </label>
                    <div class=\"col-sm-2\">
                       <input type=\"text\" id=\"K\" name=\"K\" required=\"required\" class=\"form_control\"> 
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_L\" for=\"L\"><span class=\"required\">L</span>
                    </label>
                    <div class=\"col-sm-2\">
                         <input type=\"text\" id=\"L\" name=\"L\" required=\"required\" class=\"form_control\">               
                    </div>
                  </div>


                 <div class=\"form-group\">
                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_R\" for=\"R\"><span  class=\"required\">R</span>
                    </label>
                    <div class=\"col-sm-2\" >
                      <input type=\"text\" id=\"R\" name=\"R\" required=\"required\" class=\"form_control\">
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_N\" for=\"N\"><span class=\"required\">N</span>
                    </label>
                    <div class=\"col-sm-2\">
                       <input type=\"text\" id=\"N\" name=\"N\" required=\"required\" class=\"form_control\"> 
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_G\" for=\"G\"><span class=\"required\">G</span>
                    </label>
                    <div class=\"col-sm-2\">
                       <input type=\"text\" id=\"G\" name=\"G\" required=\"required\" class=\"form_control\"> 
                    </div>
                  </div>

                 <div class=\"form-group\">
                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_B\" for=\"B\"><span  class=\"required\">B</span>
                    </label>
                    <div class=\"col-sm-2\" >
                      <input type=\"text\" id=\"B\" name=\"B\" required=\"required\" class=\"form_control\">
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_S\" for=\"S\"><span class=\"required\">S</span>
                    </label>
                    <div class=\"col-sm-2\">
                       <input type=\"text\" id=\"S\" name=\"S\" required=\"required\" class=\"form_control\"> 
                    </div>     
                  </div>

                <div class=\"form_group\">
                    <button type=\"submit\" class=\"control_submit btn btn-success col-sm-8\" id=\"scores_addOneScoreForm_submit\" style=\"margin-left:7%\">Ajouter</button>
                </div>

            </form>
            </div>
         </div>
      </div>
     </div>
    </div>
<!-- end modal -->



   <!-- Modal  add file-->
            <div id=\"modal_insertion\" class=\"modal fade\" role=\"dialog\">
              <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content modal-lg\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\" id=\"scores_insertionForm_title\" ></h4>
                  </div>
                  <div class=\"modal-body\">
                   <div class=\"row\">
                    <form id=\"insertScoreFrom\" action=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insertion");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate class=\"form-horizontal form-label-left\" style=\"margin-left:10%\" >
                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-sm-8 col-xs-8 \">
                              <input type=\"file\" id=\"file_data\" name=\"file_data\" class=\" form-control file_style\"> 
                            </div>
                            <button type=\"submit\" class=\"btn btn-success col-md-2 col-sm-2 col-xs-2\" id=\"scores_insertionForm_submit\">Ajouter</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    
                  </div>
                </div>
            </div>
     <!-- end modal -->
  </div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:listeScore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 194,  171 => 110,  141 => 83,  90 => 34,  84 => 31,  79 => 28,  77 => 27,  74 => 26,  68 => 23,  63 => 20,  61 => 19,  58 => 18,  55 => 17,  45 => 9,  41 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block onready %}
  <script>
  \$( document ).ready(function() {
    score= new Score();
    score.url= \"{{ path('admin_allScores') }}\";
    score.url_accept_remove= \"{{ path('admin_removeScore') }}\";
    score.url_files= \"{{ asset('files/data') }}\";
    score.tab= \$('#table_score').dataTable({ \"bPaginate\": false });
    score.getScores();
  }); 
  </script>
{% endblock %}


 {% block body %}
    <div id=\"scores\">
    {% if error is defined %}
         <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
            </button>
            <strong> <script> document.write(lang.pages.addScoreFrom.error) </script> </strong> [  {{ error }} ]
          </div>
      {% endif %}

      {% if success is defined %}
          <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
            </button>
            <strong> <script> document.write(lang.pages.addScoreFrom.success) </script> </strong> [  {{ success }} ]
          </div>
      {% endif %}
  
    
  <div class=\"row\"> 
      <div class=\"x_content\">
        
            <div class=\"x_panel \">
                 <div class=\"\"  style=\"margin-left:25%\" >
                     <button id=\"scores_addOne\" type=\"button\" class=\"btn btn-primary col-md-3 col-sm-3 col-xs-3\" data-toggle=\"modal\" data-target=\"#modal_add\" style=\"margin-right:12%\"></button> 
                       
                     <button id=\"scores_addMany\" type=\"button\" class=\"btn btn-primary col-md-3 col-sm-3 col-xs-3\" data-toggle=\"modal\" data-target=\"#modal_insertion\"> </button> 
                 </div>
            </div>
     </div>
      
  </div>
    
    
     <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2 id=\"scores_title\"></h2> <!--  a traduire -->
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">
                <table class=\"table table-striped table-bordered\" id=\"table_score\">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Option</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                  <center><img id=\"loading\" src=\"{{ asset('img/lod.gif') }}\" width=\"150\" /></center>
                  <!-- div to show file content -->
                  <div id=\"fileContent\" style=\"display:none\"> 
                    <div class=\"col-md-12 col-sm-12 col-xs-12\" >
                      <textarea id=\"fileContent_data\" rows=\"10\" class=\"form-control\" target=\"_blank\" readonly>#my_data#</textarea>
                      <button type=\"button\" id=\"fileContent_download\" onclick=\"#download#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
                      <button type=\"button\" id=\"fileContent_close\" onclick=\"#close#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
                    </div>
                  </div>
                </div>
            </div>
         </div>
    </div>


    <!-- Modal  add one score-->
    <div id=\"modal_add\" class=\"modal fade\" role=\"dialog\">
      <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content modal-lg\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\" id=\"scores_addOneScoreForm_title\" >Ajouter une data </h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"container\" style=\"margin-left:8%\">
            <form id=\"addOneScoreForm\" action=\"{{ path('add_score') }}\" method=\"post\" data-parsley-validate class=\"form-horizontal\" >

                  <div class=\"form-group\">

                    <label class=\"control-label col-sm-1\" id=\"scores_addOneScoreForm_name\" for=\"name\"><span  class=\"required\">Nom</span>
                    </label>
                    <div class=\"col-sm-2\" >
                      <input type=\"text\" id=\"name\" name=\"name\" required=\"required\" class=\"form_control\">
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_K\" for=\"K\"><span class=\"required\">K</span>
                    </label>
                    <div class=\"col-sm-2\">
                       <input type=\"text\" id=\"K\" name=\"K\" required=\"required\" class=\"form_control\"> 
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_L\" for=\"L\"><span class=\"required\">L</span>
                    </label>
                    <div class=\"col-sm-2\">
                         <input type=\"text\" id=\"L\" name=\"L\" required=\"required\" class=\"form_control\">               
                    </div>
                  </div>


                 <div class=\"form-group\">
                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_R\" for=\"R\"><span  class=\"required\">R</span>
                    </label>
                    <div class=\"col-sm-2\" >
                      <input type=\"text\" id=\"R\" name=\"R\" required=\"required\" class=\"form_control\">
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_N\" for=\"N\"><span class=\"required\">N</span>
                    </label>
                    <div class=\"col-sm-2\">
                       <input type=\"text\" id=\"N\" name=\"N\" required=\"required\" class=\"form_control\"> 
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_G\" for=\"G\"><span class=\"required\">G</span>
                    </label>
                    <div class=\"col-sm-2\">
                       <input type=\"text\" id=\"G\" name=\"G\" required=\"required\" class=\"form_control\"> 
                    </div>
                  </div>

                 <div class=\"form-group\">
                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_B\" for=\"B\"><span  class=\"required\">B</span>
                    </label>
                    <div class=\"col-sm-2\" >
                      <input type=\"text\" id=\"B\" name=\"B\" required=\"required\" class=\"form_control\">
                    </div>

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_S\" for=\"S\"><span class=\"required\">S</span>
                    </label>
                    <div class=\"col-sm-2\">
                       <input type=\"text\" id=\"S\" name=\"S\" required=\"required\" class=\"form_control\"> 
                    </div>     
                  </div>

                <div class=\"form_group\">
                    <button type=\"submit\" class=\"control_submit btn btn-success col-sm-8\" id=\"scores_addOneScoreForm_submit\" style=\"margin-left:7%\">Ajouter</button>
                </div>

            </form>
            </div>
         </div>
      </div>
     </div>
    </div>
<!-- end modal -->



   <!-- Modal  add file-->
            <div id=\"modal_insertion\" class=\"modal fade\" role=\"dialog\">
              <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content modal-lg\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\" id=\"scores_insertionForm_title\" ></h4>
                  </div>
                  <div class=\"modal-body\">
                   <div class=\"row\">
                    <form id=\"insertScoreFrom\" action=\"{{ path('insertion') }}\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate class=\"form-horizontal form-label-left\" style=\"margin-left:10%\" >
                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-sm-8 col-xs-8 \">
                              <input type=\"file\" id=\"file_data\" name=\"file_data\" class=\" form-control file_style\"> 
                            </div>
                            <button type=\"submit\" class=\"btn btn-success col-md-2 col-sm-2 col-xs-2\" id=\"scores_insertionForm_submit\">Ajouter</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    
                  </div>
                </div>
            </div>
     <!-- end modal -->
  </div>
{% endblock %}


";
    }
}
