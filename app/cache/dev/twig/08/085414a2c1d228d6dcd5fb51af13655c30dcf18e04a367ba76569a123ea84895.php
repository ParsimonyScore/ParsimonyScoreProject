<?php

/* ::Global/global_js.html.twig */
class __TwigTemplate_4ace437dfa2b9cb4b29a2e316bb5b995ece521804487966aaf61c0377e10bcfe extends Twig_Template
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
        $__internal_c1a50a6a0bbef93aea1a71a417b9cddc7376603fada220b94ed0ee7fe1d105f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a50a6a0bbef93aea1a71a417b9cddc7376603fada220b94ed0ee7fe1d105f4->enter($__internal_c1a50a6a0bbef93aea1a71a417b9cddc7376603fada220b94ed0ee7fe1d105f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Global/global_js.html.twig"));

        // line 1
        echo "<!-- Global JS Files -->

        <!-- Bootstrap -->
        <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- NProgress -->
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
        <!-- Chart.js -->
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <!-- gauge.js -->
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-progressbar -->
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Skycons -->
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot -->
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot plugins -->
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot/date.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot/curvedLines.js"), "html", null, true);
        echo "\"></script>
        <!-- jVectorMap -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/maps/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-daterangepicker -->
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom Theme Scripts -->
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Datatables -->
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        
      

";
        
        $__internal_c1a50a6a0bbef93aea1a71a417b9cddc7376603fada220b94ed0ee7fe1d105f4->leave($__internal_c1a50a6a0bbef93aea1a71a417b9cddc7376603fada220b94ed0ee7fe1d105f4_prof);

    }

    public function getTemplateName()
    {
        return "::Global/global_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 52,  176 => 51,  172 => 50,  168 => 49,  164 => 48,  160 => 47,  156 => 46,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  119 => 36,  114 => 34,  110 => 33,  105 => 31,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  62 => 18,  57 => 16,  52 => 14,  47 => 12,  42 => 10,  37 => 8,  32 => 6,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- Global JS Files -->

        <!-- Bootstrap -->
        <script src=\"{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
        <!-- FastClick -->
        <script src=\"{{ asset('vendors/fastclick/lib/fastclick.js') }}\"></script>
        <!-- NProgress -->
        <script src=\"{{ asset('vendors/nprogress/nprogress.js') }}\"></script>
        <!-- Chart.js -->
        <script src=\"{{ asset('vendors/Chart.js/dist/Chart.min.js') }}\"></script>
        <!-- gauge.js -->
        <script src=\"{{ asset('vendors/gauge.js/dist/gauge.min.js') }}\"></script>
        <!-- bootstrap-progressbar -->
        <script src=\"{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
        <!-- iCheck -->
        <script src=\"{{ asset('vendors/iCheck/icheck.min.js') }}\"></script>
        <!-- Skycons -->
        <script src=\"{{ asset('vendors/skycons/skycons.js') }}\"></script>
        <!-- Flot -->
        <script src=\"{{ asset('vendors/Flot/jquery.flot.js') }}\"></script>
        <script src=\"{{ asset('vendors/Flot/jquery.flot.pie.js') }}\"></script>
        <script src=\"{{ asset('vendors/Flot/jquery.flot.time.js') }}\"></script>
        <script src=\"{{ asset('vendors/Flot/jquery.flot.stack.js') }}\"></script>
        <script src=\"{{ asset('vendors/Flot/jquery.flot.resize.js') }}\"></script>
        <!-- Flot plugins -->
        <script src=\"{{ asset('js/flot/jquery.flot.orderBars.js') }}\"></script>
        <script src=\"{{ asset('js/flot/date.js') }}\"></script>
        <script src=\"{{ asset('js/flot/jquery.flot.spline.js') }}\"></script>
        <script src=\"{{ asset('js/flot/curvedLines.js') }}\"></script>
        <!-- jVectorMap -->
        <script src=\"{{ asset('js/maps/jquery-jvectormap-2.0.3.min.js') }}\"></script>
        <!-- bootstrap-daterangepicker -->
        <script src=\"{{ asset('js/moment/moment.min.js') }}\"></script>
        <script src=\"{{ asset('js/datepicker/daterangepicker.js') }}\"></script>
        <!-- Custom Theme Scripts -->
        <script src=\"{{ asset('js/custom.min.js') }}\"></script>
        <!-- Datatables -->
        <script src=\"{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
        <script src=\"{{ asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/jszip/dist/jszip.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}\"></script>
        <script src=\"{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}\"></script>
        
      

";
    }
}
