<?php

/* themes/porto/templates/includes/header_option/h_onepage.html.twig */
class __TwigTemplate_477c78c02c4fa2a74c3cb8447d2fd4d72b1064e791dd871bd669e5dc13a7caed extends Twig_Template
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
        if (((isset($context["header_sticky_option"]) ? $context["header_sticky_option"] : null) == "always_sticky")) {
            // line 2
            echo "<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\", \"stickyChangeLogo\": false}'>
    ";
        } else {
            // line 4
            echo "<header id=\"header\" class=\"header-mobile-nav-only\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": true}'>
";
        }
        // line 6
        echo "    <div class=\"header-body\">
        <div class=\"header-container container\">
            <div class=\"header-row\">
                <div class=\"header-column\">
                    <div class=\"header-logo\">
                        <a href=\"";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
        echo "\">
                            <img alt=\"Porto\" width=\"111\" height=\"54\" data-sticky-width=\"82\" data-sticky-height=\"40\" data-sticky-top=\"33\" src=\"";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logopath"]) ? $context["logopath"] : null), "html", null, true));
        echo "\">
                        </a>
                    </div>
                </div>
                <div class=\"header-column\">
                    <div class=\"header-row\">
                        <div class=\"header-nav header-nav-top-line ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["navigation_option"]) ? $context["navigation_option"] : null), "html", null, true));
        echo "\">
                            <button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            ";
        // line 22
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_social", array())) {
            // line 23
            echo "                                <div class=\"header-social-icons social-icons hidden-xs\">
                                    ";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_social", array()), "html", null, true));
            echo "
                                </div>
                            ";
        }
        // line 27
        echo "                            <div class=\"header-nav-main header-nav-main-square header-nav-main-effect-3 header-nav-main-sub-effect-1 collapse\">
                                ";
        // line 28
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 29
            echo "                                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
                                ";
        }
        // line 31
        echo "
                            </div>
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
        return "themes/porto/templates/includes/header_option/h_onepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  96 => 29,  94 => 28,  91 => 27,  85 => 24,  82 => 23,  80 => 22,  73 => 18,  64 => 12,  60 => 11,  53 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if header_sticky_option == 'always_sticky' %}
<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\", \"stickyChangeLogo\": false}'>
    {% else %}
<header id=\"header\" class=\"header-mobile-nav-only\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": true}'>
{% endif %}
    <div class=\"header-body\">
        <div class=\"header-container container\">
            <div class=\"header-row\">
                <div class=\"header-column\">
                    <div class=\"header-logo\">
                        <a href=\"{{ front_page }}\">
                            <img alt=\"Porto\" width=\"111\" height=\"54\" data-sticky-width=\"82\" data-sticky-height=\"40\" data-sticky-top=\"33\" src=\"{{ logopath }}\">
                        </a>
                    </div>
                </div>
                <div class=\"header-column\">
                    <div class=\"header-row\">
                        <div class=\"header-nav header-nav-top-line {{ navigation_option }}\">
                            <button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            {% if page.header_social %}
                                <div class=\"header-social-icons social-icons hidden-xs\">
                                    {{ page.header_social }}
                                </div>
                            {% endif %}
                            <div class=\"header-nav-main header-nav-main-square header-nav-main-effect-3 header-nav-main-sub-effect-1 collapse\">
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
