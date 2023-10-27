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

/* @PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig */
class __TwigTemplate_4eacb203a09ba2ef7a89a09cfb250012 extends Template
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
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["supplierForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["supplierForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">local_shipping</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suppliers", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">

      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "name", [], "any", false, false, false, 37), 'row');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "description", [], "any", false, false, false, 38), 'row');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "phone", [], "any", false, false, false, 39), 'row');
        echo "
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "mobile_phone", [], "any", false, false, false, 40), 'row');
        echo "
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "address", [], "any", false, false, false, 41), 'row');
        echo "
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "address2", [], "any", false, false, false, 42), 'row');
        echo "
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "post_code", [], "any", false, false, false, 43), 'row');
        echo "
      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "city", [], "any", false, false, false, 44), 'row');
        echo "
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "id_country", [], "any", false, false, false, 45), 'row');
        echo "
        <div class=\"js-supplier-state";
        // line 46
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "id_state", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "choices", [], "any", false, false, false, 46))) {
            echo " d-none";
        }
        echo "\">
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "id_state", [], "any", false, false, false, 47), 'row');
        echo "
        </div>
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "dni", [], "any", false, false, false, 49), 'row');
        echo "
      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["supplierForm"] ?? null), "logo", [], "any", false, false, false, 50), 'row');
        echo "

      ";
        // line 52
        if ((array_key_exists("logoImage", $context) &&  !(null === ($context["logoImage"] ?? null)))) {
            // line 53
            echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
            // line 56
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Suppliers/logo_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig", 56)->display($context);
            // line 57
            echo "          </div>
        </div>
      ";
        }
        // line 60
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["supplierForm"] ?? null), 'widget');
        echo "

    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_suppliers_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["supplierForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 73,  149 => 69,  143 => 66,  139 => 65,  130 => 60,  125 => 57,  123 => 56,  118 => 53,  116 => 52,  111 => 50,  107 => 49,  102 => 47,  96 => 46,  92 => 45,  88 => 44,  84 => 43,  80 => 42,  76 => 41,  72 => 40,  68 => 39,  64 => 38,  60 => 37,  52 => 32,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Suppliers\\Blocks\\form.html.twig");
    }
}
