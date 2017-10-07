<?php

/* modules/md_slider/templates/frontend/front-slide-render.html.twig */
class __TwigTemplate_fb7e6298e4c1dd744f7e586aedf4ce36330f01eaaaef5efc871816ded85a5090 extends Twig_Template
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
        $tags = array("if" => 5, "for" => 15);
        $filters = array("raw" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 2
        echo "<div class=\"md-slide-item ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
<div class=\"md-main-img\" style=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["background_style"]) ? $context["background_style"] : null), "html", null, true));
        echo "\">

    ";
        // line 5
        if ((isset($context["background_url"]) ? $context["background_url"] : null)) {
            // line 6
            echo "        <img src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["background_url"]) ? $context["background_url"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "background_image_alt", array())));
            echo "\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["background_style"]) ? $context["background_style"] : null), "html", null, true));
            echo " />
    ";
        }
        // line 8
        echo "
</div>
";
        // line 10
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "background_overlay", array())) {
            // line 11
            echo "<div class=\"md-slider-overlay\" style=\"background: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "background_overlay", array()), "html", null, true));
            echo "\">
</div>
";
        }
        // line 14
        echo "<div class=\"md-objects\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contentLayers"]) ? $context["contentLayers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contentLayer"]) {
            // line 16
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["contentLayer"], "html", null, true));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentLayer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
</div>
";
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/md_slider/templates/frontend/front-slide-render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  96 => 18,  87 => 16,  83 => 15,  80 => 14,  73 => 11,  71 => 10,  67 => 8,  57 => 6,  55 => 5,  50 => 3,  43 => 2,);
    }

    public function getSource()
    {
        return "{#{% if settings.disabled != 0 %}#}
<div class=\"md-slide-item {{ index }}\" {{ attributes }}>
<div class=\"md-main-img\" style=\"{{ background_style }}\">

    {% if background_url %}
        <img src=\"{{ background_url }}\" alt=\"{{ settings.background_image_alt|raw }}\" {{ background_style }} />
    {% endif %}

</div>
{% if settings.background_overlay  %}
<div class=\"md-slider-overlay\" style=\"background: {{ settings.background_overlay }}\">
</div>
{% endif %}
<div class=\"md-objects\">
    {% for contentLayer in contentLayers %}
        {{ contentLayer }}
    {% endfor %}
</div>
</div>
{#{% endif %}#}

";
    }
}
