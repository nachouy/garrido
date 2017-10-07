<?php

/* themes/porto/templates/menu/menu--main.html.twig */
class __TwigTemplate_0a244b8ce83b384f06df3e7f8743a8683b837d1807d9236ca98a19f089d18042 extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 38, "set" => 40);
        $filters = array();
        $functions = array("link" => 48);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 32
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 33
                    echo "<ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "nav nav-pills"), "method"), "html", null, true));
                    echo " id=\"mainNav\">
    ";
                } else {
                    // line 35
                    echo "        <ul class=\"dropdown-menu\">
            ";
                }
                // line 37
                echo "            ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 38
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 39
                        echo "                ";
                        // line 40
                        $context["classes"] = array(0 => "", 1 => (($this->getAttribute(                        // line 42
$context["item"], "is_expanded", array())) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                        // line 43
$context["item"], "is_collapsed", array())) ? ("dropdown") : ("")), 3 => (($this->getAttribute(                        // line 44
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                        // line 47
                        echo "                <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                        echo ">
                    ";
                        // line 48
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
                    ";
                        // line 49
                        if ($this->getAttribute($context["item"], "below", array())) {
                            // line 50
                            echo "                        ";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                            echo "
                    ";
                        }
                        // line 52
                        echo "                </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "            ";
                } else {
                    // line 55
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 56
                        echo "                    ";
                        // line 57
                        $context["classes"] = array(0 => "", 1 => (($this->getAttribute(                        // line 59
$context["item"], "is_expanded", array())) ? ("dropdown-submenu") : ("")), 2 => (($this->getAttribute(                        // line 60
$context["item"], "is_collapsed", array())) ? ("dropdown") : ("")), 3 => (($this->getAttribute(                        // line 61
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                        // line 64
                        echo "                    <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                        echo ">
                        ";
                        // line 65
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
                        ";
                        // line 66
                        if ($this->getAttribute($context["item"], "below", array())) {
                            // line 67
                            echo "                            ";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                            echo "
                        ";
                        }
                        // line 69
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "            ";
                }
                // line 72
                echo "        </ul>
    ";
            }
            // line 74
            echo "    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 74,  169 => 72,  166 => 71,  159 => 69,  153 => 67,  151 => 66,  147 => 65,  142 => 64,  140 => 61,  139 => 60,  138 => 59,  137 => 57,  135 => 56,  130 => 55,  127 => 54,  120 => 52,  114 => 50,  112 => 49,  108 => 48,  103 => 47,  101 => 44,  100 => 43,  99 => 42,  98 => 40,  96 => 39,  91 => 38,  88 => 37,  84 => 35,  78 => 33,  75 => 32,  72 => 31,  69 => 30,  55 => 29,  48 => 27,  45 => 22,  43 => 21,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
<ul{{ attributes.addClass('nav nav-pills') }} id=\"mainNav\">
    {% else %}
        <ul class=\"dropdown-menu\">
            {% endif %}
            {% if menu_level == 0 %}
            {% for item in items %}
                {%
                set classes = [
                '',
                item.is_expanded ? 'dropdown',
                item.is_collapsed ? 'dropdown',
                item.in_active_trail ? 'active',
                ]
                %}
                <li{{ item.attributes.addClass(classes) }}>
                    {{ link(item.title, item.url) }}
                    {% if item.below %}
                        {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                    {% endif %}
                </li>
            {% endfor %}
            {% else %}
                {% for item in items %}
                    {%
                    set classes = [
                    '',
                    item.is_expanded ? 'dropdown-submenu',
                    item.is_collapsed ? 'dropdown',
                    item.in_active_trail ? 'active',
                    ]
                    %}
                    <li{{ item.attributes.addClass(classes) }}>
                        {{ link(item.title, item.url) }}
                        {% if item.below %}
                            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                        {% endif %}
                    </li>
                {% endfor %}
            {% endif %}
        </ul>
    {% endif %}
    {% endmacro %}
";
    }
}
