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

/* seance/list.html.twig */
class __TwigTemplate_e411a7c44f4ede3dc730cbc43c451d2ceb36914a0aa8878009ed8fef23d0ce2c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "seance/list.html.twig", 1);
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

        echo "Seance index";
        
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

<div class=\"content-block\">
\t\t\t\t\t\t<span class=\"content-title\">Seances  <a href=\"\">+ All Seances</a></span>
\t\t\t\t\t\t<div class=\"news-block\">
                        
";
        // line 12
        $this->loadTemplate("seance/_filtre.html.twig", "seance/list.html.twig", 12)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })())]));
        // line 13
        echo "                         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
            // line 14
            echo "\t\t\t\t\t\t\t<div class=\"news\">
\t\t\t\t\t\t\t\t<div class=\"news-img\">
\t\t\t\t\t\t\t\t\t<a href=\"\"><img src=\"../../front/images/news-img-1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news-text\">
\t\t\t\t\t\t\t\t\t<div class=\"news-text-p\">
\t\t\t\t\t\t\t\t\t\t<span class=\"comments\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "nbrParticipants", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<h2> <b>Seance numéro : </b>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t<p><b>date de la seance : </b> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "date", [], "any", false, false, false, 22), "html", null, true);
            echo " , <b>duree : </b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "duree", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                                        <p><b>prix de la seance : </b>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "prix", [], "any", false, false, false, 23), "html", null, true);
            echo " </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news-info\">
\t\t\t\t\t\t\t\t\t <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skill_seance", ["id" => twig_get_attribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"button\">View Skills</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- news-block -->
\t\t\t\t\t</div><!-- news-block -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "seance/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 32,  131 => 26,  125 => 23,  119 => 22,  115 => 21,  111 => 20,  103 => 14,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Seance index{% endblock %}

{% block body %}


<div class=\"content-block\">
\t\t\t\t\t\t<span class=\"content-title\">Seances  <a href=\"\">+ All Seances</a></span>
\t\t\t\t\t\t<div class=\"news-block\">
                        
{% include 'seance/_filtre.html.twig' with {form : form} only %}
                         {% for seance in seances %}
\t\t\t\t\t\t\t<div class=\"news\">
\t\t\t\t\t\t\t\t<div class=\"news-img\">
\t\t\t\t\t\t\t\t\t<a href=\"\"><img src=\"../../front/images/news-img-1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news-text\">
\t\t\t\t\t\t\t\t\t<div class=\"news-text-p\">
\t\t\t\t\t\t\t\t\t\t<span class=\"comments\">{{ seance.nbrParticipants }}</span>
\t\t\t\t\t\t\t\t\t\t<h2> <b>Seance numéro : </b>{{ seance.id }}</h2>
\t\t\t\t\t\t\t\t\t\t<p><b>date de la seance : </b> {{ seance.date  }} , <b>duree : </b>{{ seance.duree }}</p>
                                        <p><b>prix de la seance : </b>{{ seance.prix  }} </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news-info\">
\t\t\t\t\t\t\t\t\t <a href=\"{{path('app_skill_seance',{'id':seance.id})}}\" class=\"button\">View Skills</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  {% endfor %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- news-block -->
\t\t\t\t\t</div><!-- news-block -->


{% endblock %}
", "seance/list.html.twig", "C:\\Users\\raoun\\Desktop\\metaProject\\templates\\seance\\list.html.twig");
    }
}
