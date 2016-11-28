<?php

/* CdiBundle:Auteur:editer.html.twig */
class __TwigTemplate_8e3fe77673f37bff6bcd5a3908a45c5b8a1a1477c0dfd391fcfde17d53796ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Auteur:editer.html.twig", 1);
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
        $__internal_2484d9e5291ffc947f6cf8311e0524b88f494a7ee925042f225732718e515072 = $this->env->getExtension("native_profiler");
        $__internal_2484d9e5291ffc947f6cf8311e0524b88f494a7ee925042f225732718e515072->enter($__internal_2484d9e5291ffc947f6cf8311e0524b88f494a7ee925042f225732718e515072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Auteur:editer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2484d9e5291ffc947f6cf8311e0524b88f494a7ee925042f225732718e515072->leave($__internal_2484d9e5291ffc947f6cf8311e0524b88f494a7ee925042f225732718e515072_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_545431d1b3ac46319c67529ffa6abe838626d017ae7fc85e13e9d9ae41ce3f45 = $this->env->getExtension("native_profiler");
        $__internal_545431d1b3ac46319c67529ffa6abe838626d017ae7fc85e13e9d9ae41ce3f45->enter($__internal_545431d1b3ac46319c67529ffa6abe838626d017ae7fc85e13e9d9ae41ce3f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
        table {
            margin-top: 20px;
        }
    </style>
";
        
        $__internal_545431d1b3ac46319c67529ffa6abe838626d017ae7fc85e13e9d9ae41ce3f45->leave($__internal_545431d1b3ac46319c67529ffa6abe838626d017ae7fc85e13e9d9ae41ce3f45_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_115430720dbda39082e4da5c7a0fdee5a6392cb31d0ce9ff71b4e101a3212ff2 = $this->env->getExtension("native_profiler");
        $__internal_115430720dbda39082e4da5c7a0fdee5a6392cb31d0ce9ff71b4e101a3212ff2->enter($__internal_115430720dbda39082e4da5c7a0fdee5a6392cb31d0ce9ff71b4e101a3212ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > <a href=\"";
        echo $this->env->getExtension('routing')->getPath("auteur_liste");
        echo "\">Gestion des auteurs</a> > EDITION D'UN AUTEUR</h2>
    <section class=\"section\">
        <h4 style=\"margin: 0; text-transform: uppercase;\">Edition de l'auteur :</h4>
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            <table>
                <tr>
                    <td>
                        ";
        // line 21
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom de l'auteur :"));
        echo "
                    </td>
                    <td>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("placeholder" => "Prénom")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 30
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom de l'auteur :"));
        echo "
                    </td>
                    <td>
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        ";
        // line 40
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajout", array()), 'widget', array("label" => "Modifier l'auteur"));
        echo "
                    </td>
                </tr>
            </table>

            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </section>
";
        
        $__internal_115430720dbda39082e4da5c7a0fdee5a6392cb31d0ce9ff71b4e101a3212ff2->leave($__internal_115430720dbda39082e4da5c7a0fdee5a6392cb31d0ce9ff71b4e101a3212ff2_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Auteur:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  119 => 45,  110 => 40,  101 => 33,  94 => 30,  86 => 24,  79 => 21,  72 => 16,  68 => 15,  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         table {*/
/*             margin-top: 20px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > <a href="{{ path('auteur_liste') }}">Gestion des auteurs</a> > EDITION D'UN AUTEUR</h2>*/
/*     <section class="section">*/
/*         <h4 style="margin: 0; text-transform: uppercase;">Edition de l'auteur :</h4>*/
/*         {{ form_start(form) }}*/
/*             {{ form_errors(form) }}*/
/*             <table>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {# Prénom de l'auteur #}*/
/*                         {{ form_label(form.prenom, "Prénom de l'auteur :") }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_widget(form.prenom, {'attr': {'placeholder': 'Prénom'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {# Nom de l'auteur #}*/
/*                         {{ form_label(form.nom, "Nom de l'auteur :") }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_widget(form.nom, {'attr': {'placeholder': 'Nom'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <br/>*/
/*                         {# Submit button #}*/
/*                         {{ form_widget(form.ajout, {'label': 'Modifier l\'auteur'}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/* */
/*             {{ form_rest(form) }}*/
/*         {{ form_end(form) }}*/
/*     </section>*/
/* {% endblock %}*/
/* */
