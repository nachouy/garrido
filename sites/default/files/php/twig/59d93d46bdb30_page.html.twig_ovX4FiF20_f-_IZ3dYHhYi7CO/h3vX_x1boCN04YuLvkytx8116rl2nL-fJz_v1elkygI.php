<?php

/* themes/porto/templates/page.html.twig */
class __TwigTemplate_5ff88b0129fdf71f417effa70b1ee3c08e9a812770f34f309b875aba70e0b47e extends Twig_Template
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
        $tags = array("include" => 2, "if" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
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
        echo "<div id=\"wrapper\">
    ";
        // line 2
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header.html.twig"), "themes/porto/templates/page.html.twig", 2)->display($context);
        // line 3
        echo "    <div role=\"main\" class=\"main\">

        ";
        // line 5
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slide_show", array())) {
            // line 6
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slide_show", array()), "html", null, true));
            echo "
        ";
        }
        // line 8
        echo "
        ";
        // line 9
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/custom-breadcrumb.html.twig"), "themes/porto/templates/page.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 12
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
                </div>
            </section>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        if (((isset($context["arg"]) ? $context["arg"] : null) == "page-coming-soon")) {
            // line 20
            echo "            <div class=\"page-coming-soon\">
                ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
                ";
            // line 22
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
                // line 23
                echo "                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                ";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 31
            echo "            </div>
        ";
        } else {
            // line 33
            echo "            ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array())))) {
                // line 34
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 38
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                        <div class=\"col-md-9\">
                            ";
                // line 42
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
                echo "
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 46
(isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array())))) {
                // line 47
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            ";
                // line 50
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
                echo "
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 54
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 59
(isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()))) {
                // line 60
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 64
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                        <div class=\"col-md-6\">
                            ";
                // line 68
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
                echo "
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 72
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } else {
                // line 78
                echo "                ";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
                    // line 79
                    echo "                    ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
                    echo "
                ";
                }
                // line 81
                echo "                <div class=\"container\">
                    ";
                // line 82
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
                echo "
                </div>
            ";
            }
            // line 85
            echo "            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
                // line 86
                echo "                ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
                echo "
            ";
            }
            // line 88
            echo "        ";
        }
        // line 89
        echo "    </div>
    ";
        // line 90
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/footer.html.twig"), "themes/porto/templates/page.html.twig", 90)->display($context);
        // line 91
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 91,  221 => 90,  218 => 89,  215 => 88,  209 => 86,  206 => 85,  200 => 82,  197 => 81,  191 => 79,  188 => 78,  179 => 72,  172 => 68,  165 => 64,  159 => 60,  157 => 59,  149 => 54,  142 => 50,  137 => 47,  135 => 46,  128 => 42,  121 => 38,  115 => 34,  112 => 33,  108 => 31,  100 => 26,  95 => 23,  93 => 22,  89 => 21,  86 => 20,  84 => 19,  81 => 18,  74 => 14,  70 => 12,  68 => 11,  65 => 10,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"wrapper\">
    {% include directory ~ '/templates/includes/header.html.twig' %}
    <div role=\"main\" class=\"main\">

        {% if page.slide_show %}
                {{ page.slide_show }}
        {% endif %}

        {% include directory ~ '/templates/includes/custom-breadcrumb.html.twig' %}

        {% if messages %}
            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    {{ messages }}
                </div>
            </section>
        {% endif %}

        {% if arg == 'page-coming-soon' %}
            <div class=\"page-coming-soon\">
                {{ page.content }}
                {% if page.after_content %}
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                {{ page.after_content }}
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        {% else %}
            {% if page.left_sidebar and page.right_sidebar is empty %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.left_sidebar }}
                            </aside>
                        </div>
                        <div class=\"col-md-9\">
                            {{ page.content }}
                        </div>
                    </div>
                </div>
            {% elseif page.right_sidebar and page.left_sidebar is empty %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            {{ page.content }}
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.right_sidebar }}
                            </aside>
                        </div>
                    </div>
                </div>
            {% elseif page.right_sidebar and page.left_sidebar %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.left_sidebar }}
                            </aside>
                        </div>
                        <div class=\"col-md-6\">
                            {{ page.content }}
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.right_sidebar }}
                            </aside>
                        </div>
                    </div>
                </div>
            {% else %}
                {% if page.before_content %}
                    {{ page.before_content }}
                {% endif %}
                <div class=\"container\">
                    {{ page.content }}
                </div>
            {% endif %}
            {% if page.after_content %}
                {{ page.after_content }}
            {% endif %}
        {% endif %}
    </div>
    {% include directory ~ '/templates/includes/footer.html.twig' %}
</div>

";
    }
}
