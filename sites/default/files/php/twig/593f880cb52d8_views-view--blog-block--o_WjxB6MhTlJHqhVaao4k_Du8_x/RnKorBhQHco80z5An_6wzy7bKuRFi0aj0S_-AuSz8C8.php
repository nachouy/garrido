<?php

/* themes/porto/templates/view/blog/block_blog/views-view--blog-block--our-blog-style2.html.twig */
class __TwigTemplate_00b213bc1a04d46e5042e1ee9433773d3ab715179e3b95c4b431c47b2e9f1938 extends Twig_Template
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
        echo "    <section class=\"section section-primary\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 15
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 16
            echo "                    <h2 class=\"mb-xs\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "</h2>
                    ";
        }
        // line 18
        echo "                    <div class=\"row\">
                        ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
        echo "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 23
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 24
            echo "                        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
                    ";
        }
        // line 26
        echo "                </div>
            </div>
        </div>
    </section>
    ";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
        echo "
    ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
        echo "

    ";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
        echo "
    ";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "

    ";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
        echo "
    ";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
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
        return "themes/porto/templates/view/blog/block_blog/views-view--blog-block--our-blog-style2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  121 => 37,  117 => 36,  112 => 34,  108 => 33,  103 => 31,  99 => 30,  93 => 26,  87 => 24,  85 => 23,  78 => 19,  75 => 18,  69 => 16,  67 => 15,  61 => 11,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 3,  43 => 2,);
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
    <section class=\"section section-primary\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    {% if header %}
                    <h2 class=\"mb-xs\">{{ header }}</h2>
                    {% endif %}
                    <div class=\"row\">
                        {{ rows }}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    {% if footer %}
                        {{ footer }}
                    {% endif %}
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


    {{ feed_icons }}
</div>









";
    }
}
