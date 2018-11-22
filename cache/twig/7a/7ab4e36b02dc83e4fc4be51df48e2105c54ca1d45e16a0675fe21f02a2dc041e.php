<?php

/* modular/features.html.twig */
class __TwigTemplate_c75be149452e91eb61d967eebad24dec2aa78bd84c35e932dfdbe06937464a5c extends Twig_Template
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
        // line 1
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "features", array())) {
            // line 2
            echo "<section class=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            ";
            // line 5
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array())) {
                // line 6
                echo "                    <h2>";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
                echo "</h2>
                    <span class=\"line\"></span>
                ";
            }
            // line 9
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "features", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 10
                echo "            <div class=\"col-lg-4 col-sm-4 col-md-4 os-animation\" data-os-animation=\"bounceIn\" data-os-animation-delay=\"0.3s\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-4 col-md-4\">
                        ";
                // line 13
                if ($this->getAttribute($context["feature"], "icon", array())) {
                    // line 14
                    echo "                        ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["feature"], "icon", array()), array(), "array"), "cache", array()), "html", array());
                    echo "
                        ";
                }
                // line 16
                echo "                    </div>
                    <div class=\"col-lg-9 col-sm-8 col-md-8\">
                        <h3>";
                // line 18
                echo $this->getAttribute($context["feature"], "title", array());
                echo "</h3>
                        <p>";
                // line 19
                echo $this->getAttribute($context["feature"], "description", array());
                echo "</p>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  61 => 19,  57 => 18,  53 => 16,  47 => 14,  45 => 13,  40 => 10,  35 => 9,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.header.features %}
<section class=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            {% if page.header.title %}
                    <h2>{{ page.header.title }}</h2>
                    <span class=\"line\"></span>
                {% endif %}
            {% for feature in page.header.features %}
            <div class=\"col-lg-4 col-sm-4 col-md-4 os-animation\" data-os-animation=\"bounceIn\" data-os-animation-delay=\"0.3s\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-4 col-md-4\">
                        {% if feature.icon %}
                        {{ page.media.images[feature.icon].cache.html }}
                        {% endif %}
                    </div>
                    <div class=\"col-lg-9 col-sm-8 col-md-8\">
                        <h3>{{ feature.title }}</h3>
                        <p>{{ feature.description }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endif %}
", "modular/features.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/themes/mymache/templates/modular/features.html.twig");
    }
}
