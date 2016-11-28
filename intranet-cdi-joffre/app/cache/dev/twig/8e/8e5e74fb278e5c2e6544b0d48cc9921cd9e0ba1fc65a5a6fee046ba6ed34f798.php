<?php

/* CdiBundle:Periodique:editer.html.twig */
class __TwigTemplate_9f8e965abc6b5c0bb815ad489d98a9275840d0ace7466bd9ddb521f064e8a0e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Periodique:editer.html.twig", 1);
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
        $__internal_d47ea747070186797935723eb569b6ea604aa6960db3e2bba57a6fcf5ac603de = $this->env->getExtension("native_profiler");
        $__internal_d47ea747070186797935723eb569b6ea604aa6960db3e2bba57a6fcf5ac603de->enter($__internal_d47ea747070186797935723eb569b6ea604aa6960db3e2bba57a6fcf5ac603de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Periodique:editer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d47ea747070186797935723eb569b6ea604aa6960db3e2bba57a6fcf5ac603de->leave($__internal_d47ea747070186797935723eb569b6ea604aa6960db3e2bba57a6fcf5ac603de_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_224026307a7f9366a94e76db3bf55b96b4ca5d1797a7550065719b059688defa = $this->env->getExtension("native_profiler");
        $__internal_224026307a7f9366a94e76db3bf55b96b4ca5d1797a7550065719b059688defa->enter($__internal_224026307a7f9366a94e76db3bf55b96b4ca5d1797a7550065719b059688defa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    </style>
";
        
        $__internal_224026307a7f9366a94e76db3bf55b96b4ca5d1797a7550065719b059688defa->leave($__internal_224026307a7f9366a94e76db3bf55b96b4ca5d1797a7550065719b059688defa_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cf7054b01a09f28c32d7dcfc2094420967cd00f8dd4f7104c2a22449187da9a = $this->env->getExtension("native_profiler");
        $__internal_7cf7054b01a09f28c32d7dcfc2094420967cd00f8dd4f7104c2a22449187da9a->enter($__internal_7cf7054b01a09f28c32d7dcfc2094420967cd00f8dd4f7104c2a22449187da9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > <a href=\"";
        echo $this->env->getExtension('routing')->getPath("periodique_liste");
        echo "\">Gestion des périodiques</a> > EDITION D'UN PERIODIQUE</h2>
    <section class=\"section\">

        <h4 style=\"margin: 0; text-transform: uppercase;\">Nom du périodique :</h4>
        ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            <table>
                <tr>
                    <td>
                        ";
        // line 46
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom du périodique :"));
        echo "
                    </td>
                    <td>
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        ";
        // line 56
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajout", array()), 'widget', array("label" => "Modifier le périodique"));
        echo "
                    </td>
                </tr>
            </table>

            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </section>
";
        
        $__internal_7cf7054b01a09f28c32d7dcfc2094420967cd00f8dd4f7104c2a22449187da9a->leave($__internal_7cf7054b01a09f28c32d7dcfc2094420967cd00f8dd4f7104c2a22449187da9a_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Periodique:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 62,  129 => 61,  120 => 56,  111 => 49,  104 => 46,  96 => 40,  92 => 39,  82 => 35,  76 => 34,  41 => 4,  35 => 3,  11 => 1,);
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
/*         */
/*         label{*/
/*             display: inline-block;*/
/*             font-size: 13px;*/
/*             vertical-align: middle;*/
/*             min-width: 150px;*/
/*         }*/
/*         */
/*         textarea{*/
/*             vertical-align: top;*/
/*         }*/
/*         */
/*         i{*/
/*             display: block;*/
/*             font-size: 12px;*/
/*         }*/
/*         */
/*        #valider{*/
/*             text-align: right;*/
/*             margin-top: 10px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > <a href="{{ path('periodique_liste') }}">Gestion des périodiques</a> > EDITION D'UN PERIODIQUE</h2>*/
/*     <section class="section">*/
/* */
/*         <h4 style="margin: 0; text-transform: uppercase;">Nom du périodique :</h4>*/
/*         {{ form_start(form) }}*/
/*             {{ form_errors(form) }}*/
/* */
/*             <table>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {# Nom du périodique #}*/
/*                         {{ form_label(form.nom, "Nom du périodique :") }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_widget(form.nom, {'attr': {'placeholder': 'Nom'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <br/>*/
/*                         {# Submit button #}*/
/*                         {{ form_widget(form.ajout, {'label': 'Modifier le périodique'}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/* */
/*             {{ form_rest(form) }}*/
/*         {{ form_end(form) }}*/
/*     </section>*/
/* {% endblock %}*/
/* */
