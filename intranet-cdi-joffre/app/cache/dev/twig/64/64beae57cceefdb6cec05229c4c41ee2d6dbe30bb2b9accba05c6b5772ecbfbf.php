<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ab20209c1ed66e12ad89a8c4b00cee475f73e3d85ead8986dd7abc209dc3d00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce10d178f579a47c2ec16a7fad6e1a83d9088e8b80eedc37b39820f7671c5742 = $this->env->getExtension("native_profiler");
        $__internal_ce10d178f579a47c2ec16a7fad6e1a83d9088e8b80eedc37b39820f7671c5742->enter($__internal_ce10d178f579a47c2ec16a7fad6e1a83d9088e8b80eedc37b39820f7671c5742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce10d178f579a47c2ec16a7fad6e1a83d9088e8b80eedc37b39820f7671c5742->leave($__internal_ce10d178f579a47c2ec16a7fad6e1a83d9088e8b80eedc37b39820f7671c5742_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9f875b41fbe8ef688e2d55f904eb84619a1a828e92024a74d6af97ac8dd09f7 = $this->env->getExtension("native_profiler");
        $__internal_c9f875b41fbe8ef688e2d55f904eb84619a1a828e92024a74d6af97ac8dd09f7->enter($__internal_c9f875b41fbe8ef688e2d55f904eb84619a1a828e92024a74d6af97ac8dd09f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c9f875b41fbe8ef688e2d55f904eb84619a1a828e92024a74d6af97ac8dd09f7->leave($__internal_c9f875b41fbe8ef688e2d55f904eb84619a1a828e92024a74d6af97ac8dd09f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e491e9cb6459983f4f293c4ed76cdd6e9c8354888743a5cd005b6f8812439d6 = $this->env->getExtension("native_profiler");
        $__internal_3e491e9cb6459983f4f293c4ed76cdd6e9c8354888743a5cd005b6f8812439d6->enter($__internal_3e491e9cb6459983f4f293c4ed76cdd6e9c8354888743a5cd005b6f8812439d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e491e9cb6459983f4f293c4ed76cdd6e9c8354888743a5cd005b6f8812439d6->leave($__internal_3e491e9cb6459983f4f293c4ed76cdd6e9c8354888743a5cd005b6f8812439d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_82c40dc641b093ce45b7939a301e2914d2af8d9dc4c18e5e120df50e8441826d = $this->env->getExtension("native_profiler");
        $__internal_82c40dc641b093ce45b7939a301e2914d2af8d9dc4c18e5e120df50e8441826d->enter($__internal_82c40dc641b093ce45b7939a301e2914d2af8d9dc4c18e5e120df50e8441826d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_82c40dc641b093ce45b7939a301e2914d2af8d9dc4c18e5e120df50e8441826d->leave($__internal_82c40dc641b093ce45b7939a301e2914d2af8d9dc4c18e5e120df50e8441826d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
