<?php

/* CdiBundle:Article:voir.html.twig */
class __TwigTemplate_cd711dfed1fd326def98b0933970d577763c38e6c15c1e1c55fe82577feabdf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:voir.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc02069493fb1254e2a98569002d153b91fb187af5e34de0fc146b6a51d99b71 = $this->env->getExtension("native_profiler");
        $__internal_cc02069493fb1254e2a98569002d153b91fb187af5e34de0fc146b6a51d99b71->enter($__internal_cc02069493fb1254e2a98569002d153b91fb187af5e34de0fc146b6a51d99b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc02069493fb1254e2a98569002d153b91fb187af5e34de0fc146b6a51d99b71->leave($__internal_cc02069493fb1254e2a98569002d153b91fb187af5e34de0fc146b6a51d99b71_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e39969831992fd1540f1382bcea904ef55e73c25a3e26c3857076328e74faa2 = $this->env->getExtension("native_profiler");
        $__internal_3e39969831992fd1540f1382bcea904ef55e73c25a3e26c3857076328e74faa2->enter($__internal_3e39969831992fd1540f1382bcea904ef55e73c25a3e26c3857076328e74faa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
    <style>
        #bouton {
            border: 2px solid #4e678b;
            border-radius: 3px;
            background-color: white;
            padding: 5px;
            color: #4e678b;
            font-weight: bold;
            cursor: pointer;
            width: 170px;
            margin-left: 20px;
        }

        #bouton:hover {
            background-color: #4e678b;
            color: white;
        }

        #dialog {
            display: none;
            background-color: white;
        }

        #dialog button {
            border: 2px solid #4e678b;
            border-radius: 3px;
            background-color: white;
            padding: 2px;
            color: #4e678b;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        #dialog button:hover {
            background-color: #4e678b;
            color: white;
        }
    </style>
";
        
        $__internal_3e39969831992fd1540f1382bcea904ef55e73c25a3e26c3857076328e74faa2->leave($__internal_3e39969831992fd1540f1382bcea904ef55e73c25a3e26c3857076328e74faa2_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc5ee08c7cef4c3845a9967089d905afd160f38a1362b5f3c3346957640a2434 = $this->env->getExtension("native_profiler");
        $__internal_cc5ee08c7cef4c3845a9967089d905afd160f38a1362b5f3c3346957640a2434->enter($__internal_cc5ee08c7cef4c3845a9967089d905afd160f38a1362b5f3c3346957640a2434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
    <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
    <script>
        \$(function() {

            \$('.supprimer').each(function(index) {
                var lien = \$(\".supprimer_a\").attr('href');

                \$(this).click(function(event){
                    event.preventDefault();
                    \$('#dialog').dialog();

                    \$('.non').click(function() {
                        \$('#dialog').dialog('destroy');
                    });

                    \$('.oui').click(function() {
                        document.location.href = lien;
                    });
                });

            });

        });
  </script>
";
        
        $__internal_cc5ee08c7cef4c3845a9967089d905afd160f38a1362b5f3c3346957640a2434->leave($__internal_cc5ee08c7cef4c3845a9967089d905afd160f38a1362b5f3c3346957640a2434_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_afbe60ac73a90f01033be8138cf9e95ee4cc09b049df1908e9eb2819d2d31442 = $this->env->getExtension("native_profiler");
        $__internal_afbe60ac73a90f01033be8138cf9e95ee4cc09b049df1908e9eb2819d2d31442->enter($__internal_afbe60ac73a90f01033be8138cf9e95ee4cc09b049df1908e9eb2819d2d31442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "    ";
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "status"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "status"), "method") == "documentaliste")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "status"), "method") == "administrateur"))) {
            // line 77
            echo "        <h2 class=\"fil_ariane\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("administration");
            echo "\">Administration</a> > <a href=\"";
            echo $this->env->getExtension('routing')->getPath("article_liste");
            echo "\"> Gestion des articles</a> > FICHE ARTICLE</h2>
    ";
        } else {
            // line 79
            echo "        <h2 class=\"fil_ariane\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("accueil");
            echo "\">Accueil</a> > FICHE ARTICLE</h2>
    ";
        }
        // line 81
        echo "    <section class=\"section\">
        <h4 style=\"margin: 0; text-transform: uppercase;\">";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</h4>
        <p style=\"font-size: 13px;\">
            Le ";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateParution", array()), "d/m/Y"), "html", null, true);
        echo " dans <a href=\"#\" style=\"color: #4e678b; font-style: italic; font-weight: bold;\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "periodique", array()), "nom", array()), "html", null, true);
        echo "</a>, n°";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "numeroPeriodique", array()), "html", null, true);
        echo ".
            ";
        // line 85
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur", array())) {
            // line 86
            echo "                Par ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur", array()), "prenom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur", array()), "nom", array())), "html", null, true);
            echo ".
            ";
        }
        // line 88
        echo "        </p>
        <p>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "resume", array()), "html", null, true);
        echo "</p>
        ";
        // line 90
        if ((($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageDebut", array()) != "") && ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageFin", array()) == ""))) {
            // line 91
            echo "        <i style=\"font-size: 12px;\">Page ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageDebut", array()), "html", null, true);
            echo "</i>
        ";
        } elseif ((($this->getAttribute(        // line 92
(isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageDebut", array()) != "") && ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageDebut", array()) == $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageFin", array())))) {
            // line 93
            echo "        <i style=\"font-size: 12px;\">Page ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageDebut", array()), "html", null, true);
            echo "</i>
        ";
        } elseif (($this->getAttribute(        // line 94
(isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageFin", array()) != "")) {
            // line 95
            echo "        <i style=\"font-size: 12px;\">De la page ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageDebut", array()), "html", null, true);
            echo " à la page ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pageFin", array()), "html", null, true);
            echo "</i>
        ";
        }
        // line 97
        echo "    </section>
    <div style=\"padding: 20px; float: right;\">
        ";
        // line 99
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "status"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "status"), "method") == "documentaliste")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "status"), "method") == "administrateur"))) {
            // line 100
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_editer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\"><button id=\"bouton\">Éditer</button></a>
            <a class=\"supprimer_a\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\" ><button id=\"bouton\" class=\"supprimer\">Supprimer</button><a/>
        ";
        }
        // line 103
        echo "        <div id=\"dialog\" title=\"Suppression\">
            <p>Voulez-vous vraiment supprimer cet Article ?</p>
            <button class=\"non\">Non</button>
            <button class=\"oui\">Oui</button>
        </div>
    </div>
    <div>
      <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("article_pdf");
        echo "\"><button id=\"bouton\">PDF</button></a>
    </div>
";
        
        $__internal_afbe60ac73a90f01033be8138cf9e95ee4cc09b049df1908e9eb2819d2d31442->leave($__internal_afbe60ac73a90f01033be8138cf9e95ee4cc09b049df1908e9eb2819d2d31442_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 110,  226 => 103,  221 => 101,  216 => 100,  214 => 99,  210 => 97,  202 => 95,  200 => 94,  195 => 93,  193 => 92,  188 => 91,  186 => 90,  182 => 89,  179 => 88,  171 => 86,  169 => 85,  161 => 84,  156 => 82,  153 => 81,  147 => 79,  139 => 77,  136 => 76,  130 => 75,  98 => 48,  92 => 47,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/base.css') }}"/>*/
/*     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*     <style>*/
/*         #bouton {*/
/*             border: 2px solid #4e678b;*/
/*             border-radius: 3px;*/
/*             background-color: white;*/
/*             padding: 5px;*/
/*             color: #4e678b;*/
/*             font-weight: bold;*/
/*             cursor: pointer;*/
/*             width: 170px;*/
/*             margin-left: 20px;*/
/*         }*/
/* */
/*         #bouton:hover {*/
/*             background-color: #4e678b;*/
/*             color: white;*/
/*         }*/
/* */
/*         #dialog {*/
/*             display: none;*/
/*             background-color: white;*/
/*         }*/
/* */
/*         #dialog button {*/
/*             border: 2px solid #4e678b;*/
/*             border-radius: 3px;*/
/*             background-color: white;*/
/*             padding: 2px;*/
/*             color: #4e678b;*/
/*             font-weight: bold;*/
/*             float: right;*/
/*             margin-left: 5px;*/
/*         }*/
/* */
/*         #dialog button:hover {*/
/*             background-color: #4e678b;*/
/*             color: white;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="//code.jquery.com/jquery-1.10.2.js"></script>*/
/*     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>*/
/*     <script>*/
/*         $(function() {*/
/* */
/*             $('.supprimer').each(function(index) {*/
/*                 var lien = $(".supprimer_a").attr('href');*/
/* */
/*                 $(this).click(function(event){*/
/*                     event.preventDefault();*/
/*                     $('#dialog').dialog();*/
/* */
/*                     $('.non').click(function() {*/
/*                         $('#dialog').dialog('destroy');*/
/*                     });*/
/* */
/*                     $('.oui').click(function() {*/
/*                         document.location.href = lien;*/
/*                     });*/
/*                 });*/
/* */
/*             });*/
/* */
/*         });*/
/*   </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% if app.session.get('status') is defined and app.session.get('status') == 'documentaliste' or app.session.get('status') == 'administrateur' %}*/
/*         <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > <a href="{{ path('article_liste') }}"> Gestion des articles</a> > FICHE ARTICLE</h2>*/
/*     {% else %}*/
/*         <h2 class="fil_ariane"><a href="{{ path('accueil') }}">Accueil</a> > FICHE ARTICLE</h2>*/
/*     {% endif %}*/
/*     <section class="section">*/
/*         <h4 style="margin: 0; text-transform: uppercase;">{{ article.titre }}</h4>*/
/*         <p style="font-size: 13px;">*/
/*             Le {{ article.dateParution|date('d/m/Y') }} dans <a href="#" style="color: #4e678b; font-style: italic; font-weight: bold;">{{ article.periodique.nom }}</a>, n°{{ article.numeroPeriodique }}.*/
/*             {% if article.auteur %}*/
/*                 Par {{ article.auteur.prenom|capitalize }} {{ article.auteur.nom|upper }}.*/
/*             {% endif %}*/
/*         </p>*/
/*         <p>{{ article.resume }}</p>*/
/*         {% if article.pageDebut != "" and article.pageFin == "" %}*/
/*         <i style="font-size: 12px;">Page {{ article.pageDebut }}</i>*/
/*         {% elseif article.pageDebut != "" and article.pageDebut == article.pageFin %}*/
/*         <i style="font-size: 12px;">Page {{ article.pageDebut }}</i>*/
/*         {% elseif article.pageFin != "" %}*/
/*         <i style="font-size: 12px;">De la page {{ article.pageDebut }} à la page {{ article.pageFin }}</i>*/
/*         {% endif %}*/
/*     </section>*/
/*     <div style="padding: 20px; float: right;">*/
/*         {% if app.session.get('status') is defined and app.session.get('status') == 'documentaliste' or app.session.get('status') == 'administrateur' %}*/
/*             <a href="{{ path('article_editer', {"id": article.id}) }}"><button id="bouton">Éditer</button></a>*/
/*             <a class="supprimer_a" href="{{ path('article_supprimer', {"id": article.id}) }}" ><button id="bouton" class="supprimer">Supprimer</button><a/>*/
/*         {% endif %}*/
/*         <div id="dialog" title="Suppression">*/
/*             <p>Voulez-vous vraiment supprimer cet Article ?</p>*/
/*             <button class="non">Non</button>*/
/*             <button class="oui">Oui</button>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*       <a href="{{ path('article_pdf') }}"><button id="bouton">PDF</button></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
