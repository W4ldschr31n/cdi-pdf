<?php

/* CdiBundle:Article:resultatRecherche.html.twig */
class __TwigTemplate_c0600b72bd356067267d8089b5c24e3846e236de9812bf30e79d43e3abf9a0a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:resultatRecherche.html.twig", 1);
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
        $__internal_b3b76126f36c98a2064ac34a1c5b7dd88546420e53adf1bf225bf1182f5d5aa8 = $this->env->getExtension("native_profiler");
        $__internal_b3b76126f36c98a2064ac34a1c5b7dd88546420e53adf1bf225bf1182f5d5aa8->enter($__internal_b3b76126f36c98a2064ac34a1c5b7dd88546420e53adf1bf225bf1182f5d5aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:resultatRecherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3b76126f36c98a2064ac34a1c5b7dd88546420e53adf1bf225bf1182f5d5aa8->leave($__internal_b3b76126f36c98a2064ac34a1c5b7dd88546420e53adf1bf225bf1182f5d5aa8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5c96df7f1ea6d68655bff701242d362a4ac52c460127292631437e12646f15f = $this->env->getExtension("native_profiler");
        $__internal_a5c96df7f1ea6d68655bff701242d362a4ac52c460127292631437e12646f15f->enter($__internal_a5c96df7f1ea6d68655bff701242d362a4ac52c460127292631437e12646f15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
    <style>
        ul{
            list-style: none;
            padding: 0;
        }

        .tableauxArticle {
          width : 100%;
        }

        .article{
            padding: 10px 15px;
            margin-bottom: 8px;
            background-color: #E8E8E8;
            color: black;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .article h5{
          text-transform: uppercase;
          padding-left : 10px;
          color: black;
        }

        .article:hover{
            background-color: #D9D9D9;
            cursor:  pointer;
        }

        .article p{
            font-size: 12px;
            margin: 0;
            margin-top: 4px;
        }
    </style>
";
        
        $__internal_a5c96df7f1ea6d68655bff701242d362a4ac52c460127292631437e12646f15f->leave($__internal_a5c96df7f1ea6d68655bff701242d362a4ac52c460127292631437e12646f15f_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bf6afacff70428486a2bb26894fa98e1bd81ccb21fc4f3ec52ba2d1906f0d58 = $this->env->getExtension("native_profiler");
        $__internal_8bf6afacff70428486a2bb26894fa98e1bd81ccb21fc4f3ec52ba2d1906f0d58->enter($__internal_8bf6afacff70428486a2bb26894fa98e1bd81ccb21fc4f3ec52ba2d1906f0d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "<section id=\"contenu\">
    ";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "status"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "status"), "method") == "etudiant"))) {
            // line 47
            echo "        <h2 class=\"fil_ariane\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("accueil");
            echo "\">Accueil</a> > RÉSULTAT DE LA RECHERCHE</h2>
    ";
        } else {
            // line 49
            echo "        <h2 class=\"fil_ariane\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("administration");
            echo "\">Administration</a> > RÉSULTAT DE LA RECHERCHE</h2>
    ";
        }
        // line 51
        echo "    <section class=\"section\" style=\"margin-bottom: 40px; position: relative; top: -10px;\">
        <h3 style=\"margin: 0; font-size: 14px; font-weight: normal; text-transform: uppercase; margin-bottom: 5px; margin-top: -10px;\">Recherche :</h3>
        ";
        // line 53
        $this->loadTemplate("AppBundle::formulaireRecherche.html.twig", "CdiBundle:Article:resultatRecherche.html.twig", 53)->display($context);
        // line 54
        echo "    </section>
    ";
        // line 56
        echo "    ";
        if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
            // line 57
            echo "    <section>
      <table class=\"tableauxArticle\">
        <thead>
          <tr>
            <th>Nom de l'article</th>
            <th>Date de parution</th>
            <th>Emplacement</th>
          </thead>
          <tbody>
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 67
                echo "            <tr class=\"article\" onClick=\"document.location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_voir", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "'\">
              <td><h5>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
                echo "</h5></td>
              <td><center>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateParution", array()), "d/m/Y"), "html", null, true);
                echo "</center></td>
              <td><center>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "periodique", array()), "nom", array()), "html", null, true);
                echo "</center></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "          </tbody>
        </table>
    </section>
    ";
            // line 77
            echo "    ";
        } else {
            // line 78
            echo "    <div class=\"erreur\">
        Aucun article n'a été trouvé dans la base de données.
    </div>
    ";
        }
        // line 82
        echo "</section>

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
        
        $__internal_8bf6afacff70428486a2bb26894fa98e1bd81ccb21fc4f3ec52ba2d1906f0d58->leave($__internal_8bf6afacff70428486a2bb26894fa98e1bd81ccb21fc4f3ec52ba2d1906f0d58_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:resultatRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 82,  168 => 78,  165 => 77,  160 => 73,  151 => 70,  147 => 69,  143 => 68,  138 => 67,  134 => 66,  123 => 57,  120 => 56,  117 => 54,  115 => 53,  111 => 51,  105 => 49,  99 => 47,  97 => 46,  94 => 45,  88 => 44,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/base.css') }}"/>*/
/*     <style>*/
/*         ul{*/
/*             list-style: none;*/
/*             padding: 0;*/
/*         }*/
/* */
/*         .tableauxArticle {*/
/*           width : 100%;*/
/*         }*/
/* */
/*         .article{*/
/*             padding: 10px 15px;*/
/*             margin-bottom: 8px;*/
/*             background-color: #E8E8E8;*/
/*             color: black;*/
/*             -webkit-box-sizing: border-box;*/
/*             -moz-box-sizing: border-box;*/
/*             box-sizing: border-box;*/
/*         }*/
/* */
/*         .article h5{*/
/*           text-transform: uppercase;*/
/*           padding-left : 10px;*/
/*           color: black;*/
/*         }*/
/* */
/*         .article:hover{*/
/*             background-color: #D9D9D9;*/
/*             cursor:  pointer;*/
/*         }*/
/* */
/*         .article p{*/
/*             font-size: 12px;*/
/*             margin: 0;*/
/*             margin-top: 4px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <section id="contenu">*/
/*     {% if app.session.get('status') is defined and app.session.get('status') == 'etudiant' %}*/
/*         <h2 class="fil_ariane"><a href="{{ path('accueil') }}">Accueil</a> > RÉSULTAT DE LA RECHERCHE</h2>*/
/*     {% else %}*/
/*         <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > RÉSULTAT DE LA RECHERCHE</h2>*/
/*     {% endif %}*/
/*     <section class="section" style="margin-bottom: 40px; position: relative; top: -10px;">*/
/*         <h3 style="margin: 0; font-size: 14px; font-weight: normal; text-transform: uppercase; margin-bottom: 5px; margin-top: -10px;">Recherche :</h3>*/
/*         {% include 'AppBundle::formulaireRecherche.html.twig' %}*/
/*     </section>*/
/*     {# Si la recherche trouve des articles, on affiche la liste #}*/
/*     {% if articles %}*/
/*     <section>*/
/*       <table class="tableauxArticle">*/
/*         <thead>*/
/*           <tr>*/
/*             <th>Nom de l'article</th>*/
/*             <th>Date de parution</th>*/
/*             <th>Emplacement</th>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% for article in articles %}*/
/*             <tr class="article" onClick="document.location.href='{{ path('article_voir', {'id' : article.id}) }}'">*/
/*               <td><h5>{{ article.titre }}</h5></td>*/
/*               <td><center>{{ article.dateParution|date('d/m/Y') }}</center></td>*/
/*               <td><center>{{ article.periodique.nom }}</center></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           </tbody>*/
/*         </table>*/
/*     </section>*/
/*     {# Si la recherche ne trouve pas d'articles #}*/
/*     {% else %}*/
/*     <div class="erreur">*/
/*         Aucun article n'a été trouvé dans la base de données.*/
/*     </div>*/
/*     {% endif %}*/
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
/* </script>*/
/* {% endblock %}*/
/* */
