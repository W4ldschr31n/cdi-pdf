<?php

/* CdiBundle:Article:ajoutPeriodique.html.twig */
class __TwigTemplate_1ae0be38f7469ed038dee24d64679cfb1bc500bb6f77064cc890c15946f6fc45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:ajoutPeriodique.html.twig", 1);
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
        $__internal_0c6d70fd08d6ef39a7e87dbf30d9a64a4d757d465138e0603072b53a7821e3dd = $this->env->getExtension("native_profiler");
        $__internal_0c6d70fd08d6ef39a7e87dbf30d9a64a4d757d465138e0603072b53a7821e3dd->enter($__internal_0c6d70fd08d6ef39a7e87dbf30d9a64a4d757d465138e0603072b53a7821e3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:ajoutPeriodique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c6d70fd08d6ef39a7e87dbf30d9a64a4d757d465138e0603072b53a7821e3dd->leave($__internal_0c6d70fd08d6ef39a7e87dbf30d9a64a4d757d465138e0603072b53a7821e3dd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7457191b38395f62e2ef97652625bbfa5a523331a06b9de53875195a741475cd = $this->env->getExtension("native_profiler");
        $__internal_7457191b38395f62e2ef97652625bbfa5a523331a06b9de53875195a741475cd->enter($__internal_7457191b38395f62e2ef97652625bbfa5a523331a06b9de53875195a741475cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<style>
    i{
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 12px;
    }
    
    #periodiques-proposition{
        list-style: none;
        padding: 0;
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
        
        $__internal_7457191b38395f62e2ef97652625bbfa5a523331a06b9de53875195a741475cd->leave($__internal_7457191b38395f62e2ef97652625bbfa5a523331a06b9de53875195a741475cd_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_aac45748402b5565e27a858cf31780c5f6e8476a9dd95b98c7818948648415c0 = $this->env->getExtension("native_profiler");
        $__internal_aac45748402b5565e27a858cf31780c5f6e8476a9dd95b98c7818948648415c0->enter($__internal_aac45748402b5565e27a858cf31780c5f6e8476a9dd95b98c7818948648415c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > Ajout d'un article > Périodique de l'article</h2>
    <section class=\"section\">
        <h4 style=\"margin: 0; text-transform: uppercase;\">Périodique du nouvel article :</h4>
        <p style=\"font-size: 13px;\">Saisissez le nom du périodique de votre nouvel article. Si le périodique est déjà présent en base de données, cliquez sûr son nom dans la liste et validez. Sinon il sera automatiquement ajouté. </p>
    
        <form action=\"#\" method=\"post\" style=\"margin-top: 30px\">
            <input type=\"text\" name=\"nom\" placeholder=\"Nom du périodique\" id=\"input-periodique\" autocomplete=\"off\"/>
            <input type=\"submit\" value=\"Suivant >\" style=\"float: right;\">
        </form>
        
        <i></i>
        <ul id=\"periodiques-proposition\">
            
        </ul>
    </section>
";
        
        $__internal_aac45748402b5565e27a858cf31780c5f6e8476a9dd95b98c7818948648415c0->leave($__internal_aac45748402b5565e27a858cf31780c5f6e8476a9dd95b98c7818948648415c0_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a66f729583e6a8589c9bbfeef1a0f34fc23f4bc94290432d78b829d47047ec1f = $this->env->getExtension("native_profiler");
        $__internal_a66f729583e6a8589c9bbfeef1a0f34fc23f4bc94290432d78b829d47047ec1f->enter($__internal_a66f729583e6a8589c9bbfeef1a0f34fc23f4bc94290432d78b829d47047ec1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
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
        // line 72
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
        
        $__internal_a66f729583e6a8589c9bbfeef1a0f34fc23f4bc94290432d78b829d47047ec1f->leave($__internal_a66f729583e6a8589c9bbfeef1a0f34fc23f4bc94290432d78b829d47047ec1f_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:ajoutPeriodique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 72,  110 => 51,  104 => 50,  80 => 33,  74 => 32,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     i{*/
/*         margin-top: 20px;*/
/*         margin-bottom: 10px;*/
/*         font-size: 12px;*/
/*     }*/
/*     */
/*     #periodiques-proposition{*/
/*         list-style: none;*/
/*         padding: 0;*/
/*     }*/
/*     */
/*     #periodiques-proposition li{*/
/*         width: 300px;*/
/*         background-color: #4e678b;*/
/*         font-size: 13px;*/
/*         color: white;*/
/*         margin-bottom: 5px;*/
/*         padding: 10px;*/
/*     }*/
/*     */
/*     #periodiques-proposition li:hover{*/
/*         cursor: pointer;*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > Ajout d'un article > Périodique de l'article</h2>*/
/*     <section class="section">*/
/*         <h4 style="margin: 0; text-transform: uppercase;">Périodique du nouvel article :</h4>*/
/*         <p style="font-size: 13px;">Saisissez le nom du périodique de votre nouvel article. Si le périodique est déjà présent en base de données, cliquez sûr son nom dans la liste et validez. Sinon il sera automatiquement ajouté. </p>*/
/*     */
/*         <form action="#" method="post" style="margin-top: 30px">*/
/*             <input type="text" name="nom" placeholder="Nom du périodique" id="input-periodique" autocomplete="off"/>*/
/*             <input type="submit" value="Suivant >" style="float: right;">*/
/*         </form>*/
/*         */
/*         <i></i>*/
/*         <ul id="periodiques-proposition">*/
/*             */
/*         </ul>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript">*/
/*         $(function(){*/
/*             // On cache les div de proposition*/
/*             $('i').css("display", "none");*/
/*             $('#periodiques-proposition').css("display", "none");*/
/*             */
/*             */
/*             // Listener des changements de nom/prenom*/
/*             $('#input-periodique').on('input', function(){*/
/*                 // On ré-initialise le message d'info*/
/*                 $('i').css("display", "none").html("");*/
/*                 $('#periodiques-proposition').css("display", "none").html("");*/
/*                 */
/*                 // On rempli les nom/prenom si ils sont vides*/
/*                 var nom = $(this).val();*/
/*                 if(nom == ""){*/
/*                     return;*/
/*                 }*/
/*     */
/*                 */
/*                 // On génère l'URL de la requête AJAX*/
/*                 var url = '{{ path("ajax_recherche_periodique", {'nom': 'var-nom'}) }}';*/
/*                     url = url.replace("var-nom", nom);*/
/*                     */
/*                 */
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
/*                         */
/*                         // Sinon on affiche la liste*/
/*                         $('i').css("display", "block").html('Cliquez sur le périodique si il est dans la liste :');*/
/*                         $('#periodiques-proposition').css("display", "block");*/
/*                         $(data).each(function(index){*/
/*                             if(!$("#auteur"+this.id).length){*/
/*                                 var str = "<li id=\"periodique"+ this.id +"\">" + this.nom + "</li>";*/
/*                                 $('#periodiques-proposition').append(str);*/
/*                             }*/
/*                         });*/
/*                         */
/*                         $('#periodiques-proposition li').each(function(index){*/
/*                            $(this).click(function(){*/
/*                                 var choix = $(this).html();*/
/*                                 $('#input-periodique').val(choix);*/
/*                                 $('#periodiques-proposition').css("display", "none");*/
/*                                 $('i').html('Le périodique sera importé depuis la base de donnée.');*/
/*                            });*/
/*                        });*/
/*                             */
/*                     },*/
/*                     type: 'GET'*/
/*                 });*/
/*            });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
