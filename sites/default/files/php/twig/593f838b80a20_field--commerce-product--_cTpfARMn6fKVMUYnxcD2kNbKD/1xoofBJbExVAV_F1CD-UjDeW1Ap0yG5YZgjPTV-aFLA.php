<?php

/* themes/porto/templates/node/product/field--commerce-product--field-category--default.html.twig */
class __TwigTemplate_6ac308c6588e17c85e5b15e177dd2ed0265830c3ddf3bc6245f8fbf7959e3e6c extends Twig_Template
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
        $tags = array("set" => 2, "if" => 16, "for" => 20);
        $filters = array("clean_class" => 4, "length" => 22);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'length'),
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

        // line 2
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 4
(isset($context["field_name"]) ? $context["field_name"] : null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 5
(isset($context["field_type"]) ? $context["field_type"] : null))), 3 => ("field--label-" .         // line 6
(isset($context["label_display"]) ? $context["label_display"] : null)));
        // line 10
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 12
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 15
        echo "
";
        // line 16
        if ((isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 17
            echo "    ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 18
                echo "        ";
                // line 19
                echo "        ";
                $context["countItem"] = 1;
                // line 20
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 21
                    echo "            ";
                    // line 22
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    if (((isset($context["countItem"]) ? $context["countItem"] : null) < twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)))) {
                        echo ", ";
                    } else {
                        echo ".";
                    }
                    // line 23
                    echo "            ";
                    $context["countItem"] = ((isset($context["countItem"]) ? $context["countItem"] : null) + 1);
                    // line 24
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        ";
                // line 26
                echo "    ";
            } else {
                // line 27
                echo "        ";
                $context["countItem"] = 1;
                // line 28
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "            ";
                    // line 30
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    if (((isset($context["countItem"]) ? $context["countItem"] : null) < twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)))) {
                        echo ", ";
                    } else {
                        echo ".";
                    }
                    // line 31
                    echo "            ";
                    $context["countItem"] = ((isset($context["countItem"]) ? $context["countItem"] : null) + 1);
                    // line 32
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "    ";
            }
        } else {
            // line 35
            echo "    ";
            // line 36
            echo "    ";
            // line 37
            echo "    ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 38
                echo "        <!--div class=\"field__items\"-->
    ";
            }
            // line 40
            echo "    ";
            $context["countItem"] = 1;
            // line 41
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 42
                echo "        ";
                // line 43
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                if (((isset($context["countItem"]) ? $context["countItem"] : null) < twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)))) {
                    echo ", ";
                } else {
                    echo ".";
                }
                // line 44
                echo "        ";
                $context["countItem"] = ((isset($context["countItem"]) ? $context["countItem"] : null) + 1);
                // line 45
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 47
                echo "        <!--/div-->
    ";
            }
            // line 49
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/node/product/field--commerce-product--field-category--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 49,  165 => 47,  162 => 46,  156 => 45,  153 => 44,  145 => 43,  143 => 42,  138 => 41,  135 => 40,  131 => 38,  128 => 37,  126 => 36,  124 => 35,  120 => 33,  114 => 32,  111 => 31,  103 => 30,  101 => 29,  96 => 28,  93 => 27,  90 => 26,  88 => 25,  82 => 24,  79 => 23,  71 => 22,  69 => 21,  64 => 20,  61 => 19,  59 => 18,  56 => 17,  54 => 16,  51 => 15,  49 => 12,  48 => 10,  46 => 6,  45 => 5,  44 => 4,  43 => 2,);
    }

    public function getSource()
    {
        return "{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
  ]
%}
{%
  set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}

{% if label_hidden %}
    {% if multiple %}
        {#<div{{ attributes.addClass(classes, 'field__items') }}>#}
        {% set countItem = 1 %}
        {% for item in items %}
            {#<div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>#}
            {{ item.content }}{% if countItem < items | length %}, {% else %}.{% endif %}
            {% set countItem = countItem + 1 %}
        {% endfor %}
        {#</div>#}
    {% else %}
        {% set countItem = 1 %}
        {% for item in items %}
            {#<div{{ attributes.addClass(classes, 'field__item') }}>{{ item.content }}</div>#}
            {{ item.content }}{% if countItem < items | length %}, {% else %}.{% endif %}
            {% set countItem = countItem + 1 %}
        {% endfor %}
    {% endif %}
{% else %}
    {#<div{{ attributes.addClass(classes) }}>#}
    {#<div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>#}
    {% if multiple %}
        <!--div class=\"field__items\"-->
    {% endif %}
    {% set countItem = 1 %}
    {% for item in items %}
        {#<div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>#}
        {{ item.content }}{% if countItem < items | length %}, {% else %}.{% endif %}
        {% set countItem = countItem + 1 %}
    {% endfor %}
    {% if multiple %}
        <!--/div-->
    {% endif %}
    {#</div>#}
{% endif %}";
    }
}
