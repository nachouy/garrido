<?php

/* themes/porto_sub/templates/includes/header_option/h_flat_topbar.html.twig */
class __TwigTemplate_00d7df34939c8772997d09762511ccbec251c7c92d9b189e364de53eafaec3e1 extends Twig_Template
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
            echo "<header id=\"header\" class=\"header-mobile-nav-only\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 90, \"stickySetTop\": \"-90px\", \"stickyChangeLogo\": true}'>
";
        }
        // line 6
        echo "<div class=\"header-body\">
<div class=\"header-top\">
    <div class=\"container\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_top", array())) {
            // line 10
            echo "            <div class=\"f-left\">
                ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_top", array()), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 14
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_social", array())) {
            // line 15
            echo "            <div class=\"header-social-icons social-icons hidden-xs\">
                ";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_social", array()), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 19
        echo "    </div>
</div>
<div class=\"header-container container\">
<div class=\"header-row\">
<div class=\"header-column\">
    ";
        // line 24
        if ((isset($context["logopath"]) ? $context["logopath"] : null)) {
            // line 25
            echo "    <div class=\"header-logo\">
        <a href=\"";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\">
            <img alt=\"Porto\" width=\"111\" height=\"54\" data-sticky-width=\"82\" data-sticky-height=\"40\" data-sticky-top=\"29\" src=\"";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logopath"]) ? $context["logopath"] : null), "html", null, true));
            echo "\">
        </a>
    </div>
    ";
        }
        // line 31
        echo "</div>
<div class=\"header-column\">
<div class=\"header-row\">
<div class=\"header-nav header-nav-stripe\">
<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
    <i class=\"fa fa-bars\"></i>
</button>
<div class=\"header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
    ";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 40
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
    ";
        }
        // line 42
        echo "</div>
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
        return "themes/porto_sub/templates/includes/header_option/h_flat_topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  116 => 40,  114 => 39,  104 => 31,  97 => 27,  93 => 26,  90 => 25,  88 => 24,  81 => 19,  75 => 16,  72 => 15,  69 => 14,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if header_sticky_option == 'always_sticky' %}
<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\", \"stickyChangeLogo\": false}'>
    {% else %}
<header id=\"header\" class=\"header-mobile-nav-only\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 90, \"stickySetTop\": \"-90px\", \"stickyChangeLogo\": true}'>
{% endif %}
<div class=\"header-body\">
<div class=\"header-top\">
    <div class=\"container\">
        {% if page.nav_top %}
            <div class=\"f-left\">
                {{ page.nav_top }}
            </div>
        {% endif %}
        {% if page.header_social %}
            <div class=\"header-social-icons social-icons hidden-xs\">
                {{ page.header_social }}
            </div>
        {% endif %}
    </div>
</div>
<div class=\"header-container container\">
<div class=\"header-row\">
<div class=\"header-column\">
    {% if logopath %}
    <div class=\"header-logo\">
        <a href=\"{{ front_page }}\">
            <img alt=\"Porto\" width=\"111\" height=\"54\" data-sticky-width=\"82\" data-sticky-height=\"40\" data-sticky-top=\"29\" src=\"{{ logopath }}\">
        </a>
    </div>
    {% endif %}
</div>
<div class=\"header-column\">
<div class=\"header-row\">
<div class=\"header-nav header-nav-stripe\">
<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
    <i class=\"fa fa-bars\"></i>
</button>
<div class=\"header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
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
