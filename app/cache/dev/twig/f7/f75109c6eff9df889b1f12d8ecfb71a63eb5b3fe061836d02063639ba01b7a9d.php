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
        $__internal_8bb0861f45fe25d8b49abd0c84097b1c559f56dafebc2f0926e75d31db68748a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb0861f45fe25d8b49abd0c84097b1c559f56dafebc2f0926e75d31db68748a->enter($__internal_8bb0861f45fe25d8b49abd0c84097b1c559f56dafebc2f0926e75d31db68748a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        
\t\t";
        // line 10
        $this->displayBlock('onready', $context, $blocks);
        // line 11
        echo "    </head>
    
    <body class=\"nav-md\">
        <div class=\"container body\">
            <div class=\"main_container\">
                
                <div class=\"col-md-3 left_col\">
                    <div class=\"left_col scroll-view\">
                        ";
        // line 19
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "::base.html.twig", 19)->display($context);
        // line 20
        echo "                    </div>
                </div>
                
                ";
        // line 23
        $this->loadTemplate("::modulesUsed/header.html.twig", "::base.html.twig", 23)->display($context);
        // line 24
        echo "                
                <div class=\"right_col\" role=\"main\">
                  <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"x_panel\">
                            ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "                        </div>
                    </div>
                  </div>
                </div>
                ";
        // line 34
        $this->loadTemplate("::modulesUsed/footer.html.twig", "::base.html.twig", 34)->display($context);
        // line 35
        echo "
                ";
        // line 36
        $this->loadTemplate("::Global/global_js.html.twig", "::base.html.twig", 36)->display($context);
        // line 37
        echo "                ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "                
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_8bb0861f45fe25d8b49abd0c84097b1c559f56dafebc2f0926e75d31db68748a->leave($__internal_8bb0861f45fe25d8b49abd0c84097b1c559f56dafebc2f0926e75d31db68748a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e430280329ee25e3104a595e64c8e28e9a4e4ef3595f973b4dd52408497a816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e430280329ee25e3104a595e64c8e28e9a4e4ef3595f973b4dd52408497a816->enter($__internal_8e430280329ee25e3104a595e64c8e28e9a4e4ef3595f973b4dd52408497a816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8e430280329ee25e3104a595e64c8e28e9a4e4ef3595f973b4dd52408497a816->leave($__internal_8e430280329ee25e3104a595e64c8e28e9a4e4ef3595f973b4dd52408497a816_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb83bd7b924d0fe3a255df1f4ec2d45c9bbe70587672c30456d9a5029b4f1cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb83bd7b924d0fe3a255df1f4ec2d45c9bbe70587672c30456d9a5029b4f1cfb->enter($__internal_eb83bd7b924d0fe3a255df1f4ec2d45c9bbe70587672c30456d9a5029b4f1cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eb83bd7b924d0fe3a255df1f4ec2d45c9bbe70587672c30456d9a5029b4f1cfb->leave($__internal_eb83bd7b924d0fe3a255df1f4ec2d45c9bbe70587672c30456d9a5029b4f1cfb_prof);

    }

    // line 10
    public function block_onready($context, array $blocks = array())
    {
        $__internal_6f49978fb7746232d811386f8b6528b8afc47876aeadd1bd72d0e4f397197369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f49978fb7746232d811386f8b6528b8afc47876aeadd1bd72d0e4f397197369->enter($__internal_6f49978fb7746232d811386f8b6528b8afc47876aeadd1bd72d0e4f397197369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "onready"));

        
        $__internal_6f49978fb7746232d811386f8b6528b8afc47876aeadd1bd72d0e4f397197369->leave($__internal_6f49978fb7746232d811386f8b6528b8afc47876aeadd1bd72d0e4f397197369_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_83d802aa7cb1504eebc49aa7b5812ea6a9532b6ab9fb1382e960278310f76efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d802aa7cb1504eebc49aa7b5812ea6a9532b6ab9fb1382e960278310f76efe->enter($__internal_83d802aa7cb1504eebc49aa7b5812ea6a9532b6ab9fb1382e960278310f76efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83d802aa7cb1504eebc49aa7b5812ea6a9532b6ab9fb1382e960278310f76efe->leave($__internal_83d802aa7cb1504eebc49aa7b5812ea6a9532b6ab9fb1382e960278310f76efe_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_900f398fd29c94661b69dd6cbcb5af00fbd81d6d80527e59a91391f096a86667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900f398fd29c94661b69dd6cbcb5af00fbd81d6d80527e59a91391f096a86667->enter($__internal_900f398fd29c94661b69dd6cbcb5af00fbd81d6d80527e59a91391f096a86667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_900f398fd29c94661b69dd6cbcb5af00fbd81d6d80527e59a91391f096a86667->leave($__internal_900f398fd29c94661b69dd6cbcb5af00fbd81d6d80527e59a91391f096a86667_prof);

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
        return array (  150 => 37,  139 => 29,  128 => 10,  117 => 6,  106 => 5,  94 => 38,  91 => 37,  89 => 36,  86 => 35,  84 => 34,  78 => 30,  76 => 29,  69 => 24,  67 => 23,  62 => 20,  60 => 19,  50 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
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

                {% include '::Global/global_js.html.twig' %}
                {% block javascripts %}{% endblock %}
                
            </div>
        </div>
    </body>
</html>
";
    }
}
