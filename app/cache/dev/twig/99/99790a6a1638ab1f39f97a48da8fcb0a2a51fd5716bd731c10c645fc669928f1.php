<?php

/* ::Global/js_onready.html.twig */
class __TwigTemplate_c8605f248849e6606e3fe5ef257a34add612fdb9537d131210659e509ad41c8c extends Twig_Template
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
        $__internal_8c23e7fb334358e2d302f373baa04989528d5d77b9610c609967dbb729736503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c23e7fb334358e2d302f373baa04989528d5d77b9610c609967dbb729736503->enter($__internal_8c23e7fb334358e2d302f373baa04989528d5d77b9610c609967dbb729736503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Global/js_onready.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>  

";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "ParsimonyScore_lang"), "method") != null)) {
            echo "        
\t<script src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("js/lang/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "ParsimonyScore_lang"), "method")) . ".js")), "html", null, true);
            echo "\"></script>
";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "ParsimonyScore_lang"), "method")) {
            echo " 
\t<script src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("js/lang/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "ParsimonyScore_lang"), "method")) . ".js")), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 10
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lang/FR.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lang/apply_lang.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>


";
        // line 16
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 17
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 19
        echo "<script>
\t\$( document ).ready(function() {
\t\tapply_lang();
\t\t";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "\t\t\tgetMessagesNotSeen(\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_messages");
            echo "\");
\t\t";
        }
        // line 25
        echo "        
        \$('.file_style').jfilestyle({
            buttonText : 'Inserez votre fichier',
            //inputSize : '100px'
        });
\t});\t
</script>

<!-- Input file -->
 <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileStyle/jquery-filestyle.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileStyle/jquery-filestyle.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8c23e7fb334358e2d302f373baa04989528d5d77b9610c609967dbb729736503->leave($__internal_8c23e7fb334358e2d302f373baa04989528d5d77b9610c609967dbb729736503_prof);

    }

    public function getTemplateName()
    {
        return "::Global/js_onready.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  102 => 34,  91 => 25,  85 => 23,  83 => 22,  78 => 19,  72 => 17,  70 => 16,  64 => 13,  59 => 12,  53 => 10,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  31 => 3,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<script src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.min.js') }}\"></script> 
<script src=\"{{ asset('js/jquery-ui.min.js') }}\"></script>  

{% if  app.session.get('ParsimonyScore_lang') != null %}        
\t<script src=\"{{ asset('js/lang/'~app.session.get('ParsimonyScore_lang')~'.js') }}\"></script>
{% elseif app.request.cookies.has('ParsimonyScore_lang')%} 
\t<script src=\"{{ asset('js/lang/'~app.request.cookies.get('ParsimonyScore_lang')~'.js') }}\"></script>
{% else %}
\t<script src=\"{{ asset('js/lang/FR.js') }}\"></script>
{% endif %}
<script src=\"{{ asset('js/lang/apply_lang.js') }}\"></script>
<script src=\"{{ asset('js/script.js') }}\"></script>


{% if app.user   %}
\t<script src=\"{{ asset('js/admin.js') }}\"></script>
{% endif %}
<script>
\t\$( document ).ready(function() {
\t\tapply_lang();
\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\tgetMessagesNotSeen(\"{{ path('admin_messages') }}\");
\t\t{% endif %}
        
        \$('.file_style').jfilestyle({
            buttonText : 'Inserez votre fichier',
            //inputSize : '100px'
        });
\t});\t
</script>

<!-- Input file -->
 <script src=\"{{ asset('js/fileStyle/jquery-filestyle.js') }}\"></script>
 <script src=\"{{ asset('js/fileStyle/jquery-filestyle.min.js') }}\"></script>
";
    }
}
