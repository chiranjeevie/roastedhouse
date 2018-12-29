<?php

/* @EasyAdmin/default/paginator.html.twig */
class __TwigTemplate_7d551e2dd8564dde597fefc7d0109902253e2c6186c9553d75a0a5bbe2b7b9e7 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/paginator.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["_paginator_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 3, $this->source); })()), array("referer" => null));
        // line 4
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("paginator.results", twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 7, $this->source); })()), "nbResults", array()), array(), "EasyAdminBundle");
        echo "
    </div>

    <div class=\"pager pagination list-pagination-paginator ";
        // line 10
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 10, $this->source); })()), "hasPreviousPage", array())) ? ("first-page") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 10, $this->source); })()), "hasNextPage", array())) ? ("last-page") : (""));
        echo "\">
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 11, $this->source); })()), "hasPreviousPage", array())) {
            // line 12
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_paginator_request_parameters" does not exist.', 12, $this->source); })()), array("page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 12, $this->source); })()), "previousPage", array())))), "html", null, true);
            echo "\">
                <i class=\"fa fa-angle-left\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 16
            echo "            <span class=\"btn btn-disabled\">
                <i class=\"fa fa-angle-left\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 21, $this->source); })()), "hasNextPage", array())) {
            // line 22
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_paginator_request_parameters" does not exist.', 22, $this->source); })()), array("page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 22, $this->source); })()), "nextPage", array())))), "html", null, true);
            echo "\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
            echo " <i class=\"fa fa-angle-right\"></i>
            </a>
        ";
        } else {
            // line 26
            echo "            <span class=\"btn btn-disabled\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
            echo " <i class=\"fa fa-angle-right\"></i>
            </span>
        ";
        }
        // line 30
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  89 => 27,  86 => 26,  80 => 23,  75 => 22,  73 => 21,  70 => 20,  64 => 17,  61 => 16,  55 => 13,  50 => 12,  48 => 11,  42 => 10,  36 => 7,  31 => 4,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% set _paginator_request_parameters = _request_parameters|merge({'referer': null}) %}

<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        {{ 'paginator.results'|transchoice(paginator.nbResults)|raw }}
    </div>

    <div class=\"pager pagination list-pagination-paginator {{ not paginator.hasPreviousPage ? 'first-page' }} {{ not paginator.hasNextPage ? 'last-page' }}\">
        {% if paginator.hasPreviousPage %}
            <a class=\"btn\" href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.previousPage }) ) }}\">
                <i class=\"fa fa-angle-left\"></i> {{ 'paginator.previous'|trans }}
            </a>
        {% else %}
            <span class=\"btn btn-disabled\">
                <i class=\"fa fa-angle-left\"></i> {{ 'paginator.previous'|trans }}
            </span>
        {% endif %}

        {% if paginator.hasNextPage %}
            <a class=\"btn\" href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nextPage }) ) }}\">
                {{ 'paginator.next'|trans }} <i class=\"fa fa-angle-right\"></i>
            </a>
        {% else %}
            <span class=\"btn btn-disabled\">
                {{ 'paginator.next'|trans }} <i class=\"fa fa-angle-right\"></i>
            </span>
        {% endif %}
    </div>
</div>
", "@EasyAdmin/default/paginator.html.twig", "/home/chiranjeevie/projects/courses/api/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/paginator.html.twig");
    }
}
