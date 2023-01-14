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

/* home/mentions.html.twig */
class __TwigTemplate_406388c643a7ca0bb7a2f340ffbdd33ef7892e19bdd39e365a3822de0a87eb2b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/mentions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"bg-white pt-12 text-center font-bold text-xl\">
        <p>MENTIONS LEGALES </p>
    </div>

    <div class=\"bg-white p-12 text-lg \">
        <p class=\"pl-12\">Les présentes conditions générales fixent les modalites d'utilisation du service web https://les-saveurs-fromageres.fr</p>

        <p class=\"pl-12\">L'utilisateur reconnait avoir pris connaissance de ce document et accepté l'ensemble de ces informations, que cet usage soit fait à titre personnel ou professionnel. Si cet usage est fait à titre professionnel, l'utilisateur garantit détenir les pouvoirs necessaires pour accepter ces conditions générales au sein de son organisation.</p>

        <p class=\"p-6 font-bold text-xl\">Editeur et reponsable de publication :</p>

        <p class=\"pl-12\">Ce site vitrine non déclaré à la CNIL est édité par M. Corentin BOGAERT </p>

        <p class=\"p-6 font-bold text-xl\">Hébergement :</p>

        <p class=\"pl-12\">Ce site est hébergé par OVH.com</p>
        <p class=\"pl-12\">Siège social : 2 rue Kellermann - 59100 Roubaix - France</p>
        <p class=\"pl-12\">Cet hébergeur détient à ce jour les informations personnelles concernant l'auteur de ce site</p>

        <p class=\"p-6 font-bold text-xl\">Conditions d’utilisation :</p>

        <p class=\"pl-12\">L’utilisation du présent site implique l’acceptation pleine et entière des conditions générales d’utilisation décrites ci-après. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment.</p>

        <p class=\"p-6 font-bold text-xl\">Informations :</p>

        <p class=\"pl-12\">Les informations et documents du site sont présentés à titre indicatif, sans de caractère exhaustif, et ne peuvent engager la responsabilité du propriétaire du site.</p>
        <p class=\"pl-12\">Le propriétaire du site ne peut être tenu responsable des dommages directs et indirects consécutifs à l’accès au site.</p>

        <p class=\"p-6 font-bold text-xl\">Interactivité :</p>

        <p class=\"pl-12\">Les utilisateurs du site peuvent y déposer du contenu, apparaissant sur le site dans des espaces dédiés (notamment via les insertions de produits). Le contenu déposé reste sous la responsabilité de leurs auteurs, qui en assument pleinement l’entière responsabilité juridique.</p>

        <p class=\"p-6 font-bold text-xl\">Propriété intellectuelle :</p>

        <p class=\"pl-12\">Sauf mention contraire, tous les éléments accessibles sur le site (textes, images, graphismes, logo, icônes, sons, logiciels, etc.) restent la propriété exclusive de leurs auteurs, en ce qui concerne les droits de propriété intellectuelle ou les droits d’usage.</p>

        <p class=\"pl-12\">Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l’auteur</p>

        <p class=\"pl-12\">Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient est considérée comme constitutive d’une contrefaçon et passible de poursuites.</p>

        <p class=\"p-6 font-bold text-xl\">Liens :</p>


        <li class=\"pl-8\"> Liens sortants :</li>
        <p class=\"pl-12\">Le propriétaire du site décline toute responsabilité et n’est pas engagé par le référencement via des liens hypertextes, de ressources tierces présentes sur le réseau Internet, tant en ce qui concerne leur contenu que leur pertinence.</p>

        <li class=\"pl-8\">Liens entrants :</li>
        <p class=\"pl-12\">Le propriétaire du site autorise les liens hypertextes vers l’une des pages de ce site, à condition que ceux-ci ouvrent une nouvelle fenêtre et soient présentés de manière non équivoque afin d’éviter :</p>
            <br>
        <p class=\"pl-12\">tout risque de confusion entre le site citant et le propriétaire du site
            ainsi que toute présentation tendancieuse, ou contraire aux lois en vigueur.</p>
        <p class=\"pl-12\">Le propriétaire du site se réserve le droit de demander la suppression d’un lien s’il estime que le site source ne respecte pas les règles ainsi définies.</p>

        <p class=\"p-6 font-bold text-xl\">Confidentialité :</p>

        <p class=\"pl-12\">Tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une preuve d’identité.</p>

        <p class=\"pl-12\">Le site ne recueille pas d’informations personnelles, et n’est pas assujetti à déclaration à la CNIL. 9 (Remplacé par les disposition de la RGPD)</p>
    </div>

";
    }

    // line 66
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "
";
    }

    public function getTemplateName()
    {
        return "home/mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 67,  115 => 66,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/mentions.html.twig", "/home/ddevfry/www/LSF/templates/home/mentions.html.twig");
    }
}
