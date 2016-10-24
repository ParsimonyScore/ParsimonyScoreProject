<?php

/* ::base.html.twig */
class __TwigTemplate_15beeaf8dab2e18d0758cf3e69711545442aa4318a3f72bc9053965c9e6646db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'onready' => array($this, 'block_onready'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4614e36222410cd1d6fcd2fb703991a9acb8ae30d2c696c6432a4aa3539568ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4614e36222410cd1d6fcd2fb703991a9acb8ae30d2c696c6432a4aa3539568ee->enter($__internal_4614e36222410cd1d6fcd2fb703991a9acb8ae30d2c696c6432a4aa3539568ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->loadTemplate("::Global/global_css.html.twig", "::base.html.twig", 7)->display($context);
        // line 8
        echo "\t\t";
        $this->loadTemplate("::Global/js_onready.html.twig", "::base.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->displayBlock('onready', $context, $blocks);
        // line 10
        echo "    </head>
    
    <body class=\"nav-md\">
        <div class=\"container body\">
            <div class=\"main_container\">
                
                <div class=\"col-md-3 left_col\">
                    <div class=\"left_col scroll-view\">
                        ";
        // line 18
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "::base.html.twig", 18)->display($context);
        // line 19
        echo "                    </div>
                </div>
                
                ";
        // line 22
        $this->loadTemplate("::modulesUsed/header.html.twig", "::base.html.twig", 22)->display($context);
        // line 23
        echo "                
                <div class=\"right_col\" role=\"main\">
                  <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"x_panel\">
                            ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "                        </div>
                    </div>
                  </div>
                </div>
                ";
        // line 33
        $this->loadTemplate("::modulesUsed/footer.html.twig", "::base.html.twig", 33)->display($context);
        // line 34
        echo "

                ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "                ";
        $this->loadTemplate("::Global/global_js.html.twig", "::base.html.twig", 37)->display($context);
        // line 38
        echo "            </div>
        </div>
    </body>
</html>
";
        
        $__internal_4614e36222410cd1d6fcd2fb703991a9acb8ae30d2c696c6432a4aa3539568ee->leave($__internal_4614e36222410cd1d6fcd2fb703991a9acb8ae30d2c696c6432a4aa3539568ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94ce5abf4c35bfb4c0327c6c251025af97ba8bf4a99cc34f84f7c5ed16fcc93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ce5abf4c35bfb4c0327c6c251025af97ba8bf4a99cc34f84f7c5ed16fcc93b->enter($__internal_94ce5abf4c35bfb4c0327c6c251025af97ba8bf4a99cc34f84f7c5ed16fcc93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_94ce5abf4c35bfb4c0327c6c251025af97ba8bf4a99cc34f84f7c5ed16fcc93b->leave($__internal_94ce5abf4c35bfb4c0327c6c251025af97ba8bf4a99cc34f84f7c5ed16fcc93b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87caa88b38b787534d1ff9ff50fe18b4411aec644f5c9acaa6b210843ffee5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87caa88b38b787534d1ff9ff50fe18b4411aec644f5c9acaa6b210843ffee5d3->enter($__internal_87caa88b38b787534d1ff9ff50fe18b4411aec644f5c9acaa6b210843ffee5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87caa88b38b787534d1ff9ff50fe18b4411aec644f5c9acaa6b210843ffee5d3->leave($__internal_87caa88b38b787534d1ff9ff50fe18b4411aec644f5c9acaa6b210843ffee5d3_prof);

    }

    // line 9
    public function block_onready($context, array $blocks = array())
    {
        $__internal_6f7d39101fd4bc76f08b4033d8b6ede05864a1b653e1f5a8b0fe0cbab729e48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7d39101fd4bc76f08b4033d8b6ede05864a1b653e1f5a8b0fe0cbab729e48a->enter($__internal_6f7d39101fd4bc76f08b4033d8b6ede05864a1b653e1f5a8b0fe0cbab729e48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "onready"));

        
        $__internal_6f7d39101fd4bc76f08b4033d8b6ede05864a1b653e1f5a8b0fe0cbab729e48a->leave($__internal_6f7d39101fd4bc76f08b4033d8b6ede05864a1b653e1f5a8b0fe0cbab729e48a_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_128824277c24fbff77f9a4c93632a346e35e6fef70713f5742fd2c847f8ba3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128824277c24fbff77f9a4c93632a346e35e6fef70713f5742fd2c847f8ba3b7->enter($__internal_128824277c24fbff77f9a4c93632a346e35e6fef70713f5742fd2c847f8ba3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_128824277c24fbff77f9a4c93632a346e35e6fef70713f5742fd2c847f8ba3b7->leave($__internal_128824277c24fbff77f9a4c93632a346e35e6fef70713f5742fd2c847f8ba3b7_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebdf9c2697ee5ec1fc192d6d5bdbe66a5a7b5547957efcee880bbaabdc46eb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdf9c2697ee5ec1fc192d6d5bdbe66a5a7b5547957efcee880bbaabdc46eb37->enter($__internal_ebdf9c2697ee5ec1fc192d6d5bdbe66a5a7b5547957efcee880bbaabdc46eb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ebdf9c2697ee5ec1fc192d6d5bdbe66a5a7b5547957efcee880bbaabdc46eb37->leave($__internal_ebdf9c2697ee5ec1fc192d6d5bdbe66a5a7b5547957efcee880bbaabdc46eb37_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 36,  137 => 28,  126 => 9,  115 => 6,  104 => 5,  93 => 38,  90 => 37,  88 => 36,  84 => 34,  82 => 33,  76 => 29,  74 => 28,  67 => 23,  65 => 22,  60 => 19,  58 => 18,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        {% include '::Global/global_css.html.twig' %}
\t\t{% include '::Global/js_onready.html.twig' %}
\t\t{% block onready %}{% endblock %}
    </head>
    
    <body class=\"nav-md\">
        <div class=\"container body\">
            <div class=\"main_container\">
                
                <div class=\"col-md-3 left_col\">
                    <div class=\"left_col scroll-view\">
                        {% include '::modulesUsed/navigation.html.twig' %}
                    </div>
                </div>
                
                {% include '::modulesUsed/header.html.twig' %}
                
                <div class=\"right_col\" role=\"main\">
                  <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"x_panel\">
                            {% block body %}{% endblock %}
                        </div>
                    </div>
                  </div>
                </div>
                {% include '::modulesUsed/footer.html.twig' %}


                {% block javascripts %}{% endblock %}
                {% include '::Global/global_js.html.twig' %}
            </div>
        </div>
    </body>
</html>
";
    }
}
