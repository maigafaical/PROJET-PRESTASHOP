<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_metrics/views/templates/admin/metrics.html.twig */
class __TwigTemplate_f933645178f053cadd3dc2c9b9736c9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return $this->loadTemplate(((($context["fullscreen"] ?? null)) ? ("@Modules/ps_metrics/views/templates/admin/fullscreen.html.twig") : ("@PrestaShop/Admin/layout.html.twig")), "@Modules/ps_metrics/views/templates/admin/metrics.html.twig", 20);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "  <div id=\"error-loading-app\" class=\"hide\">
    ";
        // line 24
        $this->loadTemplate("@Modules/ps_metrics/views/templates/admin/error.html.twig", "@Modules/ps_metrics/views/templates/admin/metrics.html.twig", 24)->display($context);
        // line 25
        echo "  </div>
  <div id=\"metrics-app\"></div>
";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        if ((($context["useLocalVueApp"] ?? null) == false)) {
            // line 31
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["pathAssetsCdn"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
  ";
        } elseif (((        // line 32
($context["useLocalVueApp"] ?? null) == true) && (($context["useBuildModeOnly"] ?? null) == true))) {
            // line 33
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["pathAssetsBuilded"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
  ";
        }
        // line 35
        echo "
  <style>
    /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
    #content.nobootstrap div.bootstrap.panel {
      display: none;
    }
  </style>
";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "  <script>
    var oAuthGoogleErrorMessage = '";
        // line 46
        echo ($context["oAuthGoogleErrorMessage"] ?? null);
        echo "';
    var fullscreen = ";
        // line 47
        if (($context["fullscreen"] ?? null)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ";
    var contextPsAccounts = ";
        // line 48
        echo json_encode(($context["contextPsAccounts"] ?? null));
        echo ";
    var contextPsEventbus = ";
        // line 49
        echo json_encode(($context["contextPsEventbus"] ?? null));
        echo ";
    var metricsApiUrl = '";
        // line 50
        echo ($context["metricsApiUrl"] ?? null);
        echo "';
    var metricsModule = ";
        // line 51
        echo json_encode(($context["metricsModule"] ?? null));
        echo ";
    var eventBusModule = ";
        // line 52
        echo json_encode(($context["eventBusModule"] ?? null));
        echo ";
    var accountsModule = ";
        // line 53
        echo json_encode(($context["accountsModule"] ?? null));
        echo ";
    var mboModule = ";
        // line 54
        echo json_encode(($context["mboModule"] ?? null));
        echo ";
    var graphqlEndpoint = '";
        // line 55
        echo ($context["graphqlEndpoint"] ?? null);
        echo "';
    var isoCode = '";
        // line 56
        echo ($context["isoCode"] ?? null);
        echo "';
    var currencyIsoCode = '";
        // line 57
        echo ($context["currencyIsoCode"] ?? null);
        echo "';
    var currentPage = '";
        // line 58
        echo ($context["currentPage"] ?? null);
        echo "';
    var adminToken = '";
        // line 59
        echo ($context["adminToken"] ?? null);
        echo "';
  </script>

  ";
        // line 62
        if ((($context["useLocalVueApp"] ?? null) == true)) {
            // line 63
            echo "    ";
            if ((($context["useBuildModeOnly"] ?? null) == true)) {
                // line 64
                echo "      <script type=\"module\" src=\"";
                echo twig_escape_filter($this->env, ($context["pathAppBuilded"] ?? null), "html", null, true);
                echo "\"></script>
    ";
            } else {
                // line 66
                echo "      <script type=\"module\" src=\"https://localhost:3001/@vite/client\"></script>
      <script type=\"module\" src=\"https://localhost:3001/src/main.ts\"></script>
    ";
            }
            // line 69
            echo "  ";
        } else {
            // line 70
            echo "    <script type=\"module\" src=\"";
            echo twig_escape_filter($this->env, ($context["pathAppCdn"] ?? null), "html", null, true);
            echo "\"></script>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@Modules/ps_metrics/views/templates/admin/metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 70,  178 => 69,  173 => 66,  167 => 64,  164 => 63,  162 => 62,  156 => 59,  152 => 58,  148 => 57,  144 => 56,  140 => 55,  136 => 54,  132 => 53,  128 => 52,  124 => 51,  120 => 50,  116 => 49,  112 => 48,  104 => 47,  100 => 46,  97 => 45,  93 => 44,  82 => 35,  76 => 33,  74 => 32,  69 => 31,  66 => 30,  62 => 29,  56 => 25,  54 => 24,  51 => 23,  47 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_metrics/views/templates/admin/metrics.html.twig", "C:\\xampp\\htdocs\\prestashop\\modules\\ps_metrics\\views\\templates\\admin\\metrics.html.twig");
    }
}
