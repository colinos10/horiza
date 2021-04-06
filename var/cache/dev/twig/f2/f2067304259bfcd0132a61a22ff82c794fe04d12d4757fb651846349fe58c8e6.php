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

/* home/index.html.twig */
class __TwigTemplate_8a7b16ae1fd035837ec73061af2174e110384cd8ef3f89e42478c3c4a852b3f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <header>
        
        
        <div class=\"pos-f-t\">

            <nav class=\"navbar navbar-dark bg-info\">
             <a href=\"http://localhost/horiza/public/\" class=\"liens-a\"><img src=\"https://cdn.discordapp.com/attachments/811996014566572055/827465660284010516/horiza-logo-2.png\" alt=\"Logo\" class=\"logo\"/></a>
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>
            </nav>

            <div class=\"collapse\" id=\"navbarToggleExternalContent\">
                <div class=\"bg-info p-4 nav-secret\" >
                  <a href=\"#\" class=\"text-white\">Rechercher</a>
                  <a href=\"#\" class=\"text-white\">Louer un véhicule</a>
                  <a href=\"#\" class=\"text-white\">Déposer une annonce</a>
                  <a href=\"#\" class=\"text-white\">S'inscrire</a>
                  <a href=\"#\" class=\"text-white\">Se connecter</a>
                  
                </div>
              </div>

          </div>
    </header>

    <main class\"container-fluid bg-info\">
        <form class=\"col ml-3 mb-2\" role=\"search\">
            <div>
                <label for=\"main-q\" class=\"visually-hidden\">Type de véhicule</label>
                <select name=\"\" id=\"\">
                    <option value=\"\">Choisissez un type de véhicule dans la liste</option>
                    <option value=\"\">Camping-car</option>
                    <option value=\"\">Van</option>
                </select>
            </div>
            <div>
                <label for=\"main-q\" class=\"visually-hidden\">Où voulez-vous louer ?</label>
                <select name=\"\" id=\"\">
                    <option value=\"\">Choisissez une ville dans la liste</option>
                    <option value=\"\">Lille</option>
                    <option value=\"\">Saint-Quentin</option>
                    <option value=\"\">Paris</option>
                    <option value=\"\">Rouen</option>
                    <option value=\"\">Caen</option>
                    <option value=\"\">Strasbourg</option>
                    <option value=\"\">Troyes</option>
                    <option value=\"\">Rennes</option>
                    <option value=\"\">Brest</option>
                    <option value=\"\">Dijon</option>
                    <option value=\"\">Orléans</option>
                    <option value=\"\">Tours</option>
                    <option value=\"\">Nantes</option>
                    <option value=\"\">Clermont-Ferrand</option>
                    <option value=\"\">Lyon</option>
                    <option value=\"\">Poitiers</option>
                    <option value=\"\">Brive-la-Gaillarde</option>
                    <option value=\"\">Bordeaux</option>
                    <option value=\"\">Montpellier</option>
                    <option value=\"\">Toulouse</option>
                    <option value=\"\">Avignon</option>
                    <option value=\"\">Marseille</option>
                    <option value=\"\">Ajaccio</option>
                </select>
            </div>
                <button class=\"text-right text-dark\">Rechercher</button>
        </form>    
    </main>

    <footer class=\"container-fluid bg-info\">
        <div class=\"row text-center d-flex justify-content-around\" href=\"http://localhost/horiza/public/\">
            <div type=\"button\" >
                <p>Rechercher</p>
                <i class=\"fab fa-sistrix\"></i>
            </div>
            ";
        // line 86
        echo "            <div type=\"button\">
                <p>Publier</p>
                <i class=\"far fa-comment\"></i>
            </div>
            ";
        // line 94
        echo "            <div type=\"button\">
                <p>Mon compte</p>
                <i class=\"far fa-user\"></i>
            </div>
        </div>
    </footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 94,  166 => 86,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    <header>
        
        
        <div class=\"pos-f-t\">

            <nav class=\"navbar navbar-dark bg-info\">
             <a href=\"http://localhost/horiza/public/\" class=\"liens-a\"><img src=\"https://cdn.discordapp.com/attachments/811996014566572055/827465660284010516/horiza-logo-2.png\" alt=\"Logo\" class=\"logo\"/></a>
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>
            </nav>

            <div class=\"collapse\" id=\"navbarToggleExternalContent\">
                <div class=\"bg-info p-4 nav-secret\" >
                  <a href=\"#\" class=\"text-white\">Rechercher</a>
                  <a href=\"#\" class=\"text-white\">Louer un véhicule</a>
                  <a href=\"#\" class=\"text-white\">Déposer une annonce</a>
                  <a href=\"#\" class=\"text-white\">S'inscrire</a>
                  <a href=\"#\" class=\"text-white\">Se connecter</a>
                  
                </div>
              </div>

          </div>
    </header>

    <main class\"container-fluid bg-info\">
        <form class=\"col ml-3 mb-2\" role=\"search\">
            <div>
                <label for=\"main-q\" class=\"visually-hidden\">Type de véhicule</label>
                <select name=\"\" id=\"\">
                    <option value=\"\">Choisissez un type de véhicule dans la liste</option>
                    <option value=\"\">Camping-car</option>
                    <option value=\"\">Van</option>
                </select>
            </div>
            <div>
                <label for=\"main-q\" class=\"visually-hidden\">Où voulez-vous louer ?</label>
                <select name=\"\" id=\"\">
                    <option value=\"\">Choisissez une ville dans la liste</option>
                    <option value=\"\">Lille</option>
                    <option value=\"\">Saint-Quentin</option>
                    <option value=\"\">Paris</option>
                    <option value=\"\">Rouen</option>
                    <option value=\"\">Caen</option>
                    <option value=\"\">Strasbourg</option>
                    <option value=\"\">Troyes</option>
                    <option value=\"\">Rennes</option>
                    <option value=\"\">Brest</option>
                    <option value=\"\">Dijon</option>
                    <option value=\"\">Orléans</option>
                    <option value=\"\">Tours</option>
                    <option value=\"\">Nantes</option>
                    <option value=\"\">Clermont-Ferrand</option>
                    <option value=\"\">Lyon</option>
                    <option value=\"\">Poitiers</option>
                    <option value=\"\">Brive-la-Gaillarde</option>
                    <option value=\"\">Bordeaux</option>
                    <option value=\"\">Montpellier</option>
                    <option value=\"\">Toulouse</option>
                    <option value=\"\">Avignon</option>
                    <option value=\"\">Marseille</option>
                    <option value=\"\">Ajaccio</option>
                </select>
            </div>
                <button class=\"text-right text-dark\">Rechercher</button>
        </form>    
    </main>

    <footer class=\"container-fluid bg-info\">
        <div class=\"row text-center d-flex justify-content-around\" href=\"http://localhost/horiza/public/\">
            <div type=\"button\" >
                <p>Rechercher</p>
                <i class=\"fab fa-sistrix\"></i>
            </div>
            {# <div type=\"button\">
                <p>Favoris</p>
                <i class=\"far fa-heart\"></i>
            </div> #}
            <div type=\"button\">
                <p>Publier</p>
                <i class=\"far fa-comment\"></i>
            </div>
            {# <div type=\"button\">
                <p>Voyages</p>
                <i class=\"fas fa-shuttle-van\"></i>
            </div> #}
            <div type=\"button\">
                <p>Mon compte</p>
                <i class=\"far fa-user\"></i>
            </div>
        </div>
    </footer>

{% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\horiza\\templates\\home\\index.html.twig");
    }
}
