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

/* components/tailwind_2_layout.html.twig */
class __TwigTemplate_d0d70d91d34acf779f814ba8aa52630dc0051948bef82fbc2c089aad244b5440 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_row' => [$this, 'block_form_row'],
            'form_label' => [$this, 'block_form_label'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "tailwind_2_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("tailwind_2_layout.html.twig", "components/tailwind_2_layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 4), ((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "font-bold ")) : ("font-bold ")))) : (((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "font-bold ")) : ("font-bold "))))]);
        // line 5
        $this->displayParentBlock("form_row", $context, $blocks);
    }

    // line 8
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 9), ((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? null), "p-2 text-xl font-bold")) : ("p-2 text-xl font-bold")))) : (((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? null), "p-2 text-xl font-bold")) : ("p-2 text-xl font-bold"))))]);
        // line 10
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 13
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 14), ((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), " bg-gray-50 border border-stone-800 text-white font-bold rounded-lg focus:ring-stone-500 focus:border-stone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-white dark:focus:ring-stone-500 dark:focus:border-stone-500")) : (" bg-gray-50 border border-stone-800 text-white font-bold rounded-lg focus:ring-stone-500 focus:border-stone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-white dark:focus:ring-stone-500 dark:focus:border-stone-500")))) : (((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), " bg-gray-50 border border-stone-800 text-white font-bold rounded-lg focus:ring-stone-500 focus:border-stone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-white dark:focus:ring-stone-500 dark:focus:border-stone-500")) : (" bg-gray-50 border border-stone-800 text-white font-bold rounded-lg focus:ring-stone-500 focus:border-stone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-white dark:focus:ring-stone-500 dark:focus:border-stone-500"))))]);
        // line 15
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 21
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 22), ((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "")) : ("")))) : (((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "")) : (""))))]);
        // line 23
        $context["widget_attr"] = [];
        // line 24
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 25
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 27
        echo "<div";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 27, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 29
        echo "<div class=\"inline-flex items-center\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 32
        echo "</div>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 34
        echo "</div>";
    }

    // line 37
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), "rounded-full w-5 h-5 text-blue-600 bg-gray-100  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500")) : ("rounded-full w-5 h-5 text-blue-600 bg-gray-100  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"));
        // line 39
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "components/tailwind_2_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  125 => 38,  121 => 37,  117 => 34,  115 => 33,  113 => 32,  111 => 31,  109 => 30,  107 => 29,  105 => 28,  93 => 27,  90 => 25,  88 => 24,  86 => 23,  84 => 22,  80 => 21,  76 => 15,  74 => 14,  70 => 13,  66 => 10,  64 => 9,  60 => 8,  56 => 5,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/tailwind_2_layout.html.twig", "/home/ddevfry/www/LSF/templates/components/tailwind_2_layout.html.twig");
    }
}
