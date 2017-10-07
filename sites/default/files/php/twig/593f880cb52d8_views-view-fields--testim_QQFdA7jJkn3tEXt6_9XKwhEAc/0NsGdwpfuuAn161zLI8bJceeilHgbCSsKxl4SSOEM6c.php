<?php

/* themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials_style4.html.twig */
class __TwigTemplate_a3263b064da7e6d1ba332d840cdf6f4fc5ab54305f1014404afd6bff4b9e95ca extends Twig_Template
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
        $tags = array("set" => 1, "if" => 5);
        $filters = array();
        $functions = array("file_url" => 7);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array('file_url')
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
        $context["thumbnail"] = $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_thumbnail", array());
        // line 2
        echo "<div>
    <div class=\"col-md-12\">
        <div class=\"testimonial testimonial-style-2 testimonial-with-quotes mb-none\">
            ";
        // line 5
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_thumbnail", array())) {
            // line 6
            echo "            <div class=\"testimonial-author\">
                <img src=\"";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\" class=\"img-responsive img-circle\" alt=\"\">
            </div>
            ";
        }
        // line 10
        echo "            ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array())) {
            // line 11
            echo "                <blockquote>
                    ";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "
                </blockquote>
            ";
        }
        // line 15
        echo "            <div class=\"testimonial-author\">
                <p><strong>";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</strong>
                    ";
        // line 17
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_testimonial_info", array())) {
            // line 18
            echo "                        <span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_testimonial_info", array()), "content", array()), "html", null, true));
            echo "</span>
                    ";
        }
        // line 20
        echo "                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials_style4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  82 => 18,  80 => 17,  76 => 16,  73 => 15,  67 => 12,  64 => 11,  61 => 10,  55 => 7,  52 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set thumbnail = row._entity.field_thumbnail %}
<div>
    <div class=\"col-md-12\">
        <div class=\"testimonial testimonial-style-2 testimonial-with-quotes mb-none\">
            {% if fields.field_thumbnail %}
            <div class=\"testimonial-author\">
                <img src=\"{{ file_url(thumbnail.entity.fileuri) }}\" class=\"img-responsive img-circle\" alt=\"\">
            </div>
            {% endif %}
            {% if fields.body %}
                <blockquote>
                    {{ fields.body.content }}
                </blockquote>
            {% endif %}
            <div class=\"testimonial-author\">
                <p><strong>{{ fields.title.content }}</strong>
                    {% if fields.field_testimonial_info %}
                        <span>{{ fields.field_testimonial_info.content }}</span>
                    {% endif %}
                </p>
            </div>
        </div>
    </div>
</div>";
    }
}
