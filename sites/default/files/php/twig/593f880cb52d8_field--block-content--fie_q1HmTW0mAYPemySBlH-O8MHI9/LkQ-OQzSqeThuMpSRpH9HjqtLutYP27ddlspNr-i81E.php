<?php

/* themes/porto/templates/block_type/field--block-content--field-image--our-office.html.twig */
class __TwigTemplate_80e7edcea078d71931503f84a1b0da7912ee76f4c33a676fb02fadd7369dc7d1 extends Twig_Template
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
        $tags = array("for" => 2, "set" => 3);
        $filters = array();
        $functions = array("file_url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set'),
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 3
            echo "    ";
            $context["link"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "entity", array()), "fileuri", array())));
            // line 4
            echo "    <div class=\"col-md-4\">
        <a class=\"img-thumbnail mb-xl\" href=\"";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
            echo "\" data-plugin-options='{\"type\":\"image\"}'>
            <img class=\"img-responsive\" src=\"";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
            echo "\" alt=\"Office\">
\t\t\t\t\t\t\t\t\t\t<span class=\"zoom\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/block_type/field--block-content--field-image--our-office.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "
{% for key, item in items %}
    {% set link = file_url(item.content['#item'].entity.fileuri) %}
    <div class=\"col-md-4\">
        <a class=\"img-thumbnail mb-xl\" href=\"{{ link }}\" data-plugin-options='{\"type\":\"image\"}'>
            <img class=\"img-responsive\" src=\"{{ link }}\" alt=\"Office\">
\t\t\t\t\t\t\t\t\t\t<span class=\"zoom\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
        </a>
    </div>
{% endfor %}";
    }
}
