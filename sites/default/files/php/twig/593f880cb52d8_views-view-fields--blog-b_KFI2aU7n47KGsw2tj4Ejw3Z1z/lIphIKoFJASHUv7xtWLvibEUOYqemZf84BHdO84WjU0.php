<?php

/* themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--our-blog.html.twig */
class __TwigTemplate_d45c77475ec8bc1511a082f3bebedaf8e52de1249dd88b17f9de45c8404fd1e0 extends Twig_Template
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
        $tags = array("if" => 7);
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
        echo "<div class=\"col-md-3 img-max-mb\">
    ";
        // line 3
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_thumbnail", array()), "content", array()), "html", null, true));
        echo "
    <div class=\"recent-posts mt-md mb-lg\">
        <article class=\"post\">
            <h5><a class=\"text-dark\" href=\"";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</a></h5>
            ";
        // line 7
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array())) {
            // line 8
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "
            ";
        }
        // line 10
        echo "            <div class=\"post-meta\">
                ";
        // line 11
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array())) {
            // line 12
            echo "                <span><i class=\"fa fa-calendar\"></i> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array()), "content", array()), "html", null, true));
            echo " </span>
                ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "uid", array())) {
            // line 15
            echo "                <span><i class=\"fa fa-user\"></i> By ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "uid", array()), "content", array()), "html", null, true));
            echo " </span>
                ";
        }
        // line 17
        echo "                ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_blog_category", array())) {
            // line 18
            echo "                <span><i class=\"fa fa-tag\"></i>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_blog_category", array()), "content", array()), "html", null, true));
            echo "</span>
                ";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "comment_count", array())) {
            // line 21
            echo "                <span><i class=\"fa fa-comments\"></i> <a href=\"#\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "comment_count", array()), "content", array()), "html", null, true));
            echo " Comments</a></span>
                ";
        }
        // line 23
        echo "            </div>
        </article>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/blog/block_blog/views-view-fields--blog-block--our-blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  99 => 21,  96 => 20,  90 => 18,  87 => 17,  81 => 15,  78 => 14,  72 => 12,  70 => 11,  67 => 10,  61 => 8,  59 => 7,  53 => 6,  46 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"col-md-3 img-max-mb\">
    {#<img class=\"img-responsive\" src=\"img/blog/blog-vintage-1.jpg\" alt=\"Blog\">#}
    {{ fields.field_thumbnail.content }}
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
