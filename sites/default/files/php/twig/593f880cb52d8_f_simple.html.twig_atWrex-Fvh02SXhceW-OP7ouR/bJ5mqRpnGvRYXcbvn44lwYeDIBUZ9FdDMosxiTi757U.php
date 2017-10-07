<?php

/* themes/porto/templates/includes/footer_option/f_simple.html.twig */
class __TwigTemplate_bc3dd48f5e4645face14f2c66d58b5d04104b4fd60a8ff82b2f992575492f8d7 extends Twig_Template
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
        echo "<footer class=\"short ";
        if (((isset($context["footer_color_option"]) ? $context["footer_color_option"] : null) != "none")) {
            echo " color ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_color_option"]) ? $context["footer_color_option"] : null), "html", null, true));
        }
        echo "\" id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array())) {
            // line 5
            echo "            <div class=\"col-md-8\">
                ";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 9
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_53", array())) {
            // line 10
            echo "            <div class=\"col-md-3 col-md-offset-1\">

                ";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_53", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 15
        echo "        </div>
    </div>
    ";
        // line 17
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom_237", array())) {
            // line 18
            echo "    <div class=\"footer-copyright\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom_237", array()), "html", null, true));
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 26
        echo "</footer>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/footer_option/f_simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  88 => 21,  83 => 18,  81 => 17,  77 => 15,  71 => 12,  67 => 10,  64 => 9,  58 => 6,  55 => 5,  53 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<footer class=\"short {% if footer_color_option != 'none' %} color {{ footer_color_option }}{% endif %}\" id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            {% if page.footer_top %}
            <div class=\"col-md-8\">
                {{ page.footer_top }}
            </div>
            {% endif %}
            {% if page.footer_53 %}
            <div class=\"col-md-3 col-md-offset-1\">

                {{ page.footer_53 }}
            </div>
            {% endif %}
        </div>
    </div>
    {% if page.footer_bottom_237 %}
    <div class=\"footer-copyright\">
        <div class=\"container\">
            <div class=\"row\">
                {{ page.footer_bottom_237 }}
            </div>
        </div>
    </div>
    {% endif %}
</footer>";
    }
}
