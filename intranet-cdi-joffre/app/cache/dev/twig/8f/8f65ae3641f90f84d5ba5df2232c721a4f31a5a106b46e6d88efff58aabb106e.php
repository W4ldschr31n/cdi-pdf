<?php

/* CdiBundle:Auteur:liste.html.twig */
class __TwigTemplate_00210a75097a96e042aa174329a2e35fc5f757b4c46975699f1eede2bbd650ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Auteur:liste.html.twig", 1);
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
        $__internal_4be08c6a7018e143d153710f3444e70373c2d0de12b1a201b9ba8a6149cdc32d = $this->env->getExtension("native_profiler");
        $__internal_4be08c6a7018e143d153710f3444e70373c2d0de12b1a201b9ba8a6149cdc32d->enter($__internal_4be08c6a7018e143d153710f3444e70373c2d0de12b1a201b9ba8a6149cdc32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Auteur:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be08c6a7018e143d153710f3444e70373c2d0de12b1a201b9ba8a6149cdc32d->leave($__internal_4be08c6a7018e143d153710f3444e70373c2d0de12b1a201b9ba8a6149cdc32d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55b9de7e2dbc87fdf07cd3867c9cc103dccbe0bd5333617f056f1283f6a6a392 = $this->env->getExtension("native_profiler");
        $__internal_55b9de7e2dbc87fdf07cd3867c9cc103dccbe0bd5333617f056f1283f6a6a392->enter($__internal_55b9de7e2dbc87fdf07cd3867c9cc103dccbe0bd5333617f056f1283f6a6a392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/liste.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
    <style>
        #dialog {
            display: none;
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
        
        $__internal_55b9de7e2dbc87fdf07cd3867c9cc103dccbe0bd5333617f056f1283f6a6a392->leave($__internal_55b9de7e2dbc87fdf07cd3867c9cc103dccbe0bd5333617f056f1283f6a6a392_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16219dfab239ec21afcd049e762a613ce366971706fd1342e7e52e6ec045f143 = $this->env->getExtension("native_profiler");
        $__internal_16219dfab239ec21afcd049e762a613ce366971706fd1342e7e52e6ec045f143->enter($__internal_16219dfab239ec21afcd049e762a613ce366971706fd1342e7e52e6ec045f143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "    <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
    <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
    <script>
        \$(function() {

            \$('.supprimer').each(function(index) {
                var lien = \$(this).attr('href');

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
        
        $__internal_16219dfab239ec21afcd049e762a613ce366971706fd1342e7e52e6ec045f143->leave($__internal_16219dfab239ec21afcd049e762a613ce366971706fd1342e7e52e6ec045f143_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2bf6cb9b8038c8fe63fa183ee32a9073961147e26df5a43d28a0bc78c1dc9f8 = $this->env->getExtension("native_profiler");
        $__internal_d2bf6cb9b8038c8fe63fa183ee32a9073961147e26df5a43d28a0bc78c1dc9f8->enter($__internal_d2bf6cb9b8038c8fe63fa183ee32a9073961147e26df5a43d28a0bc78c1dc9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > LISTE DES AUTEURS</h2>
    <section class=\"section\">
        ";
        // line 61
        echo "        ";
        if ((isset($context["auteurs"]) ? $context["auteurs"] : $this->getContext($context, "auteurs"))) {
            // line 62
            echo "            <table style=\"margin: auto;\" class=\"info-table\">
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Prénom
                    </th>
                </tr>
                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) ? $context["auteurs"] : $this->getContext($context, "auteurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
                // line 72
                echo "                    <tr>
                        <td style=\"min-width: 200px;\">";
                // line 73
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["auteur"], "nom", array())), "html", null, true);
                echo "</td>
                        <td style=\"min-width: 200px;\">";
                // line 74
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["auteur"], "prenom", array())), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("auteur_editer", array("id" => $this->getAttribute($context["auteur"], "id", array()))), "html", null, true);
                echo "\"><img style=\"width: 15px; height: 15px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/edit_icon.png"), "html", null, true);
                echo "\" alt=\"Editer l'auteur\"/></a></td>
                        <td><a class=\"supprimer\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("auteur_supprimer", array("id" => $this->getAttribute($context["auteur"], "id", array()))), "html", null, true);
                echo "\"><img style=\"width: 15px; height: 15px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/delete_icon.png"), "html", null, true);
                echo "\" alt=\"Supprimer l'auteur\"/></a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "            </table>
        ";
        } else {
            // line 81
            echo "            <div class=\"erreur\">Aucun auteur dans la base de données.</div>
        ";
        }
        // line 83
        echo "        <div id=\"dialog\" title=\"Suppression\">
            <p>Si vous supprimez cet auteur, tous les articles qui lui sont affiliés seront eux aussi supprimés.</p>
            <p>Voulez-vous vraiment supprimer cet Auteur ?</p>
            <button class=\"non\">Non</button>
            <button class=\"oui\">Oui</button>
        </div>
    </section>
";
        
        $__internal_d2bf6cb9b8038c8fe63fa183ee32a9073961147e26df5a43d28a0bc78c1dc9f8->leave($__internal_d2bf6cb9b8038c8fe63fa183ee32a9073961147e26df5a43d28a0bc78c1dc9f8_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Auteur:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 83,  174 => 81,  170 => 79,  159 => 76,  153 => 75,  149 => 74,  145 => 73,  142 => 72,  138 => 71,  127 => 62,  124 => 61,  118 => 58,  112 => 57,  80 => 30,  74 => 29,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/liste.css') }}"/>*/
/*     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*     <style>*/
/*         #dialog {*/
/*             display: none;*/
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
/*         */
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
/*                 var lien = $(this).attr('href');*/
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
/*             }); */
/* */
/*         });*/
/*   </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > LISTE DES AUTEURS</h2>*/
/*     <section class="section">*/
/*         {# Si il y a des auteurs, on les affiches, sinon on affiche un message d'erreur. #}*/
/*         {% if auteurs %}*/
/*             <table style="margin: auto;" class="info-table">*/
/*                 <tr>*/
/*                     <th>*/
/*                         Nom*/
/*                     </th>*/
/*                     <th>*/
/*                         Prénom*/
/*                     </th>*/
/*                 </tr>*/
/*                 {% for auteur in auteurs %}*/
/*                     <tr>*/
/*                         <td style="min-width: 200px;">{{ auteur.nom|upper }}</td>*/
/*                         <td style="min-width: 200px;">{{ auteur.prenom|capitalize }}</td>*/
/*                         <td><a href="{{ path('auteur_editer', {"id": auteur.id}) }}"><img style="width: 15px; height: 15px;" src="{{ asset('img/edit_icon.png') }}" alt="Editer l'auteur"/></a></td>*/
/*                         <td><a class="supprimer" href="{{ path('auteur_supprimer', {"id": auteur.id}) }}"><img style="width: 15px; height: 15px;" src="{{ asset('img/delete_icon.png') }}" alt="Supprimer l'auteur"/></a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         {% else %}*/
/*             <div class="erreur">Aucun auteur dans la base de données.</div>*/
/*         {% endif %}*/
/*         <div id="dialog" title="Suppression">*/
/*             <p>Si vous supprimez cet auteur, tous les articles qui lui sont affiliés seront eux aussi supprimés.</p>*/
/*             <p>Voulez-vous vraiment supprimer cet Auteur ?</p>*/
/*             <button class="non">Non</button>*/
/*             <button class="oui">Oui</button>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
