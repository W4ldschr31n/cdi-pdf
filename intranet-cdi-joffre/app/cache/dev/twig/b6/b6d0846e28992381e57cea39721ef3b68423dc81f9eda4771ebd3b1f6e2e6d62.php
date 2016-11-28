<?php

/* AppBundle::recherche.html.twig */
class __TwigTemplate_3c3777bc12bf9a97a4927a40ad2897ef7e38c87f32ea0356a574c630fa0dd0bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::recherche.html.twig", 1);
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
        $__internal_c469ba1d7f6a0a5c703cc501b5f2f8955e447f91c05678e50e0c68d5817a917f = $this->env->getExtension("native_profiler");
        $__internal_c469ba1d7f6a0a5c703cc501b5f2f8955e447f91c05678e50e0c68d5817a917f->enter($__internal_c469ba1d7f6a0a5c703cc501b5f2f8955e447f91c05678e50e0c68d5817a917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c469ba1d7f6a0a5c703cc501b5f2f8955e447f91c05678e50e0c68d5817a917f->leave($__internal_c469ba1d7f6a0a5c703cc501b5f2f8955e447f91c05678e50e0c68d5817a917f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62bb65baf1a77892d115b5ea5e376fb2662d2d46c1e2f5b6d4d693976b2543dc = $this->env->getExtension("native_profiler");
        $__internal_62bb65baf1a77892d115b5ea5e376fb2662d2d46c1e2f5b6d4d693976b2543dc->enter($__internal_62bb65baf1a77892d115b5ea5e376fb2662d2d46c1e2f5b6d4d693976b2543dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_62bb65baf1a77892d115b5ea5e376fb2662d2d46c1e2f5b6d4d693976b2543dc->leave($__internal_62bb65baf1a77892d115b5ea5e376fb2662d2d46c1e2f5b6d4d693976b2543dc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_06df391622ff383f07bf149cf995c6d21a083acfd1b08010490d6b3fddd6552f = $this->env->getExtension("native_profiler");
        $__internal_06df391622ff383f07bf149cf995c6d21a083acfd1b08010490d6b3fddd6552f->enter($__internal_06df391622ff383f07bf149cf995c6d21a083acfd1b08010490d6b3fddd6552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section id=\"contenu\">
    <h2 class=\"fil_ariane\"><a href=\"#\">Accueil</a> > RECHERCHE</h2>
    <section class=\"section\" style=\"margin-bottom: 40px; position: relative; top: -10px;\">
        <h3 style=\"margin: 0; font-size: 14px; font-weight: normal; text-transform: uppercase; margin-bottom: 5px; margin-top: -10px;\">Recherche :</h3>
        ";
        // line 12
        $this->loadTemplate("AppBundle::formulaireRecherche.html.twig", "AppBundle::recherche.html.twig", 12)->display($context);
        // line 13
        echo "    </section>
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
        
        $__internal_06df391622ff383f07bf149cf995c6d21a083acfd1b08010490d6b3fddd6552f->leave($__internal_06df391622ff383f07bf149cf995c6d21a083acfd1b08010490d6b3fddd6552f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/base.css') }}"/>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <section id="contenu">*/
/*     <h2 class="fil_ariane"><a href="#">Accueil</a> > RECHERCHE</h2>*/
/*     <section class="section" style="margin-bottom: 40px; position: relative; top: -10px;">*/
/*         <h3 style="margin: 0; font-size: 14px; font-weight: normal; text-transform: uppercase; margin-bottom: 5px; margin-top: -10px;">Recherche :</h3>*/
/*         {% include 'AppBundle::formulaireRecherche.html.twig' %}*/
/*     </section>*/
/* </section>*/
/* */
/* <script type="text/javascript">*/
/*     document.getElementById("recherche_avancee").addEventListener("click", function(){*/
/*         // Afficher*/
/*         if(document.getElementById("champs_recherche_avancee").style.display == "none"){*/
/*             document.getElementById("champs_recherche_avancee").style.display = "block";*/
/*             document.getElementById("recherche_avancee").innerHTML = "Fermer la recherche avancée";*/
/*         }*/
/*         */
/*         // Cacher*/
/*         else{*/
/*             document.getElementById("champs_recherche_avancee").style.display = "none";*/
/*             document.getElementById("recherche_avancee").innerHTML = "Recherche avancée";*/
/*         }*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
