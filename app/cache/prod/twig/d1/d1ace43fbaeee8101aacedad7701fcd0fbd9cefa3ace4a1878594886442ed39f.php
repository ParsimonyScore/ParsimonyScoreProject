<?php

/* AdminBundle:Default:list.html.twig */
class __TwigTemplate_e01e559825e68f2b789189351b3d0597b0a171d3bbc1de8ba72073df8e7d49ef extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"row\" id=\"users\">
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2 id=\"users_title\"></h2> 
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <table class=\"table table-striped table-bordered\" id=\"table_users\">
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            
           ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "              ";
            if (($this->getAttribute($context["user"], "id", array()) != $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array()))) {
                // line 26
                echo "              \t<tr>
          \t\t    <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
          \t\t    <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
          \t\t    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "m/d/Y"), "html", null, true);
                echo "</td>
          \t\t    <td>  -  </td>
          \t\t    <td><center><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_remove", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"><span class=\"fa fa-times\"></span></a></center></td>
          \t\t</tr>
          \t";
            }
            // line 34
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
          </table>
        </div>
    </div>
  </div>
</div>

";
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
        return array (  86 => 35,  80 => 34,  74 => 31,  69 => 29,  65 => 28,  61 => 27,  58 => 26,  55 => 25,  51 => 24,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}



{% block body %}

<div class=\"row\" id=\"users\">
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2 id=\"users_title\"></h2> 
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <table class=\"table table-striped table-bordered\" id=\"table_users\">
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            
           {%  for user in users %}
              {% if user.id != admin.id %}
              \t<tr>
          \t\t    <td>{{user.username}}</td>
          \t\t    <td>{{user.email}}</td>
          \t\t    <td>{{user.lastLogin |date(\"m/d/Y\")}}</td>
          \t\t    <td>  -  </td>
          \t\t    <td><center><a href=\"{{ path ('admin_admin_remove', {'id' : user.id }) }}\"><span class=\"fa fa-times\"></span></a></center></td>
          \t\t</tr>
          \t{% endif %}
           {% endfor %}

          </table>
        </div>
    </div>
  </div>
</div>

{% endblock %}
";
    }
}
