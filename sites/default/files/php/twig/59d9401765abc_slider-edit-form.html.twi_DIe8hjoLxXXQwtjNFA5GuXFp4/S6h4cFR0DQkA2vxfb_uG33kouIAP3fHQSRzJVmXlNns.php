<?php

/* modules/md_slider/templates/backend/slider-edit-form.html.twig */
class __TwigTemplate_6e0a39ad546d4de582eeebfc011af977e924c739690aea2c3890c35afc232f01 extends Twig_Template
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
        $tags = array("set" => 1, "if" => 4, "for" => 52);
        $filters = array("length" => 49);
        $functions = array("attach_library" => 2, "range" => 210);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('length'),
                array('attach_library', 'range')
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
        $context["libraries"] = ("md_slider/md_slider.slider." . (isset($context["slider_name"]) ? $context["slider_name"] : null));
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary((isset($context["libraries"]) ? $context["libraries"] : null)), "html", null, true));
        echo "
";
        // line 3
        $context["fullWidth"] = "md-fullwidth";
        // line 4
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "full_width", array())) {
            // line 5
            echo "    ";
            $context["wrapWidth"] = (("width:" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "width", array())) . "px;");
            // line 6
            echo "    ";
            $context["fullWidth"] = "";
        }
        // line 8
        echo "<div class=\"md-wrap\">
    ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slides"]) ? $context["slides"] : null), "html", null, true));
        echo "
    <div id=\"md-toolbar\" class=\"md-toolbar\">
        <a href=\"#\" class=\"mdt-button mdt-text\" title=\"Add new text\"></a>
        <a href=\"#\" class=\"mdt-button mdt-image\" title=\"Add new image\"></a>
        <a href=\"#\" class=\"mdt-button mdt-video\" title=\"Add new video\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-left\" title=\"Align left edge\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-center\" title=\"Align horizontal center\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-right\" title=\"Align right edge\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-top\" title=\"Align top edge\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-vcenter\" title=\"Align vertical center\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-bottom\" title=\"Align bottom edge\"></a>
        <a href=\"#\" class=\"mdt-button mdt-spacev\" title=\"Space evenly vertically\"></a>
        <a href=\"#\" class=\"mdt-button mdt-spaceh\" title=\"Space evenly horizontally\"></a>
        <input type=\"text\" value=\"\" class=\"mdt-text mdt-spacei\"/>

        <a href=\"#\" class=\"mdt-proportions mdt-proportions-yes\" title=\"proportions\"></a>
        <input type=\"text\" value=\"\" name=\"width\" class=\"mdt-text mdt-input mdt-width\"/>
        <input type=\"text\" value=\"\" name=\"height\" class=\"mdt-text mdt-input mdt-height\"/>
        <input type=\"text\" value=\"\" name=\"left\" class=\"mdt-text mdt-input mdt-left\"/>
        <input type=\"text\" value=\"\" name=\"top\" class=\"mdt-text mdt-input mdt-top\"/>

        <div class=\"mdt-item-type mdt-type-text\">
            <div class=\"mdt-label\">Text:</div>
            <textarea class=\"mdt-text mdt-textvalue\" name=\"text\"></textarea>
            <a href=\"#\" class=\"mdt-button mdt-addlink\" title=\"Add link\"></a>
            <div class=\"mdt-label font-text\">Font:</div>
            <input type=\"text\" value=\"12\" name=\"font-size\" class=\"mdt-text mdt-input mdt-fontsize\"/>
            <span class=\"mdt-fontsizeunit\"></span>
            <select name=\"font-family\" class=\"mdt-select mdt-font-family\">
                <option value=\"\"></option>
                <optgroup label=\"System fonts\">
                    <option value=\"Arial\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Arial\">Arial</option>
                    <option value=\"Verdana\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Verdana\">Verdana</option>
                    <option value=\"Trebuchet MS\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: 'Trebuchet MS'\">Trebuchet MS</option>
                    <option value=\"Georgia\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Georgia\">Georgia
                    </option>
                    <option value=\"Times New Roman\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Times New Roman\">Times New Roman</option>
                    <option value=\"Tahoma\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Tahoma\">Tahoma</option>
                </optgroup>

                ";
        // line 49
        if (twig_length_filter($this->env, (isset($context["fonts"]) ? $context["fonts"] : null))) {
            // line 50
            echo "                <optgroup label=\"Google fonts\">
                ";
        }
        // line 52
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fonts"]) ? $context["fonts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 53
            echo "                    <option value=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["font"], "CSS", array()), "html", null, true));
            echo "\" data-fontweight=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["font"], "Weight", array()), "html", null, true));
            echo "\"
                            style=\"font-family: '";
            // line 54
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["font"], "CSS", array()), "html", null, true));
            echo "'\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["font"], "CSS", array()), "html", null, true));
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
                ";
        // line 57
        if (twig_length_filter($this->env, (isset($context["fonts"]) ? $context["fonts"] : null))) {
            // line 58
            echo "                </optgroup>
                ";
        }
        // line 60
        echo "
            </select>
            <select name=\"font-weight\" class=\"mdt-select mdt-font-weight\">
                <option value=\"\"></option>
            </select>

            <a href=\"#\" class=\"mdt-button button-style mdt-font-underline\" name=\"text-decoration\" active=\"underline\" normal=\"none\" title=\"Underline\"></a>
            <a href=\"#\" class=\"mdt-button button-style mdt-font-allcaps\" name=\"text-transform\" active=\"uppercase\" normal=\"none\" title=\"All caps\"></a>
            <a href=\"#\" class=\"mdt-button button-align mdt-left-alignment\" value=\"left\" title=\"Left alignment\"></a>
            <a href=\"#\" class=\"mdt-button button-align mdt-center-alignment\" value=\"center\" title=\"Center alignment\"></a>
            <a href=\"#\" class=\"mdt-button button-align mdt-right-alignment\" value=\"right\" title=\"Right alignment\"></a>
            <a href=\"#\" class=\"mdt-button button-align mdt-justified-alignment\" value=\"justify\" title=\"Justified alignment\"></a>

            <a class=\"mdt-button mdt-text-color\" title=\"Text color\"></a>
            <div class=\"text-color\"><input type=\"hidden\" name=\"color\" value=\"\" class=\"mdt-color mdt-input\"/></div>
            <input type=\"hidden\" name=\"border-color\" value=\"\" class=\"mdt-border-color mdt-input\"/>
        </div>

        <div class=\"mdt-item-type mdt-type-image\" style=\"display: none;\">
            <div class=\"mdti-image\">
                <input type=\"hidden\" value=\"\" name=\"fileid\" class=\"mdt-text mdt-input mdt-image-fileid\"/>
                <img class=\"mdt-imgsrc\" src=\"\"/>
            </div>
            <a href=\"#\" class=\"mdt-button mdt-addlink\" title=\"Add link\"></a>

            <div class=\"mdt-label\">Image:
                <a id=\"change-image\" href=\"#\">Change</a>
            </div>
            <textarea class=\"mdt-textarea mdt-imgalt\" name=\"imgalt\"></textarea>
        </div>
        <div class=\"mdt-item-type mdt-type-video\" style=\"display: none;\">
            <div class=\"mdti-image\">
                <input type=\"hidden\" value=\"\" name=\"fileid\" class=\"mdt-text mdt-input mdt-video-fileid\"/>
                <img class=\"mdt-videosrc\" src=\"\"/><span class=\"mdt-play\"></span>
            </div>
            <div class=\"mdt-label\">Video:
                <a id=\"change-video\" href=\"#\">Change</a></div>
            <div class=\"display-mode\">
                <span>Display mode:</span>
                <select class=\"video-display-mode\">
                    <option value=\"inline\">Inline</option>
                    <option value=\"full\">Full</option>
                    <option value=\"lightbox\">Lightbox</option>
                </select>
            </div>
            <div class=\"video-title\">
                <span>Title:</span>
                <textarea class=\"mdt-textarea mdt-videoname\" name=\"videoname\"></textarea>
            </div>
        </div>

        <input type=\"text\" value=\"\" readonly=\"readonly\" name=\"starttime\" class=\"mdt-text mdt-starttime\"/>
        <input type=\"text\" value=\"\" readonly=\"readonly\" name=\"stoptime\" class=\"mdt-text mdt-stoptime\"/>

        <select name=\"startani\" class=\"mdt-select mdt-input mdt-startani\">
            <option value=\"none\">none</option>
            <option value=\"random\">random</option>
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["in_effect"]) ? $context["in_effect"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["effect"]) {
            // line 118
            echo "                <option value=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["effect"], "html", null, true));
            echo "\"> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["effect"], "html", null, true));
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "        </select>
        <select name=\"stopani\" class=\"mdt-select mdt-input mdt-stopani\">
            <option value=\"none\">none</option>
            <option value=\"keep\">Keep in slide</option>
            <option value=\"random\">random</option>
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["out_effect"]) ? $context["out_effect"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["effect"]) {
            // line 126
            echo "                <option value=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["effect"], "html", null, true));
            echo "\"> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["effect"], "html", null, true));
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "        </select>

        <input type=\"text\" name=\"opacity\" value=\"100\" maxlength=\"3\" class=\"mdt-text mdt-input mdt-opacity\"/>
        <input type=\"text\" value=\"\" maxlength=\"24\" name=\"mdtclass\" class=\"mdt-text mdt-input mdt-custom-class\"/>

        <select name=\"style\" class=\"mdt-select mdt-input mdt-style\">
            <option value=\"none\">None</option>
            <option value=\"white-shadow\">White shadow 1</option>
            <option value=\"white-shadow2\">White shadow 2</option>
            <option value=\"black-shadow\">Black shadow 1</option>
            <option value=\"black-shadow2\">Black shadow 2</option>
            <option value=\"text-white-shadow\">Text white shadow 1</option>
            <option value=\"text-black-shadow\">Text black shadow 1</option>
            <option value=\"text-white-shadow2\">Text white shadow 2</option>
            <option value=\"text-black-shadow2\">Text black shadow 2</option>
        </select>

        <div class=\"background-color\">
            <input type=\"hidden\" id=\"background-color\" class=\"mdt-background mdt-input\" value=\"\" name=\"background-color\">
        </div>
        <input type=\"text\" value=\"\" maxlength=\"3\" name=\"background-transparent\" class=\"mdt-text mdt-input mdt-background-transparent\"/>

        <div class=\"border-position\" id=\"border-position\">
            <a href=\"#\" class=\"bp-all\" title=\"All borders\"><span></span></a>
            <a href=\"#\" class=\"bp-top\" title=\"Top borders\"><span></span></a>
            <a href=\"#\" class=\"bp-right\" title=\"Right borders\"><span></span></a>
            <a href=\"#\" class=\"bp-bottom\" title=\"Bottom borders\"><span></span></a>
            <a href=\"#\" class=\"bp-left\" title=\"Left borders\"><span></span></a>
        </div>
        <input type=\"text\" value=\"\" maxlength=\"3\" name=\"border-width\" class=\"mdt-text mdt-input mdt-border-width\"/>
        <select name=\"border-style\" class=\"mdt-select mdt-input mdt-border-style\">
            <option value=\"solid\">solid</option>
            <option value=\"dashed\">dashed</option>
            <option value=\"dotted\">dotted</option>
            <option value=\"double\">double</option>
        </select>

        <div class=\"border-color\">
            <input type=\"hidden\" id=\"border-color\" class=\"mdt-border mdt-input\" value=\"\" name=\"border-color\">
        </div>

        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"border-top-left-radius\" class=\"mdt-text mdt-border-radius mdt-br-topleft\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"border-top-right-radius\" class=\"mdt-text mdt-border-radius mdt-br-topright\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"border-bottom-right-radius\" class=\"mdt-text mdt-border-radius mdt-br-bottomright\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"border-bottom-left-radius\" class=\"mdt-text mdt-border-radius mdt-br-bottomleft\"/>

        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"padding-top\" class=\"mdt-text mdt-padding mdt-p-top\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"padding-right\" class=\"mdt-text mdt-padding mdt-p-right\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"padding-bottom\" class=\"mdt-text mdt-padding mdt-p-bottom\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"padding-left\" class=\"mdt-text mdt-padding mdt-p-left\"/>

        <div id=\"mdt-linkexpand\" class=\"mdt-linkexpand\">
            <a href=\"#\" class=\"mdt-link-close\"></a>
            <input type=\"text\" value=\"\" name=\"\" class=\"mdt-text mdt-link-value\"/>
            <input type=\"text\" value=\"\" name=\"\" class=\"mdt-text mdt-link-title\"/>
            <select class=\"mdt-select mdt-link-target\">
                <option value=\"\">None</option>
                <option value=\"_blank\">_blank</option>
                <option value=\"_self\">_self</option>
                <option value=\"_parent\">_parent</option>
                <option value=\"_top\">_top</option>
            </select>
            <div class=\"link-color-wrap\"><input type=\"hidden\" id=\"link-color\" class=\"link-color\" value=\"\" name=\"link-color\">
            </div>
            <div class=\"link-background-wrap\">
                <input type=\"hidden\" id=\"link-background\" class=\"link-background\" value=\"\" name=\"link-background\">
            </div>
            <input type=\"text\" value=\"\" maxlength=\"3\" name=\"link-background-transparent\" class=\"mdt-text link-background-transparent\"/>
            <div class=\"link-border-wrap\">
                <input type=\"hidden\" id=\"link-border\" class=\"link-border\" value=\"\" name=\"link-border\">
            </div>
            <a href=\"#\" class=\"mdt-link-remove\">Remove</a>
            <a href=\"#\" class=\"mdt-link-save\">Save</a>
        </div>
    </div>
    <!-- /#md-toolbar -->
    <div class=\"md-timeline\">
        <div class=\"mdtl-layers\">
            <div class=\"mdtl-head\">
                <div class=\"mdtl-head-left\">Timeline</div>
                <div class=\"mdtl-head-right\">
                    <div class=\"mdtl-ruler\">
                        ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 211
            echo "                        <div class=\"number\">
                            <span>";
            // line 212
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["i"], "html", null, true));
            echo "</span>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                    </div>
                    <div id=\"slideshow-time\">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class=\"timeline-wrap\">
                <div id=\"timeline-items\">
                </div>
            </div>
        </div>
    </div>
    <!-- /.md-timeline -->
</div>
<div id=\"dlg-slide-setting\" style=\"display:none;\">
    <div class=\"settings\">
        <a class=\"panel-settings-link\" href=\"#\">[Settings]</a> &nbsp;
        <a class=\"panel-clone\" href=\"#\">[Clone slide]</a>
        <input class=\"panelsettings\" type=\"hidden\" value='{\"slide_id\": -1, \"background_image\": -1,\"background_color\": \"\" ,\"disabled\": 0, \"custom_thumbnail\": -1, \"transitions\": []}' autocomplete=\"off\">
    </div>
    <div class=\"md-slidewrap ";
        // line 244
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["fullWidth"]) ? $context["fullWidth"] : null), "html", null, true));
        echo "\"
         style=\"height: ";
        // line 245
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "height", array()), "html", null, true));
        echo "px; ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapWidth"]) ? $context["wrapWidth"] : null), "html", null, true));
        echo "\">
        <div class=\"md-slide-image\"
             style=\"height: ";
        // line 247
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "height", array()), "html", null, true));
        echo "px; ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapWidth"]) ? $context["wrapWidth"] : null), "html", null, true));
        echo "\"></div>
        <div class=\"md-objects\" style=\"width: ";
        // line 248
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "width", array()), "html", null, true));
        echo "px; height: ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "height", array()), "html", null, true));
        echo "px;\">
        </div>
    </div>
</div>
<div id=\"dlg-video\" style=\"display:none;\" title=\"Item setting\"></div>
<input type=\"hidden\" value=\"";
        // line 253
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "delay", array()), "html", null, true));
        echo "\" name=\"default-timelinewidth\">
";
    }

    public function getTemplateName()
    {
        return "modules/md_slider/templates/backend/slider-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 253,  387 => 248,  381 => 247,  374 => 245,  370 => 244,  348 => 224,  330 => 212,  327 => 211,  323 => 210,  239 => 128,  228 => 126,  224 => 125,  217 => 120,  206 => 118,  202 => 117,  143 => 60,  139 => 58,  137 => 57,  134 => 56,  124 => 54,  117 => 53,  112 => 52,  108 => 50,  106 => 49,  63 => 9,  60 => 8,  56 => 6,  53 => 5,  51 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set libraries = 'md_slider/md_slider.slider.' ~ slider_name %}
{{ attach_library(libraries) }}
{% set fullWidth = 'md-fullwidth' %}
{% if not settings.full_width %}
    {% set wrapWidth = 'width:' ~  settings.width ~ 'px;' %}
    {% set fullWidth = '' %}
{% endif %}
<div class=\"md-wrap\">
    {{ slides }}
    <div id=\"md-toolbar\" class=\"md-toolbar\">
        <a href=\"#\" class=\"mdt-button mdt-text\" title=\"Add new text\"></a>
        <a href=\"#\" class=\"mdt-button mdt-image\" title=\"Add new image\"></a>
        <a href=\"#\" class=\"mdt-button mdt-video\" title=\"Add new video\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-left\" title=\"Align left edge\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-center\" title=\"Align horizontal center\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-right\" title=\"Align right edge\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-top\" title=\"Align top edge\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-vcenter\" title=\"Align vertical center\"></a>
        <a href=\"#\" class=\"mdt-button mdt-align-bottom\" title=\"Align bottom edge\"></a>
        <a href=\"#\" class=\"mdt-button mdt-spacev\" title=\"Space evenly vertically\"></a>
        <a href=\"#\" class=\"mdt-button mdt-spaceh\" title=\"Space evenly horizontally\"></a>
        <input type=\"text\" value=\"\" class=\"mdt-text mdt-spacei\"/>

        <a href=\"#\" class=\"mdt-proportions mdt-proportions-yes\" title=\"proportions\"></a>
        <input type=\"text\" value=\"\" name=\"width\" class=\"mdt-text mdt-input mdt-width\"/>
        <input type=\"text\" value=\"\" name=\"height\" class=\"mdt-text mdt-input mdt-height\"/>
        <input type=\"text\" value=\"\" name=\"left\" class=\"mdt-text mdt-input mdt-left\"/>
        <input type=\"text\" value=\"\" name=\"top\" class=\"mdt-text mdt-input mdt-top\"/>

        <div class=\"mdt-item-type mdt-type-text\">
            <div class=\"mdt-label\">Text:</div>
            <textarea class=\"mdt-text mdt-textvalue\" name=\"text\"></textarea>
            <a href=\"#\" class=\"mdt-button mdt-addlink\" title=\"Add link\"></a>
            <div class=\"mdt-label font-text\">Font:</div>
            <input type=\"text\" value=\"12\" name=\"font-size\" class=\"mdt-text mdt-input mdt-fontsize\"/>
            <span class=\"mdt-fontsizeunit\"></span>
            <select name=\"font-family\" class=\"mdt-select mdt-font-family\">
                <option value=\"\"></option>
                <optgroup label=\"System fonts\">
                    <option value=\"Arial\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Arial\">Arial</option>
                    <option value=\"Verdana\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Verdana\">Verdana</option>
                    <option value=\"Trebuchet MS\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: 'Trebuchet MS'\">Trebuchet MS</option>
                    <option value=\"Georgia\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Georgia\">Georgia
                    </option>
                    <option value=\"Times New Roman\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Times New Roman\">Times New Roman</option>
                    <option value=\"Tahoma\" data-fontweight=\"400,700,400italic,700italic\" style=\"font-family: Tahoma\">Tahoma</option>
                </optgroup>

                {% if fonts|length  %}
                <optgroup label=\"Google fonts\">
                {% endif %}
                    {% for font in fonts  %}
                    <option value=\"{{ font.CSS }}\" data-fontweight=\"{{ font.Weight }}\"
                            style=\"font-family: '{{ font.CSS }}'\">{{ font.CSS }}</option>
                    {% endfor %}

                {% if fonts|length  %}
                </optgroup>
                {% endif %}

            </select>
            <select name=\"font-weight\" class=\"mdt-select mdt-font-weight\">
                <option value=\"\"></option>
            </select>

            <a href=\"#\" class=\"mdt-button button-style mdt-font-underline\" name=\"text-decoration\" active=\"underline\" normal=\"none\" title=\"Underline\"></a>
            <a href=\"#\" class=\"mdt-button button-style mdt-font-allcaps\" name=\"text-transform\" active=\"uppercase\" normal=\"none\" title=\"All caps\"></a>
            <a href=\"#\" class=\"mdt-button button-align mdt-left-alignment\" value=\"left\" title=\"Left alignment\"></a>
            <a href=\"#\" class=\"mdt-button button-align mdt-center-alignment\" value=\"center\" title=\"Center alignment\"></a>
            <a href=\"#\" class=\"mdt-button button-align mdt-right-alignment\" value=\"right\" title=\"Right alignment\"></a>
            <a href=\"#\" class=\"mdt-button button-align mdt-justified-alignment\" value=\"justify\" title=\"Justified alignment\"></a>

            <a class=\"mdt-button mdt-text-color\" title=\"Text color\"></a>
            <div class=\"text-color\"><input type=\"hidden\" name=\"color\" value=\"\" class=\"mdt-color mdt-input\"/></div>
            <input type=\"hidden\" name=\"border-color\" value=\"\" class=\"mdt-border-color mdt-input\"/>
        </div>

        <div class=\"mdt-item-type mdt-type-image\" style=\"display: none;\">
            <div class=\"mdti-image\">
                <input type=\"hidden\" value=\"\" name=\"fileid\" class=\"mdt-text mdt-input mdt-image-fileid\"/>
                <img class=\"mdt-imgsrc\" src=\"\"/>
            </div>
            <a href=\"#\" class=\"mdt-button mdt-addlink\" title=\"Add link\"></a>

            <div class=\"mdt-label\">Image:
                <a id=\"change-image\" href=\"#\">Change</a>
            </div>
            <textarea class=\"mdt-textarea mdt-imgalt\" name=\"imgalt\"></textarea>
        </div>
        <div class=\"mdt-item-type mdt-type-video\" style=\"display: none;\">
            <div class=\"mdti-image\">
                <input type=\"hidden\" value=\"\" name=\"fileid\" class=\"mdt-text mdt-input mdt-video-fileid\"/>
                <img class=\"mdt-videosrc\" src=\"\"/><span class=\"mdt-play\"></span>
            </div>
            <div class=\"mdt-label\">Video:
                <a id=\"change-video\" href=\"#\">Change</a></div>
            <div class=\"display-mode\">
                <span>Display mode:</span>
                <select class=\"video-display-mode\">
                    <option value=\"inline\">Inline</option>
                    <option value=\"full\">Full</option>
                    <option value=\"lightbox\">Lightbox</option>
                </select>
            </div>
            <div class=\"video-title\">
                <span>Title:</span>
                <textarea class=\"mdt-textarea mdt-videoname\" name=\"videoname\"></textarea>
            </div>
        </div>

        <input type=\"text\" value=\"\" readonly=\"readonly\" name=\"starttime\" class=\"mdt-text mdt-starttime\"/>
        <input type=\"text\" value=\"\" readonly=\"readonly\" name=\"stoptime\" class=\"mdt-text mdt-stoptime\"/>

        <select name=\"startani\" class=\"mdt-select mdt-input mdt-startani\">
            <option value=\"none\">none</option>
            <option value=\"random\">random</option>
            {% for effect in in_effect %}
                <option value=\"{{ effect }}\"> {{ effect }}</option>
            {% endfor %}
        </select>
        <select name=\"stopani\" class=\"mdt-select mdt-input mdt-stopani\">
            <option value=\"none\">none</option>
            <option value=\"keep\">Keep in slide</option>
            <option value=\"random\">random</option>
            {% for effect in out_effect %}
                <option value=\"{{ effect }}\"> {{ effect }}</option>
            {% endfor %}
        </select>

        <input type=\"text\" name=\"opacity\" value=\"100\" maxlength=\"3\" class=\"mdt-text mdt-input mdt-opacity\"/>
        <input type=\"text\" value=\"\" maxlength=\"24\" name=\"mdtclass\" class=\"mdt-text mdt-input mdt-custom-class\"/>

        <select name=\"style\" class=\"mdt-select mdt-input mdt-style\">
            <option value=\"none\">None</option>
            <option value=\"white-shadow\">White shadow 1</option>
            <option value=\"white-shadow2\">White shadow 2</option>
            <option value=\"black-shadow\">Black shadow 1</option>
            <option value=\"black-shadow2\">Black shadow 2</option>
            <option value=\"text-white-shadow\">Text white shadow 1</option>
            <option value=\"text-black-shadow\">Text black shadow 1</option>
            <option value=\"text-white-shadow2\">Text white shadow 2</option>
            <option value=\"text-black-shadow2\">Text black shadow 2</option>
        </select>

        <div class=\"background-color\">
            <input type=\"hidden\" id=\"background-color\" class=\"mdt-background mdt-input\" value=\"\" name=\"background-color\">
        </div>
        <input type=\"text\" value=\"\" maxlength=\"3\" name=\"background-transparent\" class=\"mdt-text mdt-input mdt-background-transparent\"/>

        <div class=\"border-position\" id=\"border-position\">
            <a href=\"#\" class=\"bp-all\" title=\"All borders\"><span></span></a>
            <a href=\"#\" class=\"bp-top\" title=\"Top borders\"><span></span></a>
            <a href=\"#\" class=\"bp-right\" title=\"Right borders\"><span></span></a>
            <a href=\"#\" class=\"bp-bottom\" title=\"Bottom borders\"><span></span></a>
            <a href=\"#\" class=\"bp-left\" title=\"Left borders\"><span></span></a>
        </div>
        <input type=\"text\" value=\"\" maxlength=\"3\" name=\"border-width\" class=\"mdt-text mdt-input mdt-border-width\"/>
        <select name=\"border-style\" class=\"mdt-select mdt-input mdt-border-style\">
            <option value=\"solid\">solid</option>
            <option value=\"dashed\">dashed</option>
            <option value=\"dotted\">dotted</option>
            <option value=\"double\">double</option>
        </select>

        <div class=\"border-color\">
            <input type=\"hidden\" id=\"border-color\" class=\"mdt-border mdt-input\" value=\"\" name=\"border-color\">
        </div>

        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"border-top-left-radius\" class=\"mdt-text mdt-border-radius mdt-br-topleft\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"border-top-right-radius\" class=\"mdt-text mdt-border-radius mdt-br-topright\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"border-bottom-right-radius\" class=\"mdt-text mdt-border-radius mdt-br-bottomright\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"border-bottom-left-radius\" class=\"mdt-text mdt-border-radius mdt-br-bottomleft\"/>

        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"padding-top\" class=\"mdt-text mdt-padding mdt-p-top\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"padding-right\" class=\"mdt-text mdt-padding mdt-p-right\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"padding-bottom\" class=\"mdt-text mdt-padding mdt-p-bottom\"/>
        <input type=\"text\" value=\"\" maxlength=\"2\" name=\"padding-left\" class=\"mdt-text mdt-padding mdt-p-left\"/>

        <div id=\"mdt-linkexpand\" class=\"mdt-linkexpand\">
            <a href=\"#\" class=\"mdt-link-close\"></a>
            <input type=\"text\" value=\"\" name=\"\" class=\"mdt-text mdt-link-value\"/>
            <input type=\"text\" value=\"\" name=\"\" class=\"mdt-text mdt-link-title\"/>
            <select class=\"mdt-select mdt-link-target\">
                <option value=\"\">None</option>
                <option value=\"_blank\">_blank</option>
                <option value=\"_self\">_self</option>
                <option value=\"_parent\">_parent</option>
                <option value=\"_top\">_top</option>
            </select>
            <div class=\"link-color-wrap\"><input type=\"hidden\" id=\"link-color\" class=\"link-color\" value=\"\" name=\"link-color\">
            </div>
            <div class=\"link-background-wrap\">
                <input type=\"hidden\" id=\"link-background\" class=\"link-background\" value=\"\" name=\"link-background\">
            </div>
            <input type=\"text\" value=\"\" maxlength=\"3\" name=\"link-background-transparent\" class=\"mdt-text link-background-transparent\"/>
            <div class=\"link-border-wrap\">
                <input type=\"hidden\" id=\"link-border\" class=\"link-border\" value=\"\" name=\"link-border\">
            </div>
            <a href=\"#\" class=\"mdt-link-remove\">Remove</a>
            <a href=\"#\" class=\"mdt-link-save\">Save</a>
        </div>
    </div>
    <!-- /#md-toolbar -->
    <div class=\"md-timeline\">
        <div class=\"mdtl-layers\">
            <div class=\"mdtl-head\">
                <div class=\"mdtl-head-left\">Timeline</div>
                <div class=\"mdtl-head-right\">
                    <div class=\"mdtl-ruler\">
                        {% for i in range(0, 20) %}
                        <div class=\"number\">
                            <span>{{ i }}</span>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        {% endfor %}
                    </div>
                    <div id=\"slideshow-time\">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class=\"timeline-wrap\">
                <div id=\"timeline-items\">
                </div>
            </div>
        </div>
    </div>
    <!-- /.md-timeline -->
</div>
<div id=\"dlg-slide-setting\" style=\"display:none;\">
    <div class=\"settings\">
        <a class=\"panel-settings-link\" href=\"#\">[Settings]</a> &nbsp;
        <a class=\"panel-clone\" href=\"#\">[Clone slide]</a>
        <input class=\"panelsettings\" type=\"hidden\" value='{\"slide_id\": -1, \"background_image\": -1,\"background_color\": \"\" ,\"disabled\": 0, \"custom_thumbnail\": -1, \"transitions\": []}' autocomplete=\"off\">
    </div>
    <div class=\"md-slidewrap {{ fullWidth }}\"
         style=\"height: {{ settings.height  }}px; {{ wrapWidth }}\">
        <div class=\"md-slide-image\"
             style=\"height: {{ settings.height  }}px; {{ wrapWidth }}\"></div>
        <div class=\"md-objects\" style=\"width: {{ settings.width  }}px; height: {{ settings.height  }}px;\">
        </div>
    </div>
</div>
<div id=\"dlg-video\" style=\"display:none;\" title=\"Item setting\"></div>
<input type=\"hidden\" value=\"{{ settings.delay }}\" name=\"default-timelinewidth\">
";
    }
}
