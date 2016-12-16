<?php

/* ::modulesUsed/header_options/notification.html.twig */
class __TwigTemplate_4f25d4397c8d49f8bac9ce8f20f0e744a2df7b4da8b032a53f30d3968d826879 extends Twig_Template
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

<li role=\"presentation\" class=\"dropdown\">
  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
    <i class=\"fa fa-bell-o\"></i>
    <span class=\"badge bg-green\" id=\"notifCount\"></span>
  </a>
  <ul id=\"notif\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
    <li>
      <div class=\"text-center\">
          <img  src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bell.gif"), "html", null, true);
        echo "\" width=\"200\" data-toggle=\"tooltip\" title=\"Nothing here\" />
      </div>
    </li>  
  </ul>
</li>

<!-- Message example -->
<div id=\"msg_example\" style=\"display:none\">
\t<li>
\t\t  <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_message");
        echo "?id=#id#\">
\t\t\t<span class=\"image\"><img src=\"";
        // line 36
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
</div>

<!-- Notification example -->
<div id=\"notif_example\" style=\"display:none\">
  <li>
      <a href=\"javascript: updateNotif('";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_notif");
        echo "', #id#)\" id=\"notif_#id#\">
      <span class=\"image\"></span>
      <span>
        <span>#user.email# [<small>#user.username#</small>] </span>
        <span class=\"time\" style=\"font-size:8px;margin-right: -20px;\">#time#</span>
      </span>
      <span class=\"message\">
        #message#
      </span>
      </a>
  </li>
</div>";
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
        return array (  83 => 51,  65 => 36,  61 => 35,  49 => 26,  29 => 9,  19 => 1,);
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

<li role=\"presentation\" class=\"dropdown\">
  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
    <i class=\"fa fa-bell-o\"></i>
    <span class=\"badge bg-green\" id=\"notifCount\"></span>
  </a>
  <ul id=\"notif\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
    <li>
      <div class=\"text-center\">
          <img  src=\"{{ asset('img/bell.gif') }}\" width=\"200\" data-toggle=\"tooltip\" title=\"Nothing here\" />
      </div>
    </li>  
  </ul>
</li>

<!-- Message example -->
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
</div>

<!-- Notification example -->
<div id=\"notif_example\" style=\"display:none\">
  <li>
      <a href=\"javascript: updateNotif('{{ path('admin_notif') }}', #id#)\" id=\"notif_#id#\">
      <span class=\"image\"></span>
      <span>
        <span>#user.email# [<small>#user.username#</small>] </span>
        <span class=\"time\" style=\"font-size:8px;margin-right: -20px;\">#time#</span>
      </span>
      <span class=\"message\">
        #message#
      </span>
      </a>
  </li>
</div>";
    }
}
