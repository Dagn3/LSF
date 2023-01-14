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

/* base.html.twig */
class __TwigTemplate_9fbb21001efd68671369cea706fb17acd4844cd2408ef73843c33c4b5729fecf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"scroll-smooth\">
    <head>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=yes, initial-scale=1.0\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lsf.ico"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        // line 13
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>
    <header>
        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 98
        echo "    </header>
    <body class=\"
      antialiased
      bg-gradient-to-r
      from-orange-200
      via-orange-100
      to-orange-200
      \">
        ";
        // line 106
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "    </body>
    <footer>
        ";
        // line 109
        $this->displayBlock('footer', $context, $blocks);
        // line 168
        echo "    </footer>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            <nav
                    class=\"

          flex flex-wrap
          items-center
          justify-between
          w-full
          py-4
          md:py-0
          px-4  
          text-2xl text-slate-50
          bg-stone-800
        \"
            >
                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                <div class=\"h-8\">
                    Les saveurs fromagères
                </div>
                </a>
                <div   id=\"menu-button\" class=\"rounded-full hover:bg-stone-600\">
                <svg
                        xmlns=\"http://www.w3.org/2000/svg\"
                        id=\"menu-button\"
                        class=\"h-6 w-6 cursor-pointer md:hidden block m-2\"
                        fill=\"none\"
                        viewBox=\"0 0 24 24\"
                        stroke=\"currentColor\"
                >
                    <path
                            stroke-linecap=\"round\"
                            stroke-linejoin=\"round\"
                            stroke-width=\"2\"
                            d=\"M4 6h16M4 12h16M4 18h16\"
                    />
                </svg>
                </div>

                <div class=\"hidden w-full md:flex md:items-center md:w-auto\" id=\"menu\">
                    <ul
                            class=\"
              pt-4
              text-base text-slate-50
              md:flex
              md:justify-between
              md:pt-0\"
                    >
                        <li>
                            <a class=\"md:p-4 py-2 block hover:text-orange-200 text-xl\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"
                            >Accueil</a
                            >
                        </li>
                        <li>
                            <a class=\"md:p-4 py-2 block hover:text-orange-200 text-xl\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fromages");
        echo "\"
                            >Fromages</a
                            >
                        </li>
                        <li>
                            <a class=\"md:p-4 py-2 block hover:text-orange-200 text-xl\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\"
                            >Contact</a
                            >
                        </li>
                    </ul>
                </div>
            </nav>

            <script>
                const button = document.querySelector('#menu-button');
                const menu = document.querySelector('#menu');


                button.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            </script>
        ";
    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 109
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "            <!-- Foooter -->
            <section class=\"bg-stone-800 relative bottom-0 w-full \">
                <div class=\"max-w-screen-xl px-4 py-10 mx-auto space-y-7 overflow-hidden sm:px-6 lg:px-8\">

                    <nav class=\"flex flex-wrap justify-center -mx-5 -my-2\">
                        <div class=\"px-5 py-2\">
                            <a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"text-base leading-6 text-slate-50 hover:text-orange-200\">
                                Accueil
                            </a>
                        </div>
                        <div class=\"px-5 py-2\">
                            <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fromages");
        echo "\" class=\"text-base leading-6 text-slate-50 hover:text-orange-200\">
                                Fromages
                            </a>
                        </div>
                        <div class=\"px-5 py-2\">
                            <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"text-base leading-6 text-slate-50 hover:text-orange-200\">
                                Contact
                            </a>
                        </div>
                    </nav>

                    <div class=\"flex justify-center mt-8 space-x-6\">
                        <a href=\"https://m.facebook.com/people/Les-saveurs-fromag%C3%A8res/100022757485059/\" class=\"text-slate-50 hover:text-orange-200\">
                            <span class=\"sr-only\">Facebook</span>
                            <svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path fill-rule=\"evenodd\" d=\"M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z\" clip-rule=\"evenodd\"></path>
                            </svg>
                        </a>
                        <a href=\"https://www.instagram.com/les_saveurs_fromageres/?hl=fr\" class=\"text-slate-50 hover:text-orange-200\">
                            <span class=\"sr-only\">Instagram</span>
                            <svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path fill-rule=\"evenodd\" d=\"M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z\" clip-rule=\"evenodd\"></path>
                            </svg>
                            <svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path fill-rule=\"evenodd\" d=\"\"                            </svg>

                        </a>
                           <a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-slate-50 hover:text-orange-200\">
                            <span class=\"sr-only\">Login</span>
                            <svg class=\" w-6 h-6 \" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" strokeWidth={1.5} stroke=\"currentColor\" className=\"w-6 h-6\">
                            <path strokeLinecap=\"round\" strokeLinejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75\" />
                            </svg>
                        </a>
                    </div>

                        <p class=\"text-base leading-6 text-center text-slate-50\">
                            <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentions");
        echo "\">
                            - Mentions légales -
                            </a>
                        </p>
                        <p class=\" text-base leading-6 text-center text-slate-50\">
                            © ";
        // line 162
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Les saveurs fromagères. Tous droits réservés.
                        </p>

                </div>
            </section>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 162,  297 => 157,  285 => 148,  260 => 126,  252 => 121,  244 => 116,  236 => 110,  232 => 109,  226 => 106,  204 => 80,  196 => 75,  188 => 70,  152 => 37,  136 => 23,  132 => 22,  125 => 18,  121 => 17,  114 => 14,  110 => 13,  103 => 7,  97 => 168,  95 => 109,  91 => 107,  89 => 106,  79 => 98,  77 => 22,  73 => 20,  71 => 17,  68 => 16,  65 => 13,  60 => 10,  56 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/ddevfry/www/LSF/templates/base.html.twig");
    }
}
