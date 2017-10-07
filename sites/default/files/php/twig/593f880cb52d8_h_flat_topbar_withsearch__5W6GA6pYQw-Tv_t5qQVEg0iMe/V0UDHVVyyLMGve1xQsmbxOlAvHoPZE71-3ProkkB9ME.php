<?php

/* themes/porto/templates/includes/header_option/h_flat_topbar_withsearch_style2.html.twig */
class __TwigTemplate_14322060cc39e09786ad48ddc463a9e750eb29cd4c9ed4ae021fed2e427b9a73 extends Twig_Template
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
            echo "<header id=\"header\" class=\"header-narrow\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": false}'>
";
        }
        // line 6
        echo "<div class=\"header-body\">
<div class=\"header-top header-top-secondary header-top-style-3\">
    <div class=\"container\">

        ";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_top", array())) {
            // line 11
            echo "            <div class=\"f-left\">
                ";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_top", array()), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 15
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 16
            echo "            <div class=\"header-search hidden-xs\">
                ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 20
        echo "    </div>
</div>
<div class=\"header-container container\">
<div class=\"header-row\">
    ";
        // line 24
        if ((isset($context["logopath"]) ? $context["logopath"] : null)) {
            // line 25
            echo "<div class=\"header-column\">
    <div class=\"header-logo\">
        <a href=\"";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\">
            <img alt=\"Porto\" width=\"100\" height=\"48\" src=\"";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logopath"]) ? $context["logopath"] : null), "html", null, true));
            echo "\">
        </a>
    </div>
</div>
    ";
        }
        // line 33
        echo "<div class=\"header-column\">
<div class=\"header-row\">
<div class=\"header-nav ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["navigation_option"]) ? $context["navigation_option"] : null), "html", null, true));
        echo "\">
<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
    <i class=\"fa fa-bars\"></i>
</button>
    ";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_social", array())) {
            // line 40
            echo "        <div class=\"header-social-icons social-icons hidden-xs\">
            ";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_social", array()), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 44
        echo "<div class=\"header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
    ";
        // line 45
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 46
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
    ";
        }
        // line 48
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
        return "themes/porto/templates/includes/header_option/h_flat_topbar_withsearch_style2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  133 => 46,  131 => 45,  128 => 44,  122 => 41,  119 => 40,  117 => 39,  110 => 35,  106 => 33,  98 => 28,  94 => 27,  90 => 25,  88 => 24,  82 => 20,  76 => 17,  73 => 16,  70 => 15,  64 => 12,  61 => 11,  59 => 10,  53 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if header_sticky_option == 'always_sticky' %}
<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\", \"stickyChangeLogo\": false}'>
    {% else %}
<header id=\"header\" class=\"header-narrow\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": false}'>
{% endif %}
<div class=\"header-body\">
<div class=\"header-top header-top-secondary header-top-style-3\">
    <div class=\"container\">

        {% if page.nav_top %}
            <div class=\"f-left\">
                {{ page.nav_top }}
            </div>
        {% endif %}
        {% if page.search %}
            <div class=\"header-search hidden-xs\">
                {{ page.search }}
            </div>
        {% endif %}
    </div>
</div>
<div class=\"header-container container\">
<div class=\"header-row\">
    {% if logopath %}
<div class=\"header-column\">
    <div class=\"header-logo\">
        <a href=\"{{ front_page }}\">
            <img alt=\"Porto\" width=\"100\" height=\"48\" src=\"{{ logopath }}\">
        </a>
    </div>
</div>
    {% endif %}
<div class=\"header-column\">
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
