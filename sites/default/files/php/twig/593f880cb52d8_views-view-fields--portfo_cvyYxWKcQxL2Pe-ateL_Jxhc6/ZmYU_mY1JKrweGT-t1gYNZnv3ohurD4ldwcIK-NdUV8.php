<?php

/* themes/porto/templates/view/portfolio/blockfields/views-view-fields--portfolio-block--latest-projects.html.twig */
class __TwigTemplate_17af604b395c2ef0f25de373d1ca62f41c7eae143d1dcf50046244dd0be6659a extends Twig_Template
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
        $tags = array("set" => 1, "if" => 9, "for" => 81, "trans" => 88);
        $filters = array();
        $functions = array("file_url" => 7);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for', 'trans'),
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
        echo "
<div class=\"portfolio-item\">
    <a href=\"#popupProject";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "nid", array()), "html", null, true));
        echo "\" data-portfolio-on-modal>
        <span class=\"thumb-info thumb-info-lighten\">
            <span class=\"thumb-info-wrapper\">
                <img src=\"";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" class=\"img-responsive\" alt=\"\">
                <span class=\"thumb-info-title\">
                    ";
        // line 9
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array())) {
            // line 10
            echo "                        <span class=\"thumb-info-inner\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
            echo "</span>
                    ";
        }
        // line 12
        echo "                    ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_portfolio_category", array())) {
            // line 13
            echo "                        <span class=\"thumb-info-type\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_portfolio_category", array()), "content", array()), "html", null, true));
            echo "</span>
                    ";
        }
        // line 15
        echo "                </span>
                <span class=\"thumb-info-action\">
                    <span class=\"thumb-info-action-icon\"><i class=\"fa fa-plus-square\"></i></span>
                </span>
            </span>
        </span>
    </a>
    <div id=\"popupProject";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "nid", array()), "html", null, true));
        echo "\" class=\"popup-inline-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"portfolio-title\">
                    <div class=\"row\">
                        <div class=\"portfolio-nav-all col-md-1\">
                            <a href=\"#\" data-portfolio-close><i class=\"fa fa-th\"></i></a>
                        </div>
                        ";
        // line 30
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array())) {
            // line 31
            echo "                            <div class=\"col-md-10 center\">
                                <h2 class=\"mb-none\">";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
            echo "</h2>
                            </div>
                        ";
        }
        // line 35
        echo "                        <div class=\"portfolio-nav col-md-1\">
                            <a href=\"#\" data-portfolio-prev class=\"portfolio-nav-prev\"><i class=\"fa fa-chevron-left\"></i></a>
                            <a href=\"#\" data-portfolio-next class=\"portfolio-nav-next\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
                <hr class=\"tall\">
            </div>
        </div>
        <div class=\"row mb-xl\">
            <div class=\"col-md-4\">
            <span class=\"img-thumbnail\">
                <img alt=\"\" class=\"img-responsive\" src=\"";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\">
            </span>
            </div>
            <div class=\"col-md-8\">
                <div class=\"portfolio-info\">
                    <div class=\"row\">
                        <div class=\"col-md-12 center\">
                            <ul>
                                ";
        // line 55
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array())) {
            // line 56
            echo "                                    <li>
                                        <i class=\"fa fa-calendar\"></i> ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array()), "content", array()), "html", null, true));
            echo "
                                    </li>
                                ";
        }
        // line 60
        echo "                                ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_portfolio_category", array())) {
            // line 61
            echo "                                    <li>
                                        <i class=\"fa fa-tags\"></i> ";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_portfolio_category", array()), "content", array()), "html", null, true));
            echo "
                                    </li>
                                ";
        }
        // line 65
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <h5 class=\"mt-sm\">Project Description</h5>
                ";
        // line 70
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array())) {
            // line 71
            echo "                    <p class=\"mt-xlg\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "</p>
                ";
        }
        // line 73
        echo "                ";
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array())) {
            // line 74
            echo "                    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
            echo "\" class=\"btn btn-primary btn-icon\"><i class=\"fa fa-external-link\"></i>Live Preview</a>
                ";
        }
        // line 76
        echo "                ";
        $context["skills"] = $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_portfolio_skills", array());
        // line 77
        echo "                <ul class=\"portfolio-details\">
                    <li>
                        <h5 class=\"mt-sm mb-xs\">Skills</h5>
                        <ul class=\"list list-inline list-icons\">
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 82
            echo "                                <li><i class=\"fa fa-check-circle\"></i> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["skill"], "value", array()), "html", null, true));
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                        </ul>
                    </li>
                    <li>

                        <h5 class=\"mt-sm mb-xs\">";
        // line 88
        echo t("Client", array());
        echo "</h5>

                        ";
        // line 90
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_portfolio_client", array())) {
            // line 91
            echo "                            <p>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_portfolio_client", array()), "content", array()), "html", null, true));
            echo "</p>
                        ";
        }
        // line 93
        echo "                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/portfolio/blockfields/views-view-fields--portfolio-block--latest-projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 93,  215 => 91,  213 => 90,  208 => 88,  202 => 84,  193 => 82,  189 => 81,  183 => 77,  180 => 76,  174 => 74,  171 => 73,  165 => 71,  163 => 70,  156 => 65,  150 => 62,  147 => 61,  144 => 60,  138 => 57,  135 => 56,  133 => 55,  122 => 47,  108 => 35,  102 => 32,  99 => 31,  97 => 30,  86 => 22,  77 => 15,  71 => 13,  68 => 12,  62 => 10,  60 => 9,  55 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set thumbnail = row._entity.field_thumbnail %}

<div class=\"portfolio-item\">
    <a href=\"#popupProject{{ row.nid }}\" data-portfolio-on-modal>
        <span class=\"thumb-info thumb-info-lighten\">
            <span class=\"thumb-info-wrapper\">
                <img src=\"{{ file_url(thumbnail.entity.fileuri) }}\" class=\"img-responsive\" alt=\"\">
                <span class=\"thumb-info-title\">
                    {% if fields.title %}
                        <span class=\"thumb-info-inner\">{{ fields.title.content }}</span>
                    {% endif %}
                    {% if fields.field_portfolio_category %}
                        <span class=\"thumb-info-type\">{{ fields.field_portfolio_category.content }}</span>
                    {% endif %}
                </span>
                <span class=\"thumb-info-action\">
                    <span class=\"thumb-info-action-icon\"><i class=\"fa fa-plus-square\"></i></span>
                </span>
            </span>
        </span>
    </a>
    <div id=\"popupProject{{ row.nid }}\" class=\"popup-inline-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"portfolio-title\">
                    <div class=\"row\">
                        <div class=\"portfolio-nav-all col-md-1\">
                            <a href=\"#\" data-portfolio-close><i class=\"fa fa-th\"></i></a>
                        </div>
                        {% if fields.title %}
                            <div class=\"col-md-10 center\">
                                <h2 class=\"mb-none\">{{ fields.title.content }}</h2>
                            </div>
                        {% endif %}
                        <div class=\"portfolio-nav col-md-1\">
                            <a href=\"#\" data-portfolio-prev class=\"portfolio-nav-prev\"><i class=\"fa fa-chevron-left\"></i></a>
                            <a href=\"#\" data-portfolio-next class=\"portfolio-nav-next\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
                <hr class=\"tall\">
            </div>
        </div>
        <div class=\"row mb-xl\">
            <div class=\"col-md-4\">
            <span class=\"img-thumbnail\">
                <img alt=\"\" class=\"img-responsive\" src=\"{{ file_url(thumbnail.entity.fileuri) }}\">
            </span>
            </div>
            <div class=\"col-md-8\">
                <div class=\"portfolio-info\">
                    <div class=\"row\">
                        <div class=\"col-md-12 center\">
                            <ul>
                                {% if fields.created %}
                                    <li>
                                        <i class=\"fa fa-calendar\"></i> {{ fields.created.content }}
                                    </li>
                                {% endif %}
                                {% if fields.field_portfolio_category %}
                                    <li>
                                        <i class=\"fa fa-tags\"></i> {{ fields.field_portfolio_category.content }}
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                </div>
                <h5 class=\"mt-sm\">Project Description</h5>
                {% if fields.body %}
                    <p class=\"mt-xlg\">{{ fields.body.content }}</p>
                {% endif %}
                {% if fields.path %}
                    <a href=\"{{ fields.path.content  }}\" class=\"btn btn-primary btn-icon\"><i class=\"fa fa-external-link\"></i>Live Preview</a>
                {% endif %}
                {% set skills = row._entity.field_portfolio_skills %}
                <ul class=\"portfolio-details\">
                    <li>
                        <h5 class=\"mt-sm mb-xs\">Skills</h5>
                        <ul class=\"list list-inline list-icons\">
                            {% for skill in skills  %}
                                <li><i class=\"fa fa-check-circle\"></i> {{ skill.value }}</li>
                            {% endfor %}
                        </ul>
                    </li>
                    <li>

                        <h5 class=\"mt-sm mb-xs\">{% trans %}Client{% endtrans %}</h5>

                        {% if fields.field_portfolio_client %}
                            <p>{{ fields.field_portfolio_client.content }}</p>
                        {% endif %}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>";
    }
}
