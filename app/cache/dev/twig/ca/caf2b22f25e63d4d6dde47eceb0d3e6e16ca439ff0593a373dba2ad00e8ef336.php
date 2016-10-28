<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e2ca3790ce9deedfca8669554a12e8ea0c8a987893c7303d074ec2e8701a50e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d582e91339a0a8a6b7930d1f310f6987c4ad2de0276a346bcbf93ec150885c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d582e91339a0a8a6b7930d1f310f6987c4ad2de0276a346bcbf93ec150885c21->enter($__internal_d582e91339a0a8a6b7930d1f310f6987c4ad2de0276a346bcbf93ec150885c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d582e91339a0a8a6b7930d1f310f6987c4ad2de0276a346bcbf93ec150885c21->leave($__internal_d582e91339a0a8a6b7930d1f310f6987c4ad2de0276a346bcbf93ec150885c21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d54d280e89dab99b470cb5777f3671287b02a2f8c6a82ce1674d48374add30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d54d280e89dab99b470cb5777f3671287b02a2f8c6a82ce1674d48374add30f->enter($__internal_0d54d280e89dab99b470cb5777f3671287b02a2f8c6a82ce1674d48374add30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        // line 13
        echo "
        <div>
            ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "        </div>
";
        
        $__internal_0d54d280e89dab99b470cb5777f3671287b02a2f8c6a82ce1674d48374add30f->leave($__internal_0d54d280e89dab99b470cb5777f3671287b02a2f8c6a82ce1674d48374add30f_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4908a3caaac53848ebb95805c8990384056d463116ca7232f0afa739c4f5d522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4908a3caaac53848ebb95805c8990384056d463116ca7232f0afa739c4f5d522->enter($__internal_4908a3caaac53848ebb95805c8990384056d463116ca7232f0afa739c4f5d522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "            ";
        
        $__internal_4908a3caaac53848ebb95805c8990384056d463116ca7232f0afa739c4f5d522->leave($__internal_4908a3caaac53848ebb95805c8990384056d463116ca7232f0afa739c4f5d522_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  91 => 15,  83 => 17,  81 => 15,  77 => 13,  74 => 12,  68 => 11,  59 => 8,  54 => 7,  49 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block body %}
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock %}
";
    }
}
