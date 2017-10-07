<?php

/* themes/porto/templates/includes/header_option/h_navbar_extra_info.html.twig */
class __TwigTemplate_8c987b4550bfbea6dd6d4ce2a1f9608f62a9638010bdc063e4097d2d4db355e3 extends Twig_Template
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
            echo "<header id=\"header\" class=\"header-no-border-bottom\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 148, \"stickySetTop\": \"-148px\", \"stickyChangeLogo\": false}'>
";
        }
        // line 6
        echo "<div class=\"header-body\">
    ";
        // line 7
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 8
            echo "        <div class=\"header-top header-top-style-2\">
            <div class=\"container\">
                ";
            // line 10
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 14
        echo "<div class=\"header-container container\">
    <div class=\"header-row\">
        ";
        // line 16
        if ((isset($context["logopath"]) ? $context["logopath"] : null)) {
            // line 17
            echo "        <div class=\"header-column\">
            <div class=\"header-logo\">
                <a href=\"";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\">
                    <img alt=\"Porto\" width=\"111\" height=\"54\" data-sticky-width=\"82\" data-sticky-height=\"40\" data-sticky-top=\"33\" src=\"";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logopath"]) ? $context["logopath"] : null), "html", null, true));
            echo "\">
                </a>
            </div>
        </div>
        ";
        }
        // line 25
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_top", array())) {
            // line 26
            echo "            <div class=\"header-column\">
                ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_top", array()), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 30
        echo "    </div>
</div>
<div class=\"header-container header-nav header-nav-bar header-nav-bar-primary\">
<div class=\"container\">
<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
    <i class=\"fa fa-bars\"></i>
</button>
<div class=\"header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
    ";
        // line 38
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 39
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
    ";
        }
        // line 41
        echo "</div>
</div>
</div>
</div>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/header_option/h_navbar_extra_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  115 => 39,  113 => 38,  103 => 30,  97 => 27,  94 => 26,  91 => 25,  83 => 20,  79 => 19,  75 => 17,  73 => 16,  69 => 14,  62 => 10,  58 => 8,  56 => 7,  53 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if header_sticky_option == 'always_sticky' %}
<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\", \"stickyChangeLogo\": false}'>
    {% else %}
<header id=\"header\" class=\"header-no-border-bottom\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 148, \"stickySetTop\": \"-148px\", \"stickyChangeLogo\": false}'>
{% endif %}
<div class=\"header-body\">
    {% if page.header %}
        <div class=\"header-top header-top-style-2\">
            <div class=\"container\">
                {{ page.header }}
            </div>
        </div>
    {% endif %}
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
        {% if page.nav_top %}
            <div class=\"header-column\">
                {{ page.nav_top }}
            </div>
        {% endif %}
    </div>
</div>
<div class=\"header-container header-nav header-nav-bar header-nav-bar-primary\">
<div class=\"container\">
<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
    <i class=\"fa fa-bars\"></i>
</button>
<div class=\"header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
    {% if page.primary_menu %}
        {{ page.primary_menu }}
    {% endif %}
</div>
</div>
</div>
</div>
</header>";
    }
}
