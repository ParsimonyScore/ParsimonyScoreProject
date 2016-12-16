<?php

/* ::Global/js_onready.html.twig */
class __TwigTemplate_84d60d200ddcd72221fa81219f1b62970e2c17798d3898cebfa7352f12ecc154 extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "ParsimonyScore_lang"), "method") != null)) {
            echo "        
\t<script src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("js/lang/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "ParsimonyScore_lang"), "method")) . ".js")), "html", null, true);
            echo "\"></script>
";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "has", array(0 => "ParsimonyScore_lang"), "method")) {
            echo " 
\t<script src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("js/lang/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "ParsimonyScore_lang"), "method")) . ".js")), "html", null, true);
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
\t\t\tgetNotificationsNotSeen(\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_notif");
            echo "\");
\t\t";
        }
        // line 26
        echo "        
        \$('.file_style').jfilestyle({
            buttonText : 'Inserez votre fichier',
            //inputSize : '100px'
        });
\t});\t
</script>

<!-- Input file -->
 <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileStyle/jquery-filestyle.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileStyle/jquery-filestyle.min.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  107 => 36,  103 => 35,  92 => 26,  87 => 24,  82 => 23,  80 => 22,  75 => 19,  69 => 17,  67 => 16,  61 => 13,  56 => 12,  50 => 10,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
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
\t\t\tgetNotificationsNotSeen(\"{{ path('admin_notif') }}\");
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
