<?php

/* themes/porto/templates/view/product/views-view-unformatted--product_pages--page_full_width.html.twig */
class __TwigTemplate_7fecd0ce9ce4f796c0926b7215ca4e56f6fca530351a519762962cf8b5a9bf10 extends Twig_Template
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
        $tags = array("for" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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
        echo "<div class=\"row\">
    <div class=\"masonry-loader masonry-loader-showing\">
        <ul class=\"products product-thumb-info-list\" data-plugin-masonry>
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 5
            echo "                <li class=\"col-md-3 col-sm-6 col-xs-12 product\">
                    ";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/product/views-view-unformatted--product_pages--page_full_width.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  55 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row\">
    <div class=\"masonry-loader masonry-loader-showing\">
        <ul class=\"products product-thumb-info-list\" data-plugin-masonry>
            {% for row in rows %}
                <li class=\"col-md-3 col-sm-6 col-xs-12 product\">
                    {{ row.content }}
                </li>
            {% endfor %}
        </ul>
    </div>
</div>";
    }
}
