<?php

/* themes/porto/templates/node/product/commerce-product--default.html.twig */
class __TwigTemplate_7d92e8a0bfb6311e01111cf84bd6a4ee4f729809b536b732c723d83577c58bca extends Twig_Template
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
        $tags = array("set" => 23, "if" => 32, "for" => 88);
        $filters = array("trim" => 38, "striptags" => 38, "render" => 38, "length" => 85);
        $functions = array("file_url" => 56);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('trim', 'striptags', 'render', 'length'),
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

        // line 22
        echo "
";
        // line 23
        $context["images"] = $this->getAttribute((isset($context["product_entity"]) ? $context["product_entity"] : null), "field_images", array());
        // line 24
        $context["thumbnail"] = $this->getAttribute((isset($context["product_entity"]) ? $context["product_entity"] : null), "field_thumbnail", array());
        // line 25
        $context["ratingCount"] = 0;
        // line 26
        $context["ratingPercent"] = 0;
        // line 27
        $context["ratingNumber"] = 0;
        // line 28
        $context["sizes"] = $this->getAttribute((isset($context["product_entity"]) ? $context["product_entity"] : null), "field_product_size", array());
        // line 29
        $context["colors"] = $this->getAttribute((isset($context["product_entity"]) ? $context["product_entity"] : null), "field_product_color", array());
        // line 30
        echo "
";
        // line 31
        $context["view_mode"] = $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "#view_mode", array(), "array");
        // line 32
        if (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "default")) {
            // line 33
            echo "
    <div class=\"hidden\">
        ";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "variations", array()), "html", null, true));
            echo "
    </div>

    ";
            // line 38
            if ((trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "field_regular_price", array())))) != "")) {
                // line 39
                echo "        <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["product_url"]) ? $context["product_url"] : null), "html", null, true));
                echo "\">
            <span class=\"onsale\">Sale!</span>
        </a>
    ";
            }
            // line 43
            echo "
    <span class=\"product-thumb-info\">
        <a href=\"javascript:void(0);\" class=\"add-to-cart-product\" onclick=\"addToCartInList(";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["product_entity"]) ? $context["product_entity"] : null), "id", array()), "html", null, true));
            echo ");\">
            <span><i class=\"fa fa-shopping-cart\"></i> Add to Cart</span>
        </a>
        <a href=\"";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["product_url"]) ? $context["product_url"] : null), "html", null, true));
            echo "\">
            <span class=\"product-thumb-info-image\">
                <span class=\"product-thumb-info-act\">
                    <span class=\"product-thumb-info-act-left\"><em>View</em></span>
                    <span class=\"product-thumb-info-act-right\"><em><i class=\"fa fa-plus\"></i> Details</em></span>
                </span>

                ";
            // line 55
            if ($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array())) {
                // line 56
                echo "                    <img alt=\"\" class=\"img-responsive\" src=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array()))), "html", null, true));
                echo "\">
                ";
            } else {
                // line 58
                echo "                    <img alt=\"\" class=\"img-responsive\" src=\"http://placehold.it/800x800\">
                ";
            }
            // line 60
            echo "
            </span>
        </a>
        <span class=\"product-thumb-info-content\">
            <a href=\"";
            // line 64
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["product_url"]) ? $context["product_url"] : null), "html", null, true));
            echo "\">
                <h4>";
            // line 65
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true));
            echo "</h4>
                <span class=\"price\">

                    ";
            // line 68
            if ((trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "field_regular_price", array())))) != "")) {
                // line 69
                echo "                        <del><span class=\"amount\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "field_regular_price", array())))), "html", null, true));
                echo "</span></del>
                        <ins><span class=\"amount\">";
                // line 70
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "variation_price", array())))), "html", null, true));
                echo "</span></ins>
                        ";
            } else {
                // line 72
                echo "                        <span class=\"amount\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "variation_price", array()))), "html", null, true));
                echo "</span>
                    ";
            }
            // line 74
            echo "
                </span>
            </a>
        </span>
    </span>

";
        } else {
            // line 81
            echo "
    <div class=\"row\">
        <div class=\"col-md-6\">

            ";
            // line 85
            if (twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null))) {
                // line 86
                echo "
                <div class=\"owl-carousel owl-theme\" data-plugin-options='{\"items\": 1}'>
                    ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 89
                    echo "                        <div>
                            <div class=\"thumbnail\">
                                <img alt=\"\" class=\"img-responsive img-rounded\" src=\"";
                    // line 91
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($context["image"], "entity", array()), "fileuri", array()))), "html", null, true));
                    echo "\">
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                </div>

            ";
            } else {
                // line 98
                echo "
                <div class=\"thumbnail\">
                    ";
                // line 100
                if ($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array())) {
                    // line 101
                    echo "                        <img alt=\"\" class=\"img-responsive img-rounded\" src=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "entity", array()), "fileuri", array()))), "html", null, true));
                    echo "\">
                    ";
                } else {
                    // line 103
                    echo "                        <img alt=\"\" class=\"img-responsive img-rounded\" src=\"http://placehold.it/800x800\">
                    ";
                }
                // line 105
                echo "                </div>

            ";
            }
            // line 108
            echo "
        </div>

        <div class=\"col-md-6\">

            <div class=\"summary entry-summary\">

                <h1 class=\"mb-none\"><strong>";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true));
            echo "</strong></h1>

                <div class=\"review_num\">
                    <span class=\"count\" itemprop=\"ratingCount\">";
            // line 118
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ratingCount"]) ? $context["ratingCount"] : null), "html", null, true));
            echo "</span> review(s)
                </div>


                <div title=\"Rated ";
            // line 122
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ratingNumber"]) ? $context["ratingNumber"] : null), "html", null, true));
            echo " out of 5\" class=\"star-rating\" ";
            if (((isset($context["ratingCount"]) ? $context["ratingCount"] : null) < 3)) {
                echo "style=\"opacity: 0;\"";
            }
            echo ">
                    <span style=\"width:";
            // line 123
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ratingPercent"]) ? $context["ratingPercent"] : null), "html", null, true));
            echo "%\"><strong class=\"rating\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ratingNumber"]) ? $context["ratingNumber"] : null), "html", null, true));
            echo "</strong> out of 5</span>
                </div>

                <p class=\"price\">
                    <span class=\"amount\">";
            // line 127
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "variation_price", array()))), "html", null, true));
            echo "</span>
                </p>

                <p class=\"taller\">";
            // line 130
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["product_entity"]) ? $context["product_entity"] : null), "body", array()), "summary", array())), "html", null, true));
            echo "</p>

                ";
            // line 132
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "variations", array()), "html", null, true));
            echo "

                <div class=\"product_meta\">
                    <span class=\"posted_in\">Categories: ";
            // line 135
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "field_category", array())), "html", null, true));
            echo "</span>
                </div>

            </div>


        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"tabs tabs-product\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#productDescription\" data-toggle=\"tab\">Description</a></li>
                    <li><a href=\"#productInfo\" data-toggle=\"tab\">Aditional Information</a></li>
                    <li><a href=\"#productReviews\" data-toggle=\"tab\">Reviews (";
            // line 150
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ratingCount"]) ? $context["ratingCount"] : null), "html", null, true));
            echo ")</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"productDescription\">
                        ";
            // line 154
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "body", array()), "html", null, true));
            echo "
                    </div>
                    <div class=\"tab-pane\" id=\"productInfo\">
                        <table class=\"table table-striped mt-xl\">
                            <tbody>

                                ";
            // line 160
            if (twig_length_filter($this->env, (isset($context["sizes"]) ? $context["sizes"] : null))) {
                // line 161
                echo "                                    <tr>
                                        <th>
                                            Size:
                                        </th>
                                        <td>
                                            ";
                // line 166
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "field_product_size", array()))), "html", null, true));
                echo "
                                        </td>
                                    </tr>
                                ";
            }
            // line 170
            echo "
                                ";
            // line 171
            if (twig_length_filter($this->env, (isset($context["colors"]) ? $context["colors"] : null))) {
                // line 172
                echo "                                    <tr>
                                        <th>
                                            Colors
                                        </th>
                                        <td>
                                            ";
                // line 177
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "field_product_color", array()))), "html", null, true));
                echo "
                                        </td>
                                    </tr>
                                ";
            }
            // line 181
            echo "
                                ";
            // line 182
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "field_material", array())) {
                // line 183
                echo "                                    <tr>
                                        <th>
                                            Material
                                        </th>
                                        <td>
                                            ";
                // line 188
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "field_material", array()))), "html", null, true));
                echo "
                                        </td>
                                    </tr>
                                ";
            }
            // line 192
            echo "
                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"productReviews\">
                        ";
            // line 197
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "field_comments", array()), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class=\"tall\">

";
        }
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/node/product/commerce-product--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 197,  362 => 192,  355 => 188,  348 => 183,  346 => 182,  343 => 181,  336 => 177,  329 => 172,  327 => 171,  324 => 170,  317 => 166,  310 => 161,  308 => 160,  299 => 154,  292 => 150,  274 => 135,  268 => 132,  263 => 130,  257 => 127,  248 => 123,  240 => 122,  233 => 118,  227 => 115,  218 => 108,  213 => 105,  209 => 103,  203 => 101,  201 => 100,  197 => 98,  192 => 95,  182 => 91,  178 => 89,  174 => 88,  170 => 86,  168 => 85,  162 => 81,  153 => 74,  147 => 72,  142 => 70,  137 => 69,  135 => 68,  129 => 65,  125 => 64,  119 => 60,  115 => 58,  109 => 56,  107 => 55,  97 => 48,  91 => 45,  87 => 43,  79 => 39,  77 => 38,  71 => 35,  67 => 33,  65 => 32,  63 => 31,  60 => 30,  58 => 29,  56 => 28,  54 => 27,  52 => 26,  50 => 25,  48 => 24,  46 => 23,  43 => 22,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 *
 * Default product template.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product: The rendered product fields.
 *   Use 'product' to print them all, or print a subset such as
 *   'product.title'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product|without('title') }}
 *   @endcode
 * - product_entity: The product entity.
 * - product_url: The product URL.
 *
 * @ingroup themeable
 */
#}

{% set images = product_entity.field_images %}
{% set thumbnail = product_entity.field_thumbnail %}
{% set ratingCount = 0 %}
{% set ratingPercent = 0 %}
{% set ratingNumber = 0 %}
{% set sizes = product_entity.field_product_size %}
{% set colors = product_entity.field_product_color %}

{% set view_mode = product.title['#view_mode'] %}
{% if view_mode == 'default' %}

    <div class=\"hidden\">
        {{ product.variations }}
    </div>

    {% if product.field_regular_price|render|striptags|trim != '' %}
        <a href=\"{{ product_url }}\">
            <span class=\"onsale\">Sale!</span>
        </a>
    {% endif %}

    <span class=\"product-thumb-info\">
        <a href=\"javascript:void(0);\" class=\"add-to-cart-product\" onclick=\"addToCartInList({{ product_entity.id }});\">
            <span><i class=\"fa fa-shopping-cart\"></i> Add to Cart</span>
        </a>
        <a href=\"{{ product_url }}\">
            <span class=\"product-thumb-info-image\">
                <span class=\"product-thumb-info-act\">
                    <span class=\"product-thumb-info-act-left\"><em>View</em></span>
                    <span class=\"product-thumb-info-act-right\"><em><i class=\"fa fa-plus\"></i> Details</em></span>
                </span>

                {% if thumbnail.entity.fileuri %}
                    <img alt=\"\" class=\"img-responsive\" src=\"{{ file_url(thumbnail.entity.fileuri) }}\">
                {% else %}
                    <img alt=\"\" class=\"img-responsive\" src=\"http://placehold.it/800x800\">
                {% endif %}

            </span>
        </a>
        <span class=\"product-thumb-info-content\">
            <a href=\"{{ product_url }}\">
                <h4>{{ product.title }}</h4>
                <span class=\"price\">

                    {% if product.field_regular_price|render|striptags|trim != '' %}
                        <del><span class=\"amount\">{{ product.field_regular_price|render|striptags|trim }}</span></del>
                        <ins><span class=\"amount\">{{ product.variation_price|render|striptags|trim }}</span></ins>
                        {% else %}
                        <span class=\"amount\">{{ product.variation_price|render|striptags }}</span>
                    {% endif %}

                </span>
            </a>
        </span>
    </span>

{% else %}

    <div class=\"row\">
        <div class=\"col-md-6\">

            {% if images|length %}

                <div class=\"owl-carousel owl-theme\" data-plugin-options='{\"items\": 1}'>
                    {% for image  in images %}
                        <div>
                            <div class=\"thumbnail\">
                                <img alt=\"\" class=\"img-responsive img-rounded\" src=\"{{ file_url(image.entity.fileuri) }}\">
                            </div>
                        </div>
                    {% endfor %}
                </div>

            {% else %}

                <div class=\"thumbnail\">
                    {% if thumbnail.entity.fileuri %}
                        <img alt=\"\" class=\"img-responsive img-rounded\" src=\"{{ file_url(thumbnail.entity.fileuri) }}\">
                    {% else %}
                        <img alt=\"\" class=\"img-responsive img-rounded\" src=\"http://placehold.it/800x800\">
                    {% endif %}
                </div>

            {% endif %}

        </div>

        <div class=\"col-md-6\">

            <div class=\"summary entry-summary\">

                <h1 class=\"mb-none\"><strong>{{ product.title }}</strong></h1>

                <div class=\"review_num\">
                    <span class=\"count\" itemprop=\"ratingCount\">{{ ratingCount }}</span> review(s)
                </div>


                <div title=\"Rated {{ ratingNumber }} out of 5\" class=\"star-rating\" {% if ratingCount < 3 %}style=\"opacity: 0;\"{% endif %}>
                    <span style=\"width:{{ ratingPercent }}%\"><strong class=\"rating\">{{ ratingNumber }}</strong> out of 5</span>
                </div>

                <p class=\"price\">
                    <span class=\"amount\">{{ product.variation_price|render|striptags }}</span>
                </p>

                <p class=\"taller\">{{ product_entity.body.summary|striptags}}</p>

                {{ product.variations }}

                <div class=\"product_meta\">
                    <span class=\"posted_in\">Categories: {{ product.field_category|render }}</span>
                </div>

            </div>


        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"tabs tabs-product\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#productDescription\" data-toggle=\"tab\">Description</a></li>
                    <li><a href=\"#productInfo\" data-toggle=\"tab\">Aditional Information</a></li>
                    <li><a href=\"#productReviews\" data-toggle=\"tab\">Reviews ({{ ratingCount }})</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"productDescription\">
                        {{ product.body }}
                    </div>
                    <div class=\"tab-pane\" id=\"productInfo\">
                        <table class=\"table table-striped mt-xl\">
                            <tbody>

                                {% if sizes|length %}
                                    <tr>
                                        <th>
                                            Size:
                                        </th>
                                        <td>
                                            {{ product.field_product_size|render|striptags }}
                                        </td>
                                    </tr>
                                {% endif %}

                                {% if colors|length %}
                                    <tr>
                                        <th>
                                            Colors
                                        </th>
                                        <td>
                                            {{ product.field_product_color|render|striptags }}
                                        </td>
                                    </tr>
                                {% endif %}

                                {% if product.field_material %}
                                    <tr>
                                        <th>
                                            Material
                                        </th>
                                        <td>
                                            {{ product.field_material|render|striptags }}
                                        </td>
                                    </tr>
                                {% endif %}

                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"productReviews\">
                        {{ product.field_comments }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class=\"tall\">

{% endif %}";
    }
}
