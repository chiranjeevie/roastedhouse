<?php

/* @EasyAdmin/default/field_percent.html.twig */
class __TwigTemplate_91f6d77656a16e1fdda42d50eb74d3f9789df3c6a3dc9e0778aaec4be9e0e90e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_percent.html.twig"));

        // line 1
        $context["type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", array(), "any", false, true), "type", array()), "fractional")) : ("fractional"));
        // line 2
        $context["scale"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", array(), "any", false, true), "scale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", array(), "any", false, true), "scale", array()), 0)) : (0));
        // line 3
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 3, $this->source); })()) == "fractional")) ? (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->source); })()) * 100)) : ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->source); })()))), (isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new Twig_Error_Runtime('Variable "scale" does not exist.', 3, $this->source); })())), "html", null, true);
        echo "%
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set type = field_options.type_options.type|default('fractional') %}
{% set scale = field_options.type_options.scale|default(0) %}
{{ (type == 'fractional' ? value * 100 : value)|number_format(scale) }}%
", "@EasyAdmin/default/field_percent.html.twig", "/home/chiranjeevie/projects/courses/api/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_percent.html.twig");
    }
}
