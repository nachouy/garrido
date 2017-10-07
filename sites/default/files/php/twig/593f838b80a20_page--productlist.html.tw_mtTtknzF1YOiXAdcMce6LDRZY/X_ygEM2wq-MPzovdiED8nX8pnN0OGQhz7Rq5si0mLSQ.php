<?php

/* themes/porto/templates/page--productlist.html.twig */
class __TwigTemplate_3b3ef7e3efb012932bb5efc3d13bf7c9626e347f08f369576a42ba26d3a77462 extends Twig_Template
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/h_shop.html.twig"), "themes/porto/templates/page--productlist.html.twig", 2)->display($context);
        // line 3
        echo "    <div role=\"main\" class=\"main shop\">

        ";
        // line 5
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 6
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 8
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
                </div>
            </section>
        ";
        }
        // line 12
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
        // line 22
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array())))) {
            // line 23
            echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">

                        <aside class=\"sidebar\">
                            ";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()), "html", null, true));
            echo "
                        </aside>

                    </div>
                    <div class=\"col-md-9\">
                        ";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
                    </div>
                </div>
            </div>

        ";
        } elseif (($this->getAttribute(        // line 39
(isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array())))) {
            // line 40
            echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-9\">
                        ";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
                    </div>
                    <div class=\"col-md-3\">
                        <aside class=\"sidebar\">
                            ";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                </div>
            </div>

        ";
        } elseif (($this->getAttribute(        // line 54
(isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()))) {
            // line 55
            echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <aside class=\"sidebar\">
                            ";
            // line 60
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                    <div class=\"col-md-6\">
                        ";
            // line 64
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
                    </div>
                    <div class=\"col-md-3\">
                        <aside class=\"sidebar\">
                            ";
            // line 68
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                </div>
            </div>

        ";
        } else {
            // line 75
            echo "
            <div class=\"container\">
                ";
            // line 77
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
                // line 78
                echo "                    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
                echo "
                ";
            }
            // line 80
            echo "
                ";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
            </div>

        ";
        }
        // line 85
        echo "
        ";
        // line 86
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
            // line 87
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
            echo "
        ";
        }
        // line 89
        echo "    </div>
    ";
        // line 90
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/footer.html.twig"), "themes/porto/templates/page--productlist.html.twig", 90)->display($context);
        // line 91
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/page--productlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 91,  196 => 90,  193 => 89,  187 => 87,  185 => 86,  182 => 85,  175 => 81,  172 => 80,  166 => 78,  164 => 77,  160 => 75,  150 => 68,  143 => 64,  136 => 60,  129 => 55,  127 => 54,  118 => 48,  111 => 44,  105 => 40,  103 => 39,  95 => 34,  87 => 29,  79 => 23,  77 => 22,  65 => 12,  58 => 8,  54 => 6,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
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

            <div class=\"container\">
                {% if page.before_content %}
                    {{ page.before_content }}
                {% endif %}

                {{ page.content }}
            </div>

        {% endif %}

        {% if page.after_content %}
            {{ page.after_content }}
        {% endif %}
    </div>
    {% include directory ~ '/templates/includes/footer.html.twig' %}
</div>

";
    }
}
