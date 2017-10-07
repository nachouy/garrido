<?php

/* themes/porto/templates/page--product.html.twig */
class __TwigTemplate_df0725e998bf931b28b6460ea593547a0514e6351873e1aadcc78469e9611690 extends Twig_Template
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
        $tags = array("include" => 2, "if" => 4);
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/h_shop.html.twig"), "themes/porto/templates/page--product.html.twig", 2)->display($context);
        // line 3
        echo "    <div role=\"main\" class=\"main shop\">
        ";
        // line 4
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 5
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
                </div>
            </section>
        ";
        }
        // line 11
        echo "
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <hr class=\"tall\">
                </div>
            </div>
        </div>

        <!--content-->
        ";
        // line 21
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array())))) {
            // line 22
            echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">

                        <aside class=\"sidebar\">
                            ";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()), "html", null, true));
            echo "
                        </aside>

                    </div>
                    <div class=\"col-md-9\">
                        ";
            // line 33
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
                // line 34
                echo "                            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
                echo "
                        ";
            }
            // line 36
            echo "
                        ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "

                        ";
            // line 39
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
                // line 40
                echo "                            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
                echo "
                        ";
            }
            // line 42
            echo "                    </div>
                </div>
            </div>

        ";
        } elseif (($this->getAttribute(        // line 46
(isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array())))) {
            // line 47
            echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-9\">
                        ";
            // line 51
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
                // line 52
                echo "                            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
                echo "
                        ";
            }
            // line 54
            echo "
                        ";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "

                        ";
            // line 57
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
                // line 58
                echo "                            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
                echo "
                        ";
            }
            // line 60
            echo "                    </div>
                    <div class=\"col-md-3\">
                        <aside class=\"sidebar\">
                            ";
            // line 63
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                </div>
            </div>

        ";
        } elseif (($this->getAttribute(        // line 69
(isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()))) {
            // line 70
            echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <aside class=\"sidebar\">
                            ";
            // line 75
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                    <div class=\"col-md-6\">
                        ";
            // line 79
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
                // line 80
                echo "                            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
                echo "
                        ";
            }
            // line 82
            echo "
                        ";
            // line 83
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "

                        ";
            // line 85
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
                // line 86
                echo "                            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
                echo "
                        ";
            }
            // line 88
            echo "                    </div>
                    <div class=\"col-md-3\">
                        <aside class=\"sidebar\">
                            ";
            // line 91
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                </div>
            </div>

        ";
        } else {
            // line 98
            echo "
            <div class=\"container\">
                ";
            // line 100
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
                // line 101
                echo "                    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
                echo "
                ";
            }
            // line 103
            echo "
                ";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "

                ";
            // line 106
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
                // line 107
                echo "                    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
                echo "
                ";
            }
            // line 109
            echo "            </div>

        ";
        }
        // line 112
        echo "
    </div>
    ";
        // line 114
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/footer.html.twig"), "themes/porto/templates/page--product.html.twig", 114)->display($context);
        // line 115
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/page--product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 115,  262 => 114,  258 => 112,  253 => 109,  247 => 107,  245 => 106,  240 => 104,  237 => 103,  231 => 101,  229 => 100,  225 => 98,  215 => 91,  210 => 88,  204 => 86,  202 => 85,  197 => 83,  194 => 82,  188 => 80,  186 => 79,  179 => 75,  172 => 70,  170 => 69,  161 => 63,  156 => 60,  150 => 58,  148 => 57,  143 => 55,  140 => 54,  134 => 52,  132 => 51,  126 => 47,  124 => 46,  118 => 42,  112 => 40,  110 => 39,  105 => 37,  102 => 36,  96 => 34,  94 => 33,  86 => 28,  78 => 22,  76 => 21,  64 => 11,  57 => 7,  53 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"wrapper\">
    {% include directory ~ '/templates/includes/h_shop.html.twig' %}
    <div role=\"main\" class=\"main shop\">
        {% if messages %}
            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    {{ messages }}
                </div>
            </section>
        {% endif %}

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <hr class=\"tall\">
                </div>
            </div>
        </div>

        <!--content-->
        {% if page.left_sidebar and page.right_sidebar is empty %}

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">

                        <aside class=\"sidebar\">
                            {{ page.left_sidebar }}
                        </aside>

                    </div>
                    <div class=\"col-md-9\">
                        {% if page.before_content %}
                            {{ page.before_content }}
                        {% endif %}

                        {{ page.content }}

                        {% if page.after_content %}
                            {{ page.after_content }}
                        {% endif %}
                    </div>
                </div>
            </div>

        {% elseif page.right_sidebar and page.left_sidebar is empty %}

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-9\">
                        {% if page.before_content %}
                            {{ page.before_content }}
                        {% endif %}

                        {{ page.content }}

                        {% if page.after_content %}
                            {{ page.after_content }}
                        {% endif %}
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
                        {% if page.before_content %}
                            {{ page.before_content }}
                        {% endif %}

                        {{ page.content }}

                        {% if page.after_content %}
                            {{ page.after_content }}
                        {% endif %}
                    </div>
                    <div class=\"col-md-3\">
                        <aside class=\"sidebar\">
                            {{ page.right_sidebar }}
                        </aside>
                    </div>
                </div>
            </div>

        {% else %}

            <div class=\"container\">
                {% if page.before_content %}
                    {{ page.before_content }}
                {% endif %}

                {{ page.content }}

                {% if page.after_content %}
                    {{ page.after_content }}
                {% endif %}
            </div>

        {% endif %}

    </div>
    {% include directory ~ '/templates/includes/footer.html.twig' %}
</div>

";
    }
}
