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

/* layout.html.twig */
class __TwigTemplate_bcefd07d8039beab9744772d7748cc583c9cbb26d1ed2e17f560d92e2ce45af8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'innerContent' => [$this, 'block_innerContent'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <header>
        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/header.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
        <h1>
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_main_home");
        echo "\">
                Bienvenue sur myblog !
            </a>
        </h1>

        <nav class=\"log-nav\">
            ";
        // line 23
        echo "            ";
        // line 24
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 25
            echo "                ";
            // line 26
            echo "                ";
            // line 27
            echo "                <p>Bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "prenom", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
            ";
        } else {
            // line 30
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
                <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Créer un compte</a>
            ";
        }
        // line 33
        echo "        </nav>
    </header>

    <main>
        ";
        // line 38
        echo "        ";
        // line 39
        echo "        ";
        $this->displayBlock('innerContent', $context, $blocks);
        // line 41
        echo "    </main>

    <footer>
        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/footer.jpg"), "html", null, true);
        echo "\" alt=\"footer rust texture\">
        <nav class=\"row\">
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <p><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_quisommesnous");
        echo "\">- Qui sommes nous ?</a></p>
                <p><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_cgv");
        echo "\">- CGV</a></p>
                <p><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_contact");
        echo "\">- Nous contacter</p>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <p><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_values");
        echo "\">- Nos valeur</a></p>
                <p><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_becomeblogguer");
        echo "\">- Devenir blogueur de myblog !</a></p>
                <p><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myblog_jointeam");
        echo "\">- Rejoindre l'équipe</a></p>
            </div>
        </nav>

        <div class=\"copyright\">
            ";
        // line 60
        echo "            ";
        // line 61
        echo "            <p>
                ©DreamFlake 2002 - ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " all right reserved for all countries including Groland
            </p>
        </div>
    </footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_innerContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "innerContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "innerContent"));

        // line 40
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 40,  188 => 39,  172 => 62,  169 => 61,  167 => 60,  159 => 54,  155 => 53,  151 => 52,  145 => 49,  141 => 48,  137 => 47,  131 => 44,  126 => 41,  123 => 39,  121 => 38,  115 => 33,  110 => 31,  105 => 30,  100 => 28,  95 => 27,  93 => 26,  91 => 25,  88 => 24,  86 => 23,  77 => 16,  72 => 14,  69 => 13,  59 => 12,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{#    le template \"layout.html.twig\" étends \"base.html.twig\".#}
{#    On ne réécrit que le bloc \"body\" de base.html.twig.#}

{#    C'est ici qu'on définit le header et le footer qui seront commun aux autres pages.#}
{#    On définit aussi le bloc \"content\", pour pouvoir y placer tous les contenus propres#}
{#    aux différentes pages du projet.#}

{#    Ceci permet de modifier en une fois la mise en forme globale de tout le projet#}
{#    et rends le templating plus fléxible. #}

{% block body %}
    <header>
        <img src=\"{{ asset('image/header.jpg') }}\" alt=\"rust-texture\">
        <h1>
            <a href=\"{{ path(\"myblog_main_home\") }}\">
                Bienvenue sur myblog !
            </a>
        </h1>

        <nav class=\"log-nav\">
            {# Le if ... else ... endif ci-dessous permet d'afficher un contenu différent suivant que l'utilisateur #}
            {# est authentifié (loged-in) ou pas, grace à la fonction is_granted de twig #}
            {% if is_granted('ROLE_USER') %}
                {# Quand un utilisateur est connecté, on peut accéder à l'objet qui le représente dans  #}
                {# app.user, qui est disponible par défaut dans tous les templates  #}
                <p>Bonjour {{ app.user.prenom }}</p>
                <a href=\"{{ path(\"app_logout\") }}\">Déconnexion</a>
            {% else %}
                <a href=\"{{ path('app_login') }}\">Se connecter</a>
                <a href=\"{{ path('app_register') }}\">Créer un compte</a>
            {% endif %}
        </nav>
    </header>

    <main>
        {#         Le bloc content, qu'on crée ici et qu'on laisse vide. #}
        {#           C'est là que viendra s'insérer le contenu affichable propre à chaque template de notre projet #}
        {% block innerContent %}
        {% endblock %}
    </main>

    <footer>
        <img src=\"{{ asset('image/footer.jpg') }}\" alt=\"footer rust texture\">
        <nav class=\"row\">
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <p><a href=\"{{ path('myblog_quisommesnous') }}\">- Qui sommes nous ?</a></p>
                <p><a href=\"{{ path('myblog_cgv') }}\">- CGV</a></p>
                <p><a href=\"{{ path('myblog_contact') }}\">- Nous contacter</p>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <p><a href=\"{{ path('myblog_values') }}\">- Nos valeur</a></p>
                <p><a href=\"{{ path('myblog_becomeblogguer') }}\">- Devenir blogueur de myblog !</a></p>
                <p><a href=\"{{ path('myblog_jointeam') }}\">- Rejoindre l'équipe</a></p>
            </div>
        </nav>

        <div class=\"copyright\">
            {#        Pour avoir un copyright toujours à jours, vive la fonction date() de twig ! #}
            {#        Le  {{ \"now\" | date(\"Y\") }} s'écrirai <?= date_create(\"Y\") ?> en pur php. #}
            <p>
                ©DreamFlake 2002 - {{ \"now\" | date(\"Y\") }} all right reserved for all countries including Groland
            </p>
        </div>
    </footer>

{% endblock %}
", "layout.html.twig", "/Users/moussaillon/Desktop/symfony/MyBlog/templates/layout.html.twig");
    }
}
