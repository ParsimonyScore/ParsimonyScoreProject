<?php

/* ::modulesUsed/footer.html.twig */
class __TwigTemplate_4ff7a77ac9d0b7e12924e7f0e558acb5821240119a69db43373b6ce01052a96a extends Twig_Template
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
        $__internal_37d8628c7a3ed35827162cf399aaf76510b4dc4c14785ad74faf7944b71d44db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d8628c7a3ed35827162cf399aaf76510b4dc4c14785ad74faf7944b71d44db->enter($__internal_37d8628c7a3ed35827162cf399aaf76510b4dc4c14785ad74faf7944b71d44db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/footer.html.twig"));

        // line 1
        echo "<!-- footer content -->
<footer>
\t";
        // line 3
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == false)) {
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
        
        $__internal_37d8628c7a3ed35827162cf399aaf76510b4dc4c14785ad74faf7944b71d44db->leave($__internal_37d8628c7a3ed35827162cf399aaf76510b4dc4c14785ad74faf7944b71d44db_prof);

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
        return array (  34 => 6,  28 => 4,  26 => 3,  22 => 1,);
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
