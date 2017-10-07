<?php

/* themes/porto_sub/templates/includes/header_option/h_default.html.twig */
class __TwigTemplate_520812984a98e82d90cd7d4ef028dba694194699bd469b45ec23eb0b4c11108a extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "
";
        // line 2
        if ((((isset($context["header_sticky_option"]) ? $context["header_sticky_option"] : null) == "always_sticky") || ((isset($context["arg"]) ? $context["arg"] : null) == "index-header-always-sticky"))) {
            // line 3
            echo "<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\", \"stickyChangeLogo\": false}'>
";
        } else {
            // line 5
            echo "<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": true}'>
";
        }
        // line 7
        echo "    <div class=\"header-body\">
        <div class=\"header-container container\">
            <div class=\"header-row\">
                ";
        // line 10
        if ((isset($context["logopath"]) ? $context["logopath"] : null)) {
            // line 11
            echo "                    <div class=\"header-column\">
                        <div class=\"header-logo\">
                            <a href=\"";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\">
                                <img alt=\"Porto\" width=\"111\" height=\"54\" data-sticky-width=\"82\" data-sticky-height=\"40\" data-sticky-top=\"33\" src=\"";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logopath"]) ? $context["logopath"] : null), "html", null, true));
            echo "\">
                            </a>
                        </div>
                    </div>
                ";
        }
        // line 19
        echo "                <div class=\"header-column\">
                    <div class=\"header-row\">
                        <div class=\"header-search hidden-xs\">
                            ";
        // line 22
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 23
            echo "                                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
                            ";
        }
        // line 25
        echo "                        </div>
                        ";
        // line 26
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_top", array())) {
            // line 27
            echo "                        <nav class=\"header-nav-top\">
                            ";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_top", array()), "html", null, true));
            echo "
                        </nav>
                        ";
        }
        // line 31
        echo "                    </div>
                    <div class=\"header-row\">
                        <div class=\"header-nav ";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["navigation_option"]) ? $context["navigation_option"] : null), "html", null, true));
        echo "\">
                            <button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            ";
        // line 37
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_social", array())) {
            // line 38
            echo "                            <div class=\"header-social-icons social-icons hidden-xs\">
                                ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_social", array()), "html", null, true));
            echo "
                            </div>
                            ";
        }
        // line 42
        echo "                            <div class=\"header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
                                ";
        // line 43
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 44
            echo "                                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
                                ";
        }
        // line 46
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/porto_sub/templates/includes/header_option/h_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  133 => 44,  131 => 43,  128 => 42,  122 => 39,  119 => 38,  117 => 37,  110 => 33,  106 => 31,  100 => 28,  97 => 27,  95 => 26,  92 => 25,  86 => 23,  84 => 22,  79 => 19,  71 => 14,  67 => 13,  63 => 11,  61 => 10,  56 => 7,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "
{% if header_sticky_option == 'always_sticky' or arg == 'index-header-always-sticky' %}
<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\", \"stickyChangeLogo\": false}'>
{% else %}
<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": true}'>
{% endif %}
    <div class=\"header-body\">
        <div class=\"header-container container\">
            <div class=\"header-row\">
                {% if logopath %}
                    <div class=\"header-column\">
                        <div class=\"header-logo\">
                            <a href=\"{{ front_page }}\">
                                <img alt=\"Porto\" width=\"111\" height=\"54\" data-sticky-width=\"82\" data-sticky-height=\"40\" data-sticky-top=\"33\" src=\"{{ logopath }}\">
                            </a>
                        </div>
                    </div>
                {% endif %}
                <div class=\"header-column\">
                    <div class=\"header-row\">
                        <div class=\"header-search hidden-xs\">
                            {% if page.search %}
                                {{ page.search }}
                            {% endif %}
                        </div>
                        {% if page.nav_top %}
                        <nav class=\"header-nav-top\">
                            {{ page.nav_top }}
                        </nav>
                        {% endif %}
                    </div>
                    <div class=\"header-row\">
                        <div class=\"header-nav {{ navigation_option }}\">
                            <button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            {% if page.header_social %}
                            <div class=\"header-social-icons social-icons hidden-xs\">
                                {{ page.header_social }}
                            </div>
                            {% endif %}
                            <div class=\"header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
                                {% if page.primary_menu %}
                                    {{ page.primary_menu }}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
    }
}
