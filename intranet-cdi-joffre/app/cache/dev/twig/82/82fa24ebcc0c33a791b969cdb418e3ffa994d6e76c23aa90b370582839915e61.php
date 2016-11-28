<?php

/* CdiBundle:Article:liste.html.twig */
class __TwigTemplate_7a9fc5eb6f9235b5888dcbbf0148330ebab4d5f4da80b45d1b3eeb9af7a29bc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:liste.html.twig", 3);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9b73e1e817cd6d4604d6c5166eab3dcc8082c528b725632ed009b3789d292bf2 = $this->env->getExtension("native_profiler");
        $__internal_9b73e1e817cd6d4604d6c5166eab3dcc8082c528b725632ed009b3789d292bf2->enter($__internal_9b73e1e817cd6d4604d6c5166eab3dcc8082c528b725632ed009b3789d292bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b73e1e817cd6d4604d6c5166eab3dcc8082c528b725632ed009b3789d292bf2->leave($__internal_9b73e1e817cd6d4604d6c5166eab3dcc8082c528b725632ed009b3789d292bf2_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_c00a3bbeaacad9ff170f19c487a8045c32a48238ab2a69b5f68b33e0500e15c5 = $this->env->getExtension("native_profiler");
        $__internal_c00a3bbeaacad9ff170f19c487a8045c32a48238ab2a69b5f68b33e0500e15c5->enter($__internal_c00a3bbeaacad9ff170f19c487a8045c32a48238ab2a69b5f68b33e0500e15c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css\">
\t<style type=\"text/css\" class=\"init\">

\t\t</style>

\t<script type=\"text/javascript\" language=\"javascript\" src=\"https://code.jquery.com/jquery-1.12.3.js\">
\t  </script>
\t<script type=\"text/javascript\" language=\"javascript\" src=\"https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js\">
\t  </script>

\t<script type=\"text/javascript\" class=\"init\">
\t\$(document).ready(function() {
\t\t\$('#table').DataTable();
\t} );
\t\t</script>

";
        
        $__internal_c00a3bbeaacad9ff170f19c487a8045c32a48238ab2a69b5f68b33e0500e15c5->leave($__internal_c00a3bbeaacad9ff170f19c487a8045c32a48238ab2a69b5f68b33e0500e15c5_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bec634b29106e359104ad521dbb414595d1deb36b492c4940bcf0e8a93cb3b11 = $this->env->getExtension("native_profiler");
        $__internal_bec634b29106e359104ad521dbb414595d1deb36b492c4940bcf0e8a93cb3b11->enter($__internal_bec634b29106e359104ad521dbb414595d1deb36b492c4940bcf0e8a93cb3b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "
<style>
ul{
  list-style: none;
  padding: 0;
}

.tableauxArticle {
  width : 100%;
}

.article{
  padding: 10px 15px;
  margin-bottom: 8px;
  background-color: #E8E8E8;
  color: black;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.article h5{
  text-transform: uppercase;
  padding-left : 10px;
  color: black;
}

.article:hover{
  background-color: #D9D9D9;
  cursor:  pointer;
}

.article p{
  font-size: 12px;
  margin: 0;
  margin-top: 4px;
}

.pagination{
  color: black;
  background-color: #E8E8E8;
  font-family: Arial;
  padding: 3px;
}

.pagination:hover{
  font-weight: bold;
}
</style>
";
        
        $__internal_bec634b29106e359104ad521dbb414595d1deb36b492c4940bcf0e8a93cb3b11->leave($__internal_bec634b29106e359104ad521dbb414595d1deb36b492c4940bcf0e8a93cb3b11_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfae9f95c1d6dd1e38521a43b445b05f6ef69169758edb278a4e246eec8ca4f1 = $this->env->getExtension("native_profiler");
        $__internal_dfae9f95c1d6dd1e38521a43b445b05f6ef69169758edb278a4e246eec8ca4f1->enter($__internal_dfae9f95c1d6dd1e38521a43b445b05f6ef69169758edb278a4e246eec8ca4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "


<section id=\"contenu\">

  <h2 class=\"fil_ariane\"><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > LISTE DES ARTICLES</h2>

\t<table class=\"tableauxArticle\" id=\"table\">
    <thead>
      <tr>
        <th>Nom de l'article</th>
        <th>Date de parution</th>
        <th>Emplacement</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 95
            echo "        <tr class=\"article\" onClick=\"document.location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_voir", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "'\">
          <td><h5>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</h5></td>
          <td><center>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateParution", array()), "d/m/Y"), "html", null, true);
            echo "</center></td>
          <td><center>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "periodique", array()), "nom", array()), "html", null, true);
            echo "</center></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "      </tbody>
    </table>

    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 105
            echo "    <a class=\"pagination\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_liste", array("page" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "  </section>


  ";
        
        $__internal_dfae9f95c1d6dd1e38521a43b445b05f6ef69169758edb278a4e246eec8ca4f1->leave($__internal_dfae9f95c1d6dd1e38521a43b445b05f6ef69169758edb278a4e246eec8ca4f1_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 107,  190 => 105,  186 => 104,  181 => 101,  172 => 98,  168 => 97,  164 => 96,  159 => 95,  155 => 94,  141 => 83,  134 => 78,  128 => 77,  72 => 24,  66 => 23,  42 => 5,  36 => 4,  11 => 3,);
    }
}
/* */
/* */
/* {% extends '::base.html.twig' %}*/
/* {% block head %}*/
/* */
/* 	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">*/
/* 	<style type="text/css" class="init">*/
/* */
/* 		</style>*/
/* */
/* 	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.3.js">*/
/* 	  </script>*/
/* 	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">*/
/* 	  </script>*/
/* */
/* 	<script type="text/javascript" class="init">*/
/* 	$(document).ready(function() {*/
/* 		$('#table').DataTable();*/
/* 	} );*/
/* 		</script>*/
/* */
/* {% endblock %}*/
/* {% block stylesheets %}*/
/* */
/* <style>*/
/* ul{*/
/*   list-style: none;*/
/*   padding: 0;*/
/* }*/
/* */
/* .tableauxArticle {*/
/*   width : 100%;*/
/* }*/
/* */
/* .article{*/
/*   padding: 10px 15px;*/
/*   margin-bottom: 8px;*/
/*   background-color: #E8E8E8;*/
/*   color: black;*/
/*   -webkit-box-sizing: border-box;*/
/*   -moz-box-sizing: border-box;*/
/*   box-sizing: border-box;*/
/* }*/
/* */
/* .article h5{*/
/*   text-transform: uppercase;*/
/*   padding-left : 10px;*/
/*   color: black;*/
/* }*/
/* */
/* .article:hover{*/
/*   background-color: #D9D9D9;*/
/*   cursor:  pointer;*/
/* }*/
/* */
/* .article p{*/
/*   font-size: 12px;*/
/*   margin: 0;*/
/*   margin-top: 4px;*/
/* }*/
/* */
/* .pagination{*/
/*   color: black;*/
/*   background-color: #E8E8E8;*/
/*   font-family: Arial;*/
/*   padding: 3px;*/
/* }*/
/* */
/* .pagination:hover{*/
/*   font-weight: bold;*/
/* }*/
/* </style>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* <section id="contenu">*/
/* */
/*   <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > LISTE DES ARTICLES</h2>*/
/* */
/* 	<table class="tableauxArticle" id="table">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>Nom de l'article</th>*/
/*         <th>Date de parution</th>*/
/*         <th>Emplacement</th>*/
/*       </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for article in articles %}*/
/*         <tr class="article" onClick="document.location.href='{{ path('article_voir', {'id' : article.id}) }}'">*/
/*           <td><h5>{{ article.titre }}</h5></td>*/
/*           <td><center>{{ article.dateParution|date('d/m/Y') }}</center></td>*/
/*           <td><center>{{ article.periodique.nom }}</center></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/* */
/*     {% for i in range(1, nbPage) %}*/
/*     <a class="pagination" href="{{ path('article_liste', {'page' : i }) }}">{{ i }}</a>*/
/*     {% endfor %}*/
/*   </section>*/
/* */
/* */
/*   {% endblock %}*/
/* */
