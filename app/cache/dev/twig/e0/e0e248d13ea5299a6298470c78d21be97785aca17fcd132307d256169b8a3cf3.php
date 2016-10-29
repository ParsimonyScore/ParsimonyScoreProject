<?php

/* AdminBundle:Default:all_scores.html.twig */
class __TwigTemplate_4d9da123d2e42c92b8219cc643cb975c0b1c78c47a33254607d8ba889a3616c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:all_scores.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fd39eb753e3a192f462de41142eae37ab7d8710d4c655496d44d5be432e1a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd39eb753e3a192f462de41142eae37ab7d8710d4c655496d44d5be432e1a79->enter($__internal_0fd39eb753e3a192f462de41142eae37ab7d8710d4c655496d44d5be432e1a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:all_scores.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fd39eb753e3a192f462de41142eae37ab7d8710d4c655496d44d5be432e1a79->leave($__internal_0fd39eb753e3a192f462de41142eae37ab7d8710d4c655496d44d5be432e1a79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f349d752170f697443415b09084b78400221bafe7d3e5f98a245741b6b041ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f349d752170f697443415b09084b78400221bafe7d3e5f98a245741b6b041ee->enter($__internal_9f349d752170f697443415b09084b78400221bafe7d3e5f98a245741b6b041ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<div class=\"right_col\" role=\"main\">
    
    ";
        // line 8
        if (array_key_exists("error", $context)) {
            // line 9
            echo "         <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
            </button>
            <strong> <script> document.write(lang.pages.addScoreFrom.error) </script> </strong> [  ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " ]
          </div>
      ";
        }
        // line 15
        echo "
      ";
        // line 16
        if (array_key_exists("success", $context)) {
            // line 17
            echo "          <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
            </button>
            <strong> <script> document.write(lang.pages.addScoreFrom.success) </script> </strong> [  ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo " ]
          </div>
      ";
        }
        // line 23
        echo "  
    
  <div class=\"row\"> 
      <div class=\"x_content\">
        
            <div class=\"x_panel \">
                 <div class=\"\"  style=\"margin-left:25%\" >
                     <button type=\"button\" class=\"btn btn-primary col-md-3 col-sm-3 col-xs-3\" data-toggle=\"modal\" data-target=\"#modal_add\" style=\"margin-right:12%\">Ajouter une sequence</button> <!-- a traduire -->
                       
                     <button type=\"button\" class=\"btn btn-primary col-md-3 col-sm-3 col-xs-3\" data-toggle=\"modal\" data-target=\"#modal_insertion\"> Ajouter plusieurs séquences</button> <!-- a traduire -->
                 </div>
            </div>
     </div>
      
  </div>
    
    
     <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2 id=\"addScoreFrom_scores\">Tous les scores</h2> <!--  a traduire -->
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">

                ";
        // line 49
        if (array_key_exists("scores", $context)) {
            // line 50
            echo "                <table class=\"table table-striped table-bordered\">
                    <thead>
                      <tr>
                        <th>Problem</th>  <!-- a traduire -->
                        <th>K</th>
                        <th>L</th>
                        <th>R</th>
                        <th>N</th>
                        <th>G</th>
                        <th>B</th>
                        <th>S</th>
                        <th>RN</th>
                        <th>RG</th>
                        <th>RB</th>
                        <th>NG</th>
                        <th>NB</th>
                        <th>GB</th>
                        <th>Delete</th> <!-- a traduire -->
                      </tr>
                    </thead>
                    <tbody>
                       ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scores"]) ? $context["scores"] : $this->getContext($context, "scores")));
            foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
                // line 72
                echo "
                          <tr>             
                             <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "problem", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "k", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "l", array()), "html", null, true);
                echo "</td> 
                             <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "r", array()), "html", null, true);
                echo "</td> 
                             <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "n", array()), "html", null, true);
                echo "</td> 
                             <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "g", array()), "html", null, true);
                echo "</td> 
                             <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "b", array()), "html", null, true);
                echo "</td> 
                             <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "s", array()), "html", null, true);
                echo "</td> 
                             <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "rn", array()), "html", null, true);
                echo "</td> 
                             <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "rg", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "rb", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "ng", array()), "html", null, true);
                echo "</td> 
                             <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "nb", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["score"], "gb", array()), "html", null, true);
                echo "</td>
                             <td> <a class=\"glyphicon glyphicon-remove\" style=\"cursor:pointer\" href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeScore", array("Id" => $this->getAttribute($context["score"], "id", array()))), "html", null, true);
                echo "\" data-toggle='tooltip' data-placement='right' title='delete' ></a></td> <!-- a traduire -->
                         </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    </tbody>
                  </table>
                 ";
        } else {
            // line 94
            echo "                     <h1> No data avaible </h1> <!-- a traduire -->
                 ";
        }
        // line 96
        echo "                </div>
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
            <h4 class=\"modal-title\">Ajouter une data </h4> <!-- a traduire -->
          </div>
          <div class=\"modal-body\">
            <div class=\"container\" style=\"margin-left:8%\">
            <form id=\"addOneScoreForm\" action=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_score");
        echo "\" method=\"post\" data-parsley-validate class=\"form-horizontal\" >

                  <div class=\"form-group\">

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_name\" for=\"name\"><span  class=\"required\">Nom</span>
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
                    <button type=\"submit\" class=\"control_submit btn btn-success col-sm-8\" id=\"addOneScoreForm_submit\" style=\"margin-left:7%\">Ajouter</button>
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
                    <h4 class=\"modal-title\">Inserer un fichier</h4>
                  </div>
                  <div class=\"modal-body\">
                   <div class=\"row\">
                    <form id=\"insertScoreFrom\" action=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insertion");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate class=\"form-horizontal form-label-left\" style=\"margin-left:10%\" >
                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-sm-8 col-xs-8 \">
                              <input type=\"file\" id=\"file_data\" name=\"file_data\" class=\" form-control file_style\"> 
                            </div>
                            <button type=\"submit\" class=\"btn btn-success col-md-2 col-sm-2 col-xs-2\" id=\"insertScoreFrom_send\">Ajouter</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    
                  </div>
                </div>
            </div>
     <!-- end modal -->

 ";
        // line 215
        $this->displayBlock('javascripts', $context, $blocks);
        // line 218
        echo "
";
        
        $__internal_9f349d752170f697443415b09084b78400221bafe7d3e5f98a245741b6b041ee->leave($__internal_9f349d752170f697443415b09084b78400221bafe7d3e5f98a245741b6b041ee_prof);

    }

    // line 215
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d24228a271fd5c38109d0f508ca69bcd7eba5fcbe3e2df29ae383f46c9086d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d24228a271fd5c38109d0f508ca69bcd7eba5fcbe3e2df29ae383f46c9086d9->enter($__internal_9d24228a271fd5c38109d0f508ca69bcd7eba5fcbe3e2df29ae383f46c9086d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 216
        echo "
";
        
        $__internal_9d24228a271fd5c38109d0f508ca69bcd7eba5fcbe3e2df29ae383f46c9086d9->leave($__internal_9d24228a271fd5c38109d0f508ca69bcd7eba5fcbe3e2df29ae383f46c9086d9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:all_scores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 216,  348 => 215,  340 => 218,  338 => 215,  319 => 199,  232 => 115,  211 => 96,  207 => 94,  202 => 91,  193 => 88,  189 => 87,  185 => 86,  181 => 85,  177 => 84,  173 => 83,  169 => 82,  165 => 81,  161 => 80,  157 => 79,  153 => 78,  149 => 77,  145 => 76,  141 => 75,  137 => 74,  133 => 72,  129 => 71,  106 => 50,  104 => 49,  76 => 23,  70 => 20,  65 => 17,  63 => 16,  60 => 15,  54 => 12,  49 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

 {% block body %}


<div class=\"right_col\" role=\"main\">
    
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
                     <button type=\"button\" class=\"btn btn-primary col-md-3 col-sm-3 col-xs-3\" data-toggle=\"modal\" data-target=\"#modal_add\" style=\"margin-right:12%\">Ajouter une sequence</button> <!-- a traduire -->
                       
                     <button type=\"button\" class=\"btn btn-primary col-md-3 col-sm-3 col-xs-3\" data-toggle=\"modal\" data-target=\"#modal_insertion\"> Ajouter plusieurs séquences</button> <!-- a traduire -->
                 </div>
            </div>
     </div>
      
  </div>
    
    
     <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2 id=\"addScoreFrom_scores\">Tous les scores</h2> <!--  a traduire -->
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">

                {% if scores is defined %}
                <table class=\"table table-striped table-bordered\">
                    <thead>
                      <tr>
                        <th>Problem</th>  <!-- a traduire -->
                        <th>K</th>
                        <th>L</th>
                        <th>R</th>
                        <th>N</th>
                        <th>G</th>
                        <th>B</th>
                        <th>S</th>
                        <th>RN</th>
                        <th>RG</th>
                        <th>RB</th>
                        <th>NG</th>
                        <th>NB</th>
                        <th>GB</th>
                        <th>Delete</th> <!-- a traduire -->
                      </tr>
                    </thead>
                    <tbody>
                       {% for score in scores %}

                          <tr>             
                             <td>{{score.problem}}</td>
                             <td>{{score.k}}</td>
                             <td>{{score.l}}</td> 
                             <td>{{score.r}}</td> 
                             <td>{{score.n}}</td> 
                             <td>{{score.g}}</td> 
                             <td>{{score.b}}</td> 
                             <td>{{score.s}}</td> 
                             <td>{{score.rn}}</td> 
                             <td>{{score.rg}}</td>
                             <td>{{score.rb}}</td>
                             <td>{{score.ng}}</td> 
                             <td>{{score.nb}}</td>
                             <td>{{score.gb}}</td>
                             <td> <a class=\"glyphicon glyphicon-remove\" style=\"cursor:pointer\" href=\"{{ path('removeScore',{'Id' : score.id}) }}\" data-toggle='tooltip' data-placement='right' title='delete' ></a></td> <!-- a traduire -->
                         </tr>
                        {% endfor %}
                    </tbody>
                  </table>
                 {%else %}
                     <h1> No data avaible </h1> <!-- a traduire -->
                 {% endif %}
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
            <h4 class=\"modal-title\">Ajouter une data </h4> <!-- a traduire -->
          </div>
          <div class=\"modal-body\">
            <div class=\"container\" style=\"margin-left:8%\">
            <form id=\"addOneScoreForm\" action=\"{{ path('add_score') }}\" method=\"post\" data-parsley-validate class=\"form-horizontal\" >

                  <div class=\"form-group\">

                    <label class=\"control-label col-sm-1\" id=\"addOneScoreForm_name\" for=\"name\"><span  class=\"required\">Nom</span>
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
                    <button type=\"submit\" class=\"control_submit btn btn-success col-sm-8\" id=\"addOneScoreForm_submit\" style=\"margin-left:7%\">Ajouter</button>
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
                    <h4 class=\"modal-title\">Inserer un fichier</h4>
                  </div>
                  <div class=\"modal-body\">
                   <div class=\"row\">
                    <form id=\"insertScoreFrom\" action=\"{{ path('insertion') }}\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate class=\"form-horizontal form-label-left\" style=\"margin-left:10%\" >
                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-sm-8 col-xs-8 \">
                              <input type=\"file\" id=\"file_data\" name=\"file_data\" class=\" form-control file_style\"> 
                            </div>
                            <button type=\"submit\" class=\"btn btn-success col-md-2 col-sm-2 col-xs-2\" id=\"insertScoreFrom_send\">Ajouter</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    
                  </div>
                </div>
            </div>
     <!-- end modal -->

 {% block javascripts %}

{% endblock %}

{% endblock %}


";
    }
}
