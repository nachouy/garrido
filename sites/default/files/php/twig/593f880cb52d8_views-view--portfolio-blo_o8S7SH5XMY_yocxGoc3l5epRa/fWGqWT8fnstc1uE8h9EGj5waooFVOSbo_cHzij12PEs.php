<?php

/* themes/porto/templates/view/portfolio/blocks/views-view--portfolio-block--latest-projects.html.twig */
class __TwigTemplate_661854bd33bf929018c51f1a3514bf2dd210f2025b4fb016169836da9dc25655 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 2
        $context["classes"] = array(0 => ((        // line 3
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 6
        echo "
<div";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
    ";
        // line 11
        echo "
    <section class=\"section section-primary mt-none\" id=\"projects\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 16
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 17
            echo "                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
                ";
        }
        // line 19
        echo "                <div class=\"owl-carousel owl-theme\" data-plugin-options='{\"items\": 4, \"margin\": 20, \"loop\": false}'>
                    ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
        echo "
                </div>
            </div>
        </div>
    </div>
    </section>
    ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
        echo "

    ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "

    ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
        echo "
    ";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
        echo "

    ";
        // line 35
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 36
            echo "        <footer>
            ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
        </footer>
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "
</div>













";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/portfolio/blocks/views-view--portfolio-block--latest-projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 41,  126 => 40,  120 => 37,  117 => 36,  115 => 35,  110 => 33,  106 => 32,  101 => 30,  97 => 29,  92 => 27,  88 => 26,  79 => 20,  76 => 19,  70 => 17,  68 => 16,  61 => 11,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 3,  43 => 2,);
    }

    public function getSource()
    {
        return "{%
set classes = [
dom_id ? 'js-view-dom-id-' ~ dom_id,
]
%}

<div{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {{ title }}
    {#  {{ title_suffix }}#}

    <section class=\"section section-primary mt-none\" id=\"projects\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% if header %}
                    {{ header }}
                {% endif %}
                <div class=\"owl-carousel owl-theme\" data-plugin-options='{\"items\": 4, \"margin\": 20, \"loop\": false}'>
                    {{ rows }}
                </div>
            </div>
        </div>
    </div>
    </section>
    {{ exposed }}
    {{ attachment_before }}

    {{ empty }}
    {{ pager }}

    {{ attachment_after }}
    {{ more }}

    {% if footer %}
        <footer>
            {{ footer }}
        </footer>
    {% endif %}

    {{ feed_icons }}
</div>













";
    }
}
