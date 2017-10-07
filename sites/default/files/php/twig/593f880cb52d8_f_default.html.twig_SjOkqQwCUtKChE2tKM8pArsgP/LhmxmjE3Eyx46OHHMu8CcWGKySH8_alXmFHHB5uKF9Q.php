<?php

/* themes/porto_sub/templates/includes/footer_option/f_default.html.twig */
class __TwigTemplate_1209e30d510785e7ae755870b576e2d3a89307ab9579ca2ae974a553a6f0cd75 extends Twig_Template
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
        $tags = array("if" => 1);
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
        if (((isset($context["footer_color_option"]) ? $context["footer_color_option"] : null) == "none")) {
            // line 2
            echo "<footer id=\"footer\" class=\"";
            if (((isset($context["arg"]) ? $context["arg"] : null) == "index-footer-color-primary")) {
                echo "color color-primary ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-footer-color-tertiary")) {
                echo "color color-tertiary ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-footer-color-quaternary")) {
                echo " color color-quaternary ";
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-footer-color-secondary")) {
                echo "color color-secondary";
            }
            echo "\">
";
        } else {
            // line 4
            echo "    <footer id=\"footer\" class=\"color ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_color_option"]) ? $context["footer_color_option"] : null), "html", null, true));
            echo "\">
";
        }
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 8
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "label_footer", array())) {
            // line 9
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "label_footer", array()), "html", null, true));
            echo "
            ";
        }
        // line 11
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_11", array())) {
            // line 12
            echo "            <div class=\"col-md-3\">
                <div class=\"newsletter\">
                    ";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_11", array()), "html", null, true));
            echo "
                </div>

            </div>
            ";
        }
        // line 19
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_21", array())) {
            // line 20
            echo "            <div class=\"col-md-3\">
                ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_21", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 24
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_31", array())) {
            // line 25
            echo "            <div class=\"col-md-4\">
                ";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_31", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 29
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_41", array())) {
            // line 30
            echo "            <div class=\"col-md-2\">
                ";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_41", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 34
        echo "        </div>
    </div>
    ";
        // line 36
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom_1", array())) {
            // line 37
            echo "    <div class=\"footer-copyright\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 40
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom_1", array()), "html", null, true));
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 45
        echo "</footer>";
    }

    public function getTemplateName()
    {
        return "themes/porto_sub/templates/includes/footer_option/f_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  139 => 40,  134 => 37,  132 => 36,  128 => 34,  122 => 31,  119 => 30,  116 => 29,  110 => 26,  107 => 25,  104 => 24,  98 => 21,  95 => 20,  92 => 19,  84 => 14,  80 => 12,  77 => 11,  71 => 9,  69 => 8,  65 => 6,  59 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if footer_color_option == 'none' %}
<footer id=\"footer\" class=\"{% if arg == 'index-footer-color-primary' %}color color-primary {% elseif arg == 'index-footer-color-tertiary' %}color color-tertiary {% elseif arg == 'index-footer-color-quaternary' %} color color-quaternary {% elseif arg == 'index-footer-color-secondary' %}color color-secondary{% endif %}\">
{% else %}
    <footer id=\"footer\" class=\"color {{ footer_color_option }}\">
{% endif %}
    <div class=\"container\">
        <div class=\"row\">
            {% if page.label_footer %}
                {{ page.label_footer }}
            {% endif %}
            {% if page.footer_11 %}
            <div class=\"col-md-3\">
                <div class=\"newsletter\">
                    {{ page.footer_11 }}
                </div>

            </div>
            {% endif %}
            {% if page.footer_21 %}
            <div class=\"col-md-3\">
                {{ page.footer_21 }}
            </div>
            {% endif %}
            {% if page.footer_31 %}
            <div class=\"col-md-4\">
                {{ page.footer_31 }}
            </div>
            {% endif %}
            {% if page.footer_41 %}
            <div class=\"col-md-2\">
                {{ page.footer_41 }}
            </div>
            {% endif %}
        </div>
    </div>
    {% if page.footer_bottom_1 %}
    <div class=\"footer-copyright\">
        <div class=\"container\">
            <div class=\"row\">
                {{ page.footer_bottom_1 }}
            </div>
        </div>
    </div>
    {% endif %}
</footer>";
    }
}
