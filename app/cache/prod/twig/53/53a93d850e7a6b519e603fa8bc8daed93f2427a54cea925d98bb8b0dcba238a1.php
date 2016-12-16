<?php

/* AdminBundle:Default:listScoreTmp.html.twig */
class __TwigTemplate_7b42742f0ad638aebd1ad4136ad17e91285666c1904e95b11173b7ad8d6d5c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:listScoreTmp.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_onready($context, array $blocks = array())
    {
        // line 4
        echo "\t<script>
\t\$( document ).ready(function() {
\t\tscore= new Score();
\t\tscore.isScoreTMP=true;
\t\tscore.url= \"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listScoreTmp");
        echo "\";
\t\tscore.url_accept_remove= \"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_accept_score");
        echo "\";
\t\tscore.url_files= \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/data"), "html", null, true);
        echo "\";
\t\tscore.tab= \$('#table_score').dataTable({ \"bPaginate\": false });
\t\tscore.getScores();
\t});\t
\t</script>
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "
<table class=\"table table-striped table-bordered\" id=\"table_score\">
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th>Option</th>
\t\t</tr>
\t</thead>
\t<tbody id=\"scores\">
\t</tbody>
</table>
<center><img id=\"loading\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/lod.gif"), "html", null, true);
        echo "\" width=\"150\" /></center>

<!-- div to show file content -->
<div id=\"fileContent\" style=\"display:none\"> 
\t<div class=\"col-md-12 col-sm-12 col-xs-12\" >
\t\t<textarea id=\"fileContent_data\" rows=\"10\" class=\"form-control\" target=\"_blank\" readonly>#my_data#</textarea>
\t\t<button type=\"button\" id=\"fileContent_download\" onclick=\"#download#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
\t\t<button type=\"button\" id=\"fileContent_close\" onclick=\"#close#\" class=\"btn btn-primary\" style=\"margin-top:5px\"></button>
\t</div>
</div>\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:listScoreTmp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 45,  59 => 20,  56 => 19,  46 => 10,  42 => 9,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block onready %}
\t<script>
\t\$( document ).ready(function() {
\t\tscore= new Score();
\t\tscore.isScoreTMP=true;
\t\tscore.url= \"{{ path('admin_listScoreTmp') }}\";
\t\tscore.url_accept_remove= \"{{ path('admin_accept_score') }}\";
\t\tscore.url_files= \"{{ asset('files/data') }}\";
\t\tscore.tab= \$('#table_score').dataTable({ \"bPaginate\": false });
\t\tscore.getScores();
\t});\t
\t</script>
{% endblock %}



{% block body %}

<table class=\"table table-striped table-bordered\" id=\"table_score\">
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t\t<th>Option</th>
\t\t</tr>
\t</thead>
\t<tbody id=\"scores\">
\t</tbody>
</table>
<center><img id=\"loading\" src=\"{{ asset('img/lod.gif') }}\" width=\"150\" /></center>

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
