<?php

/* modules/md_slider/templates/frontend/front-layers-render.html.twig */
class __TwigTemplate_ffa0addea5398789dec71c73e5a1eb64a23bbf65e0b424f3a8bd07f4475f7c1a extends Twig_Template
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
        $tags = array("if" => 1, "set" => 6);
        $filters = array("raw" => 21);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
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
        if ( !twig_test_empty($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "opacity", array()))) {
            // line 2
            echo "<div class=\"md-item-opacity\"  style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "opacity", array()), "html", null, true));
            echo "\">
";
        }
        // line 4
        echo "    <div class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "link", array()), "target", array())) {
            // line 6
            echo "        ";
            $context["target"] = (("target=\"" . $this->getAttribute($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "link", array()), "target", array())) . "\"");
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        if (($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "type", array()) == "text")) {
            // line 9
            echo "
        ";
            // line 10
            if ((isset($context["link"]) ? $context["link"] : null)) {
                // line 11
                echo "            <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
                echo "\" ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["target"]) ? $context["target"] : null), "html", null, true));
                echo ">
                ";
                // line 12
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "title", array()), "html", null, true));
                echo "
            </a>
        ";
            } else {
                // line 15
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "title", array()), "html", null, true));
                echo "
        ";
            }
            // line 17
            echo "
    ";
        } elseif (($this->getAttribute(        // line 18
(isset($context["layer"]) ? $context["layer"] : null), "type", array()) == "image")) {
            // line 19
            echo "        ";
            if ((isset($context["link"]) ? $context["link"] : null)) {
                // line 20
                echo "        <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
                echo "\" ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["target"]) ? $context["target"] : null), "html", null, true));
                echo ">
            <img src=\"";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "url", array()), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "title", array())));
                echo "\" />
        </a>
        ";
            } else {
                // line 24
                echo "            <img src=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "url", array()), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "title", array())));
                echo "\" />
        ";
            }
            // line 26
            echo "    ";
        } elseif (($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "type", array()) == "video")) {
            // line 27
            echo "        <a title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "title", array())));
            echo "\" class=\"md-video\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "url", array()), "html", null, true));
            echo "\">
            <img src=\"";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "thumb", array()), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "title", array())));
            echo "\"/>
            <span class=\"md-playbtn\"></span>
        </a>
    ";
        }
        // line 32
        echo "    </div>
";
        // line 33
        if ( !twig_test_empty($this->getAttribute((isset($context["layer"]) ? $context["layer"] : null), "opacity", array()))) {
            // line 34
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/md_slider/templates/frontend/front-layers-render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 34,  146 => 33,  143 => 32,  134 => 28,  127 => 27,  124 => 26,  116 => 24,  108 => 21,  101 => 20,  98 => 19,  96 => 18,  93 => 17,  87 => 15,  81 => 12,  74 => 11,  72 => 10,  69 => 9,  66 => 8,  63 => 7,  60 => 6,  58 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if not layer.opacity is  empty %}
<div class=\"md-item-opacity\"  style=\"{{ layer.opacity }}\">
{% endif %}
    <div class=\"{{ class }}\" {{ attributes }}>
    {%  if layer.link.target %}
        {% set target = 'target=\"' ~ layer.link.target ~ '\"' %}
    {%  endif %}
    {% if layer.type == 'text' %}

        {% if link %}
            <a href=\"{{ link }}\" {{ target }}>
                {{ layer.title }}
            </a>
        {% else %}
            {{ layer.title }}
        {% endif %}

    {% elseif layer.type == 'image' %}
        {% if link %}
        <a href=\"{{ link }}\" {{ target }}>
            <img src=\"{{ layer.url }}\" alt=\"{{ layer.title|raw }}\" />
        </a>
        {% else %}
            <img src=\"{{ layer.url }}\" alt=\"{{ layer.title|raw }}\" />
        {% endif %}
    {% elseif layer.type == 'video' %}
        <a title=\"{{ layer.title|raw }}\" class=\"md-video\" href=\"{{ layer.url }}\">
            <img src=\"{{ layer.thumb }}\" alt=\"{{ layer.title|raw }}\"/>
            <span class=\"md-playbtn\"></span>
        </a>
    {% endif %}
    </div>
{% if not layer.opacity is  empty %}
</div>
{% endif %}
";
    }
}
