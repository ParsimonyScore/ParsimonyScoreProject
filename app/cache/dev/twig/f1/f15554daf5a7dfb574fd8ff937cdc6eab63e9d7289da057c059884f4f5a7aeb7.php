<?php

/* AdminBundle:Default:list.html.twig */
class __TwigTemplate_0c7e9a81b325337a0414848917c4cf18c799fd750d56b5ff3a8fd5eeff9375c0 extends Twig_Template
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
        $__internal_32f93cae9273197db1ddd56ef6b8eaff000d15c445f83774a8eeef950263e686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f93cae9273197db1ddd56ef6b8eaff000d15c445f83774a8eeef950263e686->enter($__internal_32f93cae9273197db1ddd56ef6b8eaff000d15c445f83774a8eeef950263e686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f93cae9273197db1ddd56ef6b8eaff000d15c445f83774a8eeef950263e686->leave($__internal_32f93cae9273197db1ddd56ef6b8eaff000d15c445f83774a8eeef950263e686_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb9345ee3ba1714f92522bcb8edcf5098859bd7fedbf9e16b1de50c41481520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb9345ee3ba1714f92522bcb8edcf5098859bd7fedbf9e16b1de50c41481520->enter($__internal_7fb9345ee3ba1714f92522bcb8edcf5098859bd7fedbf9e16b1de50c41481520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
          <table>
            <tr>
              <th>name</th>
              <th>email</th>
              <th>Last Login</th>
              <th>file loaded</th>
              <th></th>
            </tr>
            
           ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "              ";
            if (($this->getAttribute($context["user"], "id", array()) != $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array()))) {
                // line 16
                echo "              \t<tr>
          \t\t    <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
          \t\t    <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
          \t\t    <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "m/d/Y"), "html", null, true);
                echo "</td>
          \t\t    <td>  -  </td>
          \t\t    <td><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_remove", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">remove</a></td>
          \t\t</tr>
          \t";
            }
            // line 24
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
          </table>
";
        
        $__internal_7fb9345ee3ba1714f92522bcb8edcf5098859bd7fedbf9e16b1de50c41481520->leave($__internal_7fb9345ee3ba1714f92522bcb8edcf5098859bd7fedbf9e16b1de50c41481520_prof);

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
        return array (  87 => 25,  81 => 24,  75 => 21,  70 => 19,  66 => 18,  62 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
