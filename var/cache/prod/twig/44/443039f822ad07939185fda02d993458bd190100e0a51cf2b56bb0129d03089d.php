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

/* home/fromageView.html.twig */
class __TwigTemplate_bac6848bdafa0ad589b7c1ffeb767739d63555f194a05d6c9212b58b980551f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/fromageView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LSF - Fromages";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo " 
<!--
Include Tailwind JIT CDN compiler
More info: https://beyondco.de/blog/tailwind-jit-compiler-via-cdn
-->
<script src=\"https://unpkg.com/tailwindcss-jit-cdn\"></script>

<!-- Snippet -->
<section class=\"flex flex-col justify-center antialiased  text-stone-800 lg:py-64 py-24\">
    <div class=\"w-full sm:w-3/5 mx-auto p-4 sm:px-6 h-full\">
        <!-- Blog post -->
        <article class=\"max-w-sm mx-auto md:max-w-none grid md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-16 items-center\">
            <a class=\"relative block group\" href=\"#0\">
                <div class=\"absolute inset-0 bg-stone-800 hidden md:block transform md:translate-y-2 md:translate-x-4 xl:translate-y-4 xl:translate-x-8 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out pointer-events-none\" aria-hidden=\"true\"></div>
                <figure class=\"relative h-0 pb-[56.25%] md:pb-[75%] lg:pb-[56.25%] overflow-hidden transform md:-translate-y-2 xl:-translate-y-4 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out\">
                    <img class=\"absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/fromages/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fromage"] ?? null), "image", [], "any", false, false, false, 19), "html", null, true);
        echo "\" width=\"640\" height=\"360\" alt=\"Blog post\">
                </figure>
            </a>
            <div class\"p-12\">
                <header>
                   
                    <h3 class=\"text-2xl lg:text-3xl font-bold leading-tight lg:pl-12 mb-2\">
                            ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fromage"] ?? null), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo " 
                    </h3>
                </header>
                <p class=\"text-lg text-stone-600 py-1 lg:pl-12 \">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fromage"] ?? null), "prix", [], "any", false, false, false, 29), "html", null, true);
        echo "€</p>
                <p class=\"text-lg text-stone-600 font-bold py-1 lg:pl-12 \">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fromage"] ?? null), "description", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                <p class=\"text-lg text-stone-600 py-1 lg:pl-12 \">Provenance : ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fromage"] ?? null), "Provenance", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                <div class=\"text-lg text-stone-600 py-1 lg:pl-12\">
                    <p class=\"inline-block text-lg text-stone-600 font-bold pr-2\">Type de lait :  </p>
                    ";
        // line 34
        if (twig_in_filter("Vache", twig_get_attribute($this->env, $this->source, ($context["fromage"] ?? null), "lait", [], "any", false, false, false, 34))) {
            echo "    
                        <span class=\"inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">Vache</span>
                    ";
        }
        // line 37
        echo "                    ";
        if (twig_in_filter("Chevre", twig_get_attribute($this->env, $this->source, ($context["fromage"] ?? null), "lait", [], "any", false, false, false, 37))) {
            // line 38
            echo "                        <span class=\"inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">Chèvre</span>
                    ";
        }
        // line 40
        echo "                    ";
        if (twig_in_filter("Brebis", twig_get_attribute($this->env, $this->source, ($context["fromage"] ?? null), "lait", [], "any", false, false, false, 40))) {
            // line 41
            echo "                        <span class=\"inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">Brebis</span>
                    ";
        }
        // line 43
        echo "                    <br>
                    <p class=\"inline-block text-lg text-stone-600 font-bold pr-2\">Type de pate :  </p>
                    <span class=\"inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fromage"] ?? null), "pate", [], "any", false, false, false, 45), "html", null, true);
        echo "</span>
                </div>
                
            </div>
        </article>    
    </div>
</section>
 
   
";
    }

    public function getTemplateName()
    {
        return "home/fromageView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  126 => 43,  122 => 41,  119 => 40,  115 => 38,  112 => 37,  106 => 34,  100 => 31,  96 => 30,  92 => 29,  86 => 26,  75 => 19,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/fromageView.html.twig", "/home/ddevfry/www/LSF/templates/home/fromageView.html.twig");
    }
}
