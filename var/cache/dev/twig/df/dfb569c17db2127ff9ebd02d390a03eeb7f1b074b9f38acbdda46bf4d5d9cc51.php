<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_2147c17458e1e559fa9d0ac399deeb73b5e7438deff57337d3cd8e1c6b61dd4e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'content_footer' => array($this, 'block_content_footer'),
            'paginator' => array($this, 'block_paginator'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->source); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"] = twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 2, $this->source); })()), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->source); })()), "name", array()), array(),         // line 2
(isset($context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"]) || array_key_exists("__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a", $context) ? $context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a" does not exist.', 2, $this->source); })())), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->source); })()), "label", array()), array(),         // line 2
(isset($context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"]) || array_key_exists("__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a", $context) ? $context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a" does not exist.', 2, $this->source); })())));
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "request", array()), "query", array()), "all", array()), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 7, $this->source); })()), array())) : (array()))), array("action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "request", array()), "get", array(0 => "action"), "method"), "entity" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->source); })()), "name", array()), "menuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "request", array()), "get", array(0 => "page", 1 => 1), "method"), "referer" => null));
        // line 18
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->source); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 19
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 19, $this->source); })()), array("query" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "sortField" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))), "sortDirection" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method")))));
        }
        // line 26
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 26, $this->source); })()), array("referer" => twig_urlencode_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 26, $this->source); })())))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 28, $this->source); })()), "name", array())), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 29, $this->source); })()), "name", array()))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 32
        ob_start();
        // line 33
        echo "    ";
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->source); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 34
            echo "        ";
            $context["_default_title"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("search.page_title", twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 34, $this->source); })()), "nbResults", array()), array(), "EasyAdminBundle");
            // line 35
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 35, $this->source); })()), "search", array()), "title", array()), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 35, $this->source); })()), "nbResults", array()), array(),             // line 2
(isset($context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"]) || array_key_exists("__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a", $context) ? $context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a" does not exist.', 2, $this->source); })()))) : (            // line 35
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 35, $this->source); })())));
            echo "
    ";
        } else {
            // line 37
            echo "        ";
            $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 37, $this->source); })()), "EasyAdminBundle");
            // line 38
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 38, $this->source); })()), "list", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 38, $this->source); })()),             // line 2
(isset($context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"]) || array_key_exists("__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a", $context) ? $context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a" does not exist.', 2, $this->source); })()))) : (            // line 38
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 38, $this->source); })())));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 44
        echo "    ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 44, $this->source); })()), "name", array()))) {
            // line 45
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 45, $this->source); })()), "name", array()));
            // line 46
            echo "
        ";
            // line 47
            $this->displayBlock('search_action', $context, $blocks);
            // line 66
            echo "    ";
        }
        // line 67
        echo "
    ";
        // line 68
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 68, $this->source); })()), "name", array()))) {
            // line 69
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 69, $this->source); })()), "name", array()));
            // line 70
            echo "        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 78
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 48
        echo "            <div class=\"form-action form-action-search ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                <form method=\"get\" action=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                    ";
        // line 50
        $this->displayBlock('search_form', $context, $blocks);
        // line 63
        echo "                </form>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 51
        echo "                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 52, $this->source); })()), "entity", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 53, $this->source); })()), "sortField", array()))) : (twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 53, $this->source); })()), "sortField", array()))), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 54, $this->source); })()), "sortDirection", array()))) : (twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 54, $this->source); })()), "sortDirection", array()))), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 55, $this->source); })()), "menuIndex", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 56, $this->source); })()), "submenuIndex", array()), "html", null, true);
        echo "\">
                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 59, $this->source); })()),         // line 2
(isset($context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"]) || array_key_exists("__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a", $context) ? $context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 59
        echo "\">
                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 71
        echo "            <div class=\"button-action\">
                <a class=\"";
        // line 72
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 72, $this->source); })()), array("action" => twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 72, $this->source); })()), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 72, $this->source); })()), "target", array()), "html", null, true);
        echo "\">
                    ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 73, $this->source); })()), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 73, $this->source); })()), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 74
        echo "                    ";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 74, $this->source); })()), "label", array())))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 74, $this->source); })()), "label", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 74, $this->source); })()),         // line 2
(isset($context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"]) || array_key_exists("__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a", $context) ? $context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a" does not exist.', 2, $this->source); })()))) : ("")), "html", null, true);
        // line 74
        echo "
                </a>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 82
        echo "    ";
        $context["_list_item_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("list", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 82, $this->source); })()), "name", array()));
        // line 83
        echo "
    <table class=\"table datagrid\">
        <thead>
        ";
        // line 86
        $this->displayBlock('table_head', $context, $blocks);
        // line 112
        echo "        </thead>

        <tbody>
        ";
        // line 115
        $this->displayBlock('table_body', $context, $blocks);
        // line 152
        echo "        </tbody>
    </table>

    ";
        // line 155
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 87
        echo "            <tr>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 89
            echo "                    ";
            $context["isSortingField"] = ((twig_get_attribute($this->env, $this->source, $context["metadata"], "property", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 89, $this->source); })()), "request", array()), "get", array(0 => "sortField"), "method")) || (("association" == twig_get_attribute($this->env, $this->source, $context["metadata"], "type", array())) && (is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 89, $this->source); })()), "request", array()), "get", array(0 => "sortField"), "method")) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", array()) . ".")) && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))));
            // line 90
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 90, $this->source); })())) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 90, $this->source); })()), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 91
            echo "                    ";
            $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["metadata"], "label", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 91, $this->source); })()),             // line 2
(isset($context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"]) || array_key_exists("__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a", $context) ? $context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a" does not exist.', 2, $this->source); })()));
            // line 92
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 92, $this->source); })())) ? (((((isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new Twig_Error_Runtime('Variable "nextSortDirection" does not exist.', 92, $this->source); })()) == "DESC")) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 93
            echo "
                    <th class=\"";
            // line 94
            echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 94, $this->source); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", array()), "html", null, true);
            echo "\" ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, $context["metadata"], "sortable", array())) {
                // line 96
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 96, $this->source); })()), array("page" => 1, "sortField" => twig_get_attribute($this->env, $this->source, $context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new Twig_Error_Runtime('Variable "nextSortDirection" does not exist.', 96, $this->source); })())))), "html", null, true);
                echo "\">
                                ";
                // line 97
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 97, $this->source); })());
                echo " <i class=\"fa ";
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) || array_key_exists("_column_icon", $context) ? $context["_column_icon"] : (function () { throw new Twig_Error_Runtime('Variable "_column_icon" does not exist.', 97, $this->source); })()), "html", null, true);
                echo "\"></i>
                            </a>
                        ";
            } else {
                // line 100
                echo "                            <span>";
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 100, $this->source); })());
                echo "</span>
                        ";
            }
            // line 102
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
                ";
        // line 105
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 105, $this->source); })())) > 0)) {
            // line 106
            echo "                    <th  ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        <span class=\"sr-only\">";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 107, $this->source); })()), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 110
        echo "            </tr>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 115
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 116
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 116, $this->source); })()), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 117
            echo "                ";
            // line 118
            echo "                ";
            $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 118, $this->source); })()), "primary_key_field_name", array())));
            // line 119
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new Twig_Error_Runtime('Variable "_item_id" does not exist.', 119, $this->source); })()), "html", null, true);
            echo "\">
                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 121
                echo "                        ";
                $context["isSortingField"] = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->source); })()), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 122
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->source, $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 122, $this->source); })()),                 // line 2
(isset($context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"]) || array_key_exists("__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a", $context) ? $context["__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_94b37fdc6f65cf195dd682747f541df1103f06c3c5f3fe09040f1cde513c000a" does not exist.', 2, $this->source); })()));
                // line 123
                echo "
                        <td class=\"";
                // line 124
                echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 124, $this->source); })())) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", array()), "html", null, true);
                echo "\" ";
                echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
                echo ">
                            ";
                // line 125
                echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 125, $this->source); })()), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "
                    ";
            // line 129
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 129, $this->source); })())) > 0)) {
                // line 130
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 130, $this->source); })()), "EasyAdminBundle");
                // line 131
                echo "                        <td class=\"actions\">
                        ";
                // line 132
                $this->displayBlock('item_actions', $context, $blocks);
                // line 141
                echo "                        </td>
                    ";
            }
            // line 143
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 145
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 146
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 146, $this->source); })())) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 146, $this->source); })())) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 146, $this->source); })())))), "html", null, true);
            echo "\">
                        ";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.no_results", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 147, $this->source); })()), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 132
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 133
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 134
(isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 134, $this->source); })()), "request_parameters" =>         // line 135
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 135, $this->source); })()), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 136
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 136, $this->source); })()), "translation_domain", array()), "trans_parameters" =>         // line 137
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 137, $this->source); })()), "item_id" =>         // line 138
(isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new Twig_Error_Runtime('Variable "_item_id" does not exist.', 138, $this->source); })())), false);
        // line 139
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 155
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 156
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 156, $this->source); })()), "currentPage", array()) == twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 156, $this->source); })()), "nbPages", array())) && (1 != twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 156, $this->source); })()), "currentPage", array()))) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 156, $this->source); })()), "currentPageResults", array()))))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 157
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 157, $this->source); })()), "request", array()), "query", array()), array("page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 157, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 158
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 158, $this->source); })()), "request", array()), "requestUri", array())));
        // line 160
        echo "
        ";
        // line 161
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 163
(isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new Twig_Error_Runtime('Variable "referer" does not exist.', 163, $this->source); })())), "delete_form" =>         // line 164
(isset($context["delete_form_template"]) || array_key_exists("delete_form_template", $context) ? $context["delete_form_template"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form_template" does not exist.', 164, $this->source); })()), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 165
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 165, $this->source); })()), "translation_domain", array()), "_trans_parameters" =>         // line 166
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 166, $this->source); })()), "_entity_config" =>         // line 167
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 167, $this->source); })())), false);
        // line 168
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 172
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        // line 173
        echo "    ";
        $this->displayBlock('paginator', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_paginator($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 174
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 174, $this->source); })()), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 178
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 179
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", array("action" => "edit", "entity" => twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 191, $this->source); })()), "name", array()), "view" => "list"));
        echo "\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 224
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 224, $this->source); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 225
            echo "        <script type=\"text/javascript\">
            const _search_query = \"";
            // line 226
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 226,  682 => 225,  680 => 224,  644 => 191,  628 => 179,  622 => 178,  612 => 174,  599 => 173,  593 => 172,  585 => 168,  583 => 167,  582 => 166,  581 => 165,  580 => 164,  579 => 163,  578 => 161,  575 => 160,  573 => 158,  572 => 157,  570 => 156,  564 => 155,  556 => 139,  554 => 138,  553 => 137,  552 => 136,  551 => 135,  550 => 134,  548 => 133,  542 => 132,  535 => 151,  525 => 147,  521 => 146,  518 => 145,  504 => 143,  500 => 141,  498 => 132,  495 => 131,  492 => 130,  490 => 129,  487 => 128,  478 => 125,  468 => 124,  465 => 123,  463 => 2,  461 => 122,  458 => 121,  454 => 120,  449 => 119,  446 => 118,  444 => 117,  425 => 116,  419 => 115,  411 => 110,  405 => 107,  400 => 106,  398 => 105,  395 => 104,  388 => 102,  382 => 100,  374 => 97,  369 => 96,  367 => 95,  355 => 94,  352 => 93,  349 => 92,  347 => 2,  345 => 91,  342 => 90,  339 => 89,  335 => 88,  332 => 87,  326 => 86,  319 => 155,  314 => 152,  312 => 115,  307 => 112,  305 => 86,  300 => 83,  297 => 82,  291 => 81,  281 => 74,  279 => 2,  277 => 74,  271 => 73,  263 => 72,  260 => 71,  254 => 70,  244 => 59,  242 => 2,  239 => 59,  233 => 56,  229 => 55,  225 => 54,  221 => 53,  217 => 52,  214 => 51,  208 => 50,  199 => 63,  197 => 50,  193 => 49,  188 => 48,  182 => 47,  174 => 78,  171 => 70,  168 => 69,  166 => 68,  163 => 67,  160 => 66,  158 => 47,  155 => 46,  152 => 45,  149 => 44,  143 => 43,  132 => 38,  131 => 2,  129 => 38,  126 => 37,  121 => 35,  120 => 2,  118 => 35,  115 => 34,  112 => 33,  110 => 32,  104 => 31,  92 => 29,  80 => 28,  73 => 5,  71 => 26,  68 => 22,  67 => 21,  66 => 20,  65 => 19,  63 => 18,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  36 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = app.request.query.all|merge(_request_parameters|default({}))|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1),
    referer: null
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({
        query: app.request.get('query')|default(''),
        sortField: _entity_config.search.sort.field|default(app.request.get('sortField', '')),
        sortDirection: _entity_config.search.sort.direction|default(app.request.get('sortDirection', 'DESC')),
    }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
        {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
    {% endif %}
{% endspaceless %}
{% endblock %}

{% block global_actions %}
    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

        {% block search_action %}
            <div class=\"form-action form-action-search {{ _action.css_class|default('') }}\">
                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                    {% block search_form %}
                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _entity_config.search.sort.field|default(_request_parameters.sortField) }}\">
                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _entity_config.search.sort.direction|default(_request_parameters.sortDirection) }}\">
                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\" placeholder=\"{{ _action.label|default('action.search')|trans(_trans_parameters) }}\">
                            </div>
                        </div>
                    {% endblock %}
                </form>
            </div>
        {% endblock search_action %}
    {% endif %}

    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
        {% block new_action %}
            <div class=\"button-action\">
                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                </a>
            </div>
        {% endblock new_action %}
    {% endif %}
{% endblock global_actions %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <table class=\"table datagrid\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = (metadata.property == app.request.get('sortField')) or ('association' == metadata.type and app.request.get('sortField') starts with metadata.property ~ '.') %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = metadata.label|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-arrow-up' : 'fa-arrow-down') : 'fa-sort' %}

                    <th class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\" {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ page: 1, sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                {{ _column_label|raw }} <i class=\"fa {{ _column_icon }}\"></i>
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th  {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                        <span class=\"sr-only\">{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\" {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults|length
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block content_footer %}
    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            const _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/default/list.html.twig", "/home/chiranjeevie/projects/courses/api/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
