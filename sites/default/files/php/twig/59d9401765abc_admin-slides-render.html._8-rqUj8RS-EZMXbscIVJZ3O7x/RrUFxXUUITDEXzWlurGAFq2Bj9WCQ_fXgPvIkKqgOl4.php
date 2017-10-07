<?php

/* modules/md_slider/templates/backend/admin-slides-render.html.twig */
class __TwigTemplate_fbcde48a31548cbf8a7737a3762531f1cfa94b337a8cb966a24921aff7d825c8 extends Twig_Template
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
        $tags = array("set" => 1, "if" => 2, "for" => 11);
        $filters = array("length" => 7, "join" => 31);
        $functions = array("range" => 11);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('length', 'join'),
                array('range')
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
        $context["fullWidth"] = "md-fullwidth";
        // line 2
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "full_width", array())) {
            // line 3
            echo "    ";
            $context["wrapWidth"] = (("width:" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "width", array())) . "px;");
            // line 4
            echo "    ";
            $context["fullWidth"] = "";
        }
        // line 6
        echo "
";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["slides"]) ? $context["slides"] : null)) > 0)) {
            // line 8
            echo "<div id=\"md-tabs\">
    <div class=\"md-tab-tools\">
        <ul class=\"md-tabs-head clearfix\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["slides"]) ? $context["slides"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 12
                echo "            <li class=\"tab-item clearfix\">
                <a class=\"tab-link\" href=\"#tabs-";
                // line 13
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["i"], "html", null, true));
                echo "\"><span class=\"tab-text\">Slide ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["i"], "html", null, true));
                echo "</span></a>
                <span class=\"ui-icon ui-icon-close\">Remove Tab</span>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ul>
        <div class=\"add-tab\">
            <a id=\"add_tab\" class=\"add\" href=\"#\">+</a>
        </div>
    </div>
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 23
                echo "
    <div id=\"tabs-";
                // line 24
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true));
                echo "\" class=\"md-tabcontent clearfix\" data-timelinewidth=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "slideSettings", array()), "timelinewidth", array()), "html", null, true));
                echo "\">
        <div class=\"settings\">
            <a href=\"#\" class=\"panel-settings-link\">[Settings]</a> &nbsp;
            <a class=\"panel-clone\" href=\"#\">[Clone slide]</a>
            <input type=\"hidden\" autocomplete=\"off\" class=\"panelsettings\" value='";
                // line 28
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "jsonSlideSettings", array()), "html", null, true));
                echo "' />
        </div>
        <div class=\"md-slidewrap ";
                // line 30
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["fullWidth"]) ? $context["fullWidth"] : null), "html", null, true));
                echo "\" style=\"height: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "height", array()), "html", null, true));
                echo "px; ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapWidth"]) ? $context["wrapWidth"] : null), "html", null, true));
                echo "\">
            <div class=\"md-slide-image\" style=\"";
                // line 31
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter($this->getAttribute($context["slide"], "background_style", array()), "; "), "html", null, true));
                echo "\">
                ";
                // line 32
                if ($this->getAttribute($context["slide"], "background_url", array())) {
                    // line 33
                    echo "                    <img src=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "background_url", array()), "html", null, true));
                    echo "\" />
                ";
                }
                // line 35
                echo "            </div>
            ";
                // line 36
                if (($this->getAttribute($this->getAttribute($context["slide"], "slideSettings", array()), "background_overlay", array()) && ($this->getAttribute($this->getAttribute($context["slide"], "slideSettings", array()), "background_overlay", array()) != ""))) {
                    // line 37
                    echo "                <div class=\"md-slide-overlay\" style=\"background: ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "slideSettings", array()), "background_overlay", array()), "html", null, true));
                    echo "\">
                </div>
            ";
                }
                // line 40
                echo "            <div class=\"md-objects\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "width", array()), "html", null, true));
                echo "px; height: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "height", array()), "html", null, true));
                echo "px;\">
                ";
                // line 41
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "contentLayer", array()), "html", null, true));
                echo "
            </div>
        </div>
    </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "</div>
";
        } else {
            // line 48
            echo "<div id=\"md-tabs\">
    <div class=\"md-tab-tools\">
        <ul class=\"md-tabs-head clearfix\">
            <li class=\"tab-item first clearfix\">
                <a class=\"tab-link\" href=\"#tabs-1\"><span class=\"tab-text\">Slide 1</span></a>
                <span class=\"ui-icon ui-icon-close\">Remove Tab</span>
            </li>
        </ul>
        <div class=\"add-tab\">
            <a id=\"add_tab\" class=\"add\" href=\"#\">+</a>
        </div>
    </div>
    <div id=\"tabs-1\" class=\"md-tabcontent clearfix\" data-timelinewidth=\"";
            // line 60
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "delay", array()) / 100), "html", null, true));
            echo "\">
        <div class=\"settings\">
            <a href=\"#\" class=\"panel-settings-link\">[Settings]</a> &nbsp;
            <a class=\"panel-clone\" href=\"#\">[Clone slide]</a>
            <input type=\"hidden\" autocomplete=\"off\" class=\"panelsettings\" value='{\"slide_id\": -1, \"background_image\": -1, \"custom_thumbnail\": -1, \"transitions\": [], \"background_color\": \"\", \"disabled\": 0}' /></div>
        <div class=\"md-slidewrap ";
            // line 65
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["fullWidth"]) ? $context["fullWidth"] : null), "html", null, true));
            echo "\" style=\"height: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "height", array()), "html", null, true));
            echo "px; ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapWidth"]) ? $context["wrapWidth"] : null), "html", null, true));
            echo "\">
            <div class=\"md-slide-image\" style=\"height: ";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "height", array()), "html", null, true));
            echo "px; ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapWidth"]) ? $context["wrapWidth"] : null), "html", null, true));
            echo "\"></div>
            <div class=\"md-slide-overlay\">
            </div>
            <div class=\"md-objects\" style=\"width: ";
            // line 69
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "width", array()), "html", null, true));
            echo "px; height: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "height", array()), "html", null, true));
            echo "px;\">
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/md_slider/templates/backend/admin-slides-render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 69,  216 => 66,  208 => 65,  200 => 60,  186 => 48,  182 => 46,  163 => 41,  156 => 40,  149 => 37,  147 => 36,  144 => 35,  138 => 33,  136 => 32,  132 => 31,  124 => 30,  119 => 28,  110 => 24,  107 => 23,  90 => 22,  83 => 17,  71 => 13,  68 => 12,  64 => 11,  59 => 8,  57 => 7,  54 => 6,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set fullWidth = 'md-fullwidth' %}
{% if not settings.full_width %}
    {% set wrapWidth = 'width:' ~  settings.width ~ 'px;' %}
    {% set fullWidth = '' %}
{% endif %}

{% if slides|length > 0  %}
<div id=\"md-tabs\">
    <div class=\"md-tab-tools\">
        <ul class=\"md-tabs-head clearfix\">
            {% for i in range(1, slides|length) %}
            <li class=\"tab-item clearfix\">
                <a class=\"tab-link\" href=\"#tabs-{{ i }}\"><span class=\"tab-text\">Slide {{ i }}</span></a>
                <span class=\"ui-icon ui-icon-close\">Remove Tab</span>
            </li>
            {% endfor %}
        </ul>
        <div class=\"add-tab\">
            <a id=\"add_tab\" class=\"add\" href=\"#\">+</a>
        </div>
    </div>
    {% for slide in slides %}

    <div id=\"tabs-{{ loop.index }}\" class=\"md-tabcontent clearfix\" data-timelinewidth=\"{{ slide.slideSettings.timelinewidth }}\">
        <div class=\"settings\">
            <a href=\"#\" class=\"panel-settings-link\">[Settings]</a> &nbsp;
            <a class=\"panel-clone\" href=\"#\">[Clone slide]</a>
            <input type=\"hidden\" autocomplete=\"off\" class=\"panelsettings\" value='{{ slide.jsonSlideSettings }}' />
        </div>
        <div class=\"md-slidewrap {{ fullWidth }}\" style=\"height: {{ settings.height }}px; {{ wrapWidth }}\">
            <div class=\"md-slide-image\" style=\"{{ slide.background_style|join('; ') }}\">
                {% if slide.background_url  %}
                    <img src=\"{{ slide.background_url }}\" />
                {% endif %}
            </div>
            {% if slide.slideSettings.background_overlay and slide.slideSettings.background_overlay != ''  %}
                <div class=\"md-slide-overlay\" style=\"background: {{ slide.slideSettings.background_overlay }}\">
                </div>
            {% endif %}
            <div class=\"md-objects\" style=\"width: {{ settings.width }}px; height: {{ settings.height }}px;\">
                {{ slide.contentLayer }}
            </div>
        </div>
    </div>
    {% endfor %}
</div>
{% else  %}
<div id=\"md-tabs\">
    <div class=\"md-tab-tools\">
        <ul class=\"md-tabs-head clearfix\">
            <li class=\"tab-item first clearfix\">
                <a class=\"tab-link\" href=\"#tabs-1\"><span class=\"tab-text\">Slide 1</span></a>
                <span class=\"ui-icon ui-icon-close\">Remove Tab</span>
            </li>
        </ul>
        <div class=\"add-tab\">
            <a id=\"add_tab\" class=\"add\" href=\"#\">+</a>
        </div>
    </div>
    <div id=\"tabs-1\" class=\"md-tabcontent clearfix\" data-timelinewidth=\"{{ settings.delay / 100 }}\">
        <div class=\"settings\">
            <a href=\"#\" class=\"panel-settings-link\">[Settings]</a> &nbsp;
            <a class=\"panel-clone\" href=\"#\">[Clone slide]</a>
            <input type=\"hidden\" autocomplete=\"off\" class=\"panelsettings\" value='{\"slide_id\": -1, \"background_image\": -1, \"custom_thumbnail\": -1, \"transitions\": [], \"background_color\": \"\", \"disabled\": 0}' /></div>
        <div class=\"md-slidewrap {{ fullWidth }}\" style=\"height: {{ settings.height }}px; {{ wrapWidth }}\">
            <div class=\"md-slide-image\" style=\"height: {{ settings.height }}px; {{ wrapWidth }}\"></div>
            <div class=\"md-slide-overlay\">
            </div>
            <div class=\"md-objects\" style=\"width: {{ settings.width }}px; height: {{ settings.height }}px;\">
            </div>
        </div>
    </div>
</div>
{% endif  %}
";
    }
}
