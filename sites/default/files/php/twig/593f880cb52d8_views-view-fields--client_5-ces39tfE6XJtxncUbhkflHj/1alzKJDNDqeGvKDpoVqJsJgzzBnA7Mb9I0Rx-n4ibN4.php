<?php

/* themes/porto/templates/view/clients/views-view-fields--clients--our-clients.html.twig */
class __TwigTemplate_e4b0fab314c7add1acffa5907e269f4994a05f2dfabd199b814b24eab840785d extends Twig_Template
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
        $tags = array("set" => 1, "for" => 2);
        $filters = array();
        $functions = array("file_url" => 4);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for'),
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
        $context["images"] = $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_image", array());
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 3
            echo "<div class=\"content-grid-item col-md-6 center\">
    <img class=\"img-responsive\" src=\"";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($context["image"], "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\" alt=\"\">
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/clients/views-view-fields--clients--our-clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set images = row._entity.field_image %}
{% for image  in images %}
<div class=\"content-grid-item col-md-6 center\">
    <img class=\"img-responsive\" src=\"{{ file_url(image.entity.fileuri) }}\" alt=\"\">
</div>
{% endfor %}";
    }
}
