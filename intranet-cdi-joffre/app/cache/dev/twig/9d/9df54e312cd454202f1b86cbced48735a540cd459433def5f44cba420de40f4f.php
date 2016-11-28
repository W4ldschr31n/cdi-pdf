<?php

/* CdiBundle:Periodique:liste.html.twig */
class __TwigTemplate_8bb45a1433af12b31d9c853ff3cc5d8e7ad680f5f186bd2e7f0440c8d32a6fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Periodique:liste.html.twig", 1);
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
        $__internal_e6d92c6c1190abf59b7e8749d6768a8acfd41f0edf3ffc967aabcec39575f978 = $this->env->getExtension("native_profiler");
        $__internal_e6d92c6c1190abf59b7e8749d6768a8acfd41f0edf3ffc967aabcec39575f978->enter($__internal_e6d92c6c1190abf59b7e8749d6768a8acfd41f0edf3ffc967aabcec39575f978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Periodique:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6d92c6c1190abf59b7e8749d6768a8acfd41f0edf3ffc967aabcec39575f978->leave($__internal_e6d92c6c1190abf59b7e8749d6768a8acfd41f0edf3ffc967aabcec39575f978_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd021f4479bb5b39351db72535becea70c5e69bd73591503065d55343b12da5b = $this->env->getExtension("native_profiler");
        $__internal_bd021f4479bb5b39351db72535becea70c5e69bd73591503065d55343b12da5b->enter($__internal_bd021f4479bb5b39351db72535becea70c5e69bd73591503065d55343b12da5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bd021f4479bb5b39351db72535becea70c5e69bd73591503065d55343b12da5b->leave($__internal_bd021f4479bb5b39351db72535becea70c5e69bd73591503065d55343b12da5b_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0f51bab364a2c254d2493cdd1b9958ff3afe06f4e489b73b2b2875bed1646bf = $this->env->getExtension("native_profiler");
        $__internal_f0f51bab364a2c254d2493cdd1b9958ff3afe06f4e489b73b2b2875bed1646bf->enter($__internal_f0f51bab364a2c254d2493cdd1b9958ff3afe06f4e489b73b2b2875bed1646bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f0f51bab364a2c254d2493cdd1b9958ff3afe06f4e489b73b2b2875bed1646bf->leave($__internal_f0f51bab364a2c254d2493cdd1b9958ff3afe06f4e489b73b2b2875bed1646bf_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_e400cdabeb8ff60d10d512f642c5f2bd9e00f111fdf45e51df56d553bb9e54a8 = $this->env->getExtension("native_profiler");
        $__internal_e400cdabeb8ff60d10d512f642c5f2bd9e00f111fdf45e51df56d553bb9e54a8->enter($__internal_e400cdabeb8ff60d10d512f642c5f2bd9e00f111fdf45e51df56d553bb9e54a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > LISTE DES PERIODIQUES</h2>
    <section class=\"section\">
        ";
        // line 61
        echo "        ";
        if ((isset($context["periodiques"]) ? $context["periodiques"] : $this->getContext($context, "periodiques"))) {
            // line 62
            echo "            <table style=\"margin: auto;\" class=\"info-table\">
                <tr>
                    <th>
                        Nom
                    </th>
                </tr>
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["periodiques"]) ? $context["periodiques"] : $this->getContext($context, "periodiques")));
            foreach ($context['_seq'] as $context["_key"] => $context["periodique"]) {
                // line 69
                echo "                    <tr>
                        <td style=\"min-width: 200px;\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["periodique"], "nom", array()), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodique_editer", array("id" => $this->getAttribute($context["periodique"], "id", array()))), "html", null, true);
                echo "\"><img style=\"width: 15px; height: 15px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/edit_icon.png"), "html", null, true);
                echo "\" alt=\"Editer le periodique\"/></a></td>
                        <td><a class=\"supprimer\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodique_supprimer", array("id" => $this->getAttribute($context["periodique"], "id", array()))), "html", null, true);
                echo "\"><img style=\"width: 15px; height: 15px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/delete_icon.png"), "html", null, true);
                echo "\" alt=\"Supprimer le periodique\"/></a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periodique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "            </table>
        ";
        } else {
            // line 77
            echo "            <div class=\"erreur\">Aucun périodique dans la base de données.</div>
        ";
        }
        // line 79
        echo "        <div id=\"dialog\" title=\"Suppression\">
            <p>Si vous supprimez ce périoqique, tous les articles qui lui sont affiliés seront eux aussi supprimés.</p>
            <p>Voulez-vous vraiment supprimer ce Périodique ?</p>
            <button class=\"non\">Non</button>
            <button class=\"oui\">Oui</button>
        </div>
    </section>
";
        
        $__internal_e400cdabeb8ff60d10d512f642c5f2bd9e00f111fdf45e51df56d553bb9e54a8->leave($__internal_e400cdabeb8ff60d10d512f642c5f2bd9e00f111fdf45e51df56d553bb9e54a8_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Periodique:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 79,  167 => 77,  163 => 75,  152 => 72,  146 => 71,  142 => 70,  139 => 69,  135 => 68,  127 => 62,  124 => 61,  118 => 58,  112 => 57,  80 => 30,  74 => 29,  42 => 4,  36 => 3,  11 => 1,);
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
/*             });*/
/*                 */
/*         });*/
/*   </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > LISTE DES PERIODIQUES</h2>*/
/*     <section class="section">*/
/*         {# Si il y a des périodiques, on les affiches, sinon on affiche un message d'erreur. #}*/
/*         {% if periodiques %}*/
/*             <table style="margin: auto;" class="info-table">*/
/*                 <tr>*/
/*                     <th>*/
/*                         Nom*/
/*                     </th>*/
/*                 </tr>*/
/*                 {% for periodique in periodiques %}*/
/*                     <tr>*/
/*                         <td style="min-width: 200px;">{{ periodique.nom }}</td>*/
/*                         <td><a href="{{ path('periodique_editer', {"id": periodique.id}) }}"><img style="width: 15px; height: 15px;" src="{{ asset('img/edit_icon.png') }}" alt="Editer le periodique"/></a></td>*/
/*                         <td><a class="supprimer" href="{{ path('periodique_supprimer', {"id": periodique.id}) }}"><img style="width: 15px; height: 15px;" src="{{ asset('img/delete_icon.png') }}" alt="Supprimer le periodique"/></a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         {% else %}*/
/*             <div class="erreur">Aucun périodique dans la base de données.</div>*/
/*         {% endif %}*/
/*         <div id="dialog" title="Suppression">*/
/*             <p>Si vous supprimez ce périoqique, tous les articles qui lui sont affiliés seront eux aussi supprimés.</p>*/
/*             <p>Voulez-vous vraiment supprimer ce Périodique ?</p>*/
/*             <button class="non">Non</button>*/
/*             <button class="oui">Oui</button>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
