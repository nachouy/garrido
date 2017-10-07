<?php

/* themes/porto/templates/view/blog/block_blog/views-view--blog-block--blog-latest.html.twig */
class __TwigTemplate_fc3c7e7a5ac5439ebd5d43c7a4d60fb99ad0e895693529a5f35fb76067467d70 extends Twig_Template
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
        $tags = array("set" => 37, "if" => 52);
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

        // line 35
        echo "
";
        // line 37
        $context["classes"] = array(0 => ((        // line 38
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 41
        echo "<section class=\"section section-custom-map\">
    <section class=\"section section-default section-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                <div";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
                  ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
                  ";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
                 ";
        // line 50
        echo "
                        <div class=\"recent-posts mb-xl\">
                            ";
        // line 52
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 53
            echo "                                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
                            ";
        }
        // line 55
        echo "                            <h2>Latest <strong>Blog</strong> Posts</h2>
                            <div class=\"row\">
                                <div class=\"owl-carousel owl-theme mb-none\" data-plugin-options='{\"items\": 1}'>
                                    ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
        echo "
                                </div>
                            </div>
                        </div>
                  ";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
        echo "
                  ";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
        echo "
                  ";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
        echo "
                  ";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "
                  ";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
        echo "
                  ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
        echo "
                  ";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "
                </div>
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 72
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 73
            echo "                        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
                    ";
        }
        // line 75
        echo "                </div>
            </div>
        </div>
    </section>
</section>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/blog/block_blog/views-view--blog-block--blog-latest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 75,  125 => 73,  123 => 72,  116 => 68,  112 => 67,  108 => 66,  104 => 65,  100 => 64,  96 => 63,  92 => 62,  85 => 58,  80 => 55,  74 => 53,  72 => 52,  68 => 50,  64 => 48,  60 => 47,  56 => 46,  49 => 41,  47 => 38,  46 => 37,  43 => 35,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 *
 * @ingroup themeable
 */
#}

{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<section class=\"section section-custom-map\">
    <section class=\"section section-default section-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                <div{{ attributes.addClass(classes) }}>
                  {{ title_prefix }}
                  {{ title }}
                 {#{{ title_suffix }}#}

                        <div class=\"recent-posts mb-xl\">
                            {% if header %}
                                {{ header }}
                            {% endif %}
                            <h2>Latest <strong>Blog</strong> Posts</h2>
                            <div class=\"row\">
                                <div class=\"owl-carousel owl-theme mb-none\" data-plugin-options='{\"items\": 1}'>
                                    {{ rows }}
                                </div>
                            </div>
                        </div>
                  {{ exposed }}
                  {{ attachment_before }}
                  {{ empty }}
                  {{ pager }}
                  {{ attachment_after }}
                  {{ more }}
                  {{ feed_icons }}
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
</section>

";
    }
}
