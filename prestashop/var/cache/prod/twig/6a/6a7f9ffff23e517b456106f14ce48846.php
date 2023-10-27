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

/* @Modules/ps_metrics/views/templates/admin/error.html.twig */
class __TwigTemplate_b10d16fbd27ed021bbee75bb387a9097 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo " 
 ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <div id=\"error-loading-app-content\">
        <div id=\"error-loading-app-content-icon\"> ! </div>
        <h2> Oops, an error occured... </h2>
        <p> We are currently unable to display your KPI's. </p>
        <p> Please make sure you are using the latest version of PrestaShop Metrics. </p>
        <p> If the problem persist, please contact our support team: <b><a href=\"mailto:support-ps-metrics@prestashop.com\" target=\"_blank\">support-ps-metrics@prestashop.com</a></b>.</p>
    </div>
";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    <style>
        #error-loading-app {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #error-loading-app-content{
            margin: 200px auto;
            display: flex;
            flex-direction: column;
            background-color: #FAFAFB;
            border-radius: 5px;
            padding: 50px;
            border: 2px solid #C8D7E4;
            text-align: center;
        }
        #error-loading-app-content-icon{
            font-size: 30px;
            text-align: center;
            color: #FFFFFF;
            background-color: #DADADA;
            border-radius: 50%;
            height: 45px;
            width: 45px;
            margin: auto;
            line-height: 1.4em;

        }
        #error-loading-app-content h2{
            margin: 10px 20px 20px;
            font-weight: bold;
            font-size: 20px;
            line-height: 30px;
        }
        #error-loading-app-content p{
            margin-bottom: 5px;
            font-size: 14px;
            line-height: 20px;
        }

        .hide {
            display: none !important;
        }

        .show {
            display: block;
        }
    </style>
";
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "    <script>
        (() => {
            let appIsLoaded = false;
            let currentRecursion = 0;
            let maxRecursion = 150;

            const checkAppIsloaded = () => {
                currentRecursion++;

                if (currentRecursion === maxRecursion) {
                // show error block and hide metrics
                document.getElementById('error-loading-app').classList.add('show');
                document.getElementById('error-loading-app').classList.remove('hide');

                document.getElementById('metrics-app').classList.add('hide');
                document.getElementById('metrics-app').classList.remove('show');
                return;
                }

                if (typeof(window.appIsLoaded) === 'undefined') {
                setTimeout(() => {
                    checkAppIsloaded();
                }, 100);
                }
            }

            checkAppIsloaded();
        })();
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_metrics/views/templates/admin/error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 83,  129 => 82,  76 => 31,  72 => 30,  61 => 21,  57 => 20,  53 => 82,  50 => 81,  48 => 30,  45 => 29,  43 => 20,  40 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_metrics/views/templates/admin/error.html.twig", "C:\\xampp\\htdocs\\prestashop\\modules\\ps_metrics\\views\\templates\\admin\\error.html.twig");
    }
}
