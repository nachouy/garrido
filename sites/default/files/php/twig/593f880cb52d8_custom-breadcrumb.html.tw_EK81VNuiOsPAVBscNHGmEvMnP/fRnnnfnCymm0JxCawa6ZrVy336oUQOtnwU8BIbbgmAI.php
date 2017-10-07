<?php

/* themes/porto/templates/includes/custom-breadcrumb.html.twig */
class __TwigTemplate_b700550a6640f4404c417a90a519dffa888fda5393628505bc14bd3a7640d62a extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array("striptags" => 42);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('striptags'),
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
        if ((isset($context["page_title"]) ? $context["page_title"] : null)) {
            // line 2
            echo "    <!--breadcrumbs-->
    ";
            // line 3
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array())) {
                // line 4
                echo "        ";
                if (((isset($context["page_header_option"]) ? $context["page_header_option"] : null) == "none")) {
                    // line 5
                    echo "            ";
                    if (((isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-light")) {
                        // line 6
                        echo "                <section class=\"page-header page-header-light page-header-more-padding \">
            ";
                    } elseif ((                    // line 7
(isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-light-reverse")) {
                        // line 8
                        echo "                <section class=\"page-header page-header-light page-header-reverse page-header-more-padding\">
            ";
                    } elseif ((                    // line 9
(isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-parallax")) {
                        // line 10
                        echo "                <section class=\"page-header page-header-custom-background parallax\" data-plugin-parallax data-plugin-options='{\"speed\": 1.5}' data-image-src=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
                        echo "/img/parallax.jpg\">
            ";
                    } elseif ((                    // line 11
(isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-center")) {
                        // line 12
                        echo "                <section class=\"page-header page-header-center page-header-more-padding page-header-no-title-border\">
            ";
                    } elseif ((                    // line 13
(isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-color-primary")) {
                        // line 14
                        echo "                <section class=\"page-header page-header-color page-header-primary page-header-more-padding\">
            ";
                    } elseif ((                    // line 15
(isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-color-quaternary")) {
                        // line 16
                        echo "                <section class=\"page-header page-header-color page-header-quaternary page-header-more-padding\">
            ";
                    } elseif ((                    // line 17
(isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-color-secondary")) {
                        // line 18
                        echo "                <section class=\"page-header page-header-color page-header-secondary page-header-more-padding\">
            ";
                    } elseif ((                    // line 19
(isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-color-tertinary")) {
                        // line 20
                        echo "                <section class=\"page-header page-header-color page-header-tertiary page-header-more-padding\">
            ";
                    } else {
                        // line 22
                        echo "                <section class=\"page-header\">
            ";
                    }
                    // line 24
                    echo "        ";
                } else {
                    // line 25
                    echo "            ";
                    if (((isset($context["page_header_option"]) ? $context["page_header_option"] : null) == "ph_light")) {
                        // line 26
                        echo "                <section class=\"page-header page-header-light page-header-more-padding \">
            ";
                    } elseif ((                    // line 27
(isset($context["page_header_option"]) ? $context["page_header_option"] : null) == "ph_light_reverse")) {
                        // line 28
                        echo "                <section class=\"page-header page-header-light page-header-reverse page-header-more-padding\">
            ";
                    } elseif ((                    // line 29
(isset($context["page_header_option"]) ? $context["page_header_option"] : null) == "ph_parallax")) {
                        // line 30
                        echo "                <section class=\"page-header page-header-custom-background parallax\" data-plugin-parallax data-plugin-options='{\"speed\": 1.5}' data-image-src=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
                        echo "/img/parallax.jpg\">
            ";
                    } elseif ((                    // line 31
(isset($context["page_header_option"]) ? $context["page_header_option"] : null) == "ph_center")) {
                        // line 32
                        echo "                <section class=\"page-header page-header-center page-header-more-padding page-header-no-title-border\">
            ";
                    } else {
                        // line 34
                        echo "                <section class=\"page-header ";
                        if (((isset($context["page_header_color_option"]) ? $context["page_header_color_option"] : null) != "none")) {
                            echo " page-header-color ";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_header_color_option"]) ? $context["page_header_color_option"] : null), "html", null, true));
                        }
                        echo "\">
            ";
                    }
                    // line 36
                    echo "        ";
                }
                // line 37
                echo "
        <div class=\"container\">
            ";
                // line 39
                if ((((((((((((isset($context["page_header_option"]) ? $context["page_header_option"] : null) == "ph_light") || ((isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-light")) || ((isset($context["page_header_option"]) ? $context["page_header_option"] : null) == "ph_parallax")) || ((isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-parallax")) || ((isset($context["page_header_option"]) ? $context["page_header_option"] : null) == "ph_center")) || ((isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-center")) || ((isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-color-primary")) || ((isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-color-quaternary")) || ((isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-color-secondary")) || ((isset($context["arg"]) ? $context["arg"] : null) == "index-page-header-color-tertinary"))) {
                    // line 40
                    echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1>";
                    // line 42
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["page_title"]) ? $context["page_title"] : null)), "html", null, true));
                    echo "</h1>
                        ";
                    // line 43
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
                    echo "
                    </div>
                </div>
            ";
                } else {
                    // line 47
                    echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
                    // line 49
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
                    echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1>";
                    // line 54
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["page_title"]) ? $context["page_title"] : null)), "html", null, true));
                    echo "</h1>
                    </div>
                </div>
            ";
                }
                // line 58
                echo "        </div>
        </section>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/custom-breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 58,  173 => 54,  165 => 49,  161 => 47,  154 => 43,  150 => 42,  146 => 40,  144 => 39,  140 => 37,  137 => 36,  128 => 34,  124 => 32,  122 => 31,  117 => 30,  115 => 29,  112 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  97 => 22,  93 => 20,  91 => 19,  88 => 18,  86 => 17,  83 => 16,  81 => 15,  78 => 14,  76 => 13,  73 => 12,  71 => 11,  66 => 10,  64 => 9,  61 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if page_title %}
    <!--breadcrumbs-->
    {% if page.breadcrumb %}
        {% if page_header_option == 'none' %}
            {% if arg == 'index-page-header-light' %}
                <section class=\"page-header page-header-light page-header-more-padding \">
            {% elseif arg == 'index-page-header-light-reverse' %}
                <section class=\"page-header page-header-light page-header-reverse page-header-more-padding\">
            {% elseif arg == 'index-page-header-parallax' %}
                <section class=\"page-header page-header-custom-background parallax\" data-plugin-parallax data-plugin-options='{\"speed\": 1.5}' data-image-src=\"{{ theme_root }}/img/parallax.jpg\">
            {% elseif arg == 'index-page-header-center' %}
                <section class=\"page-header page-header-center page-header-more-padding page-header-no-title-border\">
            {% elseif arg == 'index-page-header-color-primary' %}
                <section class=\"page-header page-header-color page-header-primary page-header-more-padding\">
            {% elseif arg == 'index-page-header-color-quaternary' %}
                <section class=\"page-header page-header-color page-header-quaternary page-header-more-padding\">
            {% elseif arg == 'index-page-header-color-secondary' %}
                <section class=\"page-header page-header-color page-header-secondary page-header-more-padding\">
            {% elseif arg == 'index-page-header-color-tertinary' %}
                <section class=\"page-header page-header-color page-header-tertiary page-header-more-padding\">
            {% else %}
                <section class=\"page-header\">
            {% endif %}
        {% else %}
            {% if page_header_option == 'ph_light' %}
                <section class=\"page-header page-header-light page-header-more-padding \">
            {% elseif page_header_option == 'ph_light_reverse' %}
                <section class=\"page-header page-header-light page-header-reverse page-header-more-padding\">
            {% elseif page_header_option == 'ph_parallax' %}
                <section class=\"page-header page-header-custom-background parallax\" data-plugin-parallax data-plugin-options='{\"speed\": 1.5}' data-image-src=\"{{ theme_root }}/img/parallax.jpg\">
            {% elseif page_header_option == 'ph_center' %}
                <section class=\"page-header page-header-center page-header-more-padding page-header-no-title-border\">
            {% else %}
                <section class=\"page-header {% if page_header_color_option != 'none' %} page-header-color {{ page_header_color_option }}{% endif %}\">
            {% endif %}
        {% endif %}

        <div class=\"container\">
            {% if page_header_option == 'ph_light' or arg == 'index-page-header-light' or page_header_option == 'ph_parallax' or arg == 'index-page-header-parallax' or page_header_option == 'ph_center' or arg == 'index-page-header-center' or arg == 'index-page-header-color-primary' or arg == 'index-page-header-color-quaternary' or arg == 'index-page-header-color-secondary' or arg == 'index-page-header-color-tertinary' %}
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1>{{ page_title | striptags }}</h1>
                        {{ page.breadcrumb }}
                    </div>
                </div>
            {% else %}
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {{ page.breadcrumb }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1>{{ page_title | striptags }}</h1>
                    </div>
                </div>
            {% endif %}
        </div>
        </section>
    {% endif %}
{% endif %}";
    }
}
