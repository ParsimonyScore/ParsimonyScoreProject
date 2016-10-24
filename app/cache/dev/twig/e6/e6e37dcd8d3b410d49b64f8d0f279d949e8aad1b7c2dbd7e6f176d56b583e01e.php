<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8ed456e51c066d656d30258b360396fdf787a62500f7904b2142e83306885109 extends Twig_Template
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
        $__internal_107e9681a4c1e8619fc1b0d724668c57b7c9b22161a777c63b9410aee08159fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107e9681a4c1e8619fc1b0d724668c57b7c9b22161a777c63b9410aee08159fd->enter($__internal_107e9681a4c1e8619fc1b0d724668c57b7c9b22161a777c63b9410aee08159fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107e9681a4c1e8619fc1b0d724668c57b7c9b22161a777c63b9410aee08159fd->leave($__internal_107e9681a4c1e8619fc1b0d724668c57b7c9b22161a777c63b9410aee08159fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_737f14024543b29b1ac926ef50506bcd1d4cf221660f4672d56c6736bfb0a1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737f14024543b29b1ac926ef50506bcd1d4cf221660f4672d56c6736bfb0a1c3->enter($__internal_737f14024543b29b1ac926ef50506bcd1d4cf221660f4672d56c6736bfb0a1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_737f14024543b29b1ac926ef50506bcd1d4cf221660f4672d56c6736bfb0a1c3->leave($__internal_737f14024543b29b1ac926ef50506bcd1d4cf221660f4672d56c6736bfb0a1c3_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1de1f393443f0232f23b954440729d7dc9dc1eb481e5c16261ee43f3d3561c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de1f393443f0232f23b954440729d7dc9dc1eb481e5c16261ee43f3d3561c40->enter($__internal_1de1f393443f0232f23b954440729d7dc9dc1eb481e5c16261ee43f3d3561c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "            ";
        
        $__internal_1de1f393443f0232f23b954440729d7dc9dc1eb481e5c16261ee43f3d3561c40->leave($__internal_1de1f393443f0232f23b954440729d7dc9dc1eb481e5c16261ee43f3d3561c40_prof);

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
