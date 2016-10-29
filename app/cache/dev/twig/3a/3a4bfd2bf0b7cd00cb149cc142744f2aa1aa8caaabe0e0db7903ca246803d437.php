<?php

/* AdminBundle:Default:list.html.twig */
class __TwigTemplate_2d85f73753c8f47232141820744479a8a906e60a9c8ef7751375470bfefbe023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:list.html.twig", 1);
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
        $__internal_d9832e03372f33e8658f7064b634e195d1ec1258e4336e8677af60e5609ffc31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9832e03372f33e8658f7064b634e195d1ec1258e4336e8677af60e5609ffc31->enter($__internal_d9832e03372f33e8658f7064b634e195d1ec1258e4336e8677af60e5609ffc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9832e03372f33e8658f7064b634e195d1ec1258e4336e8677af60e5609ffc31->leave($__internal_d9832e03372f33e8658f7064b634e195d1ec1258e4336e8677af60e5609ffc31_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6b9436f868f86df1aad953911e8a4bd82896b879518d3b4340945564c5578b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b9436f868f86df1aad953911e8a4bd82896b879518d3b4340945564c5578b4->enter($__internal_b6b9436f868f86df1aad953911e8a4bd82896b879518d3b4340945564c5578b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "          <table>
            <tr>
              <th>name</th>
              <th>email</th>
              <th>Last Login</th>
              <th>file loaded</th>
              <th></th>
            </tr>
            
           ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "              ";
            if (($this->getAttribute($context["user"], "id", array()) != $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array()))) {
                // line 17
                echo "              \t<tr>
          \t\t    <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
          \t\t    <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
          \t\t    <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "m/d/Y"), "html", null, true);
                echo "</td>
          \t\t    <td>  -  </td>
          \t\t    <td><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_remove", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">remove</a></td>
          \t\t</tr>
          \t";
            }
            // line 25
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
          </table>
";
        
        $__internal_b6b9436f868f86df1aad953911e8a4bd82896b879518d3b4340945564c5578b4->leave($__internal_b6b9436f868f86df1aad953911e8a4bd82896b879518d3b4340945564c5578b4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  80 => 25,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  55 => 16,  51 => 15,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}



{% block body %}
          <table>
            <tr>
              <th>name</th>
              <th>email</th>
              <th>Last Login</th>
              <th>file loaded</th>
              <th></th>
            </tr>
            
           {%  for user in users %}
              {% if user.id != admin.id %}
              \t<tr>
          \t\t    <td>{{user.username}}</td>
          \t\t    <td>{{user.email}}</td>
          \t\t    <td>{{user.lastLogin |date(\"m/d/Y\")}}</td>
          \t\t    <td>  -  </td>
          \t\t    <td><a href=\"{{ path ('admin_admin_remove', {'id' : user.id }) }}\">remove</a></td>
          \t\t</tr>
          \t{% endif %}
           {% endfor %}

          </table>
{% endblock %}
";
    }
}
