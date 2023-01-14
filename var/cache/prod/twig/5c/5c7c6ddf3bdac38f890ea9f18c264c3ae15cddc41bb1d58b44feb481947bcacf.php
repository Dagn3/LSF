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

/* home/index.html.twig */
class __TwigTemplate_ab9350e66ed5cfb384f21e2f5c41461df87d0795e4ca9f707e6f87028d07351b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LSF - Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

    <div class=\"relative\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/front.png"), "html", null, true);
        echo "\" alt=\"Front\">
            <div class=\"absolute w-full bottom-0 left-0 \">
                <div class=\"h-12 bg-gradient-to-t from-stone-800 via-stone-800 to-bg-transparent md:h-36   \"></div>

            </div>
    </div>

    <div class=\"bg-stone-800 flex flex-row justify-center items-center \">
        <video controls class=\"rounded pb-12 px-6 pt-0 lg:w-3/4 w-full\" poster=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/video2.PNG"), "html", null, true);
        echo "\">
            <source  src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/videoFront.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
            Sorry, your browser doesn't support embedded videos.
        </video>
    </div>





    <!-- Nos produits -->

    <div class=\" h-auto   \">
        <div class=\"text-center max-w-xl mx-auto pt-12\">
            <h1 class=\"text-6xl md:text-7xl font-bold mb-5 text-stone-800\">Nos fromages</h1>
            <h3 class=\"text-xl mb-5 font-light text-stone-800\">Découvez nos produits parmis notre liste de plus de 200 fromages </h3>
            <div class=\"text-center mb-10\">
                <span class=\"inline-block w-1 h-1 rounded-full bg-stone-800 ml-1\"></span>
                <span class=\"inline-block w-3 h-1 rounded-full bg-stone-800 ml-1\"></span>
                <span class=\"inline-block w-40 h-1 rounded-full bg-stone-800\"></span>
                <span class=\"inline-block w-3 h-1 rounded-full bg-stone-800 ml-1\"></span>
                <span class=\"inline-block w-1 h-1 rounded-full bg-stone-800 ml-1\"></span>
            </div>
        </div>



        <!-- CARD -->

        <div class=\"flex flex-wrap  justify-center \">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fromages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fromage"]) {
            // line 48
            echo "
            <div class=\"p-2\">
                <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fromages");
            echo "\">
                <div class=\"max-w-sm rounded  shadow-lg bg-stone-800\">

                    <img class=\"w-full\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/fromages/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fromage"], "image", [], "any", false, false, false, 53), "html", null, true);
            echo "\" alt=\"\">
                    <div class=\"px-6 py-4\">
                        <div class=\"font-bold text-white text-xl mb-2 underline\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fromage"], "nom", [], "any", false, false, false, 55), "html", null, true);
            echo "</div>
                        <p class=\"text-white text-base\">
                            ";
            // line 57
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["fromage"], "description", [], "any", false, false, false, 57), 0, 35), "html", null, true);
            echo "
                        </p>
                    </div>
                    <div class=\"px-6 pt-4 pb-2 \">
                        ";
            // line 61
            if (twig_in_filter("Vache", twig_get_attribute($this->env, $this->source, $context["fromage"], "lait", [], "any", false, false, false, 61))) {
                // line 62
                echo "                            <span class=\"inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">Vache</span>
                        ";
            }
            // line 64
            echo "                        ";
            if (twig_in_filter("Chevre", twig_get_attribute($this->env, $this->source, $context["fromage"], "lait", [], "any", false, false, false, 64))) {
                // line 65
                echo "                            <span class=\"inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">Chèvre</span>
                        ";
            }
            // line 67
            echo "                        ";
            if (twig_in_filter("Brebis", twig_get_attribute($this->env, $this->source, $context["fromage"], "lait", [], "any", false, false, false, 67))) {
                // line 68
                echo "                            <span class=\"inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">Brebis</span>
                        ";
            }
            // line 70
            echo "                        <br>
                        <span class=\"inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fromage"], "pate", [], "any", false, false, false, 71), "html", null, true);
            echo "</span>
                    </div>
                </div>
                </a>
            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fromage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </div>
        <div class=\"w-auto text-white flex justify-center pb-12 pt-12\">
            <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fromages");
        echo "\">
                <button type=\"submit\" class=\" bg-green-700 hover:bg-green-800 text-white font-bold  py-4 px-4 border border-stone-500 hover:border-transparent rounded \">DECOUVREZ TOUS NOS PRODUITS</button>
            </a>
        </div>


        <div class=\" h-auto bg-stone-800\">
            <div class=\"text-center max-w-xl mx-auto pt-12\">
                <h1 class=\"text-6xl md:text-7xl font-bold mb-5 text-white\">Nos magasins</h1>
                <h3 class=\"text-xl mb-5 font-light text-white\">Retrouvez Les saveurs Fromagères à Bergues, rue Lamartine ou bien à Malo, avenue Faidherbe.</h3>
                <div class=\"text-center mb-10\">
                    <span class=\"inline-block w-1 h-1 rounded-full bg-white ml-1\"></span>
                    <span class=\"inline-block w-3 h-1 rounded-full bg-white ml-1\"></span>
                    <span class=\"inline-block w-40 h-1 rounded-full bg-white\"></span>
                    <span class=\"inline-block w-3 h-1 rounded-full bg-white ml-1\"></span>
                    <span class=\"inline-block w-1 h-1 rounded-full bg-white ml-1\"></span>
                </div>
            </div>

            <div class=\"w-full grid 2xl:grid-cols-2 grid-cols-1 justify-items-center\">
        

                ";
        // line 102
        echo twig_include($this->env, $context, "components/frontShopBergues.html.twig");
        echo "


                ";
        // line 105
        echo twig_include($this->env, $context, "components/frontShopMalo.html.twig");
        echo "
        
            </div>
            <div class=\"w-auto text-white flex justify-center pb-12 pt-12  \">
                <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                    <button type=\"submit\" class=\" bg-green-700  hover:bg-green-800 text-white font-bold  py-4 px-8 border border-stone-500 hover:border-transparent rounded \">NOUS CONTACTER</button>
                </a>
            </div>

        </div>

    </div>

    <div class=\"pb-12 \">
    ";
        // line 119
        echo twig_include($this->env, $context, "components/frontReview.html.twig");
        echo "
    </div>


";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 119,  220 => 109,  213 => 105,  207 => 102,  182 => 80,  178 => 78,  165 => 71,  162 => 70,  158 => 68,  155 => 67,  151 => 65,  148 => 64,  144 => 62,  142 => 61,  135 => 57,  130 => 55,  124 => 53,  118 => 50,  114 => 48,  110 => 47,  78 => 18,  74 => 17,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/ddevfry/www/LSF/templates/home/index.html.twig");
    }
}
