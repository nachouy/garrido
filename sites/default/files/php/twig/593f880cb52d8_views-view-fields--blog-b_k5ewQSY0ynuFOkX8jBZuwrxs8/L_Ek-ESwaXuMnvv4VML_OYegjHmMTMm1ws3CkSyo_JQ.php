<?php

/* themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--blog-latest.html.twig */
class __TwigTemplate_ed47cba898622270092e491255c6e521bce44b088aafcc9b36af43de5842f217 extends Twig_Template
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
        echo "<div class=\"col-md-6\">
    <article>
        <div class=\"date\">
            ";
        // line 37
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array())) {
            // line 38
            echo "            <span class=\"day\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array()), "content", array()), "html", null, true));
            echo "</span>
            ";
        }
        // line 40
        echo "            ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created_1", array())) {
            // line 41
            echo "            <span class=\"month\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created_1", array()), "content", array()), "html", null, true));
            echo "</span>
            ";
        }
        // line 43
        echo "        </div>
        ";
        // line 44
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array())) {
            // line 45
            echo "        <h4 class=\"heading-primary\"><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
            echo "</a></h4>
        ";
        }
        // line 47
        echo "        ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array())) {
            // line 48
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
            echo "\" class=\"read-more\">read more <i class=\"fa fa-angle-right\"></i></a>
        ";
        }
        // line 50
        echo "    </article>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--blog-latest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 50,  81 => 48,  78 => 47,  70 => 45,  68 => 44,  65 => 43,  59 => 41,  56 => 40,  50 => 38,  48 => 37,  43 => 34,);
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
<div class=\"col-md-6\">
    <article>
        <div class=\"date\">
            {% if fields.created %}
            <span class=\"day\">{{ fields.created.content }}</span>
            {% endif %}
            {% if fields.created_1 %}
            <span class=\"month\">{{ fields.created_1.content }}</span>
            {% endif %}
        </div>
        {% if fields.title %}
        <h4 class=\"heading-primary\"><a href=\"{{ fields.path.content }}\">{{ fields.title.content }}</a></h4>
        {% endif %}
        {% if fields.body %}
        {{ fields.body.content }}<a href=\"{{ fields.path.content }}\" class=\"read-more\">read more <i class=\"fa fa-angle-right\"></i></a>
        {% endif %}
    </article>
</div>

";
    }
}
