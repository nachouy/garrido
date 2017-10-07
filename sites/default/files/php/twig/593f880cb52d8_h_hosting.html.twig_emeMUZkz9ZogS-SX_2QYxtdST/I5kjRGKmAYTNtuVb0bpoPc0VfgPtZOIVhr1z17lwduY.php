<?php

/* themes/porto/templates/includes/header_option/h_hosting.html.twig */
class __TwigTemplate_2cdef84501a8b992deb763944faf156fa5e56f7175c21363c3d6ab9b9c33a481 extends Twig_Template
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
        $tags = array("if" => 7);
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
        echo "<header id=\"header\" class=\"header-narrow\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": false}'>
<div class=\"header-body\">
<div class=\"header-top header-top-quaternary header-top-style-3\">
    <div class=\"container\">
        <nav class=\"header-nav-top pull-right\">
            <ul class=\"nav nav-pills\">
                ";
        // line 7
        if ( !twig_test_empty((isset($context["contact_option"]) ? $context["contact_option"] : null))) {
            // line 8
            echo "                <li class=\"hidden-xs\">
                    <span class=\"ws-nowrap\"><i class=\"fa fa-phone\"></i> ";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contact_option"]) ? $context["contact_option"] : null), "html", null, true));
            echo "</span>
                </li>
                ";
        }
        // line 12
        echo "                <li>
                    <a href=\"#\" class=\"dropdown-menu-toggle\" id=\"dropdownLanguage\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        <img src=\"img/blank.gif\" class=\"flag flag-us\" alt=\"English\" /> English
                        <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownLanguage\">
                        ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "language_switcher", array()), "html", null, true));
        echo "
                    </ul>
                </li>
                ";
        // line 21
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 22
            echo "                    <li class=\"hidden-xs\">
                        <a href=\"user/logout\"><i class=\"fa fa-angle-right\"></i> Logout</a>
                    </li>
                ";
        } else {
            // line 26
            echo "                    <li class=\"hidden-xs\">
                        <a href=\"user\"><i class=\"fa fa-angle-right\"></i> Login</a>
                    </li>
                    <li class=\"hidden-xs\">
                        <a href=\"user/register\"><i class=\"fa fa-angle-right\"></i> Sign Up</a>
                    </li>
                ";
        }
        // line 33
        echo "
            </ul>
        </nav>
    </div>
</div>
<div class=\"header-container container\">
<div class=\"header-row\">
";
        // line 40
        if ((isset($context["logopath"]) ? $context["logopath"] : null)) {
            // line 41
            echo "    <div class=\"header-column\">
    <div class=\"header-logo\">
        <a href=\"";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\">
            <img alt=\"Porto\" width=\"100\" height=\"48\" src=\"";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logopath"]) ? $context["logopath"] : null), "html", null, true));
            echo "\">
        </a>
    </div>
</div>
";
        }
        // line 49
        echo "<div class=\"header-column\">
<div class=\"header-row\">
<div class=\"header-nav\">
<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
    <i class=\"fa fa-bars\"></i>
</button>
<div class=\"header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
    ";
        // line 56
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 57
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
    ";
        }
        // line 59
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
        return "themes/porto/templates/includes/header_option/h_hosting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 59,  131 => 57,  129 => 56,  120 => 49,  112 => 44,  108 => 43,  104 => 41,  102 => 40,  93 => 33,  84 => 26,  78 => 22,  76 => 21,  70 => 18,  62 => 12,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSource()
    {
        return "<header id=\"header\" class=\"header-narrow\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": false}'>
<div class=\"header-body\">
<div class=\"header-top header-top-quaternary header-top-style-3\">
    <div class=\"container\">
        <nav class=\"header-nav-top pull-right\">
            <ul class=\"nav nav-pills\">
                {% if contact_option is not empty %}
                <li class=\"hidden-xs\">
                    <span class=\"ws-nowrap\"><i class=\"fa fa-phone\"></i> {{contact_option}}</span>
                </li>
                {% endif %}
                <li>
                    <a href=\"#\" class=\"dropdown-menu-toggle\" id=\"dropdownLanguage\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        <img src=\"img/blank.gif\" class=\"flag flag-us\" alt=\"English\" /> English
                        <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownLanguage\">
                        {{ page.language_switcher }}
                    </ul>
                </li>
                {% if user  %}
                    <li class=\"hidden-xs\">
                        <a href=\"user/logout\"><i class=\"fa fa-angle-right\"></i> Logout</a>
                    </li>
                {% else %}
                    <li class=\"hidden-xs\">
                        <a href=\"user\"><i class=\"fa fa-angle-right\"></i> Login</a>
                    </li>
                    <li class=\"hidden-xs\">
                        <a href=\"user/register\"><i class=\"fa fa-angle-right\"></i> Sign Up</a>
                    </li>
                {% endif %}

            </ul>
        </nav>
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
<div class=\"header-nav\">
<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
    <i class=\"fa fa-bars\"></i>
</button>
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
