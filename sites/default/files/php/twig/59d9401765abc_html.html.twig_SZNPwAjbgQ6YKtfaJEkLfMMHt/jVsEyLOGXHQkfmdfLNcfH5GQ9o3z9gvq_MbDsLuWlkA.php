<?php

/* themes/porto/templates/html.html.twig */
class __TwigTemplate_ca11106ed3dc770bc6325e07cd1432e46b3e2c5f93c822ebbe5e3bfbb9961cf4 extends Twig_Template
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
        $tags = array("if" => 3);
        $filters = array("raw" => 6, "safe_join" => 7, "t" => 54);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw', 'safe_join', 't'),
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
        echo "
<!DOCTYPE html>
<html";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo " class=\"";
        if (((isset($context["h_semi_transparent_option"]) ? $context["h_semi_transparent_option"] : null) == 1)) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("side-header side-header-semi-transparent "));
        } else {
            if (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-side-header-semi-transparent")) {
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("side-header side-header-semi-transparent"));
            }
        }
        if (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_left")) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("side-header"));
        } elseif (((isset($context["header_option"]) ? $context["header_option"] : null) == "h_right")) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("side-header side-header-right"));
        } else {
            if (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-side-header-left")) {
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("side-header"));
            } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-header-side-header-right")) {
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("side-header side-header-right"));
            }
        }
        echo " ";
        if (((isset($context["arg"]) ? $context["arg"] : null) == "index-layout-boxed")) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("boxed"));
        } elseif (((isset($context["arg"]) ? $context["arg"] : null) == "index-layout-dark")) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("dark"));
        } else {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["layout_option"]) ? $context["layout_option"] : null), "html", null, true));
        }
        echo "\">

  <head>
    <head-placeholder token=\"";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">
    <css-placeholder token=\"";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    ";
        // line 11
        if (((isset($context["skin_option"]) ? $context["skin_option"] : null) == "none")) {
            // line 12
            echo "    ";
            if (((isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-3")) {
                // line 13
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
                echo "/css/skins/skin-corporate-3.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 14
(isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-4")) {
                // line 15
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
                echo "/css/skins/skin-corporate-4.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 16
(isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-5")) {
                // line 17
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
                echo "/css/skins/skin-corporate-5.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 18
(isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-6")) {
                // line 19
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
                echo "/css/skins/skin-corporate-6.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 20
(isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-7")) {
                // line 21
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
                echo "/css/skins/skin-corporate-7.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 22
(isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-8")) {
                // line 23
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
                echo "/css/skins/skin-corporate-8.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 24
(isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-hosting")) {
                // line 25
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
                echo "/css/skins/skin-corporate-hosting.css' type='text/css' media='all' />
   ";
                // line 28
                echo "    ";
            }
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        <link rel='stylesheet' href='";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
            echo "/css/skins/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["skin_option"]) ? $context["skin_option"] : null), "html", null, true));
            echo ".css' type='text/css' media='all' />
    ";
        }
        // line 32
        echo "    ";
        if (((isset($context["rtl"]) ? $context["rtl"] : null) == 1)) {
            // line 33
            echo "        <link rel='stylesheet' href='";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
            echo "/css/rtl-theme.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
            echo "/css/rtl-theme-elements.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
            echo "/css/rtl-theme-blog.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_root"]) ? $context["theme_root"] : null), "html", null, true));
            echo "/css/rtl-theme-shop.css' type='text/css' media='all' />
    ";
        }
        // line 38
        echo "    ";
        if ( !twig_test_empty((isset($context["your_css"]) ? $context["your_css"] : null))) {
            // line 39
            echo "        <style>
            ";
            // line 40
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["your_css"]) ? $context["your_css"] : null), "html", null, true));
            echo "
        </style>
    ";
        }
        // line 43
        echo "    <js-placeholder token=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <meta name=\"HandheldFriendly\" content=\"true\" />
    <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
  </head>
  <body";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " ";
        if (((isset($context["arg"]) ? $context["arg"] : null) == "index-one-page")) {
            echo " class=\"one-page\" ";
        }
        echo " data-target=\"";
        if (((isset($context["arg"]) ? $context["arg"] : null) == "index-corporate-hosting")) {
            echo "#navSecondary";
        } else {
            echo "#header";
        }
        echo "\" data-spy=\"scroll\" data-offset=\"100\">
  ";
        // line 48
        if (((isset($context["loader"]) ? $context["loader"] : null) == 1)) {
            // line 49
            echo "  <div class=\"preloader\">
      <div class=\"status\">&nbsp;</div>
  </div>
  ";
        }
        // line 53
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>
    <div class=\"body\">
        ";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
        ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
        ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    </div>
    <js-bottom-placeholder token=\"";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 61,  240 => 59,  236 => 58,  232 => 57,  226 => 54,  223 => 53,  217 => 49,  215 => 48,  201 => 47,  193 => 43,  187 => 40,  184 => 39,  181 => 38,  176 => 36,  172 => 35,  168 => 34,  163 => 33,  160 => 32,  152 => 30,  149 => 29,  146 => 28,  141 => 25,  139 => 24,  134 => 23,  132 => 22,  127 => 21,  125 => 20,  120 => 19,  118 => 18,  113 => 17,  111 => 16,  106 => 15,  104 => 14,  99 => 13,  96 => 12,  94 => 11,  90 => 10,  84 => 7,  80 => 6,  47 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "
<!DOCTYPE html>
<html{{ html_attributes }} class=\"{% if h_semi_transparent_option == 1 %}{{ 'side-header side-header-semi-transparent ' }}{% else %}{% if arg == 'index-header-side-header-semi-transparent' %}{{ 'side-header side-header-semi-transparent' }}{% endif %}{% endif %}{% if header_option == 'h_left' %}{{ 'side-header' }}{% elseif header_option == 'h_right' %}{{ 'side-header side-header-right' }}{% else %}{% if arg == 'index-header-side-header-left' %}{{ 'side-header' }}{% elseif arg == 'index-header-side-header-right' %}{{ 'side-header side-header-right' }}{% endif %}{% endif %} {% if arg == 'index-layout-boxed' %}{{ 'boxed' }}{% elseif arg == 'index-layout-dark' %}{{ 'dark' }}{% else %}{{ layout_option }}{% endif %}\">

  <head>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    {% if skin_option == 'none' %}
    {% if arg == 'index-corporate-3' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-3.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-4' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-4.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-5' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-5.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-6' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-6.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-7' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-7.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-8' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-8.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-hosting' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-hosting.css' type='text/css' media='all' />
   {#{% else %}
        <link rel='stylesheet' href='{{ theme_root }}/ css/skins/default.css' type='text/css' media='all' />#}
    {% endif %}
    {% else %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/{{ skin_option }}.css' type='text/css' media='all' />
    {% endif %}
    {% if rtl == 1 %}
        <link rel='stylesheet' href='{{ theme_root }}/css/rtl-theme.css' type='text/css' media='all' />
        <link rel='stylesheet' href='{{ theme_root }}/css/rtl-theme-elements.css' type='text/css' media='all' />
        <link rel='stylesheet' href='{{ theme_root }}/css/rtl-theme-blog.css' type='text/css' media='all' />
        <link rel='stylesheet' href='{{ theme_root }}/css/rtl-theme-shop.css' type='text/css' media='all' />
    {% endif %}
    {% if your_css is not empty %}
        <style>
            {{ your_css }}
        </style>
    {% endif %}
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
    <meta name=\"HandheldFriendly\" content=\"true\" />
    <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
  </head>
  <body{{ attributes }} {% if arg == 'index-one-page' %} class=\"one-page\" {% endif %} data-target=\"{% if arg == 'index-corporate-hosting' %}#navSecondary{% else %}#header{% endif %}\" data-spy=\"scroll\" data-offset=\"100\">
  {% if loader == 1 %}
  <div class=\"preloader\">
      <div class=\"status\">&nbsp;</div>
  </div>
  {% endif %}
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>
    <div class=\"body\">
        {{ page_top }}
        {{ page }}
        {{ page_bottom }}
    </div>
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
  </body>
</html>

";
    }
}
