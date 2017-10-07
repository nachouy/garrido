<?php

/* themes/porto/templates/includes/header.html.twig */
class __TwigTemplate_05018ee6fc12490a09b13448fda13f49c241937dc28011f2405de14d7443f130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "include" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if (((isset($context["header_option"]) ? $context["header_option"] : null) == "none")) {
            // line 2
            echo "    ";
            if (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-language-dropdown")) {
                // line 3
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_default_dropdown_language.html.twig"), "themes/porto/templates/includes/header.html.twig", 3)->display($context);
                // line 4
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-big-logo")) {
                // line 5
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_default_biglogo.html.twig"), "themes/porto/templates/includes/header.html.twig", 5)->display($context);
                // line 6
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-flat")) {
                // line 7
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat.html.twig"), "themes/porto/templates/includes/header.html.twig", 7)->display($context);
                // line 8
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-navigation-dark-dropdown")) {
                // line 9
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat.html.twig"), "themes/porto/templates/includes/header.html.twig", 9)->display($context);
                // line 10
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-flat-top-bar")) {
                // line 11
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat_topbar.html.twig"), "themes/porto/templates/includes/header.html.twig", 11)->display($context);
                // line 12
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-flat-colored-top-bar")) {
                // line 13
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat_colored_topbar.html.twig"), "themes/porto/templates/includes/header.html.twig", 13)->display($context);
                // line 14
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-flat-top-bar-search")) {
                // line 15
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat_topbar_withsearch.html.twig"), "themes/porto/templates/includes/header.html.twig", 15)->display($context);
                // line 16
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-center")) {
                // line 17
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_center.html.twig"), "themes/porto/templates/includes/header.html.twig", 17)->display($context);
                // line 18
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-narrow")) {
                // line 19
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_narrow.html.twig"), "themes/porto/templates/includes/header.html.twig", 19)->display($context);
                // line 20
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-transparent")) {
                // line 21
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_transparent.html.twig"), "themes/porto/templates/includes/header.html.twig", 21)->display($context);
                // line 22
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-transparent-bottom-border")) {
                // line 23
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_transparent_border_bottom.html.twig"), "themes/porto/templates/includes/header.html.twig", 23)->display($context);
                // line 24
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-semi-transparent")) {
                // line 25
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_semi_transparent.html.twig"), "themes/porto/templates/includes/header.html.twig", 25)->display($context);
                // line 26
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-semi-transparent-light")) {
                // line 27
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_semi_transparent_light.html.twig"), "themes/porto/templates/includes/header.html.twig", 27)->display($context);
                // line 28
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-navbar")) {
                // line 29
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_navbar.html.twig"), "themes/porto/templates/includes/header.html.twig", 29)->display($context);
                // line 30
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-navbar-extra-info")) {
                // line 31
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_navbar_extra_info.html.twig"), "themes/porto/templates/includes/header.html.twig", 31)->display($context);
                // line 32
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-signin")) {
                // line 33
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_signin.html.twig"), "themes/porto/templates/includes/header.html.twig", 33)->display($context);
                // line 34
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-one-page")) {
                // line 35
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_onepage.html.twig"), "themes/porto/templates/includes/header.html.twig", 35)->display($context);
                // line 36
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-full-width")) {
                // line 37
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_fullwidth.html.twig"), "themes/porto/templates/includes/header.html.twig", 37)->display($context);
                // line 38
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-below-slider")) {
                // line 39
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_below_slider.html.twig"), "themes/porto/templates/includes/header.html.twig", 39)->display($context);
                // line 40
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-side-header-left")) {
                // line 41
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_left.html.twig"), "themes/porto/templates/includes/header.html.twig", 41)->display($context);
                // line 42
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-side-header-right")) {
                // line 43
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_default.html.twig"), "themes/porto/templates/includes/header.html.twig", 43)->display($context);
                // line 44
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-side-header-semi-transparent")) {
                // line 45
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_left.html.twig"), "themes/porto/templates/includes/header.html.twig", 45)->display($context);
                // line 46
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-7")) {
                // line 47
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_transparent_border_bottom.html.twig"), "themes/porto/templates/includes/header.html.twig", 47)->display($context);
                // line 48
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-6")) {
                // line 49
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat_topbar_withsearch_style3.html.twig"), "themes/porto/templates/includes/header.html.twig", 49)->display($context);
                // line 50
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-5")) {
                // line 51
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat_topbar_withsearch_style2.html.twig"), "themes/porto/templates/includes/header.html.twig", 51)->display($context);
                // line 52
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-3")) {
                // line 53
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_navbar_extra_info.html.twig"), "themes/porto/templates/includes/header.html.twig", 53)->display($context);
                // line 54
                echo "    ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-hosting")) {
                // line 55
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_hosting.html.twig"), "themes/porto/templates/includes/header.html.twig", 55)->display($context);
                // line 56
                echo "    ";
            } else {
                // line 57
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_default.html.twig"), "themes/porto/templates/includes/header.html.twig", 57)->display($context);
                // line 58
                echo "    ";
            }
        } else {
            // line 60
            echo "    ";
            if (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_flat")) {
                // line 61
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat.html.twig"), "themes/porto/templates/includes/header.html.twig", 61)->display($context);
                // line 62
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_flat_topbar")) {
                // line 63
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat_topbar.html.twig"), "themes/porto/templates/includes/header.html.twig", 63)->display($context);
                // line 64
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_flat_colored_topbar")) {
                // line 65
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat_colored_topbar.html.twig"), "themes/porto/templates/includes/header.html.twig", 65)->display($context);
                // line 66
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_flat_topbar_search")) {
                // line 67
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_flat_topbar_withsearch.html.twig"), "themes/porto/templates/includes/header.html.twig", 67)->display($context);
                // line 68
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_center")) {
                // line 69
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_center.html.twig"), "themes/porto/templates/includes/header.html.twig", 69)->display($context);
                // line 70
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_narrow")) {
                // line 71
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_narrow.html.twig"), "themes/porto/templates/includes/header.html.twig", 71)->display($context);
                // line 72
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_transparent")) {
                // line 73
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_transparent.html.twig"), "themes/porto/templates/includes/header.html.twig", 73)->display($context);
                // line 74
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_transparent_bottom_border")) {
                // line 75
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_transparent_border_bottom.html.twig"), "themes/porto/templates/includes/header.html.twig", 75)->display($context);
                // line 76
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_semi_transparent")) {
                // line 77
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_semi_transparent.html.twig"), "themes/porto/templates/includes/header.html.twig", 77)->display($context);
                // line 78
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_semi_transparent_light.html.twig")) {
                // line 79
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_semi_transparent_light.html.twig"), "themes/porto/templates/includes/header.html.twig", 79)->display($context);
                // line 80
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_navbar")) {
                // line 81
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_navbar.html.twig"), "themes/porto/templates/includes/header.html.twig", 81)->display($context);
                // line 82
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_navbar_extra_info")) {
                // line 83
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_navbar_extra_info.html.twig"), "themes/porto/templates/includes/header.html.twig", 83)->display($context);
                // line 84
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_default_language")) {
                // line 85
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_default_dropdown_language.html.twig"), "themes/porto/templates/includes/header.html.twig", 85)->display($context);
                // line 86
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_default_big_logo")) {
                // line 87
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_default_biglogo.html.twig"), "themes/porto/templates/includes/header.html.twig", 87)->display($context);
                // line 88
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_signin")) {
                // line 89
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_signin.html.twig"), "themes/porto/templates/includes/header.html.twig", 89)->display($context);
                // line 90
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_without_menu")) {
                // line 91
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_without_menu.html.twig"), "themes/porto/templates/includes/header.html.twig", 91)->display($context);
                // line 92
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_fullwidth")) {
                // line 93
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_fullwidth.html.twig"), "themes/porto/templates/includes/header.html.twig", 93)->display($context);
                // line 94
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_below_slider")) {
                // line 95
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_below_slider.html.twig"), "themes/porto/templates/includes/header.html.twig", 95)->display($context);
                // line 96
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_left")) {
                // line 97
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_left.html.twig"), "themes/porto/templates/includes/header.html.twig", 97)->display($context);
                // line 98
                echo "    ";
            } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_right")) {
                // line 99
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_default.html.twig"), "themes/porto/templates/includes/header.html.twig", 99)->display($context);
                // line 100
                echo "    ";
            } else {
                // line 101
                echo "        ";
                $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header_option/h_default.html.twig"), "themes/porto/templates/includes/header.html.twig", 101)->display($context);
                // line 102
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 102,  340 => 101,  337 => 100,  334 => 99,  331 => 98,  328 => 97,  325 => 96,  322 => 95,  319 => 94,  316 => 93,  313 => 92,  310 => 91,  307 => 90,  304 => 89,  301 => 88,  298 => 87,  295 => 86,  292 => 85,  289 => 84,  286 => 83,  283 => 82,  280 => 81,  277 => 80,  274 => 79,  271 => 78,  268 => 77,  265 => 76,  262 => 75,  259 => 74,  256 => 73,  253 => 72,  250 => 71,  247 => 70,  244 => 69,  241 => 68,  238 => 67,  235 => 66,  232 => 65,  229 => 64,  226 => 63,  223 => 62,  220 => 61,  217 => 60,  213 => 58,  210 => 57,  207 => 56,  204 => 55,  201 => 54,  198 => 53,  195 => 52,  192 => 51,  189 => 50,  186 => 49,  183 => 48,  180 => 47,  177 => 46,  174 => 45,  171 => 44,  168 => 43,  165 => 42,  162 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 37,  147 => 36,  144 => 35,  141 => 34,  138 => 33,  135 => 32,  132 => 31,  129 => 30,  126 => 29,  123 => 28,  120 => 27,  117 => 26,  114 => 25,  111 => 24,  108 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if header_option == 'none' %}
    {% if arg == 'index-header-language-dropdown' %}
        {% include directory ~ '/templates/includes/header_option/h_default_dropdown_language.html.twig' %}
    {% elseif arg == 'index-header-big-logo' %}
        {% include directory ~ '/templates/includes/header_option/h_default_biglogo.html.twig' %}
    {% elseif arg == 'index-header-flat' %}
        {% include directory ~ '/templates/includes/header_option/h_flat.html.twig' %}
    {% elseif arg == 'index-navigation-dark-dropdown' %}
        {% include directory ~ '/templates/includes/header_option/h_flat.html.twig' %}
    {% elseif arg == 'index-header-flat-top-bar' %}
        {% include directory ~ '/templates/includes/header_option/h_flat_topbar.html.twig' %}
    {% elseif arg == 'index-header-flat-colored-top-bar' %}
        {% include directory ~ '/templates/includes/header_option/h_flat_colored_topbar.html.twig' %}
    {% elseif arg == 'index-header-flat-top-bar-search' %}
        {% include directory ~ '/templates/includes/header_option/h_flat_topbar_withsearch.html.twig' %}
    {% elseif arg == 'index-header-center' %}
        {% include directory ~ '/templates/includes/header_option/h_center.html.twig' %}
    {% elseif arg == 'index-header-narrow' %}
        {% include directory ~ '/templates/includes/header_option/h_narrow.html.twig' %}
    {% elseif arg == 'index-header-transparent' %}
        {% include directory ~ '/templates/includes/header_option/h_transparent.html.twig' %}
    {% elseif arg == 'index-header-transparent-bottom-border' %}
        {% include directory ~ '/templates/includes/header_option/h_transparent_border_bottom.html.twig' %}
    {% elseif arg == 'index-header-semi-transparent' %}
        {% include directory ~ '/templates/includes/header_option/h_semi_transparent.html.twig' %}
    {% elseif arg == 'index-header-semi-transparent-light' %}
        {% include directory ~ '/templates/includes/header_option/h_semi_transparent_light.html.twig' %}
    {% elseif arg == 'index-header-navbar' %}
        {% include directory ~ '/templates/includes/header_option/h_navbar.html.twig' %}
    {% elseif arg == 'index-header-navbar-extra-info' %}
        {% include directory ~ '/templates/includes/header_option/h_navbar_extra_info.html.twig' %}
    {% elseif arg == 'index-header-signin' %}
        {% include directory ~ '/templates/includes/header_option/h_signin.html.twig' %}
    {% elseif arg == 'index-one-page' %}
        {% include directory ~ '/templates/includes/header_option/h_onepage.html.twig' %}
    {% elseif arg == 'index-header-full-width' %}
        {% include directory ~ '/templates/includes/header_option/h_fullwidth.html.twig' %}
    {% elseif arg == 'index-header-below-slider' %}
        {% include directory ~ '/templates/includes/header_option/h_below_slider.html.twig' %}
    {% elseif arg == 'index-header-side-header-left' %}
        {% include directory ~ '/templates/includes/header_option/h_left.html.twig' %}
    {% elseif arg == 'index-header-side-header-right' %}
        {% include directory ~ '/templates/includes/header_option/h_default.html.twig' %}
    {% elseif arg == 'index-header-side-header-semi-transparent' %}
        {% include directory ~ '/templates/includes/header_option/h_left.html.twig' %}
    {% elseif arg == 'index-corporate-7' %}
        {% include directory ~ '/templates/includes/header_option/h_transparent_border_bottom.html.twig' %}
    {% elseif arg == 'index-corporate-6' %}
        {% include directory ~ '/templates/includes/header_option/h_flat_topbar_withsearch_style3.html.twig' %}
    {% elseif arg == 'index-corporate-5' %}
        {% include directory ~ '/templates/includes/header_option/h_flat_topbar_withsearch_style2.html.twig' %}
    {% elseif arg == 'index-corporate-3' %}
        {% include directory ~ '/templates/includes/header_option/h_navbar_extra_info.html.twig' %}
    {% elseif arg == 'index-corporate-hosting' %}
        {% include directory ~ '/templates/includes/header_option/h_hosting.html.twig' %}
    {% else %}
        {% include directory ~ '/templates/includes/header_option/h_default.html.twig' %}
    {% endif %}
{% else %}
    {% if header_option == 'h_flat' %}
        {% include directory ~ '/templates/includes/header_option/h_flat.html.twig' %}
    {% elseif header_option == 'h_flat_topbar' %}
        {% include directory ~ '/templates/includes/header_option/h_flat_topbar.html.twig' %}
    {% elseif header_option == 'h_flat_colored_topbar' %}
        {% include directory ~ '/templates/includes/header_option/h_flat_colored_topbar.html.twig' %}
    {% elseif header_option == 'h_flat_topbar_search' %}
        {% include directory ~ '/templates/includes/header_option/h_flat_topbar_withsearch.html.twig' %}
    {% elseif header_option == 'h_center' %}
        {% include directory ~ '/templates/includes/header_option/h_center.html.twig' %}
    {% elseif header_option == 'h_narrow' %}
        {% include directory ~ '/templates/includes/header_option/h_narrow.html.twig' %}
    {% elseif header_option == 'h_transparent' %}
        {% include directory ~ '/templates/includes/header_option/h_transparent.html.twig' %}
    {% elseif header_option == 'h_transparent_bottom_border' %}
        {% include directory ~ '/templates/includes/header_option/h_transparent_border_bottom.html.twig' %}
    {% elseif header_option == 'h_semi_transparent' %}
        {% include directory ~ '/templates/includes/header_option/h_semi_transparent.html.twig' %}
    {% elseif header_option == 'h_semi_transparent_light.html.twig' %}
        {% include directory ~ '/templates/includes/header_option/h_semi_transparent_light.html.twig' %}
    {% elseif header_option == 'h_navbar' %}
        {% include directory ~ '/templates/includes/header_option/h_navbar.html.twig' %}
    {% elseif header_option == 'h_navbar_extra_info' %}
        {% include directory ~ '/templates/includes/header_option/h_navbar_extra_info.html.twig' %}
    {% elseif header_option == 'h_default_language' %}
        {% include directory ~ '/templates/includes/header_option/h_default_dropdown_language.html.twig' %}
    {% elseif header_option == 'h_default_big_logo' %}
        {% include directory ~ '/templates/includes/header_option/h_default_biglogo.html.twig' %}
    {% elseif header_option == 'h_signin' %}
        {% include directory ~ '/templates/includes/header_option/h_signin.html.twig' %}
    {% elseif header_option == 'h_without_menu' %}
        {% include directory ~ '/templates/includes/header_option/h_without_menu.html.twig' %}
    {% elseif header_option == 'h_fullwidth' %}
        {% include directory ~ '/templates/includes/header_option/h_fullwidth.html.twig' %}
    {% elseif header_option == 'h_below_slider' %}
        {% include directory ~ '/templates/includes/header_option/h_below_slider.html.twig' %}
    {% elseif header_option == 'h_left' %}
        {% include directory ~ '/templates/includes/header_option/h_left.html.twig' %}
    {% elseif header_option == 'h_right' %}
        {% include directory ~ '/templates/includes/header_option/h_default.html.twig' %}
    {% else %}
        {% include directory ~ '/templates/includes/header_option/h_default.html.twig' %}
    {% endif %}
{% endif %}
";
    }
}
