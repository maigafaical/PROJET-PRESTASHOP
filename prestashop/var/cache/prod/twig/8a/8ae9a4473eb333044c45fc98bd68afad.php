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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig */
class __TwigTemplate_d28ea72353a3f03ad8e7fb8390457065 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">cloud_download</i>
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <p>
      <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["downloadFile"] ?? null), "url", [], "any", false, false, false, 35), "html", null, true);
        echo "\" class=\"btn btn-outline-primary download-file-link\">
        <i class=\"material-icons\">cloud_download</i>
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download the backup file (%s MB)", ["%s" => twig_get_attribute($this->env, $this->source, ($context["downloadFile"] ?? null), "size", [], "any", false, false, false, 37)], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </a>
    </p>
    <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tip: You can also download this file from your FTP server. Backup files are located in the \"/adminXXXX/backups\" directory.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 40,  58 => 37,  53 => 35,  46 => 31,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Backup\\Blocks\\download_file.html.twig");
    }
}
