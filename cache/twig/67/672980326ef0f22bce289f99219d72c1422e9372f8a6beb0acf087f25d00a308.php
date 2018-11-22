<?php

/* partials/base.html.twig */
class __TwigTemplate_081f6a4fae30adb0e3ea7da316455c5e0f2455f9002675438f9629a14206037a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 3
        $context["favicon"] = "";
        // line 4
        $context["logo"] = "";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", array())) > 0)) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "favicon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                $context["favicon"] = $this->getAttribute($context["item"], "name", array());
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "logo", array())) > 0)) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "logo", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "        ";
                $context["logo"] = $this->getAttribute($context["item"], "name", array());
                // line 13
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 16
        echo "<!doctype html>
<html>
    <head>
        <script src=\"./user/themes/mymache/js/smooth-scroll.polyfills.js\"></script>
        <meta charset=\"utf-8\">
        <title>";
        // line 21
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
        ";
        // line 22
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 22)->display($context);
        // line 23
        echo "        <meta name=\"viewport\" content=\"width=device-width initial-scale=1.0\">

        ";
        // line 25
        if (($context["favicon"] ?? null)) {
            // line 26
            echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . ($context["favicon"] ?? null)));
            echo "\" />
        ";
        }
        // line 28
        echo "
        <link rel=\"canonical\" href=\"";
        // line 29
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
    </head>

    <body>
        <div class=\"se-pre-con\">
            <div class=\"box loading\"></div>
        </div>

        <header>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"logo\">
                            ";
        // line 56
        if (($context["logo"] ?? null)) {
            // line 57
            echo "                            <a href=\"";
            echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
            echo "\"><img src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . ($context["logo"] ?? null)));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array()), "html");
            echo "\"/></a>
                            ";
        }
        // line 59
        echo "                        </div>

                        <nav class=\"nav-collapse\">
                            ";
        // line 62
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 62)->display($context);
        // line 63
        echo "                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <script>
\t        var scroll = new SmoothScroll('a[href*=\"#\"]');
        </script>

        ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "
\t\t<footer class=\"footer-distributed\">
            <div class=\"container\">
                <div class=\"row col-lg-12\">
        \t\t\t<div class=\"footer-left \">
        \t\t\t    <ul>
    \t\t\t\t\t    <li><a href=\"./#\">Home</a></li>
    \t\t\t\t\t    <li><a href=\"./agb\">AGB</a></li>
    \t\t\t\t\t    <li><a href=\"./impressum\">Impressum</a></li>
    \t\t\t\t        <li><a href=\"./datenschutz\">Datenschutz</a></li>
 
        \t\t\t    </ul>
        \t\t\t</div>
        
        \t\t\t<div class=\"footer-center \">
    \t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
    \t\t\t\t\t<p>
                            <span><b>DD Pasuljanovic Transporte</b></span>
    \t\t\t\t\t    <span>Haini-Rennhasstrasse 20</span>
    \t\t\t\t\t    <span>CH-9403 Goldach</span>
                            <span>Schweiz</span>
    \t\t\t\t\t</p>
        \t\t\t</div>\t
        \t\t\t
                    <div class=\"footer-center \">
                        <div>
                            <i class=\"fas fa-mobile-alt\"></i>
                            <p><a href=\"tel:0041763827609\">+41 76 382 76 09</a></p>
                        </div>
                        <div>
                            <i class=\"fas fa-envelope\"></i>
                            <p><a href=\"mailto:info@ddp-transporte.ch\">info@ddp-transporte.ch</a></p>
                        </div>
                        <div>
                            <i class=\"fab fa-facebook-f\"></i>
                            <p><a href=\"https://www.facebook.com/DD-Pasuljanovic-Transporte-292168738056955\">Facebook</a></p>
                        </div>
                         <div>
                           <i class=\"fab fa-instagram\"></i>
                            <p><a href=\"https://www.instagram.com/ddpasuljanovic/\">Instagram</a></p>
                        </div>
        \t\t\t</div>
        
        \t\t\t<div class=\"footer-right \">
                        <p>
        \t\t\t\t    Free Template designed by<br>
        \t\t\t\t    <a href=\"http://freetemplates.pro\" target=\"_blank\">freetemplates.pro</a><br>
        \t\t\t\t    <a href=\"http://symu.co\" target=\"_blank\">symu.co</a><br>
                        </p>
                        
                        <p>
        \t\t\t\t    Website created with <i class=\"fa fa-heart\"></i> by
        \t\t\t\t    <a href=\"http://strainovic-it.ch\" target=\"_blank\">strainovic-it.ch</a>
                        </p>
        \t\t\t</div>
        \t\t</div>\t
            </div>
\t\t</footer>

        ";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 142
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
        ";
        // line 143
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
    </body>
</html>
";
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 32
        echo "            <link href='https://fonts.googleapis.com/css?family=Lato:100,400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
            ";
        // line 34
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/fonts.css"), "method");
        // line 35
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/grid.css"), "method");
        // line 36
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 37
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/menu.css"), "method");
        // line 38
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/jquery.bxslider.css"), "method");
        // line 39
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/responsive.css"), "method");
        // line 40
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 41
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/fa-all.css"), "method");
        // line 42
        echo "        ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        // line 74
        echo "            ";
        echo ($context["content"] ?? null);
        echo "
        ";
    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        // line 136
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 137
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.bxslider.js"), "method");
        // line 138
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/script.js"), "method");
        // line 139
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/fixed-responsive-nav.js"), "method");
        // line 140
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 141
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 141,  289 => 140,  286 => 139,  283 => 138,  280 => 137,  277 => 136,  274 => 135,  267 => 74,  264 => 73,  260 => 42,  257 => 41,  254 => 40,  251 => 39,  248 => 38,  245 => 37,  242 => 36,  239 => 35,  236 => 34,  233 => 32,  230 => 31,  222 => 143,  217 => 142,  215 => 135,  154 => 76,  152 => 73,  140 => 63,  138 => 62,  133 => 59,  123 => 57,  121 => 56,  104 => 43,  102 => 31,  97 => 29,  94 => 28,  88 => 26,  86 => 25,  82 => 23,  80 => 22,  72 => 21,  65 => 16,  57 => 13,  54 => 12,  49 => 11,  47 => 10,  40 => 8,  37 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set favicon = '' %}
{% set logo = '' %}
{% if theme_config.favicon|length > 0 %}
    {% for item in theme_config.favicon %}
        {% set favicon = item.name %}
    {% endfor %}
{% endif %}
{% if theme_config.logo|length > 0 %}
    {% for item in theme_config.logo %}
        {% set logo = item.name %}
    {% endfor %}
{% endif %}
{% endspaceless %}
<!doctype html>
<html>
    <head>
        <script src=\"./user/themes/mymache/js/smooth-scroll.polyfills.js\"></script>
        <meta charset=\"utf-8\">
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width initial-scale=1.0\">

        {% if favicon %}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/' ~ favicon) }}\" />
        {% endif %}

        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

        {% block stylesheets %}
            <link href='https://fonts.googleapis.com/css?family=Lato:100,400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
            {# <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> #}
            {% do assets.addCss('theme://css/fonts.css') %}
            {% do assets.addCss('theme://css/grid.css') %}
            {% do assets.addCss('theme://css/style.css') %}
            {% do assets.addCss('theme://css/menu.css') %}
            {% do assets.addCss('theme://css/jquery.bxslider.css') %}
            {% do assets.addCss('theme://css/responsive.css') %}
            {% do assets.addCss('theme://css/animate.css') %}
            {% do assets.addCss('theme://css/fa-all.css') %}
        {% endblock %}
        {{ assets.css() }}
    </head>

    <body>
        <div class=\"se-pre-con\">
            <div class=\"box loading\"></div>
        </div>

        <header>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"logo\">
                            {% if logo %}
                            <a href=\"{{ base_url == '' ? '/' : base_url }}\"><img src=\"{{ url('theme://images/' ~ logo) }}\" alt=\"{{ config.site.title|e('html') }}\"/></a>
                            {% endif %}
                        </div>

                        <nav class=\"nav-collapse\">
                            {% include 'partials/navigation.html.twig' %}
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <script>
\t        var scroll = new SmoothScroll('a[href*=\"#\"]');
        </script>

        {% block content %}
            {{ content}}
        {% endblock %}

\t\t<footer class=\"footer-distributed\">
            <div class=\"container\">
                <div class=\"row col-lg-12\">
        \t\t\t<div class=\"footer-left \">
        \t\t\t    <ul>
    \t\t\t\t\t    <li><a href=\"./#\">Home</a></li>
    \t\t\t\t\t    <li><a href=\"./agb\">AGB</a></li>
    \t\t\t\t\t    <li><a href=\"./impressum\">Impressum</a></li>
    \t\t\t\t        <li><a href=\"./datenschutz\">Datenschutz</a></li>
 
        \t\t\t    </ul>
        \t\t\t</div>
        
        \t\t\t<div class=\"footer-center \">
    \t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
    \t\t\t\t\t<p>
                            <span><b>DD Pasuljanovic Transporte</b></span>
    \t\t\t\t\t    <span>Haini-Rennhasstrasse 20</span>
    \t\t\t\t\t    <span>CH-9403 Goldach</span>
                            <span>Schweiz</span>
    \t\t\t\t\t</p>
        \t\t\t</div>\t
        \t\t\t
                    <div class=\"footer-center \">
                        <div>
                            <i class=\"fas fa-mobile-alt\"></i>
                            <p><a href=\"tel:0041763827609\">+41 76 382 76 09</a></p>
                        </div>
                        <div>
                            <i class=\"fas fa-envelope\"></i>
                            <p><a href=\"mailto:info@ddp-transporte.ch\">info@ddp-transporte.ch</a></p>
                        </div>
                        <div>
                            <i class=\"fab fa-facebook-f\"></i>
                            <p><a href=\"https://www.facebook.com/DD-Pasuljanovic-Transporte-292168738056955\">Facebook</a></p>
                        </div>
                         <div>
                           <i class=\"fab fa-instagram\"></i>
                            <p><a href=\"https://www.instagram.com/ddpasuljanovic/\">Instagram</a></p>
                        </div>
        \t\t\t</div>
        
        \t\t\t<div class=\"footer-right \">
                        <p>
        \t\t\t\t    Free Template designed by<br>
        \t\t\t\t    <a href=\"http://freetemplates.pro\" target=\"_blank\">freetemplates.pro</a><br>
        \t\t\t\t    <a href=\"http://symu.co\" target=\"_blank\">symu.co</a><br>
                        </p>
                        
                        <p>
        \t\t\t\t    Website created with <i class=\"fa fa-heart\"></i> by
        \t\t\t\t    <a href=\"http://strainovic-it.ch\" target=\"_blank\">strainovic-it.ch</a>
                        </p>
        \t\t\t</div>
        \t\t</div>\t
            </div>
\t\t</footer>

        {% block javascripts %}
            {% do assets.addJs('jquery', 101) %}
            {% do assets.addJs('theme://js/jquery.bxslider.js') %}
            {% do assets.addJs('theme://js/script.js') %}
            {% do assets.addJs('theme://js/fixed-responsive-nav.js') %}
            {% do assets.addJs('theme://js/waypoints.min.js') %}
        {% endblock %}
        {{ assets.js() }}
        {{ assets.js('bottom') }}
    </body>
</html>
", "partials/base.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/themes/mymache/templates/partials/base.html.twig");
    }
}
