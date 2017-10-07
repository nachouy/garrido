<?php

/* themes/porto/templates/block_type/block--our-office.html.twig */
class __TwigTemplate_95be51a60118604c4fbf76dcbca0b32392482e6d5d966841654dc38d55062edd extends Twig_Template
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
        $tags = array("set" => 2, "if" => 12);
        $filters = array("clean_class" => 4, "render" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'render'),
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
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 4
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 5
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))));
        // line 8
        $context["style"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_style", array()), 0, array(), "array"), "#markup", array(), "array");
        // line 9
        echo "
<div";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
        ";
        // line 12
        if (((isset($context["style"]) ? $context["style"] : null) == "style 2")) {
            // line 13
            echo "            <div class=\"container\">
                ";
            // line 14
            if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_large_image", array()))) {
                // line 15
                echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"owl-carousel owl-theme mb-none\" data-plugin-options='{\"items\": 1, \"animateOut\": \"fadeOut\", \"autoplay\": true, \"autoplayTimeout\": 3000}'>
                            ";
                // line 18
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_large_image", array()), "html", null, true));
                echo "
                        </div>
                    </div>
                </div>

                <hr class=\"tall\">
                ";
            }
            // line 25
            echo "                <div class=\"row\">
                    <div class=\"col-md-7\">
                        ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
            echo "
                        <div data-plugin-lightbox data-plugin-options='{\"delegate\": \"a\", \"type\": \"image\", \"gallery\": {\"enabled\": true}}'>
                            <div class=\"row\">
                               ";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
            echo "
                            </div>
                        </div>

                    </div>
                    <div class=\"col-md-5\">
                        ";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_contact", array()), "html", null, true));
            echo "
                    </div>
                </div>

            </div>
        ";
        } else {
            // line 42
            echo "        <div class=\"row lightbox mg-top-10\" data-plugin-options='{\"delegate\": \"a\", \"type\": \"image\", \"gallery\": {\"enabled\": true}}'>
            ";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 46
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/block_type/block--our-office.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 46,  113 => 43,  110 => 42,  101 => 36,  92 => 30,  86 => 27,  82 => 25,  72 => 18,  67 => 15,  65 => 14,  62 => 13,  60 => 12,  56 => 11,  52 => 10,  49 => 9,  47 => 8,  45 => 5,  44 => 4,  43 => 2,);
    }

    public function getSource()
    {
        return "{%
set classes = [
'block',
'block-' ~ configuration.provider|clean_class,
'block-' ~ plugin_id|clean_class,
]
%}
{% set style = content.field_style[0]['#markup'] %}

<div{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
        {% if style == 'style 2' %}
            <div class=\"container\">
                {% if content.field_large_image | render %}
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"owl-carousel owl-theme mb-none\" data-plugin-options='{\"items\": 1, \"animateOut\": \"fadeOut\", \"autoplay\": true, \"autoplayTimeout\": 3000}'>
                            {{ content.field_large_image }}
                        </div>
                    </div>
                </div>

                <hr class=\"tall\">
                {% endif %}
                <div class=\"row\">
                    <div class=\"col-md-7\">
                        {{ content.body }}
                        <div data-plugin-lightbox data-plugin-options='{\"delegate\": \"a\", \"type\": \"image\", \"gallery\": {\"enabled\": true}}'>
                            <div class=\"row\">
                               {{ content.field_image }}
                            </div>
                        </div>

                    </div>
                    <div class=\"col-md-5\">
                        {{ content.field_contact }}
                    </div>
                </div>

            </div>
        {% else %}
        <div class=\"row lightbox mg-top-10\" data-plugin-options='{\"delegate\": \"a\", \"type\": \"image\", \"gallery\": {\"enabled\": true}}'>
            {{ content.field_image }}
        </div>
        {% endif %}
    {{ title_suffix }}
</div>";
    }
}
