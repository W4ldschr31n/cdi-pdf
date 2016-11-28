<?php

/* AppBundle::administration.html.twig */
class __TwigTemplate_4948862fcb962286d6c13d9ac6b23d74183e1822d569f01013c8b67d4f6afff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::administration.html.twig", 1);
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
        $__internal_66f02b94adf83e5c05f1ed613742ddbaa9d306581f4291f4d3663d4556451b51 = $this->env->getExtension("native_profiler");
        $__internal_66f02b94adf83e5c05f1ed613742ddbaa9d306581f4291f4d3663d4556451b51->enter($__internal_66f02b94adf83e5c05f1ed613742ddbaa9d306581f4291f4d3663d4556451b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::administration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f02b94adf83e5c05f1ed613742ddbaa9d306581f4291f4d3663d4556451b51->leave($__internal_66f02b94adf83e5c05f1ed613742ddbaa9d306581f4291f4d3663d4556451b51_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_890b7dd2ef90b28c828230733c95f7130c8442fae66a0639dd181bb2ac3416b3 = $this->env->getExtension("native_profiler");
        $__internal_890b7dd2ef90b28c828230733c95f7130c8442fae66a0639dd181bb2ac3416b3->enter($__internal_890b7dd2ef90b28c828230733c95f7130c8442fae66a0639dd181bb2ac3416b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/administration.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_890b7dd2ef90b28c828230733c95f7130c8442fae66a0639dd181bb2ac3416b3->leave($__internal_890b7dd2ef90b28c828230733c95f7130c8442fae66a0639dd181bb2ac3416b3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f97d5f665c1e8229008a976c2ef09bc07fd96d6e7ee9ec80017a7cf45e519346 = $this->env->getExtension("native_profiler");
        $__internal_f97d5f665c1e8229008a976c2ef09bc07fd96d6e7ee9ec80017a7cf45e519346->enter($__internal_f97d5f665c1e8229008a976c2ef09bc07fd96d6e7ee9ec80017a7cf45e519346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h2 class=\"fil_ariane\">ADMINISTRATION</h2>
    <section class=\"section\" style=\"margin-bottom: 40px; position: relative; top: -10px;\">
        <h3 style=\"font-size: 14px; font-weight: normal; text-transform: uppercase; margin: -10px 0 5px;\">Recherche :</h3>
        ";
        // line 11
        $this->loadTemplate("AppBundle::formulaireRecherche.html.twig", "AppBundle::administration.html.twig", 11)->display($context);
        // line 12
        echo "    </section>

    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("auteur_ajout");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/add_author.png"), "html", null, true);
        echo "\" alt=\"Ajout d'un auteur\" />
        <h2>Ajout d'un auteur</h2>
    </a>

    <div class=\"separation\"></div>
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("article_ajout_auteur");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/add_article.png"), "html", null, true);
        echo "\" alt=\"Ajout d'un article\" />
        <h2>Ajout d'un article</h2>
    </a>

    <div class=\"separation\"></div>
    <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("periodique_ajout");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/add_magazine.png"), "html", null, true);
        echo "\" alt=\"Ajout d'un périodique\" />
        <h2>Ajout d'un périodique</h2>
    </a>

    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("auteur_liste");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/manage_authors.png"), "html", null, true);
        echo "\" alt=\"Gestion des auteurs\" />
        <h2>Gestion des auteurs</h2>
    </a>

    <div class=\"separation\"></div>

    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("article_liste");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/manage_articles.png"), "html", null, true);
        echo "\" alt=\"Gestion des articles\" />
        <h2>Gestion des articles</h2>
    </a>

    <div class=\"separation\"></div>
    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("periodique_liste");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/manage_magazines.png"), "html", null, true);
        echo "\" alt=\"Gestion des périodiques\" />
        <h2>Gestion des périodiques</h2>
    </a>
</section>

<script type=\"text/javascript\">
    document.getElementById(\"recherche_avancee\").addEventListener(\"click\", function(){
        // Afficher
        if(document.getElementById(\"champs_recherche_avancee\").style.display == \"none\"){
            document.getElementById(\"champs_recherche_avancee\").style.display = \"block\";
            document.getElementById(\"recherche_avancee\").innerHTML = \"Fermer la recherche avancée\";
        }

        // Cacher
        else{
            document.getElementById(\"champs_recherche_avancee\").style.display = \"none\";
            document.getElementById(\"recherche_avancee\").innerHTML = \"Recherche avancée\";
        }
    });

</script>
";
        
        $__internal_f97d5f665c1e8229008a976c2ef09bc07fd96d6e7ee9ec80017a7cf45e519346->leave($__internal_f97d5f665c1e8229008a976c2ef09bc07fd96d6e7ee9ec80017a7cf45e519346_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  128 => 44,  120 => 39,  116 => 38,  107 => 32,  103 => 31,  96 => 27,  92 => 26,  84 => 21,  80 => 20,  72 => 15,  68 => 14,  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/administration.css') }}"/>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane">ADMINISTRATION</h2>*/
/*     <section class="section" style="margin-bottom: 40px; position: relative; top: -10px;">*/
/*         <h3 style="font-size: 14px; font-weight: normal; text-transform: uppercase; margin: -10px 0 5px;">Recherche :</h3>*/
/*         {% include 'AppBundle::formulaireRecherche.html.twig' %}*/
/*     </section>*/
/* */
/*     <a href="{{ path('auteur_ajout') }}" class="tuile">*/
/*         <img src="{{ asset('img/add_author.png') }}" alt="Ajout d'un auteur" />*/
/*         <h2>Ajout d'un auteur</h2>*/
/*     </a>*/
/* */
/*     <div class="separation"></div>*/
/*     <a href="{{ path('article_ajout_auteur') }}" class="tuile">*/
/*         <img src="{{ asset('img/add_article.png') }}" alt="Ajout d'un article" />*/
/*         <h2>Ajout d'un article</h2>*/
/*     </a>*/
/* */
/*     <div class="separation"></div>*/
/*     <a href="{{ path('periodique_ajout') }}" class="tuile">*/
/*         <img src="{{ asset('img/add_magazine.png') }}" alt="Ajout d'un périodique" />*/
/*         <h2>Ajout d'un périodique</h2>*/
/*     </a>*/
/* */
/*     <a href="{{ path('auteur_liste') }}" class="tuile">*/
/*         <img src="{{ asset('img/manage_authors.png') }}" alt="Gestion des auteurs" />*/
/*         <h2>Gestion des auteurs</h2>*/
/*     </a>*/
/* */
/*     <div class="separation"></div>*/
/* */
/*     <a href="{{ path('article_liste') }}" class="tuile">*/
/*         <img src="{{ asset('img/manage_articles.png') }}" alt="Gestion des articles" />*/
/*         <h2>Gestion des articles</h2>*/
/*     </a>*/
/* */
/*     <div class="separation"></div>*/
/*     <a href="{{ path('periodique_liste') }}" class="tuile">*/
/*         <img src="{{ asset('img/manage_magazines.png') }}" alt="Gestion des périodiques" />*/
/*         <h2>Gestion des périodiques</h2>*/
/*     </a>*/
/* </section>*/
/* */
/* <script type="text/javascript">*/
/*     document.getElementById("recherche_avancee").addEventListener("click", function(){*/
/*         // Afficher*/
/*         if(document.getElementById("champs_recherche_avancee").style.display == "none"){*/
/*             document.getElementById("champs_recherche_avancee").style.display = "block";*/
/*             document.getElementById("recherche_avancee").innerHTML = "Fermer la recherche avancée";*/
/*         }*/
/* */
/*         // Cacher*/
/*         else{*/
/*             document.getElementById("champs_recherche_avancee").style.display = "none";*/
/*             document.getElementById("recherche_avancee").innerHTML = "Recherche avancée";*/
/*         }*/
/*     });*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
