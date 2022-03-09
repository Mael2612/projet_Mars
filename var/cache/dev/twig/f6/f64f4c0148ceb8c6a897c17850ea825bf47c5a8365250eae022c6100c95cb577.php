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

/* statique/quiSommesNous.html.twig */
class __TwigTemplate_230b8ed412cb83ada1f944d0566e9613ca9fa6a9b1552548e26b756a0ac8f418 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statique/quiSommesNous.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statique/quiSommesNous.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "statique/quiSommesNous.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_innerContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "innerContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "innerContent"));

        // line 3
        echo "    <div class=\"page-statique\">
        <h2>Qui sommes nous ?</h2>
        <br>
            <p class=\"text-block first\">
                Quentin a décidé de fonder MonBlog alors que le web était encore bébé. Une idée simple mais efficace : et si on offrait à n'importe qui les moyens d'écrire n'importe quoi ? Il commence
                à faire des prototypes grâce à son modem 56 bauds, un minitel électronique, sa tondeuse à gazon diesel et des connaissances en FORTRAN.
            </p>
            <p class=\"text-block\">Vite rejoint par Martin, un ancien
                de la dataviz blockchain temps réelle en deep learning asynchrone, le projet prend une nouvelle ampleur. Pour cet as de la technique, c'est sûr, on peut faire un site fiable et moderne
                en moins d'une semaine en utilisant le framework <a href=\"https://symfony.com/doc/current/index.html#gsc.tab=0\">Symfony!</a> Disciple de Fabien Potencier, qu'il tient pour le cyber-messie du
                <a href=\"https://fr.wikipedia.org/wiki/Modèle-vue-contrôleur\">MVC</a>, il règle l'affaire en seulement 5 jours. </p>
            <p class=\"text-block\">
                le 20/02/2002, Quentin et Martin lancent MonBlog dans un état d'excitation de 18,9 sur l'échelle de Fukushima.
            </p>
            <p class=\"text-block\">
                C'est le succès dès la première heure : il ne s'est jamais démenti !
            </p>

        <div class=\"quote\">
            <p>
                \" Entre internet et nous, c'est un peu le big love total. \"
            </p>
            <p class=\"quoter\">
                Quentin Starteupe, Business Marketing Operative CEO de MonBlog
            </p>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "statique/quiSommesNous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block innerContent  %}
    <div class=\"page-statique\">
        <h2>Qui sommes nous ?</h2>
        <br>
            <p class=\"text-block first\">
                Quentin a décidé de fonder MonBlog alors que le web était encore bébé. Une idée simple mais efficace : et si on offrait à n'importe qui les moyens d'écrire n'importe quoi ? Il commence
                à faire des prototypes grâce à son modem 56 bauds, un minitel électronique, sa tondeuse à gazon diesel et des connaissances en FORTRAN.
            </p>
            <p class=\"text-block\">Vite rejoint par Martin, un ancien
                de la dataviz blockchain temps réelle en deep learning asynchrone, le projet prend une nouvelle ampleur. Pour cet as de la technique, c'est sûr, on peut faire un site fiable et moderne
                en moins d'une semaine en utilisant le framework <a href=\"https://symfony.com/doc/current/index.html#gsc.tab=0\">Symfony!</a> Disciple de Fabien Potencier, qu'il tient pour le cyber-messie du
                <a href=\"https://fr.wikipedia.org/wiki/Modèle-vue-contrôleur\">MVC</a>, il règle l'affaire en seulement 5 jours. </p>
            <p class=\"text-block\">
                le 20/02/2002, Quentin et Martin lancent MonBlog dans un état d'excitation de 18,9 sur l'échelle de Fukushima.
            </p>
            <p class=\"text-block\">
                C'est le succès dès la première heure : il ne s'est jamais démenti !
            </p>

        <div class=\"quote\">
            <p>
                \" Entre internet et nous, c'est un peu le big love total. \"
            </p>
            <p class=\"quoter\">
                Quentin Starteupe, Business Marketing Operative CEO de MonBlog
            </p>
        </div>
    </div>

{% endblock%}", "statique/quiSommesNous.html.twig", "/Users/moussaillon/Desktop/symfony/MyBlog/templates/statique/quiSommesNous.html.twig");
    }
}
