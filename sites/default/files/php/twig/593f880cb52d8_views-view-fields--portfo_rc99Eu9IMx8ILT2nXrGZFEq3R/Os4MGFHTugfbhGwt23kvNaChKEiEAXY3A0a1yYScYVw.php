<?php

/* themes/porto/templates/view/portfolio/blockfields/views-view-fields--portfolio-block--project.html.twig */
class __TwigTemplate_87cc132cc1f5a3ac99bc3e9518eadfc20fc39c76ab7cede04fdef7f1dcb0487d extends Twig_Template
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
        $tags = array("set" => 1, "if" => 9);
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
        echo "<li class=\"isotope-item\">
    <div class=\"image-gallery-item mb-none\">
        <a href=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
        echo "\">
            <span class=\"thumb-info thumb-info-centered-info thumb-info-no-borders\">
                <span class=\"thumb-info-wrapper\">
                    <img src=\"";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" class=\"img-responsive\" alt=\"\">
                    <span class=\"thumb-info-title\">
                        ";
        // line 9
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array())) {
            // line 10
            echo "                        <span class=\"thumb-info-inner\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
            echo "</span>
                        ";
        }
        // line 12
        echo "                        <span class=\"thumb-info-type\">Project Type</span>
                    </span>
                    <span class=\"thumb-info-action\">
                        <span class=\"thumb-info-action-icon\"><i class=\"fa fa-link\"></i></span>
                    </span>
                </span>
            </span>
        </a>
    </div>
</li>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/portfolio/blockfields/views-view-fields--portfolio-block--project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  62 => 10,  60 => 9,  55 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set thumbnail = row._entity.field_thumbnail %}
<li class=\"isotope-item\">
    <div class=\"image-gallery-item mb-none\">
        <a href=\"{{ fields.path.content }}\">
            <span class=\"thumb-info thumb-info-centered-info thumb-info-no-borders\">
                <span class=\"thumb-info-wrapper\">
                    <img src=\"{{ file_url(thumbnail.entity.fileuri) }}\" class=\"img-responsive\" alt=\"\">
                    <span class=\"thumb-info-title\">
                        {% if fields.title %}
                        <span class=\"thumb-info-inner\">{{ fields.title.content }}</span>
                        {% endif %}
                        <span class=\"thumb-info-type\">Project Type</span>
                    </span>
                    <span class=\"thumb-info-action\">
                        <span class=\"thumb-info-action-icon\"><i class=\"fa fa-link\"></i></span>
                    </span>
                </span>
            </span>
        </a>
    </div>
</li>";
    }
}
