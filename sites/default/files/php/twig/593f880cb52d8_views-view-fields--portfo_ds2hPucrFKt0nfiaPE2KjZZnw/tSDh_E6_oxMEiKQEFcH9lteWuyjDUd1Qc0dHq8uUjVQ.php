<?php

/* themes/porto/templates/view/portfolio/blockfields/views-view-fields--portfolio-block--our-portfolio-style3.html.twig */
class __TwigTemplate_34895d57138809a49d0af5a9779c936c80eadffecc2d84d45d7bde3402613f85 extends Twig_Template
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
        $tags = array("set" => 1);
        $filters = array();
        $functions = array("file_url" => 4);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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
    <a href=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
        echo "\">
        <img src=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" class=\"img-responsive\" alt=\"\">
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/portfolio/blockfields/views-view-fields--portfolio-block--our-portfolio-style3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set thumbnail = row._entity.field_thumbnail %}
<div>
    <a href=\"{{ fields.path.content }}\">
        <img src=\"{{ file_url(thumbnail.entity.fileuri) }}\" class=\"img-responsive\" alt=\"\">
    </a>
</div>";
    }
}
