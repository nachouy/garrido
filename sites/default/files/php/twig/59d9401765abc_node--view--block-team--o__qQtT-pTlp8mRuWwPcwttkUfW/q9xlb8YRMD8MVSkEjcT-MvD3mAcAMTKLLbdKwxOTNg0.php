<?php

/* themes/porto/templates/node/team/node--view--block-team--our-team.html.twig */
class __TwigTemplate_fa0eddbacb908ea4fd4ccec5ce93967dd31c6364bc5e709a05d308f2eaa3ac44 extends Twig_Template
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
        $filters = array("striptags" => 5, "render" => 5);
        $functions = array("file_url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('striptags', 'render'),
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
        $context["thumbnail"] = $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_thumbnail", array());
        // line 2
        echo "<div class=\"col-md-2 col-xs-6 center mb-lg\">
    <img src=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" class=\"img-responsive\" alt=\"\">
    <h5 class=\"mt-sm mb-none\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</h5>
    <p class=\"mb-none\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_team_job", array()))), "html", null, true));
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/node/team/node--view--block-team--our-team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set thumbnail = node.field_thumbnail %}
<div class=\"col-md-2 col-xs-6 center mb-lg\">
    <img src=\"{{ file_url(thumbnail.entity.fileuri) }}\" class=\"img-responsive\" alt=\"\">
    <h5 class=\"mt-sm mb-none\">{{ label }}</h5>
    <p class=\"mb-none\">{{ content.field_team_job | render | striptags }}</p>
</div>
";
    }
}
