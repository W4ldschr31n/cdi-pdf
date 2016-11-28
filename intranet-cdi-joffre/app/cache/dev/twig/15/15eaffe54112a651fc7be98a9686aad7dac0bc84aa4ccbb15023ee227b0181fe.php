<?php

/* ::base.html.twig */
class __TwigTemplate_bdc2b5824f1242477bc6649f635d5ce012ec64ae3b5986a4e0598db28df30369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_971d153231ba4ec6012855c9309bf0072a0d5632499ef95afd43dcf8243d67dc = $this->env->getExtension("native_profiler");
        $__internal_971d153231ba4ec6012855c9309bf0072a0d5632499ef95afd43dcf8243d67dc->enter($__internal_971d153231ba4ec6012855c9309bf0072a0d5632499ef95afd43dcf8243d67dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <div id=\"inner-header\">
                <div id=\"logo\">
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <h1>Centre de documentation</h1>
                <nav>
                    <ul>
                        <li><a href=\"http://www.univ-nantes.fr/\">Université</a></li>
                        <li><a href=\"\">À propos</a></li>
                        <li><a href=\"\">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        ";
        // line 27
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "has", array(0 => "user"), "method")) {
            // line 28
            echo "        <section id=\"user\">
            <div id=\"inner-user\">

                <img src=\"http://www.buira.org/assets/images/shared/default-profile.png\" alt=\"Photo de profil\" id=\"photo_profil\"/>
                <p id=\"nom_profil\" style=\"font-family: Arial\">";
            // line 32
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method")), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "status"), "method")), "html", null, true);
            echo "</p>
                <a class=\"deconnexion\" href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("deconnexion");
            echo "\">Déconnexion</a>
              

            </div>
        </section>
        ";
        }
        // line 39
        echo "        <div id=\"contenu\">
            ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        </div>

        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.2.1.min.js\"></script>
        ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </body>
</html>
";
        
        $__internal_971d153231ba4ec6012855c9309bf0072a0d5632499ef95afd43dcf8243d67dc->leave($__internal_971d153231ba4ec6012855c9309bf0072a0d5632499ef95afd43dcf8243d67dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f69d03cf6e2ab3b8098ce1fbedd209c8d03550c9b7aabc1d64483af6e9142024 = $this->env->getExtension("native_profiler");
        $__internal_f69d03cf6e2ab3b8098ce1fbedd209c8d03550c9b7aabc1d64483af6e9142024->enter($__internal_f69d03cf6e2ab3b8098ce1fbedd209c8d03550c9b7aabc1d64483af6e9142024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue - CDI";
        
        $__internal_f69d03cf6e2ab3b8098ce1fbedd209c8d03550c9b7aabc1d64483af6e9142024->leave($__internal_f69d03cf6e2ab3b8098ce1fbedd209c8d03550c9b7aabc1d64483af6e9142024_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6aa8e7bf1d952c004caf6b87cd0897f74e8a37b3fcc7e8772c8fdfdc1ff747fd = $this->env->getExtension("native_profiler");
        $__internal_6aa8e7bf1d952c004caf6b87cd0897f74e8a37b3fcc7e8772c8fdfdc1ff747fd->enter($__internal_6aa8e7bf1d952c004caf6b87cd0897f74e8a37b3fcc7e8772c8fdfdc1ff747fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6aa8e7bf1d952c004caf6b87cd0897f74e8a37b3fcc7e8772c8fdfdc1ff747fd->leave($__internal_6aa8e7bf1d952c004caf6b87cd0897f74e8a37b3fcc7e8772c8fdfdc1ff747fd_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ba69ef2a5dd12d846a932ced3a1a411191b69a8f4a045a73191d2e3a7153115 = $this->env->getExtension("native_profiler");
        $__internal_5ba69ef2a5dd12d846a932ced3a1a411191b69a8f4a045a73191d2e3a7153115->enter($__internal_5ba69ef2a5dd12d846a932ced3a1a411191b69a8f4a045a73191d2e3a7153115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ba69ef2a5dd12d846a932ced3a1a411191b69a8f4a045a73191d2e3a7153115->leave($__internal_5ba69ef2a5dd12d846a932ced3a1a411191b69a8f4a045a73191d2e3a7153115_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fb302851f6415b97024f6eb98ea932945016f38cf22774cad01a7243535e2db = $this->env->getExtension("native_profiler");
        $__internal_4fb302851f6415b97024f6eb98ea932945016f38cf22774cad01a7243535e2db->enter($__internal_4fb302851f6415b97024f6eb98ea932945016f38cf22774cad01a7243535e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4fb302851f6415b97024f6eb98ea932945016f38cf22774cad01a7243535e2db->leave($__internal_4fb302851f6415b97024f6eb98ea932945016f38cf22774cad01a7243535e2db_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  137 => 40,  126 => 6,  114 => 5,  105 => 45,  103 => 44,  98 => 41,  96 => 40,  93 => 39,  84 => 33,  78 => 32,  72 => 28,  70 => 27,  53 => 15,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Bienvenue - CDI{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" href="{{ asset('css/base.css') }}"/>*/
/*         <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <div id="inner-header">*/
/*                 <div id="logo">*/
/*                     <a href="{{ path('accueil') }}"><img src="{{ asset('img/logo.png') }}" /></a>*/
/*                 </div>*/
/*                 <h1>Centre de documentation</h1>*/
/*                 <nav>*/
/*                     <ul>*/
/*                         <li><a href="http://www.univ-nantes.fr/">Université</a></li>*/
/*                         <li><a href="">À propos</a></li>*/
/*                         <li><a href="">Contact</a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/*             </div>*/
/*         </header>*/
/*         {% if app.session.has('user') %}*/
/*         <section id="user">*/
/*             <div id="inner-user">*/
/* */
/*                 <img src="http://www.buira.org/assets/images/shared/default-profile.png" alt="Photo de profil" id="photo_profil"/>*/
/*                 <p id="nom_profil" style="font-family: Arial">{{ app.session.get('user')|upper }} - {{ app.session.get('status')|upper }}</p>*/
/*                 <a class="deconnexion" href="{{ path('deconnexion') }}">Déconnexion</a>*/
/*               */
/* */
/*             </div>*/
/*         </section>*/
/*         {% endif %}*/
/*         <div id="contenu">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
