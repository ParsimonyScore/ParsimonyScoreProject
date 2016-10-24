<?php

/* ::Global/js_onready.html.twig */
class __TwigTemplate_35855b25585b67bea4fc6dce2d64ed06115087e4c9aaf628abbde7fd66b794fb extends Twig_Template
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
        $__internal_2430fbb4f415351cbc5a8e081be4b89fe0f1e6d54d369ff74f75f989202018a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2430fbb4f415351cbc5a8e081be4b89fe0f1e6d54d369ff74f75f989202018a0->enter($__internal_2430fbb4f415351cbc5a8e081be4b89fe0f1e6d54d369ff74f75f989202018a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Global/js_onready.html.twig"));

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
        // line 14
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 15
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 17
        echo "<script>
\t\$( document ).ready(function() {
\t\tapply_lang();
\t\t";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "\t\t\tgetMessagesNotSeen(\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_messages");
            echo "\");
\t\t";
        }
        // line 23
        echo "\t});\t
</script>";
        
        $__internal_2430fbb4f415351cbc5a8e081be4b89fe0f1e6d54d369ff74f75f989202018a0->leave($__internal_2430fbb4f415351cbc5a8e081be4b89fe0f1e6d54d369ff74f75f989202018a0_prof);

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
        return array (  89 => 23,  83 => 21,  81 => 20,  76 => 17,  70 => 15,  68 => 14,  64 => 13,  59 => 12,  53 => 10,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  31 => 3,  27 => 2,  22 => 1,);
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
\t});\t
</script>";
    }
}
