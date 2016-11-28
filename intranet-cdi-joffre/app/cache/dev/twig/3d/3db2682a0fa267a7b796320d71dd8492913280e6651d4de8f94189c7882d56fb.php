<?php

/* AppBundle::formulaireRecherche.html.twig */
class __TwigTemplate_ef313fc19204624aed7d08e39366e11fd1cbe16eb9fd648d4c4c4a159af65b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62aa1e5f6fa4451be2ea9df6a0ee71a72f5d2f45eb501929a945e7d3503d2d81 = $this->env->getExtension("native_profiler");
        $__internal_62aa1e5f6fa4451be2ea9df6a0ee71a72f5d2f45eb501929a945e7d3503d2d81->enter($__internal_62aa1e5f6fa4451be2ea9df6a0ee71a72f5d2f45eb501929a945e7d3503d2d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::formulaireRecherche.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("article_recherche");
        echo "\">
    <input type=\"text\" id=\"recherche\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "recherche"), "method"), "html", null, true);
        echo "\" name=\"recherche\" placeholder=\"Votre mot clé, titre, expression, etc\" style=\"height: 33px; width: 400px; padding: 0; padding-left: 15px; margin: 0; border: none;\"/>
    dans
    <select name=\"type\">
        <option value=\"tousChamps\">Tous les champs</option>
        <option value=\"titre\">Titre de l'article</option>
        <option value=\"auteur\">Nom de l'auteur</option>
        <option value=\"periodique\">Nom du périodique</option>
    </select>
    <input type=\"submit\" value=\"Rechercher\"/>
    <p id=\"recherche_avancee\">Recherche avancée</p>
    <br/><br/>
    <div class=\"separation_bas\" id=\"champs_recherche_avancee\" style=\"display: none;\">
        <select name=\"operateur\">
            <option value=\"et\">ET</option>
            <option value=\"ou\">OU</option>
            <option value=\"sauf\">SAUF</option>
        </select><br/><br/>
        <input type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "rechercheAvancee"), "method"), "html", null, true);
        echo "\" name=\"rechercheAvancee\" placeholder=\"Votre mot clé, titre, expression, etc\" style=\"height: 33px; width: 400px; padding: 0 0 0 15px;margin: 0; border: none;\"/>
        dans
        <select name=\"typeAvancee\">
            <option value=\"tousChamps\">Tous les champs</option>
            <option value=\"titre\">Titre de l'article</option>
            <option value=\"auteur\">Nom de l'auteur</option>
            <option value=\"periodique\">Nom du périodique</option>
        </select>
    </div>
</form>
";
        
        $__internal_62aa1e5f6fa4451be2ea9df6a0ee71a72f5d2f45eb501929a945e7d3503d2d81->leave($__internal_62aa1e5f6fa4451be2ea9df6a0ee71a72f5d2f45eb501929a945e7d3503d2d81_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::formulaireRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 19,  27 => 2,  22 => 1,);
    }
}
/* <form method="post" action="{{ path('article_recherche') }}">*/
/*     <input type="text" id="recherche" value="{{ app.request.get('recherche') }}" name="recherche" placeholder="Votre mot clé, titre, expression, etc" style="height: 33px; width: 400px; padding: 0; padding-left: 15px; margin: 0; border: none;"/>*/
/*     dans*/
/*     <select name="type">*/
/*         <option value="tousChamps">Tous les champs</option>*/
/*         <option value="titre">Titre de l'article</option>*/
/*         <option value="auteur">Nom de l'auteur</option>*/
/*         <option value="periodique">Nom du périodique</option>*/
/*     </select>*/
/*     <input type="submit" value="Rechercher"/>*/
/*     <p id="recherche_avancee">Recherche avancée</p>*/
/*     <br/><br/>*/
/*     <div class="separation_bas" id="champs_recherche_avancee" style="display: none;">*/
/*         <select name="operateur">*/
/*             <option value="et">ET</option>*/
/*             <option value="ou">OU</option>*/
/*             <option value="sauf">SAUF</option>*/
/*         </select><br/><br/>*/
/*         <input type="text" value="{{ app.request.get('rechercheAvancee') }}" name="rechercheAvancee" placeholder="Votre mot clé, titre, expression, etc" style="height: 33px; width: 400px; padding: 0 0 0 15px;margin: 0; border: none;"/>*/
/*         dans*/
/*         <select name="typeAvancee">*/
/*             <option value="tousChamps">Tous les champs</option>*/
/*             <option value="titre">Titre de l'article</option>*/
/*             <option value="auteur">Nom de l'auteur</option>*/
/*             <option value="periodique">Nom du périodique</option>*/
/*         </select>*/
/*     </div>*/
/* </form>*/
/* */
