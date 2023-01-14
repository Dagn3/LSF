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

/* home/fromages.html.twig */
class __TwigTemplate_208cc87cc6ca81486aa7a264e9ac7bf06eb0a55f17b8e2eb2b5a45404bac225f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/fromages.html.twig", 1);
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




    <!-- Nos produits -->
    <div class=\" h-auto\">

        <div class=\"w-full flex pt-6 justify-center md:space-x-6  space-x-2 flex-wrap \">

            <div class=\"dropdown pb-2\">
                <button
                        class=\"dropdown-toggle inline-block px-6 py-2.5 bg-stone-800 text-white font-bold    uppercase rounded shadow-md hover:bg-stone-700 hover:shadow-lg focus:bg-stone-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-stone-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap\"
                        type=\"button\"
                        id=\"dropdownMenuButton2\"
                        data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\"
                >
                    Type de laits :
                    <svg
                            aria-hidden=\"true\"
                            focusable=\"false\"
                            data-prefix=\"fas\"
                            data-icon=\"caret-down\"
                            class=\"w-2 ml-2\"
                            role=\"img\"
                            xmlns=\"http://www.w3.org/2000/svg\"
                            viewBox=\"0 0 320 512\"
                    >
                        <path
                                fill=\"currentColor\"
                                d=\"M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\"
                        ></path>
                    </svg>
                </button>

                <ul
                        class=\"bg-stone-700  dropdown-menu min-w-max absolute hidden text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none  \"
                        aria-labelledby=\"dropdownMenuButton2\"
                >


                    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "




                    <span
                            class=\"text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-white\"
    
                    >     ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "laits", [], "any", false, false, false, 54), 'row');
        echo " </span
                    >

                </ul>


            </div>
            <div class=\"dropdown  \">
                <button
                        class=\"dropdown-toggle inline-block px-6 py-2.5 bg-stone-800 text-white font-bold    uppercase rounded shadow-md hover:bg-stone-700 hover:shadow-lg focus:bg-stone-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-stone-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap\"
                        type=\"button\"
                        id=\"dropdownMenuButton2\"
                        data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\"
                >
                    Type de pates :
                    <svg
                            aria-hidden=\"true\"
                            focusable=\"false\"
                            data-prefix=\"fas\"
                            data-icon=\"caret-down\"
                            class=\"w-2 ml-2\"
                            role=\"img\"
                            xmlns=\"http://www.w3.org/2000/svg\"
                            viewBox=\"0 0 320 512\"
                    >
                        <path
                                fill=\"currentColor\"
                                d=\"M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\"
                        ></path>
                    </svg>
                </button>

                <ul
                        class=\"bg-stone-700 dropdown-menu min-w-max absolute hidden text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none\"
                        aria-labelledby=\"dropdownMenuButton2\"
                >


                    <div class=\"text-black \">

                    </div>
                    <div class=\"\">

                    </div>


                    <span
                            class=\"text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-white \"
                    >     ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pates", [], "any", false, false, false, 103), 'row');
        echo " </span
                    >


                </ul>

            </div>

            <div class=\" flex pb-2  \">
                <div class=\"p-1.5 bg-stone-800 rounded-l-lg\">
            <img class=\"w-8 h-8 bg-stone-800 text-white  \" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chercher.png"), "html", null, true);
        echo "\">
                </div>

            <div class=\"w-90 pr-4\">     ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "q", [], "any", false, false, false, 116), 'row');
        echo "</div>

            <div class=\" flex pt-0 lg:pt-0 \">
            <button type=\"submit\" class=\"bg-green-700 hover:bg-green-800 text-white font-bold   py-2 px-4 border border-stone-500 hover:border-transparent rounded \">Filtrer</button>
            </div>
            </div>
            ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
         ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "EmptyFrom"], "method", false, false, false, 123));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 124
            echo "    
                <div class=\"text-sm py-2 px-12 pl-8 font-normal block w-full \">
                    <div id=\"alert-border-3\" class=\" flex p-4 mb-4 border-t-4 border-red-700 dark:text-red-400 dark:bg-stone-800 font-bold\" role=\"alert\">
                        <svg class=\"flex-shrink-0 w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\"></path></svg>
                        <div class=\"ml-3 text-sm font-medium\">
                             Votre recherche ne donne aucun résultat. Veuillez réessayer avec d’autres informations.
                        </div>
                    </div>
                </div>    
          
                  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
        </div>


        <!-- CARD -->

        <div class=\"flex flex-row justify-center text-white\">





                <div class=\"flex flex-wrap  justify-center \">
         
                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fromages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fromage"]) {
            // line 151
            echo "

                        <div class=\"p-6 \">
                        <a href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fromages_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["fromage"], "slug", [], "any", false, false, false, 154)]), "html", null, true);
            echo "\">

                            <div class=\"max-w-sm rounded overflow-hidden shadow-lg bg-stone-800\" >
                                <img class=\"w-full h-full\" src=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/fromages/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fromage"], "image", [], "any", false, false, false, 157), "html", null, true);
            echo "\" alt=\"\">
                                <div class=\"px-6 py-4\">
                                    <div class=\"font-bold text-white text-xl mb-2 underline text-center\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fromage"], "nom", [], "any", false, false, false, 159), "html", null, true);
            echo "</div>
                                    <p class=\"text-white text-center\">
                                        ";
            // line 161
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["fromage"], "description", [], "any", false, false, false, 161), 0, 100), "html", null, true);
            echo "
                                    </p>
                                </div>
                                <div class=\"px-6 pt-4 pb-2 \">
                                    ";
            // line 165
            if (twig_in_filter("Vache", twig_get_attribute($this->env, $this->source, $context["fromage"], "lait", [], "any", false, false, false, 165))) {
                // line 166
                echo "                                        <span class=\"inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">Vache</span>
                                    ";
            }
            // line 168
            echo "                                    ";
            if (twig_in_filter("Chevre", twig_get_attribute($this->env, $this->source, $context["fromage"], "lait", [], "any", false, false, false, 168))) {
                // line 169
                echo "                                        <span class=\"inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">Chèvre</span>
                                    ";
            }
            // line 171
            echo "                                    ";
            if (twig_in_filter("Brebis", twig_get_attribute($this->env, $this->source, $context["fromage"], "lait", [], "any", false, false, false, 171))) {
                // line 172
                echo "                                        <span class=\"inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">Brebis</span>
                                    ";
            }
            // line 174
            echo "                                    <br>
                                    <span class=\"inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2\">";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fromage"], "pate", [], "any", false, false, false, 175), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>
                        </a>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fromage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "
                </div>



        </div>
        <div class=\"flex justify-center pb-6\">
        ";
        // line 189
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["fromages"] ?? null));
        echo "
        </div>



        </div>


";
    }

    public function getTemplateName()
    {
        return "home/fromages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 189,  303 => 182,  290 => 175,  287 => 174,  283 => 172,  280 => 171,  276 => 169,  273 => 168,  269 => 166,  267 => 165,  260 => 161,  255 => 159,  249 => 157,  243 => 154,  238 => 151,  234 => 150,  218 => 136,  201 => 124,  197 => 123,  193 => 122,  184 => 116,  178 => 113,  165 => 103,  113 => 54,  102 => 46,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/fromages.html.twig", "/home/ddevfry/www/LSF/templates/home/fromages.html.twig");
    }
}
