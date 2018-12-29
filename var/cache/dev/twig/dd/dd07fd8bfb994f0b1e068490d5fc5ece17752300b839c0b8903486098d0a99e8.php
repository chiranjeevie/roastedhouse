<?php

/* @EasyAdmin/form/bootstrap_4.html.twig */
class __TwigTemplate_d2c110b4ca6cd404eac3d98d8d8ccf20367690d99ad4f0f94d36770e88961ae0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/form/bootstrap_4.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'form_label' => array($this, 'block_form_label'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_4.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 21
        echo "
";
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('form_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 114
        echo "
";
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('form_row', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('collection_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('button_row', $context, $blocks);
        // line 185
        echo "
";
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('form_label', $context, $blocks);
        // line 212
        echo "
";
        // line 215
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 230
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 235
        echo "
";
        // line 236
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 280
        echo "
";
        // line 281
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 285
        echo "
";
        // line 286
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 337
        echo "
";
        // line 338
        $this->displayBlock('item_actions', $context, $blocks);
        // line 365
        echo "
";
        // line 367
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 412
        echo "
";
        // line 413
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 449
        echo "
";
        // line 451
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 461
        echo "
";
        // line 462
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 466
        echo "
";
        // line 468
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 4, $this->source); })()),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 5, $this->source); })()), array("class" => twig_join_filter(array(0 => ((twig_get_attribute($this->env, $this->source,             // line 6
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")), 1 => (twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 6, $this->source); })()), "view", array()) . "-form")), " "), "data-view" => twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 7, $this->source); })()), "view", array()), "data-entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 8, $this->source); })()), "entity", array()), "name", array()), "data-entity-id" => twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 9, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 9, $this->source); })()), "entity", array()), "primary_key_field_name", array()))));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "vars", array()), "errors", array())) > 0)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
            echo "
    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 19
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 25
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "        \$(function() {
            event.preventDefault();

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
        });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 47
            echo "
        <div class=\"field-collection-item-row\">
            <div class=\"field-collection-item-action\">
                <a href=\"#\" onclick=\"";
            // line 50
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new Twig_Error_Runtime('Variable "remove_item_javascript" does not exist.', 50, $this->source); })());
            echo "; return false;\" class=\"text-danger\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-window-close\"></i>
                </a>
            </div>
            <div class=\"field-collection-item-widget\">
                ";
            // line 55
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 59
            echo "        ";
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 64
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 64, $this->source); })()), array(0 => "file", 1 => "hidden")))) {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 65, $this->source); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 67
        if (((isset($context["type"]) || array_key_exists("type", $context)) && (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 67, $this->source); })()) == "range") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 67, $this->source); })()) == "color")))) {
            // line 68
            echo "        ";
            // line 69
            $context["required"] = false;
        }
        // line 71
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 75
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 76
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 77
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 82
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 83
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 87
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 87, $this->source); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 88
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 90
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 91
            echo "        ";
            ob_start();
            // line 92
            echo "            \$(function() {
                event.preventDefault();

                var containerDiv = \$('#";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "').parents('.form-group:first');
                var parentDiv = containerDiv.parents('[data-prototype]:first');
                containerDiv.remove();
                parentDiv.trigger('easyadmin.collection.item-deleted');

                if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                    \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
                }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 105
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 107
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new Twig_Error_Runtime('Variable "remove_item_javascript" does not exist.', 107, $this->source); })());
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 118
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 119
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 119, $this->source); })()) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 119, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 119, $this->source); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 119, $this->source); })()),  -2)), "html", null, true);
        echo "\">";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->source); })()), 'label');
        // line 121
        echo "<div class=\"form-widget\">";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->source); })()), 'widget');
        // line 124
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 124, $this->source); })()), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "dateinterval", 5 => "time", 6 => "time_immutable", 7 => "birthday")) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 125
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 127
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 127, $this->source); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 132
        echo "
            ";
        // line 133
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), "vars", array()), "help", array()))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), "vars", array()), "help", array()))) != "")) {
            // line 134
            echo "                <span class=\"help-block\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), "vars", array()), "help", array()))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), "vars", array()), "help", array()))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 134, $this->source); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->source); })()), 'errors');
        // line 138
        echo "</div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 142
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 143
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 145
        if ((((isset($context["allow_add"]) || array_key_exists("allow_add", $context))) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 145, $this->source); })()), false)) : (false))) {
            // line 146
            echo "        ";
            ob_start();
            // line 147
            echo "            \$(function() {
                event.preventDefault();

                var collection = \$('#";
            // line 150
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 150, $this->source); })()), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 157, $this->source); })()), "vars", array()), "name", array()), "html", null, true);
            echo "label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 158, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 158, $this->source); })()), "vars", array()), "name", array()), "html", null, true);
            echo "/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 158, $this->source); })()), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 159, $this->source); })()), "html", null, true);
            echo "\\]\\[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 159, $this->source); })()), "vars", array()), "name", array()), "html", null, true);
            echo "\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 159, $this->source); })()), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 168
            echo "
        <div class=\"form-group field-collection-action\">
            <div class=\"form-widget\">
                <a href=\"#\" onclick=\"";
            // line 171
            echo (isset($context["js_add_item"]) || array_key_exists("js_add_item", $context) ? $context["js_add_item"] : (function () { throw new Twig_Error_Runtime('Variable "js_add_item" does not exist.', 171, $this->source); })());
            echo "; return false;\" class=\"btn btn-sm\">
                    <i class=\"fa fa-plus\"></i>
                    ";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 173, $this->source); })())) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </a>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 180
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 181
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 181, $this->source); })()),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 182, $this->source); })()), 'widget');
        // line 183
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 188
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 189
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 189, $this->source); })()) === false)) {
            // line 190
            if (((isset($context["compound"]) || array_key_exists("compound", $context)) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 190, $this->source); })()))) {
                // line 191
                $context["element"] = "legend";
                // line 192
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 192, $this->source); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            } else {
                // line 194
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 194, $this->source); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 194, $this->source); })()), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
            }
            // line 196
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 196, $this->source); })())) {
                // line 197
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 197, $this->source); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 199
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 199, $this->source); })()))) {
                // line 200
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 200, $this->source); })()))) {
                    // line 201
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 201, $this->source); })()), array("%name%" =>                     // line 202
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 202, $this->source); })()), "%id%" =>                     // line 203
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 203, $this->source); })())));
                } else {
                    // line 206
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 206, $this->source); })()));
                }
            }
            // line 209
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 209, $this->source); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 209, $this->source); })())) {
                $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 209, $this->source); })()));
                if (!is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.', 209, $this->source);
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 209, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 209, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 209, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 209, $this->source); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 209, $this->source); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 215
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 216
        echo "<div class=\"form-widget-compound\">
        ";
        // line 219
        echo "        ";
        if (((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 219, $this->source); })())) || (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 219, $this->source); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 219, $this->source); })()))))) {
            // line 220
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        }
        // line 222
        echo "        ";
        if (((twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 222, $this->source); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 222, $this->source); })()))) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 223
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 223, $this->source); })()), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 224
            echo "        ";
        }
        // line 225
        echo "
        ";
        // line 226
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 230
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 231
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 232
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 232, $this->source); })()), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 236
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 237
        echo "    ";
        $context["force_error"] = true;
        // line 238
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 241
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 242
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 243
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 243, $this->source); })()), "")) : ("")))) {
            // line 244
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 244, $this->source); })()), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 244, $this->source); })()), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", array(), "VichUploaderBundle")));
            // line 245
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 245, $this->source); })()), "."));
            // line 246
            echo "            ";
            $context["extension_icons"] = array("gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o");
            // line 253
            echo "            <a class=\"easyadmin-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 253, $this->source); })())), "html", null, true);
            echo "\">
                <i class=\"fa ";
            // line 254
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new Twig_Error_Runtime('Variable "file_extension" does not exist.', 254, $this->source); })()), array(), "array", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new Twig_Error_Runtime('Variable "file_extension" does not exist.', 254, $this->source); })()), array(), "array")))) ? (twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new Twig_Error_Runtime('Variable "file_extension" does not exist.', 254, $this->source); })()), array(), "array")) : ("fa-file-o")), "html", null, true);
            echo "\"></i>
                ";
            // line 255
            echo twig_escape_filter($this->env, (isset($context["download_title"]) || array_key_exists("download_title", $context) ? $context["download_title"] : (function () { throw new Twig_Error_Runtime('Variable "download_title" does not exist.', 255, $this->source); })()), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 258
        echo "
        ";
        // line 259
        ob_start();
        // line 260
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 260, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 263, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 265
        echo "
        <div class=\"easyadmin-vich-file-actions\">
            ";
        // line 268
        echo "            <div class=\"btn input-file-container\">
                <i class=\"fa fa-upload\"></i> ";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->source); })()), "file", array()), 'widget', array("attr" => array("onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new Twig_Error_Runtime('Variable "file_upload_js" does not exist.', 270, $this->source); })()))));
        echo "
            </div>

            ";
        // line 273
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 274
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 274, $this->source); })()), "delete", array()), 'row', array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", array(), "VichUploaderBundle")));
            echo "
            ";
        }
        // line 276
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 277, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 281
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 282
        echo "    ";
        $context["force_error"] = true;
        // line 283
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 286
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 287
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 288
        if ( !twig_test_empty((((isset($context["image_uri"]) || array_key_exists("image_uri", $context))) ? (_twig_default_filter((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 288, $this->source); })()), "")) : ("")))) {
            // line 289
            echo "            ";
            if (twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 289, $this->source); })()), "")) : ("")))) {
                // line 290
                echo "                <div class=\"easyadmin-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 291
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 291, $this->source); })())), "html", null, true);
                echo "\">
                </div>
            ";
            } else {
                // line 294
                echo "                ";
                $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 294, $this->source); })()));
                // line 295
                echo "
                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
                // line 296
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new Twig_Error_Runtime('Variable "_lightbox_id" does not exist.', 296, $this->source); })()), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"";
                // line 297
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 297, $this->source); })())), "html", null, true);
                echo "\">
                </a>

                <div id=\"";
                // line 300
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new Twig_Error_Runtime('Variable "_lightbox_id" does not exist.', 300, $this->source); })()), "html", null, true);
                echo "\" class=\"easyadmin-lightbox\">
                    <img src=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 301, $this->source); })())), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 304
            echo "        ";
        }
        // line 305
        echo "
        ";
        // line 306
        ob_start();
        // line 307
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 307, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 312
        echo "
        <div class=\"easyadmin-vich-image-actions\">
            ";
        // line 315
        echo "            <div class=\"btn input-file-container\">
                <i class=\"fa fa-upload\"></i> ";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 317
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 317, $this->source); })()), "file", array()), 'widget', array("attr" => array("onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new Twig_Error_Runtime('Variable "file_upload_js" does not exist.', 317, $this->source); })()))));
        echo "
            </div>

            ";
        // line 320
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 321
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 321, $this->source); })()), "delete", array()), 'row', array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", array(), "VichUploaderBundle")));
            echo "
            ";
        }
        // line 323
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 324, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 328
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 329, $this->source); })()), 'rest');
        // line 331
        echo "<section class=\"content-footer\">
        <div class=\"form-actions\">";
        // line 333
        $this->displayBlock("item_actions", $context, $blocks);
        // line 334
        echo "</div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 338
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 339
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 339, $this->source); })()), "entity", array()), "translation_domain", array());
        // line 340
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 340, $this->source); })()), "entity", array()), "name", array())), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 340, $this->source); })()), "entity", array()), "label", array())));
        // line 341
        echo "
    ";
        // line 343
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        ";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 344, $this->source); })()), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 344, $this->source); })())), "html", null, true);
        echo "
    </button>

    ";
        // line 347
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 347, $this->source); })()), "view", array()) == "new")) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("new", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 348
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 348, $this->source); })()), "entity", array()), "name", array()))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("edit", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 349
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 349, $this->source); })()), "entity", array()), "name", array()))));
        // line 350
        echo "
    ";
        // line 351
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 351, $this->source); })()), "view", array()) == "new")) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 353
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 353, $this->source); })()), "item", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 353, $this->source); })()), "entity", array()), "primary_key_field_name", array()))));
        // line 354
        echo "
    ";
        // line 355
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 355, $this->source); })()), "entity", array()), "name", array()), "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 355, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 356
        echo "
    ";
        // line 357
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 358
(isset($context["_entity_actions"]) || array_key_exists("_entity_actions", $context) ? $context["_entity_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_actions" does not exist.', 358, $this->source); })()), "request_parameters" =>         // line 359
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 359, $this->source); })()), "translation_domain" =>         // line 360
(isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 360, $this->source); })()), "trans_parameters" =>         // line 361
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 361, $this->source); })()), "item_id" =>         // line 362
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 362, $this->source); })())), false);
        // line 363
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 367
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 368
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 368, $this->source); })()), "entity", array()), "translation_domain", array());
        // line 369
        echo "    <div class=\"row\">
        ";
        // line 370
        if ((twig_length_filter($this->env, (isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_tabs" does not exist.', 370, $this->source); })())) > 0)) {
            // line 371
            echo "            <div class=\"col-12\">
                <div class=\"nav-tabs-custom form-tabs\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 374
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_tabs" does not exist.', 374, $this->source); })()));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 375
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
                // line 376
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 377
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 378
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 380
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "label", array(), "array"), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 380, $this->source); })())), "html", null, true);
                echo "
                                    ";
                // line 381
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", array()) > 0)) {
                    // line 382
                    echo "                                        <span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 383
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 386
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 389
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_tabs" does not exist.', 391, $this->source); })()));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 392
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                ";
                // line 393
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", array(), "array"), false)) : (false))) {
                    // line 394
                    echo "                                    <div class=\"content-header-help tab-help\">
                                        ";
                    // line 395
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", array(), "array"), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 395, $this->source); })()));
                    echo "
                                    </div>
                                ";
                }
                // line 398
                echo "
                                <div class=\"row\">
                                    ";
                // line 400
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 408
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 410
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 413
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        // line 414
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) || array_key_exists("easyadmin_form_groups", $context) ? $context["easyadmin_form_groups"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_groups" does not exist.', 414, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", array()) || (twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", array()) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new Twig_Error_Runtime('Variable "tab_name" does not exist.', 414, $this->source); })())))) {
                // line 415
                echo "        <div class=\"field-group col-";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", array()), "12")) : ("12")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <fieldset>
                ";
                // line 417
                if (((((twig_get_attribute($this->env, $this->source, $context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array()), false)) : (false)))) {
                    // line 418
                    echo "                    <legend class=\"";
                    echo ((((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), false)) : (false))) ? ("with-icon") : (""));
                    echo "\">
                        ";
                    // line 419
                    if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), false)) : (false))) {
                        // line 420
                        echo "                            <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                        ";
                    }
                    // line 422
                    echo "                        ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 422, $this->source); })()));
                    echo "
                    </legend>

                    ";
                    // line 425
                    if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", array()), false)) : (false))) {
                        // line 426
                        echo "                        <div class=\"legend-help\">";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 426, $this->source); })()));
                        echo "</div>
                    ";
                    }
                    // line 428
                    echo "                ";
                }
                // line 429
                echo "
                <div class=\"row\">
                    ";
                // line 431
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 431, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "block_prefixes", array())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 432
                        echo "                        ";
                        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new Twig_Error_Runtime('Variable "tab_name" does not exist.', 432, $this->source); })())))) {
                            // line 433
                            echo "                            <div class=\"col-";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "columns", array()), "12")) : ("12")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                ";
                            // line 434
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                            </div>
                        ";
                        }
                        // line 437
                        echo "                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 438
                echo "                </div>
            </fieldset>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 442
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 442, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "block_prefixes", array())) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new Twig_Error_Runtime('Variable "tab_name" does not exist.', 442, $this->source); })()))))) {
                    // line 443
                    echo "            <div class=\"col-";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "columns", array()), "12")) : ("12")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 444
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 451
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 452
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 452, $this->source); })()), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 453
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 453, $this->source); })()), array("data-easyadmin-autocomplete-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 456
(isset($context["autocomplete_entity_name"]) || array_key_exists("autocomplete_entity_name", $context) ? $context["autocomplete_entity_name"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete_entity_name" does not exist.', 456, $this->source); })())))))));
        // line 459
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 462
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 463
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 463, $this->source); })()), "parent", array()), "vars", array()), "name", array());
        // line 464
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 468
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 469
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 469, $this->source); })()), "entity", array()), "translation_domain", array());
        // line 470
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 472
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 472, $this->source); })()), "field", array()), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 473
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 473, $this->source); })()));
        }
        echo "</span>
        </h2>

        ";
        // line 476
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 477
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 477, $this->source); })()), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 477, $this->source); })()));
            echo "</p>
        ";
        }
        // line 479
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_4.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1365 => 479,  1359 => 477,  1357 => 476,  1348 => 473,  1342 => 472,  1334 => 470,  1331 => 469,  1325 => 468,  1318 => 464,  1315 => 463,  1309 => 462,  1301 => 459,  1299 => 456,  1298 => 453,  1296 => 452,  1290 => 451,  1279 => 447,  1269 => 444,  1262 => 443,  1256 => 442,  1247 => 438,  1240 => 437,  1234 => 434,  1227 => 433,  1224 => 432,  1219 => 431,  1215 => 429,  1212 => 428,  1206 => 426,  1204 => 425,  1197 => 422,  1191 => 420,  1189 => 419,  1184 => 418,  1182 => 417,  1174 => 415,  1167 => 414,  1161 => 413,  1153 => 410,  1147 => 408,  1141 => 404,  1123 => 400,  1119 => 398,  1113 => 395,  1110 => 394,  1108 => 393,  1099 => 392,  1082 => 391,  1078 => 389,  1070 => 386,  1064 => 383,  1059 => 382,  1057 => 381,  1052 => 380,  1046 => 378,  1044 => 377,  1034 => 376,  1031 => 375,  1027 => 374,  1022 => 371,  1020 => 370,  1017 => 369,  1014 => 368,  1008 => 367,  1000 => 363,  998 => 362,  997 => 361,  996 => 360,  995 => 359,  994 => 358,  993 => 357,  990 => 356,  988 => 355,  985 => 354,  983 => 353,  982 => 351,  979 => 350,  977 => 349,  976 => 348,  975 => 347,  969 => 344,  966 => 343,  963 => 341,  960 => 340,  957 => 339,  951 => 338,  942 => 334,  940 => 333,  937 => 331,  935 => 329,  929 => 328,  919 => 324,  916 => 323,  910 => 321,  908 => 320,  902 => 317,  898 => 316,  895 => 315,  891 => 312,  886 => 310,  879 => 307,  877 => 306,  874 => 305,  871 => 304,  865 => 301,  861 => 300,  855 => 297,  851 => 296,  848 => 295,  845 => 294,  839 => 291,  836 => 290,  833 => 289,  831 => 288,  828 => 287,  822 => 286,  812 => 283,  809 => 282,  803 => 281,  793 => 277,  790 => 276,  784 => 274,  782 => 273,  776 => 270,  772 => 269,  769 => 268,  765 => 265,  760 => 263,  753 => 260,  751 => 259,  748 => 258,  742 => 255,  738 => 254,  733 => 253,  730 => 246,  727 => 245,  724 => 244,  722 => 243,  719 => 242,  713 => 241,  703 => 238,  700 => 237,  694 => 236,  684 => 232,  681 => 231,  675 => 230,  666 => 226,  663 => 225,  660 => 224,  657 => 223,  654 => 222,  648 => 220,  645 => 219,  642 => 216,  636 => 215,  612 => 209,  608 => 206,  605 => 203,  604 => 202,  603 => 201,  601 => 200,  599 => 199,  596 => 197,  594 => 196,  591 => 194,  588 => 192,  586 => 191,  584 => 190,  582 => 189,  576 => 188,  569 => 183,  567 => 182,  561 => 181,  555 => 180,  542 => 173,  537 => 171,  532 => 168,  516 => 159,  508 => 158,  504 => 157,  494 => 150,  489 => 147,  486 => 146,  484 => 145,  478 => 143,  472 => 142,  464 => 138,  462 => 137,  456 => 134,  454 => 133,  451 => 132,  444 => 128,  438 => 127,  434 => 125,  432 => 124,  430 => 122,  428 => 121,  426 => 120,  418 => 119,  416 => 118,  410 => 117,  398 => 109,  393 => 107,  389 => 105,  376 => 95,  371 => 92,  368 => 91,  366 => 90,  364 => 88,  362 => 87,  356 => 86,  349 => 83,  347 => 82,  345 => 81,  339 => 80,  332 => 77,  330 => 76,  328 => 75,  322 => 74,  315 => 71,  312 => 69,  310 => 68,  308 => 67,  305 => 65,  303 => 64,  297 => 63,  286 => 59,  279 => 55,  269 => 50,  264 => 47,  244 => 30,  239 => 27,  236 => 26,  233 => 25,  227 => 24,  218 => 19,  216 => 17,  210 => 14,  208 => 13,  205 => 12,  202 => 11,  200 => 9,  199 => 8,  198 => 7,  197 => 6,  195 => 5,  193 => 4,  187 => 3,  180 => 468,  177 => 466,  175 => 462,  172 => 461,  170 => 451,  167 => 449,  165 => 413,  162 => 412,  160 => 367,  157 => 365,  155 => 338,  152 => 337,  150 => 328,  147 => 327,  145 => 286,  142 => 285,  140 => 281,  137 => 280,  135 => 241,  132 => 240,  130 => 236,  127 => 235,  125 => 230,  123 => 215,  120 => 212,  118 => 188,  115 => 187,  112 => 185,  110 => 180,  107 => 179,  105 => 142,  102 => 141,  100 => 117,  97 => 116,  94 => 114,  92 => 86,  89 => 85,  87 => 80,  84 => 79,  82 => 74,  79 => 73,  77 => 63,  74 => 62,  72 => 24,  69 => 23,  66 => 21,  64 => 3,  61 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'bootstrap_4_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [attr.class|default(''), easyadmin.view ~ '-form']|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
        \$(function() {
            event.preventDefault();

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
        });
        {% endset %}

        <div class=\"field-collection-item-row\">
            <div class=\"field-collection-item-action\">
                <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}; return false;\" class=\"text-danger\" title=\"{{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}\">
                    <i class=\"fa fa-window-close\"></i>
                </a>
            </div>
            <div class=\"field-collection-item-widget\">
                {{ parent() }}
            </div>
        </div>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {%- if type is defined and (type == 'range' or type == 'color') %}
        {# Attribute \"required\" is not supported #}
        {%- set required = false -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block date_widget -%}
    <div class=\"datetime-widget datetime-widget-date\">
        {{- parent() -}}
    </div>
{%- endblock date_widget %}

{% block time_widget -%}
    <div class=\"datetime-widget datetime-widget-time\">
        {{- parent() -}}
    </div>
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
                event.preventDefault();

                var containerDiv = \$('#{{ id }}').parents('.form-group:first');
                var parentDiv = containerDiv.parents('[data-prototype]:first');
                containerDiv.remove();
                parentDiv.trigger('easyadmin.collection.item-deleted');

                if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                    \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
                }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        <div class=\"form-widget\">
            {{- form_widget(form) -}}

            {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'dateinterval', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {% if easyadmin.field.help|default(form.vars.help) != '' %}
                <span class=\"help-block\">{{ easyadmin.field.help|default(form.vars.help)|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}

            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                event.preventDefault();

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>{{ prototype.vars.name }}label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}_{{ prototype.vars.name }}/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[{{ prototype.vars.name }}\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"form-group field-collection-action\">
            <div class=\"form-widget\">
                <a href=\"#\" onclick=\"{{ js_add_item|raw }}; return false;\" class=\"btn btn-sm\">
                    <i class=\"fa fa-plus\"></i>
                    {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
                </a>
            </div>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{# Labels #}

{% block form_label -%}
    {% if label is not same as(false) -%}
        {%- if compound is defined and compound -%}
            {%- set element = 'legend' -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- else -%}
            {%- set label_attr = label_attr|merge({for: id, class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label %}

{# Errors #}

{%- block form_widget_compound -%}
    <div class=\"form-widget-compound\">
        {# the \"is iterable\" check is needed because if an object implements __toString() and
           returns an empty string, \"is empty\" returns true even if it's not a collection #}
        {% if value is null or (value is iterable and value is empty) %}
            {{ block('empty_collection') }}
        {% endif %}
        {% if value is iterable and value is empty or form.vars.prototype is defined %}
            {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
        {% endif %}

        {{ parent() }}
    </div>
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            {% set file_extension = download_uri|split('.')|last %}
            {% set extension_icons = {
                'gif': 'fa-file-image-o',
                'jpg': 'fa-file-image-o',
                'pdf': 'fa-file-pdf-o',
                'png': 'fa-file-image-o',
                'zip': 'fa-file-archive-o'
            } %}
            <a class=\"easyadmin-vich-file-name\" href=\"{{ asset(download_uri) }}\">
                <i class=\"fa {{ extension_icons[file_extension] ?? 'fa-file-o' }}\"></i>
                {{ download_title }}
            </a>
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"easyadmin-vich-file-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn input-file-container\">
                <i class=\"fa fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete, { label: 'form.label.delete'|trans({}, 'VichUploaderBundle') }) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
    <div class=\"easyadmin-vich-image\">
        {% if image_uri|default('') is not empty %}
            {% if download_uri|default('') is empty %}
                <div class=\"easyadmin-thumbnail\">
                    <img style=\"cursor: initial\" src=\"{{ asset(image_uri) }}\">
                </div>
            {% else %}
                {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"{{ asset(download_uri) }}\">
                </a>

                <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                    <img src=\"{{ asset(download_uri) }}\">
                </div>
            {% endif %}
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"easyadmin-vich-image-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn input-file-container\">
                <i class=\"fa fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete, { label: 'form.label.delete'|trans({}, 'VichUploaderBundle') }) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}

    <section class=\"content-footer\">
        <div class=\"form-actions\">
            {{- block('item_actions') -}}
        </div>
    </section>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% if easyadmin_form_tabs | length > 0 %}
            <div class=\"col-12\">
                <div class=\"nav-tabs-custom form-tabs\">
                    <ul class=\"nav nav-tabs\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link {% if tab_config.active %}active{% endif %}\" href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-toggle=\"tab\">
                                    {% if tab_config.icon|default(false) %}
                                        <i class=\"fa fa-{{ tab_config.icon }}\"></i>
                                    {% endif %}
                                    {{ tab_config['label']|trans(domain = _translation_domain) }}
                                    {% if tab_config.errors > 0 %}
                                        <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|transchoice(tab_config.errors, {}, 'EasyAdminBundle') }}\">
                                            {{ tab_config.errors }}
                                        </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"tab-content\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %}\">
                                {% if tab_config['help']|default(false) %}
                                    <div class=\"content-header-help tab-help\">
                                        {{ tab_config['help']|trans(domain = _translation_domain)|raw }}
                                    </div>
                                {% endif %}

                                <div class=\"row\">
                                    {{ block('easyadmin_widget_groups') }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% else %}
            {{ block('easyadmin_widget_groups') }}
        {% endif %}
    </div>
{% endblock easyadmin_widget %}

{% block easyadmin_widget_groups %}
    {% for group_name, group_config in easyadmin_form_groups if not group_config.form_tab or group_config.form_tab == tab_name %}
        <div class=\"field-group col-{{ group_config.columns|default('12') }} {{ group_config.css_class|default('') }}\">
            <fieldset>
                {% if group_config.label|default(false) or group_config.icon|default(false) or group_config.collapsible|default(false) %}
                    <legend class=\"{{ group_config.icon|default(false) ? 'with-icon' }}\">
                        {% if group_config.icon|default(false) %}
                            <i class=\"fa fa-{{ group_config.icon }}\"></i>
                        {% endif %}
                        {{ group_config.label|trans(domain = _translation_domain)|raw }}
                    </legend>

                    {% if group_config.help|default(false) %}
                        <div class=\"legend-help\">{{ group_config.help|trans(domain = _translation_domain)|raw }}</div>
                    {% endif %}
                {% endif %}

                <div class=\"row\">
                    {% for field in form if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                        {% if not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name %}
                            <div class=\"col-{{ field.vars.easyadmin.field.columns|default('12') }} {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                {{ form_row(field) }}
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            </fieldset>
        </div>
    {% else %}
        {% for field in form if 'hidden' not in field.vars.block_prefixes and (not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name) %}
            <div class=\"col-{{ field.vars.easyadmin.field.columns|default('12') }} {{ field.vars.easyadmin.field.css_class|default('') }}\">
                {{ form_row(field) }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock easyadmin_widget_groups %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"form-section {{ easyadmin.field.icon|default(false) == false and easyadmin.field.label|default(false) == false ? 'form-section-empty' }} {{ easyadmin.field.css_class|default('') }}\">
        <h2>
            {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
            <span>{% if easyadmin.field.label|default(false) %}{{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}{% endif %}</span>
        </h2>

        {% if easyadmin.field.help|default(false) %}
            <p class=\"form-section-help\">{{ easyadmin.field.help|trans(domain = _translation_domain)|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_4.html.twig", "/home/chiranjeevie/projects/courses/api/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_4.html.twig");
    }
}
