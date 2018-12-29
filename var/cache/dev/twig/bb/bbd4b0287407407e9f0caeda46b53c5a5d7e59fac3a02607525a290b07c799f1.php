<?php

/* @EasyAdmin/default/field_toggle.html.twig */
class __TwigTemplate_a86c06c2554282041f260ce79dd293ef80edb5ec03a4632f0e67e023f0b50a92 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 3, $this->source); })()) == "show") || twig_in_filter("edit", twig_get_attribute($this->env, $this->source, (isset($context["backend_config"]) || array_key_exists("backend_config", $context) ? $context["backend_config"] : (function () { throw new Twig_Error_Runtime('Variable "backend_config" does not exist.', 3, $this->source); })()), "disabled_actions", array())))) {
            // line 4
            echo "    ";
            if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->source); })()) == true)) {
                // line 5
                echo "        <span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <div class=\"checkbox-switch\" data-propertyname=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 10, $this->source); })()), "property", array()), "html", null, true);
            echo "\">
        <label>
            <input type=\"checkbox\" ";
            // line 12
            echo ((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 12, $this->source); })()) == true)) ? ("checked") : (""));
            echo ">
            ";
            // line 13
            echo "<span></span>
        </label>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 12,  47 => 10,  40 => 7,  34 => 5,  31 => 4,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' or ('edit' in backend_config.disabled_actions) %}
    {% if value == true %}
        <span class=\"badge badge-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"badge badge-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <div class=\"checkbox-switch\" data-propertyname=\"{{ field_options.property }}\">
        <label>
            <input type=\"checkbox\" {{ value == true ? 'checked' }}>
            {# the empty <span> is needed for styling. Don't remove it! #}<span></span>
        </label>
    </div>
{% endif %}
", "@EasyAdmin/default/field_toggle.html.twig", "/home/chiranjeevie/projects/courses/api/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_toggle.html.twig");
    }
}
