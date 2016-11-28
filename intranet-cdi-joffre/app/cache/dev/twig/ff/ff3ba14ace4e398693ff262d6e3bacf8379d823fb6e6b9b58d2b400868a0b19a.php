<?php

/* AppBundle::accueil.html.twig */
class __TwigTemplate_f3a2a761b15969e8eae447eb8cf6b9d19606443f2d0b557b06941b4ee78f7993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89ca7105a05954ebbeb0e31044b143c12efbd4c3bb4394d1cff9f08f10c373a = $this->env->getExtension("native_profiler");
        $__internal_a89ca7105a05954ebbeb0e31044b143c12efbd4c3bb4394d1cff9f08f10c373a->enter($__internal_a89ca7105a05954ebbeb0e31044b143c12efbd4c3bb4394d1cff9f08f10c373a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89ca7105a05954ebbeb0e31044b143c12efbd4c3bb4394d1cff9f08f10c373a->leave($__internal_a89ca7105a05954ebbeb0e31044b143c12efbd4c3bb4394d1cff9f08f10c373a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49a31205a1d6a4967d1585d5ddcf74d6856b9c81a742ebc2ec33bfa48d52a0d1 = $this->env->getExtension("native_profiler");
        $__internal_49a31205a1d6a4967d1585d5ddcf74d6856b9c81a742ebc2ec33bfa48d52a0d1->enter($__internal_49a31205a1d6a4967d1585d5ddcf74d6856b9c81a742ebc2ec33bfa48d52a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
    <style>
        .bouton {
            border: 2px solid #4e678b;
            border-radius: 3px;
            background-color: white;
            padding: 8px;
            color: #4e678b;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
        }

        .bouton:hover {
            background-color: #4e678b;
            color: white;
        }
    </style>
";
        
        $__internal_49a31205a1d6a4967d1585d5ddcf74d6856b9c81a742ebc2ec33bfa48d52a0d1->leave($__internal_49a31205a1d6a4967d1585d5ddcf74d6856b9c81a742ebc2ec33bfa48d52a0d1_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_19688c922912b1e86050b6c88925202d433a245166dfab8ccf01d0d3add63a99 = $this->env->getExtension("native_profiler");
        $__internal_19688c922912b1e86050b6c88925202d433a245166dfab8ccf01d0d3add63a99->enter($__internal_19688c922912b1e86050b6c88925202d433a245166dfab8ccf01d0d3add63a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    <h1 style=\"text-transform: uppercase; font-size: 20px; text-align: center;\">Bienvenue au Centre de documentation de l'IUT de Nantes</h1>
    <p style=\"margin-top: 20px; text-align:center;\">Bienvenue sur le site de gestion des articles de l'IUT de Nantes. Vous pourrez y rechercher des articles de périodiques selon plusieurs critères.</p>

    <ul style=\"float: center; list-style-type: none; text-align: center;\">
        <li><img width=\"400px\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/screenshot/liste-resultats.png"), "html", null, true);
        echo "\"/></li>
        <li><img width=\"400px\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/screenshot/recherche-avancee.png"), "html", null, true);
        echo "\"/></li>
    </ul>
    <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("connexion");
        echo "\" class=\"bouton\" style=\"display: inline-block; margin: auto;\">Se connecter</a>
";
        
        $__internal_19688c922912b1e86050b6c88925202d433a245166dfab8ccf01d0d3add63a99->leave($__internal_19688c922912b1e86050b6c88925202d433a245166dfab8ccf01d0d3add63a99_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  84 => 30,  80 => 29,  74 => 25,  68 => 24,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/base.css') }}"/>*/
/*     <style>*/
/*         .bouton {*/
/*             border: 2px solid #4e678b;*/
/*             border-radius: 3px;*/
/*             background-color: white;*/
/*             padding: 8px;*/
/*             color: #4e678b;*/
/*             font-weight: bold;*/
/*             display: inline-block;*/
/*             margin-top: 20px;*/
/*         }*/
/* */
/*         .bouton:hover {*/
/*             background-color: #4e678b;*/
/*             color: white;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1 style="text-transform: uppercase; font-size: 20px; text-align: center;">Bienvenue au Centre de documentation de l'IUT de Nantes</h1>*/
/*     <p style="margin-top: 20px; text-align:center;">Bienvenue sur le site de gestion des articles de l'IUT de Nantes. Vous pourrez y rechercher des articles de périodiques selon plusieurs critères.</p>*/
/* */
/*     <ul style="float: center; list-style-type: none; text-align: center;">*/
/*         <li><img width="400px" src="{{ asset('img/screenshot/liste-resultats.png') }}"/></li>*/
/*         <li><img width="400px" src="{{ asset('img/screenshot/recherche-avancee.png') }}"/></li>*/
/*     </ul>*/
/*     <a href="{{ path('connexion') }}" class="bouton" style="display: inline-block; margin: auto;">Se connecter</a>*/
/* {% endblock %}*/
/* */
