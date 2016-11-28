<?php

/* CdiBundle:Article:editer.html.twig */
class __TwigTemplate_0cda4e6eee5beb1c1fdc9e67c0816fc447312a21c1bc6a324ba0f0488ef368c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:editer.html.twig", 1);
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
        $__internal_8d60a0f93c20c6943ad25d75ec1cfb0bd69344d0bc482cc7d1fa688eb7987c71 = $this->env->getExtension("native_profiler");
        $__internal_8d60a0f93c20c6943ad25d75ec1cfb0bd69344d0bc482cc7d1fa688eb7987c71->enter($__internal_8d60a0f93c20c6943ad25d75ec1cfb0bd69344d0bc482cc7d1fa688eb7987c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:editer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d60a0f93c20c6943ad25d75ec1cfb0bd69344d0bc482cc7d1fa688eb7987c71->leave($__internal_8d60a0f93c20c6943ad25d75ec1cfb0bd69344d0bc482cc7d1fa688eb7987c71_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c1839ed29de5a48cafaeb1e428696fb543cb9525bd09b142a53fd5253288e25 = $this->env->getExtension("native_profiler");
        $__internal_3c1839ed29de5a48cafaeb1e428696fb543cb9525bd09b142a53fd5253288e25->enter($__internal_3c1839ed29de5a48cafaeb1e428696fb543cb9525bd09b142a53fd5253288e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3c1839ed29de5a48cafaeb1e428696fb543cb9525bd09b142a53fd5253288e25->leave($__internal_3c1839ed29de5a48cafaeb1e428696fb543cb9525bd09b142a53fd5253288e25_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_46e82bb70dbe3e0a7ff8cc3723d58f22c802c5a212133e12ce0cab30070d0cb7 = $this->env->getExtension("native_profiler");
        $__internal_46e82bb70dbe3e0a7ff8cc3723d58f22c802c5a212133e12ce0cab30070d0cb7->enter($__internal_46e82bb70dbe3e0a7ff8cc3723d58f22c802c5a212133e12ce0cab30070d0cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > <a href=\"";
        echo $this->env->getExtension('routing')->getPath("article_liste");
        echo "\">Gestion des articles</a> > EDITION D'UN ARTICLE</h2>
    <section class=\"section\">

        <h4 style=\"margin: 0; text-transform: uppercase;\">Informations de l'article :</h4>
        <p style=\"font-size: 13px; margin-bottom: 35px;\">Modifiez les informations de l'article.</p>
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 44
        echo "            <div class=\"form-field\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Titre :"));
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("placeholder" => "Titre")));
        echo "
            </div>

            ";
        // line 50
        echo "            <div class=\"form-field\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'label', array("label" => "Résumé :"));
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'widget', array("attr" => array("placeholder" => "Résumé", "rows" => "7", "cols" => "50")));
        echo "
            </div>

            ";
        // line 56
        echo "            <div class=\"form-field\">
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateParution", array()), 'label', array("label" => "Date de parution :"));
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateParution", array()), 'widget', array("attr" => array("class" => "calendar", "placeholder" => "JJ/MM/AAAA")));
        echo "
            </div>

            ";
        // line 62
        echo "            <div class=\"form-field\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPeriodique", array()), 'label', array("label" => "Numéro du périodique :"));
        echo "
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPeriodique", array()), 'widget', array("attr" => array("placeholder" => "Numéro du périodique")));
        echo "
            </div>

            ";
        // line 68
        echo "            <div class=\"form-field\">
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageDebut", array()), 'label', array("label" => "Page de début (*) :"));
        echo "
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageDebut", array()), 'widget', array("attr" => array("placeholder" => "Page de début")));
        echo "
            </div>

            ";
        // line 74
        echo "            <div class=\"form-field\">
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageFin", array()), 'label', array("label" => "Page de fin (*) :"));
        echo "
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageFin", array()), 'widget', array("attr" => array("placeholder" => "Page de fin")));
        echo "
            </div>

            <i>(*) : Champs facultatifs</i>

            ";
        // line 82
        echo "            <div id=\"valider\">
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Modifier l'article"));
        echo "
            </div>
        ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </p>
    </section>
";
        
        $__internal_46e82bb70dbe3e0a7ff8cc3723d58f22c802c5a212133e12ce0cab30070d0cb7->leave($__internal_46e82bb70dbe3e0a7ff8cc3723d58f22c802c5a212133e12ce0cab30070d0cb7_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b163342711d3f566f831d244543f259b1adb02d3a4cdfa5126a65dc8d7c06ed = $this->env->getExtension("native_profiler");
        $__internal_5b163342711d3f566f831d244543f259b1adb02d3a4cdfa5126a65dc8d7c06ed->enter($__internal_5b163342711d3f566f831d244543f259b1adb02d3a4cdfa5126a65dc8d7c06ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
    <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$( \".calendar\" ).datepicker({ dateFormat: 'dd/mm/yy' });
            \$(\".calendar\").attr(\"type\", \"text\");
        });
    </script>
";
        
        $__internal_5b163342711d3f566f831d244543f259b1adb02d3a4cdfa5126a65dc8d7c06ed->leave($__internal_5b163342711d3f566f831d244543f259b1adb02d3a4cdfa5126a65dc8d7c06ed_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 91,  202 => 90,  191 => 85,  186 => 83,  183 => 82,  175 => 76,  171 => 75,  168 => 74,  162 => 70,  158 => 69,  155 => 68,  149 => 64,  145 => 63,  142 => 62,  136 => 58,  132 => 57,  129 => 56,  123 => 52,  119 => 51,  116 => 50,  110 => 46,  106 => 45,  103 => 44,  98 => 41,  94 => 40,  83 => 35,  77 => 34,  42 => 4,  36 => 3,  11 => 1,);
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
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > <a href="{{ path('article_liste') }}">Gestion des articles</a> > EDITION D'UN ARTICLE</h2>*/
/*     <section class="section">*/
/* */
/*         <h4 style="margin: 0; text-transform: uppercase;">Informations de l'article :</h4>*/
/*         <p style="font-size: 13px; margin-bottom: 35px;">Modifiez les informations de l'article.</p>*/
/*         {{ form_start(form) }}*/
/*             {{ form_errors(form) }}*/
/* */
/*             {# Titre #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.titre, 'Titre :') }}*/
/*                 {{ form_widget(form.titre, {'attr': {'placeholder': 'Titre'}}) }}*/
/*             </div>*/
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
/*             {# Numéro du périodique #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.numeroPeriodique, 'Numéro du périodique :') }}*/
/*                 {{ form_widget(form.numeroPeriodique, { 'attr': {'placeholder': 'Numéro du périodique'} }) }}*/
/*             </div>*/
/* */
/*             {# Page de début #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.pageDebut, 'Page de début (*) :') }}*/
/*                 {{ form_widget(form.pageDebut, { 'attr': {'placeholder': 'Page de début'} }) }}*/
/*             </div>*/
/* */
/*             {# Page de fin #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.pageFin, 'Page de fin (*) :') }}*/
/*                 {{ form_widget(form.pageFin, { 'attr': {'placeholder': 'Page de fin'} }) }}*/
/*             </div>*/
/* */
/*             <i>(*) : Champs facultatifs</i>*/
/* */
/*             {# Bouton valider #}*/
/*             <div id="valider">*/
/*                 {{ form_widget(form.save, { 'label': "Modifier l'article" }) }}*/
/*             </div>*/
/*         {{ form_end(form) }}*/
/*         </p>*/
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
/* {% endblock %}*/
/* */
