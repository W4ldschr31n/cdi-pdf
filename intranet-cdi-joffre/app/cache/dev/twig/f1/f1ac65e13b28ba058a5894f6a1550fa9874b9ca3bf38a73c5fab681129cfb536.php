<?php

/* CdiBundle:Article:ajoutArticle.html.twig */
class __TwigTemplate_cc2cdaefa33e7aa5f3311c17a118739b218e1c083417c4f02324af991ece6391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:ajoutArticle.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8d622ffec335e15ef2bf4ab96b86543fb72302cd258eee2ff960ac7749f1063 = $this->env->getExtension("native_profiler");
        $__internal_f8d622ffec335e15ef2bf4ab96b86543fb72302cd258eee2ff960ac7749f1063->enter($__internal_f8d622ffec335e15ef2bf4ab96b86543fb72302cd258eee2ff960ac7749f1063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:ajoutArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d622ffec335e15ef2bf4ab96b86543fb72302cd258eee2ff960ac7749f1063->leave($__internal_f8d622ffec335e15ef2bf4ab96b86543fb72302cd258eee2ff960ac7749f1063_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b18d6b52f7bcf34ca197acdd75bfb5cd1d000fbdb94cbaf10fa8c2139b7a6787 = $this->env->getExtension("native_profiler");
        $__internal_b18d6b52f7bcf34ca197acdd75bfb5cd1d000fbdb94cbaf10fa8c2139b7a6787->enter($__internal_b18d6b52f7bcf34ca197acdd75bfb5cd1d000fbdb94cbaf10fa8c2139b7a6787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
    <style>
        .form-field{
            display: block;
            margin-bottom: 5px;
        }

        label{
            display: inline-block;
            font-size: 13px;
            vertical-align: middle;
            min-width: 150px;
        }

        p{
            display: inline-block;
            font-size: 13px;
            vertical-align: middle;
            min-width: 150px;
        }

        textarea{
            vertical-align: top;
        }

        i{
            display: block;
            font-size: 12px;
        }

       #valider{
            text-align: right;
            margin-top: 10px;
        }

        #periodiques-proposition li{
            width: 300px;
            background-color: #4e678b;
            font-size: 13px;
            color: white;
            margin-bottom: 5px;
            padding: 10px;
        }

        #periodiques-proposition li:hover{
            cursor: pointer;
        }
    </style>
";
        
        $__internal_b18d6b52f7bcf34ca197acdd75bfb5cd1d000fbdb94cbaf10fa8c2139b7a6787->leave($__internal_b18d6b52f7bcf34ca197acdd75bfb5cd1d000fbdb94cbaf10fa8c2139b7a6787_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_2df06fd870e5c531433f4ccacc6a9e4a2c7067a2084275f4c94b30738af64e1b = $this->env->getExtension("native_profiler");
        $__internal_2df06fd870e5c531433f4ccacc6a9e4a2c7067a2084275f4c94b30738af64e1b->enter($__internal_2df06fd870e5c531433f4ccacc6a9e4a2c7067a2084275f4c94b30738af64e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > Ajout d'un article > Information de l'article</h2>
    <section class=\"section\">
        <h4 style=\"margin: 0; text-transform: uppercase;\">Informations du nouvel article :</h4>
        <p style=\"font-size: 13px; margin-bottom: 35px;\">Saisissez les informations sur le nouvel article.</p>
        ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 64
        echo "            <div class=\"form-field\">
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Titre :"));
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("placeholder" => "Titre")));
        echo "
            </div>

            ";
        // line 70
        echo "            <form action=\"#\" method=\"post\" style=\"margin-top: 30px\">
               <p>Auteur :</p> <input type=\"text\" name=\"prenom\" placeholder=\"Prénom\" class=\"auteur-input\" id=\"input-prenom\" autocomplete=\"off\" required/>
                <input type=\"text\" name=\"nom\" placeholder=\"Nom\" class=\"auteur-input\" id=\"input-nom\" autocomplete=\"off\" required/>

            <i></i>
            <ul id=\"auteurs-proposition\">

            </ul>


            ";
        // line 81
        echo "            <div class=\"form-field\">
                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'label', array("label" => "Résumé :"));
        echo "
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'widget', array("attr" => array("placeholder" => "Résumé", "rows" => "7", "cols" => "50")));
        echo "
            </div>

            ";
        // line 87
        echo "            <div class=\"form-field\">
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateParution", array()), 'label', array("label" => "Date de parution :"));
        echo "
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateParution", array()), 'widget', array("attr" => array("class" => "calendar", "placeholder" => "JJ/MM/AAAA")));
        echo "
            </div>

            ";
        // line 93
        echo "                <p>Nom :</p> <input type=\"text\" name=\"nom\" placeholder=\"Nom du périodique\" id=\"input-periodique\" autocomplete=\"off\" required/>



            <i></i>
            <ul id=\"periodiques-proposition\">

            </ul>

            ";
        // line 103
        echo "            <div class=\"form-field\">
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPeriodique", array()), 'label', array("label" => "Numéro du périodique :"));
        echo "
                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPeriodique", array()), 'widget', array("attr" => array("placeholder" => "Numéro du périodique")));
        echo "
            </div>

            ";
        // line 109
        echo "            <div class=\"form-field\">
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageDebut", array()), 'label', array("label" => "Page de début :"));
        echo "
                ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageDebut", array()), 'widget', array("attr" => array("placeholder" => "Page de début")));
        echo "
            </div>

            ";
        // line 115
        echo "            <div class=\"form-field\">
                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageFin", array()), 'label', array("label" => "Page de fin (*) :"));
        echo "
                ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageFin", array()), 'widget', array("attr" => array("placeholder" => "Page de fin")));
        echo "
            </div>

            <i>(*) : Champ facultatif</i>

            ";
        // line 123
        echo "            <div id=\"valider\">
                ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Enregistrer l'article"));
        echo "
            </div>
            <input type=\"submit\" value=\"Suivant >\" style=\"float: right;\">
            </form>

        ";
        // line 129
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </section>
";
        
        $__internal_2df06fd870e5c531433f4ccacc6a9e4a2c7067a2084275f4c94b30738af64e1b->leave($__internal_2df06fd870e5c531433f4ccacc6a9e4a2c7067a2084275f4c94b30738af64e1b_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d79224e5331ec3dc2f68d2368333290c7e983448acc01e9b4016bf583c39388 = $this->env->getExtension("native_profiler");
        $__internal_3d79224e5331ec3dc2f68d2368333290c7e983448acc01e9b4016bf583c39388->enter($__internal_3d79224e5331ec3dc2f68d2368333290c7e983448acc01e9b4016bf583c39388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
    <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$( \".calendar\" ).datepicker({ dateFormat: 'dd/mm/yy' });
            \$(\".calendar\").attr(\"type\", \"text\");
        });
    </script>

    ";
        // line 144
        echo "    <script type=\"text/javascript\">
        \$(function(){
            // On cache les div de proposition
            \$('i').css(\"display\", \"none\");
            \$('#periodiques-proposition').css(\"display\", \"none\");


            // Listener des changements de nom/prenom
            \$('#input-periodique').on('input', function(){
                // On ré-initialise le message d'info
                \$('i').css(\"display\", \"none\").html(\"\");
                \$('#periodiques-proposition').css(\"display\", \"none\").html(\"\");

                // On rempli les nom/prenom si ils sont vides
                var nom = \$(this).val();
                if(nom == \"\"){
                    return;
                }


                // On génère l'URL de la requête AJAX
                var url = '";
        // line 165
        echo $this->env->getExtension('routing')->getPath("ajax_recherche_periodique", array("nom" => "var-nom"));
        echo "';
                    url = url.replace(\"var-nom\", nom);


                \$.ajax({
                    url: url,
                    data: {
                        format: 'json'
                    },
                    success: function(data) {
                        // Si il n'y a pas de données
                        if(data.length < 1){
                            \$('i').css(\"display\", \"block\").html('Ce périodique n\\'existe pas, il sera ajouté dans la base de données.');
                            return;
                        }

                        // Sinon on affiche la liste
                        \$('i').css(\"display\", \"block\").html('Cliquez sur le périodique si il est dans la liste :');
                        \$('#periodiques-proposition').css(\"display\", \"block\");
                        \$(data).each(function(index){
                            if(!\$(\"#auteur\"+this.id).length){
                                var str = \"<li id=\\\"periodique\"+ this.id +\"\\\">\" + this.nom + \"</li>\";
                                \$('#periodiques-proposition').append(str);
                            }
                        });

                        \$('#periodiques-proposition li').each(function(index){
                           \$(this).click(function(){
                                var choix = \$(this).html();
                                \$('#input-periodique').val(choix);
                                \$('#periodiques-proposition').css(\"display\", \"none\");
                                \$('i').html('Le périodique sera importé depuis la base de donnée.');
                           });
                       });

                    },
                    type: 'GET'
                });
           });
        });
    </script>

    ";
        // line 208
        echo "    <script type=\"text/javascript\">
        \$(function(){
            // On cache les div de proposition
            \$('i').css(\"display\", \"none\");
            \$('#auteurs-proposition').css(\"display\", \"none\");


            // Listener des changements de nom/prenom
            \$('.auteur-input').each(function(index){
               \$(this).on('input', function(){
                    // On ré-initialise le message d'info
                    \$('i').css(\"display\", \"none\").html(\"\");
                    \$('#auteurs-proposition').css(\"display\", \"none\").html(\"\");

                    // On rempli les nom/prenom si ils sont vides
                    var prenom = \$('#input-prenom').val();
                    var nom = \$('#input-nom').val();

                    if(nom == \"\" && prenom == \"\"){
                        return;
                    }

                    if(prenom == \"\")
                        prenom = \"null\";

                    if(nom == \"\")
                        nom = \"null\";

                    // On génère l'URL de la requête AJAX
                    var url = '";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajax_recherche_auteur", array("prenom" => "var-prenom", "nom" => "var-nom")), "html", null, true);
        echo "';
                        url = url.replace(\"var-prenom\", prenom);
                        url = url.replace(\"var-nom\", nom);


                    \$.ajax({
                        url: url,
                        data: {
                            format: 'json'
                        },
                        error: function() {

                        },
                        success: function(data) {
                            // Si il n'y a pas de données
                            if(data.length < 1){
                                \$('i').css(\"display\", \"block\").html('Cet auteur n\\'existe pas, il sera ajouté dans la base de données.');
                                return;
                            }

                            // Sinon on affiche la liste
                            \$('i').css(\"display\", \"block\").html('Cliquez sur l\\'auteur si il est dans la liste :');
                            \$('#auteurs-proposition').css(\"display\", \"block\");
                            \$(data).each(function(index){
                                if(!\$(\"#auteur\"+this.id).length){
                                    var str = \"<li id=\\\"auteur\"+ this.id +\"\\\">\" + this.prenom.charAt(0).toUpperCase() + this.prenom.substr(1) + \" \" + this.nom.toUpperCase() + \"</li>\";
                                    \$('#auteurs-proposition').append(str);
                                }
                            });

                            \$('#auteurs-proposition li').each(function(index){
                               \$(this).click(function(){
                                    var choix = \$(this).html().split(' ', 2);
                                    \$('#input-prenom').val(choix[0]);
                                    \$('#input-nom').val(choix[1]);
                                    \$('#auteurs-proposition').css(\"display\", \"none\");
                                    \$('i').html('L\\'auteur sera importé depuis la base de donnée.');
                               });
                           });

                        },
                        type: 'GET'
                    });
               });
           });
        });
    </script>

";
        
        $__internal_3d79224e5331ec3dc2f68d2368333290c7e983448acc01e9b4016bf583c39388->leave($__internal_3d79224e5331ec3dc2f68d2368333290c7e983448acc01e9b4016bf583c39388_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:ajoutArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 237,  329 => 208,  284 => 165,  261 => 144,  250 => 134,  244 => 133,  234 => 129,  226 => 124,  223 => 123,  215 => 117,  211 => 116,  208 => 115,  202 => 111,  198 => 110,  195 => 109,  189 => 105,  185 => 104,  182 => 103,  171 => 93,  165 => 89,  161 => 88,  158 => 87,  152 => 83,  148 => 82,  145 => 81,  133 => 70,  127 => 66,  123 => 65,  120 => 64,  115 => 61,  111 => 60,  103 => 56,  97 => 55,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*     <style>*/
/*         .form-field{*/
/*             display: block;*/
/*             margin-bottom: 5px;*/
/*         }*/
/* */
/*         label{*/
/*             display: inline-block;*/
/*             font-size: 13px;*/
/*             vertical-align: middle;*/
/*             min-width: 150px;*/
/*         }*/
/* */
/*         p{*/
/*             display: inline-block;*/
/*             font-size: 13px;*/
/*             vertical-align: middle;*/
/*             min-width: 150px;*/
/*         }*/
/* */
/*         textarea{*/
/*             vertical-align: top;*/
/*         }*/
/* */
/*         i{*/
/*             display: block;*/
/*             font-size: 12px;*/
/*         }*/
/* */
/*        #valider{*/
/*             text-align: right;*/
/*             margin-top: 10px;*/
/*         }*/
/* */
/*         #periodiques-proposition li{*/
/*             width: 300px;*/
/*             background-color: #4e678b;*/
/*             font-size: 13px;*/
/*             color: white;*/
/*             margin-bottom: 5px;*/
/*             padding: 10px;*/
/*         }*/
/* */
/*         #periodiques-proposition li:hover{*/
/*             cursor: pointer;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > Ajout d'un article > Information de l'article</h2>*/
/*     <section class="section">*/
/*         <h4 style="margin: 0; text-transform: uppercase;">Informations du nouvel article :</h4>*/
/*         <p style="font-size: 13px; margin-bottom: 35px;">Saisissez les informations sur le nouvel article.</p>*/
/*         {{ form_start(form) }}*/
/*             {{ form_errors(form) }}*/
/* */
/*             {# Titre #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.titre, 'Titre :') }}*/
/*                 {{ form_widget(form.titre, {'attr': {'placeholder': 'Titre'}}) }}*/
/*             </div>*/
/* */
/*             {# Nom auteur #}*/
/*             <form action="#" method="post" style="margin-top: 30px">*/
/*                <p>Auteur :</p> <input type="text" name="prenom" placeholder="Prénom" class="auteur-input" id="input-prenom" autocomplete="off" required/>*/
/*                 <input type="text" name="nom" placeholder="Nom" class="auteur-input" id="input-nom" autocomplete="off" required/>*/
/* */
/*             <i></i>*/
/*             <ul id="auteurs-proposition">*/
/* */
/*             </ul>*/
/* */
/* */
/*             {# Résumé #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.resume, 'Résumé :') }}*/
/*                 {{ form_widget(form.resume, {'attr': {'placeholder': 'Résumé', 'rows': '7', 'cols': '50'}}) }}*/
/*             </div>*/
/* */
/*             {# Date de parution #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.dateParution, 'Date de parution :') }}*/
/*                 {{ form_widget(form.dateParution, { 'attr': {'class': 'calendar', 'placeholder': 'JJ/MM/AAAA'} }) }}*/
/*             </div>*/
/* */
/*             {# Nom du périodique #}*/
/*                 <p>Nom :</p> <input type="text" name="nom" placeholder="Nom du périodique" id="input-periodique" autocomplete="off" required/>*/
/* */
/* */
/* */
/*             <i></i>*/
/*             <ul id="periodiques-proposition">*/
/* */
/*             </ul>*/
/* */
/*             {# Numéro du périodique #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.numeroPeriodique, 'Numéro du périodique :') }}*/
/*                 {{ form_widget(form.numeroPeriodique, { 'attr': {'placeholder': 'Numéro du périodique'} }) }}*/
/*             </div>*/
/* */
/*             {# Page de début #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.pageDebut, 'Page de début :') }}*/
/*                 {{ form_widget(form.pageDebut, { 'attr': {'placeholder': 'Page de début'} }) }}*/
/*             </div>*/
/* */
/*             {# Page de fin #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.pageFin, 'Page de fin (*) :') }}*/
/*                 {{ form_widget(form.pageFin, { 'attr': {'placeholder': 'Page de fin'} }) }}*/
/*             </div>*/
/* */
/*             <i>(*) : Champ facultatif</i>*/
/* */
/*             {# Bouton valider #}*/
/*             <div id="valider">*/
/*                 {{ form_widget(form.save, { 'label': "Enregistrer l'article" }) }}*/
/*             </div>*/
/*             <input type="submit" value="Suivant >" style="float: right;">*/
/*             </form>*/
/* */
/*         {{ form_end(form) }}*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="//code.jquery.com/jquery-1.10.2.js"></script>*/
/*     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $( ".calendar" ).datepicker({ dateFormat: 'dd/mm/yy' });*/
/*             $(".calendar").attr("type", "text");*/
/*         });*/
/*     </script>*/
/* */
/*     {# JS nom périodique #}*/
/*     <script type="text/javascript">*/
/*         $(function(){*/
/*             // On cache les div de proposition*/
/*             $('i').css("display", "none");*/
/*             $('#periodiques-proposition').css("display", "none");*/
/* */
/* */
/*             // Listener des changements de nom/prenom*/
/*             $('#input-periodique').on('input', function(){*/
/*                 // On ré-initialise le message d'info*/
/*                 $('i').css("display", "none").html("");*/
/*                 $('#periodiques-proposition').css("display", "none").html("");*/
/* */
/*                 // On rempli les nom/prenom si ils sont vides*/
/*                 var nom = $(this).val();*/
/*                 if(nom == ""){*/
/*                     return;*/
/*                 }*/
/* */
/* */
/*                 // On génère l'URL de la requête AJAX*/
/*                 var url = '{{ path("ajax_recherche_periodique", {'nom': 'var-nom'}) }}';*/
/*                     url = url.replace("var-nom", nom);*/
/* */
/* */
/*                 $.ajax({*/
/*                     url: url,*/
/*                     data: {*/
/*                         format: 'json'*/
/*                     },*/
/*                     success: function(data) {*/
/*                         // Si il n'y a pas de données*/
/*                         if(data.length < 1){*/
/*                             $('i').css("display", "block").html('Ce périodique n\'existe pas, il sera ajouté dans la base de données.');*/
/*                             return;*/
/*                         }*/
/* */
/*                         // Sinon on affiche la liste*/
/*                         $('i').css("display", "block").html('Cliquez sur le périodique si il est dans la liste :');*/
/*                         $('#periodiques-proposition').css("display", "block");*/
/*                         $(data).each(function(index){*/
/*                             if(!$("#auteur"+this.id).length){*/
/*                                 var str = "<li id=\"periodique"+ this.id +"\">" + this.nom + "</li>";*/
/*                                 $('#periodiques-proposition').append(str);*/
/*                             }*/
/*                         });*/
/* */
/*                         $('#periodiques-proposition li').each(function(index){*/
/*                            $(this).click(function(){*/
/*                                 var choix = $(this).html();*/
/*                                 $('#input-periodique').val(choix);*/
/*                                 $('#periodiques-proposition').css("display", "none");*/
/*                                 $('i').html('Le périodique sera importé depuis la base de donnée.');*/
/*                            });*/
/*                        });*/
/* */
/*                     },*/
/*                     type: 'GET'*/
/*                 });*/
/*            });*/
/*         });*/
/*     </script>*/
/* */
/*     {# JS nom auteur #}*/
/*     <script type="text/javascript">*/
/*         $(function(){*/
/*             // On cache les div de proposition*/
/*             $('i').css("display", "none");*/
/*             $('#auteurs-proposition').css("display", "none");*/
/* */
/* */
/*             // Listener des changements de nom/prenom*/
/*             $('.auteur-input').each(function(index){*/
/*                $(this).on('input', function(){*/
/*                     // On ré-initialise le message d'info*/
/*                     $('i').css("display", "none").html("");*/
/*                     $('#auteurs-proposition').css("display", "none").html("");*/
/* */
/*                     // On rempli les nom/prenom si ils sont vides*/
/*                     var prenom = $('#input-prenom').val();*/
/*                     var nom = $('#input-nom').val();*/
/* */
/*                     if(nom == "" && prenom == ""){*/
/*                         return;*/
/*                     }*/
/* */
/*                     if(prenom == "")*/
/*                         prenom = "null";*/
/* */
/*                     if(nom == "")*/
/*                         nom = "null";*/
/* */
/*                     // On génère l'URL de la requête AJAX*/
/*                     var url = '{{ path("ajax_recherche_auteur", {'prenom': 'var-prenom', 'nom': 'var-nom'}) }}';*/
/*                         url = url.replace("var-prenom", prenom);*/
/*                         url = url.replace("var-nom", nom);*/
/* */
/* */
/*                     $.ajax({*/
/*                         url: url,*/
/*                         data: {*/
/*                             format: 'json'*/
/*                         },*/
/*                         error: function() {*/
/* */
/*                         },*/
/*                         success: function(data) {*/
/*                             // Si il n'y a pas de données*/
/*                             if(data.length < 1){*/
/*                                 $('i').css("display", "block").html('Cet auteur n\'existe pas, il sera ajouté dans la base de données.');*/
/*                                 return;*/
/*                             }*/
/* */
/*                             // Sinon on affiche la liste*/
/*                             $('i').css("display", "block").html('Cliquez sur l\'auteur si il est dans la liste :');*/
/*                             $('#auteurs-proposition').css("display", "block");*/
/*                             $(data).each(function(index){*/
/*                                 if(!$("#auteur"+this.id).length){*/
/*                                     var str = "<li id=\"auteur"+ this.id +"\">" + this.prenom.charAt(0).toUpperCase() + this.prenom.substr(1) + " " + this.nom.toUpperCase() + "</li>";*/
/*                                     $('#auteurs-proposition').append(str);*/
/*                                 }*/
/*                             });*/
/* */
/*                             $('#auteurs-proposition li').each(function(index){*/
/*                                $(this).click(function(){*/
/*                                     var choix = $(this).html().split(' ', 2);*/
/*                                     $('#input-prenom').val(choix[0]);*/
/*                                     $('#input-nom').val(choix[1]);*/
/*                                     $('#auteurs-proposition').css("display", "none");*/
/*                                     $('i').html('L\'auteur sera importé depuis la base de donnée.');*/
/*                                });*/
/*                            });*/
/* */
/*                         },*/
/*                         type: 'GET'*/
/*                     });*/
/*                });*/
/*            });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
