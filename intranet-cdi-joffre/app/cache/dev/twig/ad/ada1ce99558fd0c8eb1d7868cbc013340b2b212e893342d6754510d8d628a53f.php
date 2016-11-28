<?php

/* CdiBundle:Auteur:ajout.html.twig */
class __TwigTemplate_67dd4a4d6ec08b2c7429c07e61bc3c8ed5f1cff2970bc2d302549e7d7144dd61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Auteur:ajout.html.twig", 1);
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
        $__internal_9661cce1865407681600440d592aabb6fa0f19c3ddc7bff8bcdaa52aeb69dd01 = $this->env->getExtension("native_profiler");
        $__internal_9661cce1865407681600440d592aabb6fa0f19c3ddc7bff8bcdaa52aeb69dd01->enter($__internal_9661cce1865407681600440d592aabb6fa0f19c3ddc7bff8bcdaa52aeb69dd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Auteur:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9661cce1865407681600440d592aabb6fa0f19c3ddc7bff8bcdaa52aeb69dd01->leave($__internal_9661cce1865407681600440d592aabb6fa0f19c3ddc7bff8bcdaa52aeb69dd01_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbb23f39fb8da44490bc185a850a98d4283d94646c21cf294f433b1dc9944cb1 = $this->env->getExtension("native_profiler");
        $__internal_fbb23f39fb8da44490bc185a850a98d4283d94646c21cf294f433b1dc9944cb1->enter($__internal_fbb23f39fb8da44490bc185a850a98d4283d94646c21cf294f433b1dc9944cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
        table {
            margin-top: 20px;
        }
    </style>
";
        
        $__internal_fbb23f39fb8da44490bc185a850a98d4283d94646c21cf294f433b1dc9944cb1->leave($__internal_fbb23f39fb8da44490bc185a850a98d4283d94646c21cf294f433b1dc9944cb1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_79cc7d865e4bc0e20862a1d3daa8a73f4f355bf43acf014961d117a669bf2375 = $this->env->getExtension("native_profiler");
        $__internal_79cc7d865e4bc0e20862a1d3daa8a73f4f355bf43acf014961d117a669bf2375->enter($__internal_79cc7d865e4bc0e20862a1d3daa8a73f4f355bf43acf014961d117a669bf2375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > AJOUT D'UN AUTEUR</h2>
    <section class=\"section\">
        <h4 style=\"margin: 0; text-transform: uppercase;\">Informations du nouvel auteur :</h4>
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
        // line 22
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom de l'auteur :"));
        echo "
                    </td>
                    <td>
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("placeholder" => "Prénom")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 31
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom de l'auteur :"));
        echo "
                    </td>
                    <td>
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        ";
        // line 41
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajout", array()), 'widget', array("label" => "Enregistrer l'auteur"));
        echo "
                    </td>
                </tr>
            </table>

            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </section>
";
        
        $__internal_79cc7d865e4bc0e20862a1d3daa8a73f4f355bf43acf014961d117a669bf2375->leave($__internal_79cc7d865e4bc0e20862a1d3daa8a73f4f355bf43acf014961d117a669bf2375_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Auteur:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 47,  118 => 46,  109 => 41,  100 => 34,  93 => 31,  85 => 25,  78 => 22,  70 => 16,  66 => 15,  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
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
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > AJOUT D'UN AUTEUR</h2>*/
/*     <section class="section">*/
/*         <h4 style="margin: 0; text-transform: uppercase;">Informations du nouvel auteur :</h4>*/
/*         {{ form_start(form) }}*/
/*             {{ form_errors(form) }}*/
/* */
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
/*                         {{ form_widget(form.ajout, {'label': 'Enregistrer l\'auteur'}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/* */
/*             {{ form_rest(form) }}*/
/*         {{ form_end(form) }}*/
/*     </section>*/
/* {% endblock %}*/
/* */
