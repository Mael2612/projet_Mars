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

/* article/showAll.html.twig */
class __TwigTemplate_fc254a9a08a1878acaa076ad954f2634259d47a3f243ce59bac55df24f3e8cdb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/showAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/showAll.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "article/showAll.html.twig", 1);
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

        echo "Articles - ";
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
        echo "    <h2>Tous nos articles</h2>

    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 9
            echo "        <h3>
            <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_article_create");
            echo "\">+ ajouter un article</a>
        </h3>
    ";
        }
        // line 13
        echo "

    ";
        // line 15
        if (twig_test_empty((isset($context["allArticles"]) || array_key_exists("allArticles", $context) ? $context["allArticles"] : (function () { throw new RuntimeError('Variable "allArticles" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "        ";
            // line 23
            echo "        <h3> Il n'y a aucun article pour l'instant. </h3>
    ";
        } else {
            // line 25
            echo "        <table class=\"table table-striped table-hover\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Créé le</th>
                <th>Auteur</th>
                ";
            // line 32
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 33
                echo "                    <th>Action</th>
                ";
            }
            // line 35
            echo "            </tr>
            </thead>
            <tbody>
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allArticles"]) || array_key_exists("allArticles", $context) ? $context["allArticles"] : (function () { throw new RuntimeError('Variable "allArticles" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 39
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_article_show", ["idArticle" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">
                                ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 42), "html", null, true);
                echo "
                            </a>
                        </td>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 45), 0, 120), "html", null, true);
                echo "...</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateEdition", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_auteur_show", ["idAuteur" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "auteur", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">
                                ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "auteur", [], "any", false, false, false, 49), "fullname", [], "any", false, false, false, 49), "html", null, true);
                echo "
                            </a>
                        </td>
                        ";
                // line 52
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                    // line 53
                    echo "                            <td>
                                ";
                    // line 54
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, $context["article"], "createur", [], "any", false, false, false, 54)))) {
                        // line 55
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_article_remove", ["idArticle" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                        echo "\">
                                        Supprimer
                                    </a>
                                    |
                                    <a href=\"";
                        // line 59
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_article_update", ["idArticle" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                        echo "\">
                                        Éditer
                                    </a>
                                ";
                    }
                    // line 63
                    echo "                            </td>
                        ";
                }
                // line 65
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </tbody>
        </table>
    ";
        }
        // line 70
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 70,  206 => 67,  199 => 65,  195 => 63,  188 => 59,  180 => 55,  178 => 54,  175 => 53,  173 => 52,  167 => 49,  163 => 48,  158 => 46,  154 => 45,  148 => 42,  144 => 41,  140 => 39,  136 => 38,  131 => 35,  127 => 33,  125 => 32,  116 => 25,  112 => 23,  110 => 16,  108 => 15,  104 => 13,  98 => 10,  95 => 9,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Articles - {{ parent() }}{% endblock title %}

{% block innerContent %}
    <h2>Tous nos articles</h2>

    {% if is_granted('ROLE_USER') %}
        <h3>
            <a href=\"{{ path('myblog_article_create') }}\">+ ajouter un article</a>
        </h3>
    {% endif %}


    {% if allArticles is empty  %}
        {#
        S'il n'y a aucun article, inutile d'afficher un tableau,
        un message de circonstance suffit.
        Notez le \" if <variable> is empty \", pour déterminer si un tableau
        est vide.
        Et même pas besoin de parenthèse.
        #}
        <h3> Il n'y a aucun article pour l'instant. </h3>
    {% else %}
        <table class=\"table table-striped table-hover\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Créé le</th>
                <th>Auteur</th>
                {% if is_granted('ROLE_USER') %}
                    <th>Action</th>
                {% endif %}
            </tr>
            </thead>
            <tbody>
                {% for article in allArticles %}
                    <tr>
                        <td>
                            <a href=\"{{ path(\"myblog_article_show\", { idArticle : article.id }) }}\">
                                {{ article.titre }}
                            </a>
                        </td>
                        <td>{{ article.contenu | slice(0, 120) }}...</td>
                        <td>{{ article.dateEdition | date(\"d/m/Y\") }}</td>
                        <td>
                            <a href=\"{{ path('myblog_auteur_show', {idAuteur: article.auteur.id }) }}\">
                                {{ article.auteur.fullname }}
                            </a>
                        </td>
                        {% if is_granted('ROLE_USER') %}
                            <td>
                                {% if app.user == article.createur %}
                                    <a href=\"{{ path(\"myblog_article_remove\", { idArticle: article.id }) }}\">
                                        Supprimer
                                    </a>
                                    |
                                    <a href=\"{{ path(\"myblog_article_update\", { idArticle: article.id }) }}\">
                                        Éditer
                                    </a>
                                {% endif %}
                            </td>
                        {% endif %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

{% endblock innerContent %}



{#





#}", "article/showAll.html.twig", "/Users/moussaillon/Desktop/symfony/MyBlog/templates/article/showAll.html.twig");
    }
}
