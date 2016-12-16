<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_089bfd4921d2cc3a1f936156c3c0a999435972a88dc3ac02ea03979ffd31b3b5 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
  <a class=\"hiddenanchor\" id=\"signup\"></a>
  <a class=\"hiddenanchor\" id=\"signin\"></a>

     
  <div class=\"login_wrapper\" style=\"margin-top:0%\">
    <div class=\"animate form login_form\">
      <section class=\"login_content\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <p>";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        

        <form id=\"loginForm\" action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <h1 id=\"loginForm_title\"></h1>
            ";
        // line 23
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
            // line 24
            echo "                <input id=\"loginForm_title\" type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\" />
            ";
        }
        // line 26
        echo "
            <label for=\"username\" id=\"loginForm_username\"></label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

            <label for=\"password\" id=\"loginForm_password\"></label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            <div align=\"left\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label id=\"loginForm_keep\" for=\"remember_me\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <div align=\"center\">
                <input type=\"submit\" class=\"btn btn-default submit\"  id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
            <div align=\"center\">
                <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" ><i class=\"fa fa-external-link-square\" id=\"loginForm_nopass\"> oublié</i></a>
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

 ";
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
        return array (  98 => 40,  92 => 37,  86 => 34,  77 => 28,  73 => 26,  67 => 24,  65 => 23,  60 => 21,  56 => 19,  47 => 16,  44 => 15,  40 => 14,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

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
            <h1 id=\"loginForm_title\"></h1>
            {% if csrf_token %}
                <input id=\"loginForm_title\" type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}

            <label for=\"username\" id=\"loginForm_username\"></label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

            <label for=\"password\" id=\"loginForm_password\"></label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            <div align=\"left\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label id=\"loginForm_keep\" for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </div>
            <div align=\"center\">
                <input type=\"submit\" class=\"btn btn-default submit\"  id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
            </div>
            <div align=\"center\">
                <a href=\"{{ path('fos_user_resetting_request') }}\" ><i class=\"fa fa-external-link-square\" id=\"loginForm_nopass\"> oublié</i></a>
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

 ";
    }
}
