<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_ba310d998455f49270a4090663220f8a312a4933ccbcdd698790d6be7ce983c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e50fc7a318e960f24c192635e74e862cab92490faaebc237754ffd2959497a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50fc7a318e960f24c192635e74e862cab92490faaebc237754ffd2959497a9d->enter($__internal_e50fc7a318e960f24c192635e74e862cab92490faaebc237754ffd2959497a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<div>
  <a class=\"hiddenanchor\" id=\"signup\"></a>
  <a class=\"hiddenanchor\" id=\"signin\"></a>

     
  <div class=\"login_wrapper\" style=\"margin-top:0%\">
    <div class=\"animate form login_form\">
      <section class=\"login_content\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <p>";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        

        <form id=\"loginForm\" action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 23
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 24
            echo "                <input id=\"loginForm_title\" type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 26
        echo "
            <label for=\"username\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

            <label for=\"password\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            <div align=\"left\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label id=\"loginForm_keep\" for=\"remember_me\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <div align=\"center\">
                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"clearfix\"></div>
            <div>
              <h1><i class=\"fa fa-tree\"></i> <span>ParsimonyScore</span><br/>
              <p id=\"id_footer\" style=\"font-size: 12pt;margin-top: 6px;\"></p>
            </div>
        </form>
      </section>
    </div>
  </div>

</div>
 ";
        
        $__internal_e50fc7a318e960f24c192635e74e862cab92490faaebc237754ffd2959497a9d->leave($__internal_e50fc7a318e960f24c192635e74e862cab92490faaebc237754ffd2959497a9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  95 => 34,  88 => 30,  83 => 28,  79 => 27,  76 => 26,  70 => 24,  68 => 23,  64 => 22,  60 => 20,  51 => 17,  48 => 16,  44 => 15,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div>
  <a class=\"hiddenanchor\" id=\"signup\"></a>
  <a class=\"hiddenanchor\" id=\"signin\"></a>

     
  <div class=\"login_wrapper\" style=\"margin-top:0%\">
    <div class=\"animate form login_form\">
      <section class=\"login_content\">
        {% for message in app.session.flashbag.get('error') %}
            <div class=\"alert alert-danger alert-dismissable\">
                <p>{{ message }}</p>
            </div>
        {% endfor %}
        

        <form id=\"loginForm\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input id=\"loginForm_title\" type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}

            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

            <label for=\"password\">{{ 'security.login.password'|trans }}</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            <div align=\"left\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label id=\"loginForm_keep\" for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </div>
            <div align=\"center\">
                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
            </div>
            <div class=\"clearfix\"></div>
            <div>
              <h1><i class=\"fa fa-tree\"></i> <span>ParsimonyScore</span><br/>
              <p id=\"id_footer\" style=\"font-size: 12pt;margin-top: 6px;\"></p>
            </div>
        </form>
      </section>
    </div>
  </div>

</div>
 ";
    }
}
