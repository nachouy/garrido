<?php

/* themes/porto/templates/view/clients/views-view--clients--clients-no-hd.html.twig */
class __TwigTemplate_75447d0be5315741e2076fd9e5f3f1fb98402ed0d5b95ae45232d0abf91345fb extends Twig_Template
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
        $tags = array("set" => 2, "if" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 2
        $context["classes"] = array(0 => ((        // line 3
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 6
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
 ";
        // line 10
        echo "    ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 11
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
    ";
        }
        // line 13
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 center\">
                <div class=\"owl-carousel owl-theme mt-xl\" data-plugin-options='{\"items\": 6, \"autoplay\": true, \"autoplayTimeout\": 3000}'>
                    ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
        echo "
                </div>
            </div>
        </div>
    </div>

  ";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
        echo "
  ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
        echo "

  ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
        echo "
  ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "

  ";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
        echo "
  ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
        echo "

  ";
        // line 33
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 34
            echo "    <footer>
      ";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 38
        echo "
  ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/clients/views-view--clients--clients-no-hd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  122 => 38,  116 => 35,  113 => 34,  111 => 33,  106 => 31,  102 => 30,  97 => 28,  93 => 27,  88 => 25,  84 => 24,  75 => 18,  68 => 13,  62 => 11,  59 => 10,  55 => 8,  51 => 7,  46 => 6,  44 => 3,  43 => 2,);
    }

    public function getSource()
    {
        return "{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title }}
 {#{{ title_suffix }}#}
    {% if header %}
        {{ header }}
    {% endif %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 center\">
                <div class=\"owl-carousel owl-theme mt-xl\" data-plugin-options='{\"items\": 6, \"autoplay\": true, \"autoplayTimeout\": 3000}'>
                    {{ rows }}
                </div>
            </div>
        </div>
    </div>

  {{ exposed }}
  {{ attachment_before }}

  {{ empty }}
  {{ pager }}

  {{ attachment_after }}
  {{ more }}

  {% if footer %}
    <footer>
      {{ footer }}
    </footer>
  {% endif %}

  {{ feed_icons }}
</div>
";
    }
}
