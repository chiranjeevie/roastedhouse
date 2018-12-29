<?php

/* vich_uploader_image.html.twig */
class __TwigTemplate_291fcc4c49ea75e7e4c1f0e02353878b1db6ec53fec21ab7c93482aecc3de700 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vich_uploader_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1, $this->source); })()), "id", array()), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    ";
        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 3, $this->source); })()), "file", "App\\Entity\\Image"), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->source); })()), "id", array()), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    ";
        // line 8
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->source); })()), "file", "App\\Entity\\Image"), "html", null, true);
        echo "\">
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vich_uploader_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 6,  31 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ item.id }}\" data-featherlight-close-on-click=\"anywhere\">
    {# the second parameter is the name of the property with the UploadableField annotation #}
    <img src=\"{{ vich_uploader_asset(item, 'file', 'App\\\\Entity\\\\Image') }}\">
</a>

<div id=\"easyadmin-lightbox-{{ item.id }}\" class=\"easyadmin-lightbox\">
    {# the second parameter is the name of the property with the UploadableField annotation #}
    <img src=\"{{ vich_uploader_asset(item, 'file', 'App\\\\Entity\\\\Image') }}\">
</div>", "vich_uploader_image.html.twig", "/home/chiranjeevie/projects/courses/api/templates/vich_uploader_image.html.twig");
    }
}
