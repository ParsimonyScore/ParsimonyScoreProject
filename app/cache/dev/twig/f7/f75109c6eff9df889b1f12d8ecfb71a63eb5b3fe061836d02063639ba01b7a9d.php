<?php

/* ::base.html.twig */
class __TwigTemplate_4d7da26bd5c86850548707f824251fd0f146ce6d89e206c8186f210c0361e379 extends Twig_Template
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
        $__internal_b0582372bb10e94cd64a8447279b194a95b95ba5240b1832bd905690a4bb972b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0582372bb10e94cd64a8447279b194a95b95ba5240b1832bd905690a4bb972b->enter($__internal_b0582372bb10e94cd64a8447279b194a95b95ba5240b1832bd905690a4bb972b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b0582372bb10e94cd64a8447279b194a95b95ba5240b1832bd905690a4bb972b->leave($__internal_b0582372bb10e94cd64a8447279b194a95b95ba5240b1832bd905690a4bb972b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e127f88d3177981477b7972f484431b8c3d113fec1ea7c887c966d3141537223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e127f88d3177981477b7972f484431b8c3d113fec1ea7c887c966d3141537223->enter($__internal_e127f88d3177981477b7972f484431b8c3d113fec1ea7c887c966d3141537223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e127f88d3177981477b7972f484431b8c3d113fec1ea7c887c966d3141537223->leave($__internal_e127f88d3177981477b7972f484431b8c3d113fec1ea7c887c966d3141537223_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e6f7ee37f67fc93aab7244b7c57fdf683fa038eabf8646304ca4271eb0debab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6f7ee37f67fc93aab7244b7c57fdf683fa038eabf8646304ca4271eb0debab->enter($__internal_7e6f7ee37f67fc93aab7244b7c57fdf683fa038eabf8646304ca4271eb0debab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7e6f7ee37f67fc93aab7244b7c57fdf683fa038eabf8646304ca4271eb0debab->leave($__internal_7e6f7ee37f67fc93aab7244b7c57fdf683fa038eabf8646304ca4271eb0debab_prof);

    }

    // line 9
    public function block_onready($context, array $blocks = array())
    {
        $__internal_705a05ac6eb16a552758d2f5cd41d5804624baf3e1ab2f833985e9161f892472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705a05ac6eb16a552758d2f5cd41d5804624baf3e1ab2f833985e9161f892472->enter($__internal_705a05ac6eb16a552758d2f5cd41d5804624baf3e1ab2f833985e9161f892472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "onready"));

        
        $__internal_705a05ac6eb16a552758d2f5cd41d5804624baf3e1ab2f833985e9161f892472->leave($__internal_705a05ac6eb16a552758d2f5cd41d5804624baf3e1ab2f833985e9161f892472_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_fabb9f4f681dd9b4eca7a7ae1576cbf37b8906a34a15c4ddc3927bfd67603ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabb9f4f681dd9b4eca7a7ae1576cbf37b8906a34a15c4ddc3927bfd67603ba6->enter($__internal_fabb9f4f681dd9b4eca7a7ae1576cbf37b8906a34a15c4ddc3927bfd67603ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fabb9f4f681dd9b4eca7a7ae1576cbf37b8906a34a15c4ddc3927bfd67603ba6->leave($__internal_fabb9f4f681dd9b4eca7a7ae1576cbf37b8906a34a15c4ddc3927bfd67603ba6_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28e343302194eadcf493db99077f60744caffa1adf475df6d0426f66f8b2e752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e343302194eadcf493db99077f60744caffa1adf475df6d0426f66f8b2e752->enter($__internal_28e343302194eadcf493db99077f60744caffa1adf475df6d0426f66f8b2e752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_28e343302194eadcf493db99077f60744caffa1adf475df6d0426f66f8b2e752->leave($__internal_28e343302194eadcf493db99077f60744caffa1adf475df6d0426f66f8b2e752_prof);

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
        return array (  148 => 36,  137 => 28,  126 => 9,  115 => 6,  104 => 5,  92 => 37,  89 => 36,  87 => 35,  84 => 34,  82 => 33,  76 => 29,  74 => 28,  67 => 23,  65 => 22,  60 => 19,  58 => 18,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
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
