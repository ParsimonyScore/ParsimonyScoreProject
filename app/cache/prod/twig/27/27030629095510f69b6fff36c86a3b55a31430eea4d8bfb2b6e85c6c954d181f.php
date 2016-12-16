<?php

/* ::base.html.twig */
class __TwigTemplate_25a6f18c559a1442343e4bc913b1c129940aa8873bce27f41bf1723b36eba656 extends Twig_Template
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
        echo "        ";
        $this->loadTemplate("::Global/js_onready.html.twig", "::base.html.twig", 8)->display($context);
        // line 9
        echo "       \t";
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
        // line 35
        $this->loadTemplate("::Global/global_js.html.twig", "::base.html.twig", 35)->display($context);
        // line 36
        echo "                ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "                
            </div>
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ParsimonyScore";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 9
    public function block_onready($context, array $blocks = array())
    {
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  119 => 36,  114 => 28,  109 => 9,  104 => 6,  98 => 5,  89 => 37,  86 => 36,  84 => 35,  81 => 34,  79 => 33,  73 => 29,  71 => 28,  64 => 23,  62 => 22,  57 => 19,  55 => 18,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}ParsimonyScore{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        {% include '::Global/global_css.html.twig' %}
        {% include '::Global/js_onready.html.twig' %}
       \t{% block onready %}{% endblock %}
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

                {% include '::Global/global_js.html.twig' %}
                {% block javascripts %}{% endblock %}
                
            </div>
        </div>
    </body>
</html>
";
    }
}
