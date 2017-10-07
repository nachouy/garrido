<?php

/* themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--blog-latest-no-hd.html.twig */
class __TwigTemplate_671496197b9fd62b155144ed9c3653b3eed7b98cf349f27c1a5268b2604acb13 extends Twig_Template
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
        $tags = array("set" => 1, "if" => 3);
        $filters = array();
        $functions = array("file_url" => 4);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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
        $context["thumbnail"] = $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_thumbnail", array());
        // line 2
        echo "<div class=\"col-md-4\">
    ";
        // line 3
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_thumbnail", array())) {
            // line 4
            echo "    <img class=\"img-responsive\" src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\" alt=\"Blog\">
    ";
        }
        // line 6
        echo "    <div class=\"recent-posts mt-md mb-lg\">
        <article class=\"post\">
            <h5><a class=\"text-dark\" href=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</a></h5>
            ";
        // line 9
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array())) {
            // line 10
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "
            ";
        }
        // line 12
        echo "            <div class=\"post-meta\">
                ";
        // line 13
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array())) {
            // line 14
            echo "                    <span><i class=\"fa fa-calendar\"></i> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array()), "content", array()), "html", null, true));
            echo " </span>
                ";
        }
        // line 16
        echo "                ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "uid", array())) {
            // line 17
            echo "                    <span><i class=\"fa fa-user\"></i> By ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "uid", array()), "content", array()), "html", null, true));
            echo " </span>
                ";
        }
        // line 19
        echo "                ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_blog_category", array())) {
            // line 20
            echo "                    <span><i class=\"fa fa-tag\"></i>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_blog_category", array()), "content", array()), "html", null, true));
            echo "</span>
                ";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "comment_count", array())) {
            // line 23
            echo "                    <span><i class=\"fa fa-comments\"></i> <a href=\"#\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "comment_count", array()), "content", array()), "html", null, true));
            echo " Comments</a></span>
                ";
        }
        // line 25
        echo "            </div>
        </article>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--blog-latest-no-hd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 25,  106 => 23,  103 => 22,  97 => 20,  94 => 19,  88 => 17,  85 => 16,  79 => 14,  77 => 13,  74 => 12,  68 => 10,  66 => 9,  60 => 8,  56 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set thumbnail = row._entity.field_thumbnail %}
<div class=\"col-md-4\">
    {% if fields.field_thumbnail %}
    <img class=\"img-responsive\" src=\"{{ file_url(thumbnail.entity.fileuri) }}\" alt=\"Blog\">
    {% endif %}
    <div class=\"recent-posts mt-md mb-lg\">
        <article class=\"post\">
            <h5><a class=\"text-dark\" href=\"{{ fields.path.content }}\">{{ fields.title.content }}</a></h5>
            {% if fields.body %}
                {{ fields.body.content }}
            {% endif %}
            <div class=\"post-meta\">
                {% if fields.created %}
                    <span><i class=\"fa fa-calendar\"></i> {{ fields.created.content }} </span>
                {% endif %}
                {% if fields.uid %}
                    <span><i class=\"fa fa-user\"></i> By {{ fields.uid.content }} </span>
                {% endif %}
                {% if fields.field_blog_category %}
                    <span><i class=\"fa fa-tag\"></i>{{ fields.field_blog_category.content }}</span>
                {% endif %}
                {% if fields.comment_count %}
                    <span><i class=\"fa fa-comments\"></i> <a href=\"#\">{{ fields.comment_count.content }} Comments</a></span>
                {% endif %}
            </div>
        </article>
    </div>
</div>";
    }
}
