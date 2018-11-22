<?php

/* modular/banner.html.twig */
class __TwigTemplate_5c16fa6849d31809c4f01fc4179bdb06bf0ca18edfe9e7e3ba6c099c9cf1b0e3 extends Twig_Template
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
        echo "<div class=\"banner\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background_image", array())) {
            echo " style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background_image", array()), array(), "array"), "cache", array()), "url", array());
            echo ")\"";
        }
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.2s\">";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "heading", array());
        echo "</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
                <div class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.4s\">";
        // line 7
        echo ($context["content"] ?? null);
        echo "</div>
                ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_url", array())) {
            // line 9
            echo "                <div class=\"button-container\">
                    <a href=\"";
            // line 10
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_url", array());
            echo "\" class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.5s\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_label", array());
            echo "</a>
                </div>
                ";
        }
        // line 13
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  45 => 10,  42 => 9,  40 => 8,  36 => 7,  31 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"banner\"{% if page.header.background_image %} style=\"background-image: url({{ page.media.images[page.header.background_image].cache.url }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.2s\">{{ page.header.heading }}</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
                <div class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.4s\">{{ content }}</div>
                {% if page.header.button_url %}
                <div class=\"button-container\">
                    <a href=\"{{ page.header.button_url }}\" class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.5s\">{{ page.header.button_label }}</a>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "modular/banner.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/themes/mache/templates/modular/banner.html.twig");
    }
}
