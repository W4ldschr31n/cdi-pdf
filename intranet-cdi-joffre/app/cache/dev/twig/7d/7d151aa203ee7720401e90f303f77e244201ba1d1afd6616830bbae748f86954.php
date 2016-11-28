<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e3c359e8da690480a280bd98620859b024258635b2eb3dd648080177b60c3529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34bdfc3169a261ebc9ab441aaaaa3c8d91aca35d88aaa25edaf462b023aa3db6 = $this->env->getExtension("native_profiler");
        $__internal_34bdfc3169a261ebc9ab441aaaaa3c8d91aca35d88aaa25edaf462b023aa3db6->enter($__internal_34bdfc3169a261ebc9ab441aaaaa3c8d91aca35d88aaa25edaf462b023aa3db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34bdfc3169a261ebc9ab441aaaaa3c8d91aca35d88aaa25edaf462b023aa3db6->leave($__internal_34bdfc3169a261ebc9ab441aaaaa3c8d91aca35d88aaa25edaf462b023aa3db6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd0ad002c3548d51f4a4995b012f3d7a1893b3f0aee683d267919150a506d20c = $this->env->getExtension("native_profiler");
        $__internal_dd0ad002c3548d51f4a4995b012f3d7a1893b3f0aee683d267919150a506d20c->enter($__internal_dd0ad002c3548d51f4a4995b012f3d7a1893b3f0aee683d267919150a506d20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd0ad002c3548d51f4a4995b012f3d7a1893b3f0aee683d267919150a506d20c->leave($__internal_dd0ad002c3548d51f4a4995b012f3d7a1893b3f0aee683d267919150a506d20c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d31e7163cb4d74e0aae460bd71e0e27146293312a56f9cb002ead7d3d1cd5d7 = $this->env->getExtension("native_profiler");
        $__internal_6d31e7163cb4d74e0aae460bd71e0e27146293312a56f9cb002ead7d3d1cd5d7->enter($__internal_6d31e7163cb4d74e0aae460bd71e0e27146293312a56f9cb002ead7d3d1cd5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d31e7163cb4d74e0aae460bd71e0e27146293312a56f9cb002ead7d3d1cd5d7->leave($__internal_6d31e7163cb4d74e0aae460bd71e0e27146293312a56f9cb002ead7d3d1cd5d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_011478f6ef280fc0d50d4a749bd7204891ae7228f3e088b04ffc70a8000cfa06 = $this->env->getExtension("native_profiler");
        $__internal_011478f6ef280fc0d50d4a749bd7204891ae7228f3e088b04ffc70a8000cfa06->enter($__internal_011478f6ef280fc0d50d4a749bd7204891ae7228f3e088b04ffc70a8000cfa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_011478f6ef280fc0d50d4a749bd7204891ae7228f3e088b04ffc70a8000cfa06->leave($__internal_011478f6ef280fc0d50d4a749bd7204891ae7228f3e088b04ffc70a8000cfa06_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
