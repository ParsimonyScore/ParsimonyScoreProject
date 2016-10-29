<?php

/* AdminBundle:Default:listScoreTmp.html.twig */
class __TwigTemplate_a6fec821732b783f4cd31d192a9f232e204e9547ef6424f8912d3167efed827a extends Twig_Template
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
        $__internal_f21ed6f99fbe006142d5c8e825c8a3d5681d5ad906545668f300cd1a21197dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21ed6f99fbe006142d5c8e825c8a3d5681d5ad906545668f300cd1a21197dd1->enter($__internal_f21ed6f99fbe006142d5c8e825c8a3d5681d5ad906545668f300cd1a21197dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:listScoreTmp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f21ed6f99fbe006142d5c8e825c8a3d5681d5ad906545668f300cd1a21197dd1->leave($__internal_f21ed6f99fbe006142d5c8e825c8a3d5681d5ad906545668f300cd1a21197dd1_prof);

    }

    // line 3
    public function block_onready($context, array $blocks = array())
    {
        $__internal_e889d31c5cda92997814f6bfba315a30d538cf490b4a48c9c22abffe4550bc4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e889d31c5cda92997814f6bfba315a30d538cf490b4a48c9c22abffe4550bc4b->enter($__internal_e889d31c5cda92997814f6bfba315a30d538cf490b4a48c9c22abffe4550bc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "onready"));

        // line 4
        echo "\t<script>
\t\$( document ).ready(function() {
\t\tscore= new ScoreTmp();
\t\tscore.url= \"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listScoreTmp");
        echo "\";
\t\tscore.url_accept_remove= \"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_accept_score");
        echo "\";
\t\tscore.url_files= \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/data"), "html", null, true);
        echo "\";
\t\tscore.tab= \$('#table_scoreTmp').dataTable({ \"bPaginate\": false });
\t\tscore.getScores();
\t});\t
\t</script>
";
        
        $__internal_e889d31c5cda92997814f6bfba315a30d538cf490b4a48c9c22abffe4550bc4b->leave($__internal_e889d31c5cda92997814f6bfba315a30d538cf490b4a48c9c22abffe4550bc4b_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6683dd49e4357f18179802576e3b1a58f430730f9f5f3507e09d8afd850eb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6683dd49e4357f18179802576e3b1a58f430730f9f5f3507e09d8afd850eb35->enter($__internal_f6683dd49e4357f18179802576e3b1a58f430730f9f5f3507e09d8afd850eb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
<table class=\"table table-striped table-bordered\" id=\"table_scoreTmp\">
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
\t<tbody id=\"scores_tmp\">
\t</tbody>
</table>
<center><img id=\"loading\" src=\"";
        // line 44
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
        
        $__internal_f6683dd49e4357f18179802576e3b1a58f430730f9f5f3507e09d8afd850eb35->leave($__internal_f6683dd49e4357f18179802576e3b1a58f430730f9f5f3507e09d8afd850eb35_prof);

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
        return array (  100 => 44,  73 => 19,  67 => 18,  54 => 9,  50 => 8,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block onready %}
\t<script>
\t\$( document ).ready(function() {
\t\tscore= new ScoreTmp();
\t\tscore.url= \"{{ path('admin_listScoreTmp') }}\";
\t\tscore.url_accept_remove= \"{{ path('admin_accept_score') }}\";
\t\tscore.url_files= \"{{ asset('files/data') }}\";
\t\tscore.tab= \$('#table_scoreTmp').dataTable({ \"bPaginate\": false });
\t\tscore.getScores();
\t});\t
\t</script>
{% endblock %}



{% block body %}

<table class=\"table table-striped table-bordered\" id=\"table_scoreTmp\">
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
\t<tbody id=\"scores_tmp\">
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
