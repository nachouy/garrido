<?php

/* themes/porto/templates/node/product/field--commerce-product--field-comments--default.html.twig */
class __TwigTemplate_23a69a0bdadc506040ff4de4bc7f225f0c828b283bb0b83f76bba8717735bc31 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 17);
        $filters = array("clean_class" => 4, "t" => 31);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't'),
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
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 4
(isset($context["field_name"]) ? $context["field_name"] : null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 5
(isset($context["field_type"]) ? $context["field_type"] : null))), 3 => ("field--label-" .         // line 6
(isset($context["label_display"]) ? $context["label_display"] : null)), 4 => "comment-wrapper");
        // line 11
        $context["title_classes"] = array(0 => "title", 1 => (((        // line 13
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 16
        echo "<section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 17
        if (((isset($context["comments"]) ? $context["comments"] : null) &&  !(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 18
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
        <h2";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
        ";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
    ";
        }
        // line 22
        echo "
    <ul class=\"comments for-product\">
        ";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true));
        echo "
    </ul>
    ";
        // line 26
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            // line 27
            echo "        <hr class=\"tall\">
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ((isset($context["comment_form"]) ? $context["comment_form"] : null)) {
            // line 31
            echo "        <h4 class=\"heading-primary\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Add a review")));
            echo "</h4>
        <div class=\"post-leave-comment padding-top-0 margin-top-0\">
            ";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comment_form"]) ? $context["comment_form"] : null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 36
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/node/product/field--commerce-product--field-comments--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  100 => 33,  94 => 31,  92 => 30,  89 => 29,  85 => 27,  83 => 26,  78 => 24,  74 => 22,  69 => 20,  63 => 19,  58 => 18,  56 => 17,  51 => 16,  49 => 13,  48 => 11,  46 => 6,  45 => 5,  44 => 4,  43 => 2,);
    }

    public function getSource()
    {
        return "{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
    'comment-wrapper',
  ]
%}
{%
  set title_classes = [
    'title',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}
<section{{ attributes.addClass(classes) }}>
    {% if comments and not label_hidden %}
        {{ title_prefix }}
        <h2{{ title_attributes.addClass(title_classes) }}>{{ label }}</h2>
        {{ title_suffix }}
    {% endif %}

    <ul class=\"comments for-product\">
        {{ comments }}
    </ul>
    {% if comments %}
        <hr class=\"tall\">
    {% endif %}

    {% if comment_form %}
        <h4 class=\"heading-primary\">{{ 'Add a review'|t }}</h4>
        <div class=\"post-leave-comment padding-top-0 margin-top-0\">
            {{ comment_form }}
        </div>
    {% endif %}

</section>";
    }
}
