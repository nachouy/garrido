<?php

/* themes/porto/templates/view/testimonials/views-view-unformatted--testimonials--testimonials-style7.html.twig */
class __TwigTemplate_68dd47b6b7f082be58fbffc7a4aac790d228b28ac8ff8390ba4ac97f6bce7cdc extends Twig_Template
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
        $tags = array("if" => 1, "set" => 4, "for" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
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
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 2
            echo "    <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
";
        }
        // line 4
        $context["i"] = 1;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "        ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 7
            echo "        ";
            if ((0 == (isset($context["i"]) ? $context["i"] : null) % 2)) {
                // line 8
                echo "            <div class=\"row mt-xl\">
        ";
            }
            // line 10
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
        ";
            // line 11
            if ( !(0 == (isset($context["i"]) ? $context["i"] : null) % 2)) {
                // line 12
                echo "            </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/testimonials/views-view-unformatted--testimonials--testimonials-style7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  73 => 11,  68 => 10,  64 => 8,  61 => 7,  58 => 6,  53 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if title %}
    <h3>{{ title }}</h3>
{% endif %}
{% set i = 1 %}
    {% for row in rows %}
        {% set i = i+1 %}
        {% if i is divisible by(2) %}
            <div class=\"row mt-xl\">
        {% endif %}
        {{ row.content }}
        {% if i is not divisible by(2) %}
            </div>
        {% endif %}
{% endfor %}";
    }
}
