<?php

/* themes/porto/templates/panels/panels-twocol-stacked.html.twig */
class __TwigTemplate_9bd16c08ea6b7985fd66ba8987e7e410e63f3a4abbf4a15ff4335f87c50942f2 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array()), "html", null, true));
        echo "
<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row mt-xlg\">
            <div class=\"col-md-6\">
                ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "left", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "right", array()), "html", null, true));
        echo "
            </div>

        </div>
    </div>
</section>
";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array()), "html", null, true));
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/panels/panels-twocol-stacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 34,  57 => 28,  51 => 25,  43 => 20,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - \$id: An optional CSS id to use for the layout.
 * - \$content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - content.top: Content in the top row.
 *   - content.left: Content in the left column.
 *   - content.middle: Content in the middle column.
 *   - content.right: Content in the right column.
 *   - content.bottom: Content in the bottom row.
 */
#}
{{ content.top }}
<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row mt-xlg\">
            <div class=\"col-md-6\">
                {{ content.left }}
            </div>
            <div class=\"col-md-6\">
                {{ content.right }}
            </div>

        </div>
    </div>
</section>
{{ content.bottom }}

";
    }
}
