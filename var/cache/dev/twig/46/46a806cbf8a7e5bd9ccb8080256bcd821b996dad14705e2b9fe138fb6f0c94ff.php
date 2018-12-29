<?php

/* @EasyAdmin/data_collector/easyadmin.html.twig */
class __TwigTemplate_babcfbf603a9cf580f0cc709bc487bc02b000f43b6d63b851cc77ab36044f5d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/data_collector/easyadmin.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->source); })()), "isEasyAdminAction", array())) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 5, $this->source); })()), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            $context["icon_fill_color"] = ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 8, $this->source); })()) == 1)) ? ("#222") : ("#AAA"));
            // line 9
            echo "            ";
            $context["icon_height"] = ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 9, $this->source); })()) == 1)) ? ("28") : ("24"));
            // line 10
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => (isset($context["icon_fill_color"]) || array_key_exists("icon_fill_color", $context) ? $context["icon_fill_color"] : (function () { throw new Twig_Error_Runtime('Variable "icon_fill_color" does not exist.', 10, $this->source); })()), "height" => (isset($context["icon_height"]) || array_key_exists("icon_height", $context) ? $context["icon_height"] : (function () { throw new Twig_Error_Runtime('Variable "icon_height" does not exist.', 10, $this->source); })())));
            echo "</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->source); })()), "numEntities", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 21, $this->source); })()), "numEntities", array()), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 24
            echo "
        ";
            // line 25
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->source); })()), "isEasyAdminAction", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 31
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 37, $this->source); })()), 1)) : (1));
        // line 38
        echo "
    <h2>EasyAdmin <small>(";
        // line 39
        echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 41, $this->source); })()), "isEasyAdminAction", array())) {
            // line 42
            echo "
        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>

    ";
        } else {
            // line 48
            echo "
        ";
            // line 49
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 49, $this->source); })()) == 1)) {
                // line 50
                echo "
            <h3>Request Parameters</h3>
            ";
                // line 52
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->source); })()), "requestParameters", array())));
                echo "

        ";
            } else {
                // line 55
                echo "
            ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->source); })()), "requestParameters", array())) {
                    // line 57
                    echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 59
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array()), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Action</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 64
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array()), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Entity Name</span>
                </div>

                ";
                    // line 68
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 68, $this->source); })()), "requestParameters", array()), "id", array())) {
                        // line 69
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 70
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->source); })()), "requestParameters", array()), "id", array()), "html", null, true);
                        echo "</span>
                        <span class=\"label\">ID</span>
                    </div>
                ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 73
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 73, $this->source); })()), "requestParameters", array()), "sort_field", array())) {
                        // line 74
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 75
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 75, $this->source); })()), "requestParameters", array()), "sort_field", array()), "html", null, true);
                        echo " <span class=\"unit\">(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 75, $this->source); })()), "requestParameters", array()), "sort_direction", array()), "html", null, true);
                        echo ")</span></span>
                        <span class=\"label\">Sorting</span>
                    </div>
                ";
                    }
                    // line 79
                    echo "            </div>
            ";
                }
                // line 81
                echo "
        ";
            }
            // line 83
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Current Entity Configuration</h3>
                <div class=\"tab-content\">
                    ";
            // line 88
            echo twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 88, $this->source); })()), "dump", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 88, $this->source); })()), "currentEntityConfig", array())), "method");
            echo "
                </div>

                <br>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Full Backend Configuration</h3>
                <div class=\"tab-content\">

                    <h4>Basic Configuration</h4>
                    ";
            // line 99
            echo twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 99, $this->source); })()), "dump", array(0 => array("site_name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 100
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 100, $this->source); })()), "backendConfig", array()), "site_name", array(), "array"), "formats" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 101
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->source); })()), "backendConfig", array()), "formats", array(), "array"))), "method");
            // line 102
            echo "

                    <h4>Design Configuration</h4>
                    ";
            // line 105
            echo twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 105, $this->source); })()), "dump", array(0 => array("design" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 106
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 106, $this->source); })()), "backendConfig", array()), "design", array(), "array"))), "method");
            // line 107
            echo "

                    <h4>Actions Configuration</h4>
                    ";
            // line 110
            echo twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 110, $this->source); })()), "dump", array(0 => array("disabled_actions" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 111
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 111, $this->source); })()), "backendConfig", array()), "disabled_actions", array(), "array"), "list" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 112
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 112, $this->source); })()), "backendConfig", array()), "list", array(), "array"), "edit" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 113
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 113, $this->source); })()), "backendConfig", array()), "edit", array(), "array"), "new" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 114
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 114, $this->source); })()), "backendConfig", array()), "new", array(), "array"), "show" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 115
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 115, $this->source); })()), "backendConfig", array()), "show", array(), "array"))), "method");
            // line 116
            echo "

                    <h4>Entities Configuration</h4>
                    ";
            // line 119
            echo twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 119, $this->source); })()), "dump", array(0 => array("entities" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 120
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 120, $this->source); })()), "backendConfig", array()), "entities", array(), "array"))), "method");
            // line 121
            echo "

                    <h4>Full Backend Configuration</h4>
                    ";
            // line 124
            echo twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 124, $this->source); })()), "dump", array(0 => array("easy_admin" => twig_get_attribute($this->env, $this->source,             // line 125
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 125, $this->source); })()), "backendConfig", array()))), "method");
            // line 126
            echo "
                </div>
            </div>
        </div>

    ";
        }
        // line 132
        echo "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html\">Read documentation</a></li>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle\">Project homepage</a></li>
    </ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/data_collector/easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 132,  290 => 126,  288 => 125,  287 => 124,  282 => 121,  280 => 120,  279 => 119,  274 => 116,  272 => 115,  271 => 114,  270 => 113,  269 => 112,  268 => 111,  267 => 110,  262 => 107,  260 => 106,  259 => 105,  254 => 102,  252 => 101,  251 => 100,  250 => 99,  236 => 88,  229 => 83,  225 => 81,  221 => 79,  212 => 75,  209 => 74,  207 => 73,  201 => 70,  198 => 69,  196 => 68,  189 => 64,  181 => 59,  177 => 57,  175 => 56,  172 => 55,  166 => 52,  162 => 50,  160 => 49,  157 => 48,  149 => 42,  147 => 41,  142 => 39,  139 => 38,  136 => 37,  130 => 36,  119 => 31,  114 => 30,  108 => 29,  98 => 25,  95 => 24,  89 => 21,  82 => 17,  78 => 15,  76 => 14,  73 => 13,  68 => 11,  63 => 10,  60 => 9,  57 => 8,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.isEasyAdminAction %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% set icon_fill_color = profiler_markup_version == 1 ? '#222' : '#AAA' %}
            {% set icon_height = profiler_markup_version == 1 ? '28' : '24' %}
            <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { fill_color: icon_fill_color, height: icon_height }) }}</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">{{ collector.numEntities }}</span>
        {% endset %}

        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">{{ constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">{{ collector.numEntities }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.isEasyAdminAction ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { height: 32 }) }}</span>
        <strong>EasyAdmin</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>EasyAdmin <small>({{ constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }})</small></h2>

    {% if not collector.isEasyAdminAction %}

        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>

    {% else %}

        {% if profiler_markup_version == 1 %}

            <h3>Request Parameters</h3>
            {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.requestParameters }) }}

        {% else %}

            {% if collector.requestParameters %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.action|default('-') }}</span>
                    <span class=\"label\">Action</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.entity|default('-') }}</span>
                    <span class=\"label\">Entity Name</span>
                </div>

                {% if collector.requestParameters.id %}
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.requestParameters.id }}</span>
                        <span class=\"label\">ID</span>
                    </div>
                {% elseif collector.requestParameters.sort_field %}
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.requestParameters.sort_field }} <span class=\"unit\">({{ collector.requestParameters.sort_direction }})</span></span>
                        <span class=\"label\">Sorting</span>
                    </div>
                {% endif %}
            </div>
            {% endif %}

        {% endif %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Current Entity Configuration</h3>
                <div class=\"tab-content\">
                    {{ collector.dump(collector.currentEntityConfig)|raw }}
                </div>

                <br>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Full Backend Configuration</h3>
                <div class=\"tab-content\">

                    <h4>Basic Configuration</h4>
                    {{ collector.dump({
                        'site_name': collector.backendConfig['site_name'],
                        'formats': collector.backendConfig['formats']
                    })|raw }}

                    <h4>Design Configuration</h4>
                    {{ collector.dump({
                        'design': collector.backendConfig['design']
                    })|raw }}

                    <h4>Actions Configuration</h4>
                    {{ collector.dump({
                        'disabled_actions': collector.backendConfig['disabled_actions'],
                        'list': collector.backendConfig['list'],
                        'edit': collector.backendConfig['edit'],
                        'new': collector.backendConfig['new'],
                        'show': collector.backendConfig['show'],
                    })|raw }}

                    <h4>Entities Configuration</h4>
                    {{ collector.dump({
                        'entities': collector.backendConfig['entities']
                    })|raw }}

                    <h4>Full Backend Configuration</h4>
                    {{ collector.dump({
                        'easy_admin': collector.backendConfig
                    })|raw }}
                </div>
            </div>
        </div>

    {% endif %}

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html\">Read documentation</a></li>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle\">Project homepage</a></li>
    </ul>

{% endblock %}
", "@EasyAdmin/data_collector/easyadmin.html.twig", "/home/chiranjeevie/projects/courses/api/vendor/easycorp/easyadmin-bundle/src/Resources/views/data_collector/easyadmin.html.twig");
    }
}
