<?php

/* themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials_style2.html.twig */
class __TwigTemplate_3ef2bc7f76d87a2a90fd0036880e9aba4529280fc2f41d24e7c972140c74a464 extends Twig_Template
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
        $tags = array("if" => 4);
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

        // line 1
        echo "<div>
    <div class=\"col-md-12\">
        <div class=\"testimonial testimonial-style-6 testimonial-with-quotes mb-none\">
            ";
        // line 4
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array())) {
            // line 5
            echo "                <blockquote>
                    ";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "
                </blockquote>
            ";
        }
        // line 9
        echo "            <div class=\"testimonial-author\">
                <p><strong>";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</strong>
                    ";
        // line 11
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_testimonial_info", array())) {
            // line 12
            echo "                        <span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_testimonial_info", array()), "content", array()), "html", null, true));
            echo "</span>
                    ";
        }
        // line 14
        echo "                </p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials_style2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  68 => 12,  66 => 11,  62 => 10,  59 => 9,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <div class=\"col-md-12\">
        <div class=\"testimonial testimonial-style-6 testimonial-with-quotes mb-none\">
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
</div>
";
    }
}
