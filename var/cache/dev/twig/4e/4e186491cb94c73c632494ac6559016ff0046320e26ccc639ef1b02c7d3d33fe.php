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

/* auteur/showAll.html.twig */
class __TwigTemplate_8e64b2c87631c4bef831cc1893f031eeb47d5fe664413fc08f2bac8e5afa0b6c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/showAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/showAll.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "auteur/showAll.html.twig", 1);
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

        echo "Auteurs - ";
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
        echo "    <h2>Tous nos auteurs</h2>
    ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 8
            echo "        <h3>
            <a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_auteur_create");
            echo "\">+ ajouter un auteur</a>
        </h3>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (twig_test_empty((isset($context["allAuteurs"]) || array_key_exists("allAuteurs", $context) ? $context["allAuteurs"] : (function () { throw new RuntimeError('Variable "allAuteurs" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "        <h3> Il n'y a aucun auteur pour l'instant. </h3>
    ";
        } else {
            // line 16
            echo "        <table class=\"table table-striped table-hover\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Nom</th>
                <th>Bio</th>
                <th>Date de naissance</th>
                ";
            // line 22
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 23
                echo "                    <th>Action</th>
                ";
            }
            // line 25
            echo "            </tr>
            </thead>
            <tbody>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allAuteurs"]) || array_key_exists("allAuteurs", $context) ? $context["allAuteurs"] : (function () { throw new RuntimeError('Variable "allAuteurs" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
                // line 29
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_auteur_show", ["idAuteur" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">
                                ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "fullName", [], "any", false, false, false, 32), "html", null, true);
                echo "
                            </a>
                        </td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "bio", [], "any", false, false, false, 35), 0, 120), "html", null, true);
                echo "...</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "dateNaissance", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
                echo "</td>
                        ";
                // line 37
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                    // line 38
                    echo "                            <td>
                                <a href=\"#\" class=\"suppr-auteur\" data-src=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_auteur_remove", ["idAuteur" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                    echo "\">
                                    Supprimer
                                </a>
                                |
                                <a href=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_auteur_update", ["idAuteur" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                    echo "\">
                                    Éditer
                                </a>
                            </td>
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function ()
        {

            \$(\".suppr-auteur\").on(\"click\", function (event)
            {
                //event.preventDefault() ;
                \$(this).parents(\"tr\").fadeOut('slow', function()
                {
                    \$(this).remove() ;
                }) ;
                console.warn(\"click on : \", event.target) ;
            }) ;
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auteur/showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 56,  198 => 55,  185 => 50,  178 => 48,  170 => 43,  163 => 39,  160 => 38,  158 => 37,  154 => 36,  150 => 35,  144 => 32,  140 => 31,  136 => 29,  132 => 28,  127 => 25,  123 => 23,  121 => 22,  113 => 16,  109 => 14,  107 => 13,  104 => 12,  98 => 9,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Auteurs - {{ parent() }}{% endblock title %}

{% block innerContent %}
    <h2>Tous nos auteurs</h2>
    {% if is_granted('ROLE_USER') %}
        <h3>
            <a href=\"{{ path('myblog_auteur_create') }}\">+ ajouter un auteur</a>
        </h3>
    {% endif %}

    {% if allAuteurs is empty  %}
        <h3> Il n'y a aucun auteur pour l'instant. </h3>
    {% else %}
        <table class=\"table table-striped table-hover\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Nom</th>
                <th>Bio</th>
                <th>Date de naissance</th>
                {% if is_granted('ROLE_USER') %}
                    <th>Action</th>
                {% endif %}
            </tr>
            </thead>
            <tbody>
                {% for auteur in allAuteurs %}
                    <tr>
                        <td>
                            <a href=\"{{ path(\"myblog_auteur_show\", { idAuteur : auteur.id }) }}\">
                                {{ auteur.fullName }}
                            </a>
                        </td>
                        <td>{{ auteur.bio | slice(0, 120) }}...</td>
                        <td>{{ auteur.dateNaissance | date(\"d/m/Y\") }}</td>
                        {% if is_granted('ROLE_USER') %}
                            <td>
                                <a href=\"#\" class=\"suppr-auteur\" data-src=\"{{ path(\"myblog_auteur_remove\", { idAuteur: auteur.id }) }}\">
                                    Supprimer
                                </a>
                                |
                                <a href=\"{{ path(\"myblog_auteur_update\", { idAuteur: auteur.id }) }}\">
                                    Éditer
                                </a>
                            </td>
                        {% endif %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock innerContent %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function ()
        {

            \$(\".suppr-auteur\").on(\"click\", function (event)
            {
                //event.preventDefault() ;
                \$(this).parents(\"tr\").fadeOut('slow', function()
                {
                    \$(this).remove() ;
                }) ;
                console.warn(\"click on : \", event.target) ;
            }) ;
        })
    </script>
{% endblock javascripts %}






{#





#}", "auteur/showAll.html.twig", "/Users/moussaillon/Desktop/symfony/MyBlog/templates/auteur/showAll.html.twig");
    }
}
