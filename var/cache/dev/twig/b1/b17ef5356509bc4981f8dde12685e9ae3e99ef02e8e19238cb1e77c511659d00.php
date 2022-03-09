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

/* home/main.html.twig */
class __TwigTemplate_0403006bdcc167107f6b75a543040407c3047bf6a4a2becff20a536b4e2cfa7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'innerContent' => [$this, 'block_innerContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/main.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/main.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_innerContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "innerContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "innerContent"));

        // line 6
        echo "    <div class=\"centered\">
        <h3>
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_article_showall");
        echo "\">
                ";
        // line 10
        echo "                Tous nos&nbsp;articles
            </a>
        </h3>

        <h3>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_auteur_showall");
        echo "\">
                ";
        // line 17
        echo "                Tous nos&nbsp;blogueurs
            </a>
        </h3>
    </div>

    <div class=\"dernierArticle\">
        <h3>Dernier article du Blog :</h3>
        ";
        // line 28
        echo "        ";
        if ((null === (isset($context["dernierArticle"]) || array_key_exists("dernierArticle", $context) ? $context["dernierArticle"] : (function () { throw new RuntimeError('Variable "dernierArticle" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "            <p>Aucun article pour l'instant</p>
        ";
        } else {
            // line 31
            echo "            <p class=\"auteurArticle\">
                ";
            // line 38
            echo "                Par le <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_auteur_show", ["idAuteur" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dernierArticle"]) || array_key_exists("dernierArticle", $context) ? $context["dernierArticle"] : (function () { throw new RuntimeError('Variable "dernierArticle" does not exist.', 38, $this->source); })()), "auteur", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dernierArticle"]) || array_key_exists("dernierArticle", $context) ? $context["dernierArticle"] : (function () { throw new RuntimeError('Variable "dernierArticle" does not exist.', 38, $this->source); })()), "auteur", [], "any", false, false, false, 38), "fullName", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
            </p>
            <p class=\"dateArticle\">
                ";
            // line 48
            echo "                le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernierArticle"]) || array_key_exists("dernierArticle", $context) ? $context["dernierArticle"] : (function () { throw new RuntimeError('Variable "dernierArticle" does not exist.', 48, $this->source); })()), "dateCreation", [], "any", false, false, false, 48), "d/m/Y \\à H\\hi"), "html", null, true);
            echo "
            </p>
            ";
            // line 55
            echo "            <h4><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_article_show", ["idArticle" => twig_get_attribute($this->env, $this->source, (isset($context["dernierArticle"]) || array_key_exists("dernierArticle", $context) ? $context["dernierArticle"] : (function () { throw new RuntimeError('Variable "dernierArticle" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernierArticle"]) || array_key_exists("dernierArticle", $context) ? $context["dernierArticle"] : (function () { throw new RuntimeError('Variable "dernierArticle" does not exist.', 55, $this->source); })()), "titre", [], "any", false, false, false, 55), "html", null, true);
            echo "</a></h4>
            <p class=\"articleSumary\">
                ";
            // line 58
            echo "                ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernierArticle"]) || array_key_exists("dernierArticle", $context) ? $context["dernierArticle"] : (function () { throw new RuntimeError('Variable "dernierArticle" does not exist.', 58, $this->source); })()), "contenu", [], "any", false, false, false, 58), 0, 250), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 61
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  150 => 58,  142 => 55,  136 => 48,  127 => 38,  124 => 31,  120 => 29,  117 => 28,  108 => 17,  104 => 15,  97 => 10,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Accueil - {{ parent() }}{% endblock title %}

{% block innerContent %}
    <div class=\"centered\">
        <h3>
            <a href=\"{{ path('myblog_article_showall') }}\">
                {# l'espace non sécable, pour que \"Nos\" et \"articles\" reste bien sur une ligne. #}
                Tous nos&nbsp;articles
            </a>
        </h3>

        <h3>
            <a href=\"{{ path('myblog_auteur_showall') }}\">
                {#  l'espace non sécable, pour que \"Nos\" et \"blogueurs\" reste bien sur une ligne. #}
                Tous nos&nbsp;blogueurs
            </a>
        </h3>
    </div>

    <div class=\"dernierArticle\">
        <h3>Dernier article du Blog :</h3>
        {#
        on teste l'existence d'un dernier article,
        sinon il n'y aura rien à afficher
        #}
        {% if dernierArticle is null %}
            <p>Aucun article pour l'instant</p>
        {% else %}
            <p class=\"auteurArticle\">
                {#
                grace à l'approche objet de symfony, on peut facilement avoir accès à l'auteur d'un article puisqu'ils
                sont liés !
                Aussi connu sous le nom de traversing, cela permet d'afficher l'auteur d'un article sans avoir à faire
                la moindre requète.
                #}
                Par le <a href=\"{{ path('myblog_auteur_show', {idAuteur: dernierArticle.auteur.id}) }}\">{{ dernierArticle.auteur.fullName }}</a>
            </p>
            <p class=\"dateArticle\">
                {#
                Une date bien formatée ne fait jamais de mal, surtout que la fonction date() de twig est là pour ça.
                comment écrire un format tel que \"d/m/Y \\\\à H\\\\hi\" qui afichera quelque chose comme :
                15/04/2021 à 16h18
                tout sur la page date du manuel php :
                https://www.php.net/manual/fr/function.date.php
                #}
                le {{ dernierArticle.dateCreation | date(\"d/m/Y \\\\à H\\\\hi\")  }}
            </p>
            {#
            Le titre de l'article, avec un lien vers la page de l'article grace à la fonction
            path('nom de la route', {parametre1 : valeur1, ...)
            Ici le paramètre est l'id de l'article, nécessaire pour construire la bonne URL
            #}
            <h4><a href=\"{{ path('myblog_article_show', {idArticle: dernierArticle.id} ) }}\">{{ dernierArticle.titre }}</a></h4>
            <p class=\"articleSumary\">
                {#                On ne veut que les 250 premiers caractères de l'article dans l'apperçu #}
                {{ dernierArticle.contenu | slice(0,250) }}
            </p>
        {% endif %}
    </div>
{% endblock innerContent %}", "home/main.html.twig", "/Users/moussaillon/Desktop/symfony/MyBlog/templates/home/main.html.twig");
    }
}
