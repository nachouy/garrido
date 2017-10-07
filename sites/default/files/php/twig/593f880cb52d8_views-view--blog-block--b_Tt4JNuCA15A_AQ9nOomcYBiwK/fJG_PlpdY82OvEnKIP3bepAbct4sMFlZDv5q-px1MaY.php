<?php

/* themes/porto/templates/view/blog/block_blog/views-view--blog-block--blog-latest-style3.html.twig */
class __TwigTemplate_541455a8e2bcfd0d1b4e8e92b8bb91a1dbcb59209d7efb594da40aa9fdfc7361 extends Twig_Template
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
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 p-none\">
                <section class=\"section section-secondary match-height mt-none\">
                    <div class=\"row\">
                        <div class=\"col-half-section col-half-section-right\">
                            ";
        // line 17
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 18
            echo "                            <h2 class=\"heading-dark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "</h2>
                            ";
        }
        // line 20
        echo "                            <div class=\"row\">
                                ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
        echo "
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class=\"col-md-6 p-none\">
                ";
        // line 28
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 29
            echo "                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
                ";
        }
        // line 31
        echo "            </div>
        </div>
    </div>

    ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
        echo "
    ";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
        echo "

    ";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
        echo "
    ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "

    ";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
        echo "
    ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
        echo "



    ";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "
</div>






";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/blog/block_blog/views-view--blog-block--blog-latest-style3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  126 => 42,  122 => 41,  117 => 39,  113 => 38,  108 => 36,  104 => 35,  98 => 31,  92 => 29,  90 => 28,  80 => 21,  77 => 20,  71 => 18,  69 => 17,  61 => 11,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 3,  43 => 2,);
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
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 p-none\">
                <section class=\"section section-secondary match-height mt-none\">
                    <div class=\"row\">
                        <div class=\"col-half-section col-half-section-right\">
                            {% if header %}
                            <h2 class=\"heading-dark\">{{ header }}</h2>
                            {% endif %}
                            <div class=\"row\">
                                {{ rows }}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class=\"col-md-6 p-none\">
                {% if footer %}
                    {{ footer }}
                {% endif %}
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






";
    }
}
