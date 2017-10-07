<?php

/* modules/md_slider/templates/backend/admin-layers-render.html.twig */
class __TwigTemplate_49cbbcf6d6a5aba874fb2a4f83572a91db29496961192435dbe0f428073e90b9 extends Twig_Template
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
        $tags = array("for" => 1, "if" => 2);
        $filters = array("raw" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('raw'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layers"]) ? $context["layers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layer"]) {
            // line 2
            echo "    ";
            if (($this->getAttribute($context["layer"], "type", array()) == "text")) {
                // line 3
                echo "        <div class=\"slider-item ui-widget-content item-text ui-draggable ui-resizable\" ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["layer"], "layer_data", array())));
                echo " style=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["layer"], "layer_style", array())));
                echo "\">
            <div>";
                // line 4
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["layer"], "title", array()), "html", null, true));
                echo "</div>
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    ";
            } elseif (($this->getAttribute(            // line 8
$context["layer"], "type", array()) == "image")) {
                // line 9
                echo "        <div class=\"slider-item ui-widget-content item-image ui-draggable ui-resizable\" ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["layer"], "layer_data", array())));
                echo " style=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["layer"], "layer_style", array()), "html", null, true));
                echo "\">
            <img width=\"100%\" height=\"100%\" src=\"";
                // line 10
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["layer"], "file_url", array()), "html", null, true));
                echo "\" />
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    ";
            } elseif (($this->getAttribute(            // line 14
$context["layer"], "type", array()) == "video")) {
                // line 15
                echo "        <div class=\"slider-item ui-widget-content item-video ui-draggable ui-resizable\" ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["layer"], "layer_data", array())));
                echo " style=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["layer"], "layer_style", array()), "html", null, true));
                echo "\">
            <img width=\"100%\" height=\"100%\" src=\"";
                // line 16
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["layer"], "thumb", array()), "html", null, true));
                echo "\" />
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/md_slider/templates/backend/admin-layers-render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  82 => 15,  80 => 14,  73 => 10,  66 => 9,  64 => 8,  57 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% for layer in layers %}
    {% if layer.type == 'text' %}
        <div class=\"slider-item ui-widget-content item-text ui-draggable ui-resizable\" {{ layer.layer_data|raw  }} style=\"{{ layer.layer_style|raw }}\">
            <div>{{ layer.title }}</div>
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    {% elseif layer.type == 'image' %}
        <div class=\"slider-item ui-widget-content item-image ui-draggable ui-resizable\" {{ layer.layer_data|raw  }} style=\"{{ layer.layer_style }}\">
            <img width=\"100%\" height=\"100%\" src=\"{{ layer.file_url }}\" />
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    {% elseif layer.type == 'video' %}
        <div class=\"slider-item ui-widget-content item-video ui-draggable ui-resizable\" {{ layer.layer_data|raw  }} style=\"{{ layer.layer_style }}\">
            <img width=\"100%\" height=\"100%\" src=\"{{ layer.thumb }}\" />
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    {% endif %}
{% endfor %}";
    }
}
