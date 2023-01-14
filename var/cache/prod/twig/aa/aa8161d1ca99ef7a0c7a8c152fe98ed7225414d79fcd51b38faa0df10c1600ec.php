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

/* login/index.html.twig */
class __TwigTemplate_79d266b5e15f3b5fef8522b26c7926038f9c6730a00ad0f251c448d91f125e9d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello LoginController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "      

<div class=\"pt-48 pb-48 flex justify-center content-center w-full\">

    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "ErrorLog"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "    
                <div class=\"w-full text-sm py-2 font-normal block \">
                    <div id=\"alert-border-3\" class=\" flex p-4 mb-4 border-t-4 border-red-700 dark:text-red-400 dark:bg-stone-800 font-bold\" role=\"alert\">
                        <svg class=\"flex-shrink-0 w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\"></path></svg>
                        <div class=\"ml-3 text-sm font-medium\">
                             Identifiant incorrect.
                        </div>
                    </div>
                </div>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <div class=\"bg-stone-800 px-10 py-8 rounded-xl w-screen shadow-md max-w-sm\">
    
      <div class=\"space-y-4\">
        <h1 class=\"text-center text-2xl font-semibold text-white\">Connexion </h1>
        <div class=\"font-bold \">
        <div class=\"py-2\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
          <label for=\"username\" class=\"block mb-1 text-white font-bold\">Identifiant</label>
          <input type=\"text\" id=\"username\" name=\"_username\" class=\"bg-indigo-50 px-4 py-2 outline-none rounded-md w-full\" />
        </div>
    
        <div class=\"py-2\">
          <label for=\"password\" class=\"block mb-1 text-white font-semibold\">Mot de passe</label>
          <input type=\"password\" id=\"password\" name=\"_password\" class=\"bg-indigo-50 px-4 py-2 outline-none rounded-md w-full\" />
          </div>
        </div>
      </div>
              <input type=\"hidden\" name=\"_target_path\" value=\"/admin\">

      <button type=\"submit\" class=\"mt-4 w-full bg-green-700 hover:bg-green-800 text-white py-2 rounded-md text-lg tracking-wide\">Login</button>
    </div>
  </form>
</div>
<div class=\"sm:h-48\">e</div>
 ";
    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  87 => 22,  72 => 12,  68 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/index.html.twig", "/home/ddevfry/www/LSF/templates/login/index.html.twig");
    }
}
