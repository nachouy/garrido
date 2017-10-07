<?php

/* themes/porto/templates/view/testimonials/views-view--testimonials--testimonials_style4.html.twig */
class __TwigTemplate_1db2b1405571082ca08ed9eca4c14b45ce85387fd6d1307f62ec9546f9d37145 extends Twig_Template
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
        $tags = array("set" => 3, "if" => 12);
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

        // line 1
        echo "
";
        // line 3
        $context["classes"] = array(0 => ((        // line 4
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 7
        echo "
<div";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
";
        // line 12
        echo "    ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 13
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
    ";
        }
        // line 15
        echo "
    <section class=\"parallax section section-text-light section-parallax section-center mt-xl mb-none\" data-plugin-parallax data-plugin-options='{\"speed\": 1.5}' data-image-src=\"";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
        echo "/img/parallax-6.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
                    <div class=\"owl-carousel owl-theme nav-bottom rounded-nav\" data-plugin-options='{\"items\": 1, \"loop\": false}'>
                        ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
        echo "
  ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
        echo "

  ";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
        echo "
  ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "

  ";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
        echo "
  ";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
        echo "

  ";
        // line 36
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 37
            echo "    <footer>
      ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "
</div>







";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/testimonials/views-view--testimonials--testimonials_style4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 42,  131 => 41,  125 => 38,  122 => 37,  120 => 36,  115 => 34,  111 => 33,  106 => 31,  102 => 30,  97 => 28,  93 => 27,  84 => 21,  76 => 16,  73 => 15,  67 => 13,  64 => 12,  60 => 10,  56 => 9,  52 => 8,  49 => 7,  47 => 4,  46 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "
{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}

<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title }}
{#  {{ title_suffix }}#}
    {% if header %}
        {{ header }}
    {% endif %}

    <section class=\"parallax section section-text-light section-parallax section-center mt-xl mb-none\" data-plugin-parallax data-plugin-options='{\"speed\": 1.5}' data-image-src=\"{{ theme_root }}/img/parallax-6.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
                    <div class=\"owl-carousel owl-theme nav-bottom rounded-nav\" data-plugin-options='{\"items\": 1, \"loop\": false}'>
                        {{ rows }}
                    </div>
                </div>
            </div>
        </div>
    </section>
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
