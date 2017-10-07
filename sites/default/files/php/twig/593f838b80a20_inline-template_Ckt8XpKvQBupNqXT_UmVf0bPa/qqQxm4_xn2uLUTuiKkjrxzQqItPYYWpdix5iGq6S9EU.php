<?php

/* {# inline_template_start #}<div class="post-image">
	<div class="img-thumbnail">
		{{ field_thumbnail }}
	</div>
</div>
<div class="post-info">
	{{ title }}
	<div class="post-meta">
		{{ price__number }}
	</div>
</div> */
class __TwigTemplate_a77315cb78e77f91f38f6f99d17d9dc4fcf405c10e636a9ec4b3cf3b207d91f7 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"post-image\">
\t<div class=\"img-thumbnail\">
\t\t";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_thumbnail"]) ? $context["field_thumbnail"] : null), "html", null, true));
        echo "
\t</div>
</div>
<div class=\"post-info\">
\t";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
\t<div class=\"post-meta\">
\t\t";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["price__number"]) ? $context["price__number"] : null), "html", null, true));
        echo "
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-image\">
\t<div class=\"img-thumbnail\">
\t\t{{ field_thumbnail }}
\t</div>
</div>
<div class=\"post-info\">
\t{{ title }}
\t<div class=\"post-meta\">
\t\t{{ price__number }}
\t</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  64 => 7,  57 => 3,  53 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"post-image\">
\t<div class=\"img-thumbnail\">
\t\t{{ field_thumbnail }}
\t</div>
</div>
<div class=\"post-info\">
\t{{ title }}
\t<div class=\"post-meta\">
\t\t{{ price__number }}
\t</div>
</div>";
    }
}
