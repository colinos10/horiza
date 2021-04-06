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

/* contact/emailContact.html.twig */
class __TwigTemplate_9b85768280d7394cb7f30954ec3979f155f2f158c3a2f03f62c21113583f2909 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/emailContact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/emailContact.html.twig"));

        // line 1
        echo "<p>
    <b>Coordonnées du contact</b>
    <ul>
        <li>Nom : ";
        // line 4
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 4, $this->source); })())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</li>
        <li>Email : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</li>
    </ul>
</p>

<p><b>Objet : </b>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["objet"]) || array_key_exists("objet", $context) ? $context["objet"] : (function () { throw new RuntimeError('Variable "objet" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</p>

<p><b>Message :</b></p>
<p>";
        // line 12
        echo nl2br(twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 12, $this->source); })()), "html", null, true));
        echo "</p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/emailContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  61 => 9,  54 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>
    <b>Coordonnées du contact</b>
    <ul>
        <li>Nom : {{ nom|upper }} {{ prenom }}</li>
        <li>Email : {{ email }}</li>
    </ul>
</p>

<p><b>Objet : </b>{{ objet }}</p>

<p><b>Message :</b></p>
<p>{{ message|nl2br }}</p>", "contact/emailContact.html.twig", "C:\\xampp\\htdocs\\horiza\\templates\\contact\\emailContact.html.twig");
    }
}
