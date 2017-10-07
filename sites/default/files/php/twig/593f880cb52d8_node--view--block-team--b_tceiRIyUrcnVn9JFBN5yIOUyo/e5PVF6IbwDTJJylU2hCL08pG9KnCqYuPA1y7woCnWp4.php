<?php

/* themes/porto/templates/node/team/node--view--block-team--block-team.html.twig */
class __TwigTemplate_e37047be35cd2a33b6bf8405bc65b4de0f6974cc2667e8b767ce5d2218d463c1 extends Twig_Template
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
        $tags = array("set" => 1, "for" => 6, "if" => 16);
        $filters = array("striptags" => 11, "render" => 11);
        $functions = array("file_url" => 7);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('striptags', 'render'),
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
        $context["thumbnails"] = $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_thumbnail", array());
        // line 2
        echo "<div class=\"col-md-3 col-sm-6 col-xs-12\">
    <span class=\"thumb-info thumb-info-hide-wrapper-bg\">
        <span class=\"thumb-info-wrapper\">
            <a href=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["thumbnails"]) ? $context["thumbnails"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
            // line 7
            echo "                    <img src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($context["thumbnail"], "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\" alt=\"\" class=\"img-responsive\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                <span class=\"thumb-info-title\">
                    <span class=\"thumb-info-inner\">";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</span>
                    <span class=\"thumb-info-type\">";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_team_job", array()))), "html", null, true));
        echo "</span>
                </span>
            </a>
        </span>
        <span class=\"thumb-info-caption\">
            ";
        // line 16
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()))) {
            // line 17
            echo "            <span class=\"thumb-info-caption-text\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()))), "html", null, true));
            echo "</span>
            ";
        }
        // line 19
        echo "            <span class=\"thumb-info-social-icons\">
                ";
        // line 20
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_facebook_link", array()))) {
            // line 21
            echo "                <a target=\"_blank\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_facebook_link", array()))), "html", null, true));
            echo "\"><i class=\"fa fa-facebook\"></i><span>Facebook</span></a>
                ";
        }
        // line 23
        echo "                ";
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_twitter_link", array()))) {
            // line 24
            echo "                <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_twitter_link", array()))), "html", null, true));
            echo "\"><i class=\"fa fa-twitter\"></i><span>Twitter</span></a>
                ";
        }
        // line 26
        echo "                ";
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_linkedin_link", array()))) {
            // line 27
            echo "                <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_linkedin_link", array()))), "html", null, true));
            echo "\"><i class=\"fa fa-linkedin\"></i><span>Linkedin</span></a>
                ";
        }
        // line 29
        echo "            </span>
        </span>
    </span>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/node/team/node--view--block-team--block-team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 29,  113 => 27,  110 => 26,  104 => 24,  101 => 23,  95 => 21,  93 => 20,  90 => 19,  84 => 17,  82 => 16,  74 => 11,  70 => 10,  67 => 9,  58 => 7,  54 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set thumbnails = node.field_thumbnail %}
<div class=\"col-md-3 col-sm-6 col-xs-12\">
    <span class=\"thumb-info thumb-info-hide-wrapper-bg\">
        <span class=\"thumb-info-wrapper\">
            <a href=\"{{ url }}\">
                {% for thumbnail  in thumbnails %}
                    <img src=\"{{ file_url(thumbnail.entity.fileuri) }}\" alt=\"\" class=\"img-responsive\">
                {% endfor %}
                <span class=\"thumb-info-title\">
                    <span class=\"thumb-info-inner\">{{ label }}</span>
                    <span class=\"thumb-info-type\">{{ content.field_team_job | render | striptags }}</span>
                </span>
            </a>
        </span>
        <span class=\"thumb-info-caption\">
            {% if content.body | render %}
            <span class=\"thumb-info-caption-text\">{{ content.body | render | striptags}}</span>
            {% endif %}
            <span class=\"thumb-info-social-icons\">
                {% if content.field_facebook_link | render %}
                <a target=\"_blank\" href=\"{{ content.field_facebook_link | render | striptags}}\"><i class=\"fa fa-facebook\"></i><span>Facebook</span></a>
                {% endif %}
                {% if content.field_twitter_link | render %}
                <a href=\"{{ content.field_twitter_link | render | striptags}}\"><i class=\"fa fa-twitter\"></i><span>Twitter</span></a>
                {% endif %}
                {% if content.field_linkedin_link | render %}
                <a href=\"{{ content.field_linkedin_link | render | striptags}}\"><i class=\"fa fa-linkedin\"></i><span>Linkedin</span></a>
                {% endif %}
            </span>
        </span>
    </span>
</div>
";
    }
}
