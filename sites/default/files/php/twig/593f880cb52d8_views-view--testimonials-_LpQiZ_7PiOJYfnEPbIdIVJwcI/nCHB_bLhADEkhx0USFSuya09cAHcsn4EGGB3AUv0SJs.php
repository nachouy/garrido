<?php

/* themes/porto/templates/view/testimonials/views-view--testimonials--testimonials_style7.html.twig */
class __TwigTemplate_4a98bf4f0ac386b58cffa9c54d44791b4680249c654b39ae9b0a174fbc0c4c24 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 15);
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

    <section class=\"section section-no-background section-no-border mt-none mb-none\" id=\"testimonials\">
        <div class=\"container\">
            ";
        // line 15
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 16
            echo "            <div class=\"row\">
                <div class=\"col-md-12 center\">
                        ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
                </div>
            </div>
            ";
        }
        // line 22
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
        echo "
        </div>
    </section>
    ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
        echo "

    ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
        echo "
    ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "

    ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
        echo "

    ";
        // line 34
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 35
            echo "        <footer>
            ";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
        </footer>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "
</div>









";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/testimonials/views-view--testimonials--testimonials_style7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 40,  125 => 39,  119 => 36,  116 => 35,  114 => 34,  109 => 32,  105 => 31,  100 => 29,  96 => 28,  91 => 26,  87 => 25,  80 => 22,  73 => 18,  69 => 16,  67 => 15,  61 => 11,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 3,  43 => 2,);
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


    <section class=\"section section-no-background section-no-border mt-none mb-none\" id=\"testimonials\">
        <div class=\"container\">
            {% if header %}
            <div class=\"row\">
                <div class=\"col-md-12 center\">
                        {{ header }}
                </div>
            </div>
            {% endif %}
            {{ rows }}
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
