<?php

/* themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--blog-latest-style2.html.twig */
class __TwigTemplate_be0f8542137c72c838c0aac7d3ee5467655335b07eb26f560eb770723dfc0e67 extends Twig_Template
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
        $tags = array("if" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "<div>
    <div class=\"recent-posts\">
        <article class=\"post\">
            <div class=\"date\">
                ";
        // line 5
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array())) {
            // line 6
            echo "                    <span class=\"day\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array()), "content", array()), "html", null, true));
            echo "</span>
                ";
        }
        // line 8
        echo "                ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created_1", array())) {
            // line 9
            echo "                    <span class=\"month\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created_1", array()), "content", array()), "html", null, true));
            echo "</span>
                ";
        }
        // line 11
        echo "            </div>
            ";
        // line 12
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array())) {
            // line 13
            echo "                <h4 class=\"heading-primary\"><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
            echo "</a></h4>
            ";
        }
        // line 15
        echo "            ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array())) {
            // line 16
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
            echo "\" class=\"read-more\">read more <i class=\"fa fa-angle-right\"></i></a>
            ";
        }
        // line 18
        echo "        </article>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--blog-latest-style2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  82 => 16,  79 => 15,  71 => 13,  69 => 12,  66 => 11,  60 => 9,  57 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <div class=\"recent-posts\">
        <article class=\"post\">
            <div class=\"date\">
                {% if fields.created %}
                    <span class=\"day\">{{ fields.created.content }}</span>
                {% endif %}
                {% if fields.created_1 %}
                    <span class=\"month\">{{ fields.created_1.content }}</span>
                {% endif %}
            </div>
            {% if fields.title %}
                <h4 class=\"heading-primary\"><a href=\"{{ fields.path.content }}\">{{ fields.title.content }}</a></h4>
            {% endif %}
            {% if fields.body %}
                {{ fields.body.content }}<a href=\"{{ fields.path.content }}\" class=\"read-more\">read more <i class=\"fa fa-angle-right\"></i></a>
            {% endif %}
        </article>
    </div>
</div>
";
    }
}
