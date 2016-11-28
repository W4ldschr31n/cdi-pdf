<?php

/* ::base.html.twig */
class __TwigTemplate_5bb3e5b4fe0adbe0a573452622d6f9ed4e080b2523b81edd0b4c3f6374e10053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <div id=\"inner-header\">
                <div id=\"logo\">
                    <a href=\"/\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <nav>
                    <ul>
                        <li><a href=\"http://www.univ-nantes.fr/\">Université</a></li>
                        <li><a href=\"\">À propos</a></li>
                        <li><a href=\"\">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id=\"user\">
            <div id=\"inner-user\">
                <img src=\"http://www.buira.org/assets/images/shared/default-profile.png\" alt=\"Photo de profil\" id=\"photo_profil\">
                <p id=\"nom_profil\">Nom de l'utilisateur</p>
            </div>
        </section>
        <div id=\"contenu\">
            ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        </div>
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue - CDI";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  95 => 33,  90 => 6,  84 => 5,  78 => 36,  76 => 35,  73 => 34,  71 => 33,  50 => 15,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Bienvenue - CDI{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" href="{{ asset('css/base.css') }}"/>*/
/*         <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <div id="inner-header">*/
/*                 <div id="logo">*/
/*                     <a href="/"><img src="{{ asset('img/logo.png') }}" /></a>*/
/*                 </div>*/
/*                 <nav>*/
/*                     <ul>*/
/*                         <li><a href="http://www.univ-nantes.fr/">Université</a></li>*/
/*                         <li><a href="">À propos</a></li>*/
/*                         <li><a href="">Contact</a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/*             </div>*/
/*         </header>*/
/*         <section id="user">*/
/*             <div id="inner-user">*/
/*                 <img src="http://www.buira.org/assets/images/shared/default-profile.png" alt="Photo de profil" id="photo_profil">*/
/*                 <p id="nom_profil">Nom de l'utilisateur</p>*/
/*             </div>*/
/*         </section>*/
/*         <div id="contenu">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
