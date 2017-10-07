<?php

/* themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--blog-latest-style5.html.twig */
class __TwigTemplate_0c9277b4bd9408105a83db433cd790161c7e8d2a32b51a28e54b4381d269aefb extends Twig_Template
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
        echo "<div class=\"col-md-4\">
    <div class=\"recent-posts mt-xl\">
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
        echo "            <div>
                ";
        // line 16
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array())) {
            // line 17
            echo "                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "
                ";
        }
        // line 19
        echo "            </div>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
        echo "\" class=\"btn btn-borders btn-dark mt-md mb-xl\">Read More</a>
        </article>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--blog-latest-style5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  90 => 19,  84 => 17,  82 => 16,  79 => 15,  71 => 13,  69 => 12,  66 => 11,  60 => 9,  57 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"col-md-4\">
    <div class=\"recent-posts mt-xl\">
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
            <div>
                {% if fields.body %}
                    {{ fields.body.content }}
                {% endif %}
            </div>
            <a href=\"{{ fields.path.content }}\" class=\"btn btn-borders btn-dark mt-md mb-xl\">Read More</a>
        </article>
    </div>
</div>
";
    }
}
