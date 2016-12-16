<?php

/* ::modulesUsed/footer.html.twig */
class __TwigTemplate_fd8319b665d4da5da09cc15a6a4d7e929c5ff03a6e74de3e6ceb31c388928047 extends Twig_Template
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
        // line 1
        echo "<!-- footer content -->
<footer>
\t";
        // line 3
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == false)) {
            // line 4
            echo "  \t\t<a id=\"id_cnx\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" style=\"font-size: 8pt;\" > Connexion </a>
\t";
        }
        // line 6
        echo "
  <div class=\"pull-right\" id=\"id_footer\"> 
  </div>
  <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->
";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<!-- footer content -->
<footer>
\t{% if app.user == false  %}
  \t\t<a id=\"id_cnx\" href=\"{{ path('fos_user_security_login') }}\" style=\"font-size: 8pt;\" > Connexion </a>
\t{% endif %}

  <div class=\"pull-right\" id=\"id_footer\"> 
  </div>
  <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->
";
    }
}
