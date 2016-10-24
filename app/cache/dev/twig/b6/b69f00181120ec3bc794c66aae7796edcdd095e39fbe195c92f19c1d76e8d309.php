<?php

/* AdminBundle:Default:listMessages.html.twig */
class __TwigTemplate_17cdf661df9c7c599a428391551629ce35b243e9df58d0dc3f5ed2b1c12db968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:listMessages.html.twig", 1);
        $this->blocks = array(
            'onready' => array($this, 'block_onready'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bac5364356463cd75f5ccdeec5e72f593f59f4191c749dd2f17aaac7745bafb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac5364356463cd75f5ccdeec5e72f593f59f4191c749dd2f17aaac7745bafb6->enter($__internal_bac5364356463cd75f5ccdeec5e72f593f59f4191c749dd2f17aaac7745bafb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:listMessages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac5364356463cd75f5ccdeec5e72f593f59f4191c749dd2f17aaac7745bafb6->leave($__internal_bac5364356463cd75f5ccdeec5e72f593f59f4191c749dd2f17aaac7745bafb6_prof);

    }

    // line 3
    public function block_onready($context, array $blocks = array())
    {
        $__internal_5b2a22ba39e69d70b26d735783609591d7273d9aaf0bcde8e42a073a3c0e081f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2a22ba39e69d70b26d735783609591d7273d9aaf0bcde8e42a073a3c0e081f->enter($__internal_5b2a22ba39e69d70b26d735783609591d7273d9aaf0bcde8e42a073a3c0e081f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "onready"));

        // line 4
        echo "\t<script>
\t\$( document ).ready(function() {
\t    var table = \$('#table_messages').DataTable({
\t\t\t\"bSort\" : false \t
\t\t});
     
\t\t\$('#table_messages tbody').on('click', 'tr', function () {
\t\t\tvar data = table.row( this ).data();
\t\t\tdocument.location.href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_message");
        echo "?id=\"+this.getAttribute(\"id\").replace(\"id_\",\"\");
\t\t} );
\t});\t
\t</script>
";
        
        $__internal_5b2a22ba39e69d70b26d735783609591d7273d9aaf0bcde8e42a073a3c0e081f->leave($__internal_5b2a22ba39e69d70b26d735783609591d7273d9aaf0bcde8e42a073a3c0e081f_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a996f35a45fc7d42ebe1fed60e908919ce6677ad1194842f01b0cb9c0fa1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a996f35a45fc7d42ebe1fed60e908919ce6677ad1194842f01b0cb9c0fa1da->enter($__internal_75a996f35a45fc7d42ebe1fed60e908919ce6677ad1194842f01b0cb9c0fa1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
<table class=\"table table-striped table-bordered table-hover\" id=\"table_messages\">
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th>Message</th>
\t\t</tr>
\t</thead>
\t<tbody style=\"cursor:pointer\">
\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 32
            echo "\t\t\t<tr id=\"id_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t<td>
\t\t\t\t\t";
            // line 34
            if ( !$this->getAttribute($context["msg"], "seen", array())) {
                // line 35
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/letter_closed.png"), "html", null, true);
                echo "\" width=\"20px\" />
\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/letter_open.png"), "html", null, true);
                echo "\" width=\"20px\" />
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "email", array()), "html", null, true);
            echo "\t\t\t\t
\t\t\t\t</td>
\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "sendDate", array()), "format", array(0 => "d/m/Y H:i"), "method"), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["msg"], "message", array()), 0, 50), "html", null, true);
            echo " 
\t\t\t\t\t";
            // line 44
            if ((twig_length_filter($this->env, $this->getAttribute($context["msg"], "message", array())) > 50)) {
                // line 45
                echo "\t\t\t\t\t\t...
\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</tbody>
</table>

<!-- div to show file content -->
<div id=\"fileContent\" style=\"display:none\"> 
\t<div class=\"col-md-12 col-sm-12 col-xs-12\" >
\t\t<textarea id=\"fileContent_data\" rows=\"10\" class=\"form-control\" target=\"_blank\" readonly>#my_data#</textarea>
\t\t<button type=\"button\" id=\"fileContent_download\" onclick=\"#download#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
\t\t<button type=\"button\" id=\"fileContent_close\" onclick=\"#close#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
\t</div>
</div>\t\t\t\t\t
";
        
        $__internal_75a996f35a45fc7d42ebe1fed60e908919ce6677ad1194842f01b0cb9c0fa1da->leave($__internal_75a996f35a45fc7d42ebe1fed60e908919ce6677ad1194842f01b0cb9c0fa1da_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:listMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  126 => 47,  122 => 45,  120 => 44,  116 => 43,  111 => 41,  105 => 39,  99 => 37,  93 => 35,  91 => 34,  85 => 32,  81 => 31,  69 => 21,  63 => 20,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block onready %}
\t<script>
\t\$( document ).ready(function() {
\t    var table = \$('#table_messages').DataTable({
\t\t\t\"bSort\" : false \t
\t\t});
     
\t\t\$('#table_messages tbody').on('click', 'tr', function () {
\t\t\tvar data = table.row( this ).data();
\t\t\tdocument.location.href=\"{{ path('admin_message') }}?id=\"+this.getAttribute(\"id\").replace(\"id_\",\"\");
\t\t} );
\t});\t
\t</script>
{% endblock %}



{% block body %}

<table class=\"table table-striped table-bordered table-hover\" id=\"table_messages\">
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th>Message</th>
\t\t</tr>
\t</thead>
\t<tbody style=\"cursor:pointer\">
\t\t{% for msg in messages %}
\t\t\t<tr id=\"id_{{ msg.id }}\">
\t\t\t\t<td>
\t\t\t\t\t{% if not msg.seen %}
\t\t\t\t\t\t<img src=\"{{ asset('img/letter_closed.png') }}\" width=\"20px\" />
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<img src=\"{{ asset('img/letter_open.png') }}\" width=\"20px\" />
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ msg.email }}\t\t\t\t
\t\t\t\t</td>
\t\t\t\t<td>{{ msg.sendDate.format(\"d/m/Y H:i\") }}</td>
\t\t\t\t<td>
\t\t\t\t\t{{ msg.message[0:50] }} 
\t\t\t\t\t{% if msg.message|length>50 %}
\t\t\t\t\t\t...
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>

<!-- div to show file content -->
<div id=\"fileContent\" style=\"display:none\"> 
\t<div class=\"col-md-12 col-sm-12 col-xs-12\" >
\t\t<textarea id=\"fileContent_data\" rows=\"10\" class=\"form-control\" target=\"_blank\" readonly>#my_data#</textarea>
\t\t<button type=\"button\" id=\"fileContent_download\" onclick=\"#download#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
\t\t<button type=\"button\" id=\"fileContent_close\" onclick=\"#close#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
\t</div>
</div>\t\t\t\t\t
{% endblock %}
";
    }
}
