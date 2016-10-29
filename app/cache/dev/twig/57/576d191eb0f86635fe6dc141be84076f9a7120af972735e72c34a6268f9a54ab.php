<?php

/* ::modulesUsed/header_options/notification.html.twig */
class __TwigTemplate_da0433110c89fcaee0ccd160b190a0a86a90051d7691d3915002c90cab5d09ca extends Twig_Template
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
        $__internal_0dafd97106601a683bc67b2cae1c318891553282fb923e9e4b09098065d18ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dafd97106601a683bc67b2cae1c318891553282fb923e9e4b09098065d18ef0->enter($__internal_0dafd97106601a683bc67b2cae1c318891553282fb923e9e4b09098065d18ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/header_options/notification.html.twig"));

        // line 1
        echo "<li role=\"presentation\" class=\"dropdown\">
  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
    <i class=\"fa fa-envelope-o\"></i>
    <span class=\"badge bg-green\" id=\"msgCount\"></span>
  </a>
  <ul id=\"msg\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">  
    <li>
      <div class=\"text-center\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_messages");
        echo "\">
          <strong id=\"id_allMsg\">See all messages</strong>
          <i class=\"fa fa-angle-right\"></i>
        </a>
      </div>
    </li>
  </ul>
</li>

<div id=\"msg_example\" style=\"display:none\">
\t<li>
\t\t  <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_message");
        echo "?id=#id#\">
\t\t\t<span class=\"image\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
        echo "#img#\" /></span>
\t\t\t<span>
\t\t\t  <span>#email#</span>
\t\t\t  <span class=\"time\" style=\"font-size:8px;margin-right: -20px;\">#time#</span>
\t\t\t</span>
\t\t\t<span class=\"message\">
\t\t\t\t#message#
\t\t\t</span>
\t\t  </a>
\t</li>
</div>";
        
        $__internal_0dafd97106601a683bc67b2cae1c318891553282fb923e9e4b09098065d18ef0->leave($__internal_0dafd97106601a683bc67b2cae1c318891553282fb923e9e4b09098065d18ef0_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/header_options/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  46 => 20,  32 => 9,  22 => 1,);
    }

    public function getSource()
    {
        return "<li role=\"presentation\" class=\"dropdown\">
  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
    <i class=\"fa fa-envelope-o\"></i>
    <span class=\"badge bg-green\" id=\"msgCount\"></span>
  </a>
  <ul id=\"msg\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">  
    <li>
      <div class=\"text-center\">
        <a href=\"{{ path('admin_messages') }}\">
          <strong id=\"id_allMsg\">See all messages</strong>
          <i class=\"fa fa-angle-right\"></i>
        </a>
      </div>
    </li>
  </ul>
</li>

<div id=\"msg_example\" style=\"display:none\">
\t<li>
\t\t  <a href=\"{{ path('admin_message') }}?id=#id#\">
\t\t\t<span class=\"image\"><img src=\"{{ asset('img/') }}#img#\" /></span>
\t\t\t<span>
\t\t\t  <span>#email#</span>
\t\t\t  <span class=\"time\" style=\"font-size:8px;margin-right: -20px;\">#time#</span>
\t\t\t</span>
\t\t\t<span class=\"message\">
\t\t\t\t#message#
\t\t\t</span>
\t\t  </a>
\t</li>
</div>";
    }
}
