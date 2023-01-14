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

/* home/contact.html.twig */
class __TwigTemplate_1e4e5efae049e9c13221fa6e7e94953a7688cc32bd8abe67623e4e04889878a6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LSF - Contact";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "


     <div class=\"  flex justify-center  \">
     <div class=\"w-full lg:w-1/2 p-12\">
          <div class=\"text-center max-w-xl mx-auto pt-12\">
                <h1 class=\"text-6xl md:text-7xl font-bold mb-5 text-stone-800\">Formulaire de contact</h1>
                <h3 class=\"text-xl mb-5 font-light text-stone-800\"><h3>
                <div class=\"text-center mb-10\">
                    <span class=\"inline-block w-1 h-1 rounded-full bg-stone-800 ml-1\"></span>
                    <span class=\"inline-block w-3 h-1 rounded-full bg-stone-800 ml-1\"></span>
                    <span class=\"inline-block w-40 h-1 rounded-full bg-stone-800\"></span>
                    <span class=\"inline-block w-3 h-1 rounded-full bg-stone-800 ml-1\"></span>
                    <span class=\"inline-block w-1 h-1 rounded-full bg-stone-800 ml-1\"></span>
                </div>
            </div>

        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "successMess"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "        <div id=\"alert-border-3\" class=\"flex p-4 mb-4 border-t-4 border-green-700 dark:text-green-400 dark:bg-stone-800 font-bold\" role=\"alert\">
            <svg class=\"flex-shrink-0 w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\"></path></svg>
            <div class=\"ml-3 text-sm font-medium\">
            Message envoyé avec succés !
            </div>
           
        </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            <div class=\"py-2\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fhjgiz48", [], "any", false, false, false, 32), 'row');
        echo "
            </div>
            <div class=\"py-2\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "objet", [], "any", false, false, false, 35), 'row');
        echo "
            </div>
            <div class=\"py-2\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commentaire", [], "any", false, false, false, 38), 'row');
        echo "
            </div>
            <div class=\"invisible\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 41), 'row');
        echo "
            </div>
             <div class=\"flex flex-row-reverse py-2\">
                <button type=\"submit\" class=\"bg-green-700 hover:bg-green-800 text-white font-bold   py-2 px-4 border border-stone-500 hover:border-transparent rounded \">Envoyer</button>
            </div>
        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    </div>
  
<br>
 
 

          
 

     ";
    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  119 => 41,  113 => 38,  107 => 35,  101 => 32,  98 => 31,  85 => 23,  81 => 22,  77 => 21,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/contact.html.twig", "/home/ddevfry/www/LSF/templates/home/contact.html.twig");
    }
}
