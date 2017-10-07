<?php

/* themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials.html.twig */
class __TwigTemplate_cc93da9aea81157751ae6fb289ff6dfbebec443a0c6cedd481b31d3f67e6f569 extends Twig_Template
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
        $tags = array("if" => 37);
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

        // line 34
        echo "<div>
    <div class=\"col-md-12\">
        <div class=\"testimonial testimonial-primary\">
            ";
        // line 37
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array())) {
            // line 38
            echo "            <blockquote>
                ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "
            </blockquote>
            ";
        }
        // line 42
        echo "            <div class=\"testimonial-arrow-down\"></div>
            <div class=\"testimonial-author\">
                ";
        // line 44
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_thumbnail", array())) {
            // line 45
            echo "                <div class=\"testimonial-author-thumbnail img-thumbnail\">
                    ";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_thumbnail", array()), "content", array()), "html", null, true));
            echo "
                </div>
                ";
        }
        // line 49
        echo "                <p><strong>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</strong>
                    ";
        // line 50
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_testimonial_info", array())) {
            // line 51
            echo "                    <span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_testimonial_info", array()), "content", array()), "html", null, true));
            echo "</span>
                    ";
        }
        // line 53
        echo "                </p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 53,  81 => 51,  79 => 50,  74 => 49,  68 => 46,  65 => 45,  63 => 44,  59 => 42,  53 => 39,  50 => 38,  48 => 37,  43 => 34,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default view template to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 *
 * @ingroup themeable
 */
#}
<div>
    <div class=\"col-md-12\">
        <div class=\"testimonial testimonial-primary\">
            {% if fields.body %}
            <blockquote>
                {{ fields.body.content }}
            </blockquote>
            {% endif %}
            <div class=\"testimonial-arrow-down\"></div>
            <div class=\"testimonial-author\">
                {% if fields.field_thumbnail %}
                <div class=\"testimonial-author-thumbnail img-thumbnail\">
                    {{ fields.field_thumbnail.content }}
                </div>
                {% endif %}
                <p><strong>{{ fields.title.content }}</strong>
                    {% if fields.field_testimonial_info %}
                    <span>{{ fields.field_testimonial_info.content }}</span>
                    {% endif %}
                </p>
            </div>
        </div>
    </div>
</div>
";
    }
}
