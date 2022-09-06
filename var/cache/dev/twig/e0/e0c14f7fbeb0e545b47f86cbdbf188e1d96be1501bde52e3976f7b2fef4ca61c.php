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
class __TwigTemplate_a9387c616c797e4f4b5697ca02d9fe9483237b254c7e705f73774b9ea62832a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<!--[if lt IE 9]><script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script><![endif]-->
\t<title>Hearthstone Website HTML Template</title>
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"description\" content=\"\" />
\t<meta name=\"viewport\" content=\"width=1280, maximum-scale=1\">
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">
    <link href=\"../../../front/css/css-reset.css\" rel=\"stylesheet\">
    <link href=\"../../../front/css/style.css\" rel=\"stylesheet\">
</head>

<body>
\t<div class=\"top-panel\">
\t\t<div class=\"top-panel-wrapper\">
\t\t\t<ul class=\"menu\">
\t\t\t\t<li class=\"active\"><a href=\"\">Home</a></li>
\t\t\t\t<li><a href=\"\">Decks</a></li>
\t\t\t\t<li><a href=\"\">Articles</a></li>
\t\t\t\t<li><a href=\"\">Forum</a></li>
\t\t\t\t<li><a href=\"\">Tournaments</a></li>
\t\t\t\t<li><a href=\"\">Guides</a></li>
\t\t\t\t<li><a href=\"\">Media</a></li>
\t\t\t\t<li><a href=\"\">About Us</a></li>
\t\t\t</ul><!-- menu -->
\t\t\t<div class=\"right-top-block\">
\t\t\t\t<div class=\"lang-block\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"main-item\"> Language <span>(eng)</span> <img src=\"images/united-states.png\" alt=\"\"></a>
\t\t\t\t\t<ul class=\"hidden-block\">
\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> English <img src=\"images/united-states.png\" alt=\"\"></a></li>
\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> German <img src=\"images/germany.png\" alt=\"\"></a></li>
\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> French <img src=\"images/france.png\" alt=\"\"></a></li>
\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> Russian <img src=\"images/russia.png\" alt=\"\"></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<a href=\"\" class=\"login\">Login</a>
\t\t\t</div><!-- right-top-block -->
\t\t</div>
\t</div><!-- top-panel -->
\t<div class=\"wrapper\">

\t\t<header class=\"header\">
\t\t\t<div class=\"header-menu flex\">
\t\t\t\t<div class=\"soc-block\">
\t\t\t\t\t<a href=\"\" class=\"fb\" target=\"_blank\"><i></i> Facebook</a> <a href=\"\" class=\"tw\" target=\"_blank\"><i></i> Twitter</a> <a href=\"\" class=\"yt\" target=\"_blank\"><i></i> Youtube</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-block\">
\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"SEARCH...\"> <button></button>
\t\t\t\t</div>
\t\t\t</div><!-- header-menu -->
\t\t</header><!-- .header-->

\t\t\t<div class=\"container\">
\t\t\t\t<main class=\"content\">


        ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "         </main>
        </div>
       
\t<footer class=\"footer\">
\t\t\t<div id=\"toTop\">
\t\t\t</div>
\t\t\t<div class=\"f-top\">
\t\t\t\t<img src=\"../../front/images/f-logo.png\" alt=\"\">
\t\t\t\t<div class=\"f-menu-block\">
\t\t\t\t\t<ul class=\"f-menu\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"\">Decks</a></li>
\t\t\t\t\t\t<li><a href=\"\">Articles</a></li>
\t\t\t\t\t\t<li><a href=\"\">Forum</a></li>
\t\t\t\t\t\t<li><a href=\"\">Tournaments</a></li>
\t\t\t\t\t\t<li><a href=\"\">Guides</a></li>
\t\t\t\t\t\t<li><a href=\"\">Media</a></li>
\t\t\t\t\t\t<li><a href=\"\">About Us</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"lang-block\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"main-item\"> Language <span>(eng)</span> <img src=\"images/united-states.png\" alt=\"\"></a>
\t\t\t\t\t\t<ul class=\"hidden-block\">
\t\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> English <img src=\"../../front/images/united-states.png\" alt=\"\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> German <img src=\"../../front/images/germany.png\" alt=\"\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> French <img src=\"../../front/images/france.png\" alt=\"\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> Russian <img src=\"../../front/images/russia.png\" alt=\"\"></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!-- f-top -->
\t\t\t<div class=\"f-bottom\">
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\tCopyright 2018 © <a href=\"\">SiteName.com</a> <br>
\t\t\t\t\tFan site is designed to familiarize <br>
\t\t\t\t\twith the game.
\t\t\t\t</div>
\t\t\t\t<div class=\"design\">
\t\t\t\t\tDesigned by <a href=\"http://dkarts.studio\" target=\"_blank\">DKarts.Studio</a> <br>
\t\t\t\t\t\tfor <a href=\"https://templstock.com\" target=\"_blank\">Templstock.com</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer><!-- .footer -->

\t</div><!-- .wrapper -->
\t<script src=\"../../../front/js/jquery-2.1.4.min.js\"></script>
\t<script src=\"../../../front/js/slider.js\"></script>
\t<script>
\t\t\$(function() {
\t\t\t\$(window).scroll(function() {
\t\t\t\tif(\$(this).scrollTop() != 0) {
\t\t\t\t\$('#toTop').fadeIn();
\t\t\t\t} else {
\t\t\t\t\$('#toTop').fadeOut();
\t\t\t}
\t\t\t});
\t\t\t\t\$('#toTop').click(function() {
\t\t\t\t\$('body,html').animate({scrollTop:0},800);
\t\t\t});
\t\t});
\t</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 63,  110 => 64,  108 => 63,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<!--[if lt IE 9]><script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script><![endif]-->
\t<title>Hearthstone Website HTML Template</title>
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"description\" content=\"\" />
\t<meta name=\"viewport\" content=\"width=1280, maximum-scale=1\">
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">
    <link href=\"../../../front/css/css-reset.css\" rel=\"stylesheet\">
    <link href=\"../../../front/css/style.css\" rel=\"stylesheet\">
</head>

<body>
\t<div class=\"top-panel\">
\t\t<div class=\"top-panel-wrapper\">
\t\t\t<ul class=\"menu\">
\t\t\t\t<li class=\"active\"><a href=\"\">Home</a></li>
\t\t\t\t<li><a href=\"\">Decks</a></li>
\t\t\t\t<li><a href=\"\">Articles</a></li>
\t\t\t\t<li><a href=\"\">Forum</a></li>
\t\t\t\t<li><a href=\"\">Tournaments</a></li>
\t\t\t\t<li><a href=\"\">Guides</a></li>
\t\t\t\t<li><a href=\"\">Media</a></li>
\t\t\t\t<li><a href=\"\">About Us</a></li>
\t\t\t</ul><!-- menu -->
\t\t\t<div class=\"right-top-block\">
\t\t\t\t<div class=\"lang-block\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"main-item\"> Language <span>(eng)</span> <img src=\"images/united-states.png\" alt=\"\"></a>
\t\t\t\t\t<ul class=\"hidden-block\">
\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> English <img src=\"images/united-states.png\" alt=\"\"></a></li>
\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> German <img src=\"images/germany.png\" alt=\"\"></a></li>
\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> French <img src=\"images/france.png\" alt=\"\"></a></li>
\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> Russian <img src=\"images/russia.png\" alt=\"\"></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<a href=\"\" class=\"login\">Login</a>
\t\t\t</div><!-- right-top-block -->
\t\t</div>
\t</div><!-- top-panel -->
\t<div class=\"wrapper\">

\t\t<header class=\"header\">
\t\t\t<div class=\"header-menu flex\">
\t\t\t\t<div class=\"soc-block\">
\t\t\t\t\t<a href=\"\" class=\"fb\" target=\"_blank\"><i></i> Facebook</a> <a href=\"\" class=\"tw\" target=\"_blank\"><i></i> Twitter</a> <a href=\"\" class=\"yt\" target=\"_blank\"><i></i> Youtube</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-block\">
\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"SEARCH...\"> <button></button>
\t\t\t\t</div>
\t\t\t</div><!-- header-menu -->
\t\t</header><!-- .header-->

\t\t\t<div class=\"container\">
\t\t\t\t<main class=\"content\">


        {% block body %}{% endblock %}
         </main>
        </div>
       
\t<footer class=\"footer\">
\t\t\t<div id=\"toTop\">
\t\t\t</div>
\t\t\t<div class=\"f-top\">
\t\t\t\t<img src=\"../../front/images/f-logo.png\" alt=\"\">
\t\t\t\t<div class=\"f-menu-block\">
\t\t\t\t\t<ul class=\"f-menu\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"\">Decks</a></li>
\t\t\t\t\t\t<li><a href=\"\">Articles</a></li>
\t\t\t\t\t\t<li><a href=\"\">Forum</a></li>
\t\t\t\t\t\t<li><a href=\"\">Tournaments</a></li>
\t\t\t\t\t\t<li><a href=\"\">Guides</a></li>
\t\t\t\t\t\t<li><a href=\"\">Media</a></li>
\t\t\t\t\t\t<li><a href=\"\">About Us</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"lang-block\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"main-item\"> Language <span>(eng)</span> <img src=\"images/united-states.png\" alt=\"\"></a>
\t\t\t\t\t\t<ul class=\"hidden-block\">
\t\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> English <img src=\"../../front/images/united-states.png\" alt=\"\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> German <img src=\"../../front/images/germany.png\" alt=\"\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> French <img src=\"../../front/images/france.png\" alt=\"\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"\" class=\"main-item\"> Russian <img src=\"../../front/images/russia.png\" alt=\"\"></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!-- f-top -->
\t\t\t<div class=\"f-bottom\">
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\tCopyright 2018 © <a href=\"\">SiteName.com</a> <br>
\t\t\t\t\tFan site is designed to familiarize <br>
\t\t\t\t\twith the game.
\t\t\t\t</div>
\t\t\t\t<div class=\"design\">
\t\t\t\t\tDesigned by <a href=\"http://dkarts.studio\" target=\"_blank\">DKarts.Studio</a> <br>
\t\t\t\t\t\tfor <a href=\"https://templstock.com\" target=\"_blank\">Templstock.com</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer><!-- .footer -->

\t</div><!-- .wrapper -->
\t<script src=\"../../../front/js/jquery-2.1.4.min.js\"></script>
\t<script src=\"../../../front/js/slider.js\"></script>
\t<script>
\t\t\$(function() {
\t\t\t\$(window).scroll(function() {
\t\t\t\tif(\$(this).scrollTop() != 0) {
\t\t\t\t\$('#toTop').fadeIn();
\t\t\t\t} else {
\t\t\t\t\$('#toTop').fadeOut();
\t\t\t}
\t\t\t});
\t\t\t\t\$('#toTop').click(function() {
\t\t\t\t\$('body,html').animate({scrollTop:0},800);
\t\t\t});
\t\t});
\t</script>
</body>
</html>", "base.html.twig", "C:\\Users\\raoun\\Desktop\\metaProject\\templates\\base.html.twig");
    }
}
