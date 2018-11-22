<?php

/* modular/cta3.html.twig */
class __TwigTemplate_ce2659b766b22e73c59c1ff66f8af286b48eeb8f0184b1ee76a0ded3af0abafb extends Twig_Template
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
        echo "<section class=\"cta3\">
    <div class=\"container\">
          <div class=\"row\">
             ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array())) {
            // line 5
            echo "            <div class=\"col-lg-6 col-sm-6 col-md-6\">&nbsp;</div>
            <div class=\"col-lg-6 col-sm-6 col-md-6 os-animation\" data-os-animation=\"fadeInRight\" data-os-animation-delay=\"0.4s\">
            ";
        } else {
            // line 8
            echo "            <div class=\"os-animation\" data-os-animation=\"fadeInRight\" data-os-animation-delay=\"0.4s\">
            ";
        }
        // line 10
        echo "                <h2>";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h2>
                <span class=\"line\"></span>
                ";
        // line 12
        echo ($context["content"] ?? null);
        echo "
                ";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_url", array())) {
            // line 14
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_label", array());
            echo "</a>
                ";
        }
        // line 16
        echo "            </div>
        </div>
    </div>
    ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array())) {
            // line 20
            echo "    <div class=\"safariimg os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">
        ";
            // line 21
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), array(), "array"), "cache", array()), "html", array());
            echo "
    </div>
    ";
        }
        // line 24
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "modular/cta3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  65 => 21,  62 => 20,  60 => 19,  55 => 16,  47 => 14,  45 => 13,  41 => 12,  35 => 10,  31 => 8,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"cta3\">
    <div class=\"container\">
          <div class=\"row\">
             {% if page.header.image %}
            <div class=\"col-lg-6 col-sm-6 col-md-6\">&nbsp;</div>
            <div class=\"col-lg-6 col-sm-6 col-md-6 os-animation\" data-os-animation=\"fadeInRight\" data-os-animation-delay=\"0.4s\">
            {% else %}
            <div class=\"os-animation\" data-os-animation=\"fadeInRight\" data-os-animation-delay=\"0.4s\">
            {% endif %}
                <h2>{{ page.header.title }}</h2>
                <span class=\"line\"></span>
                {{ content }}
                {% if page.header.button_url %}
                <a href=\"{{ page.header.button_url }}\">{{ page.header.button_label }}</a>
                {% endif %}
            </div>
        </div>
    </div>
    {% if page.header.image %}
    <div class=\"safariimg os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">
        {{ page.media.images[page.header.image].cache.html }}
    </div>
    {% endif %}
</section>
", "modular/cta3.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/themes/mache/templates/modular/cta3.html.twig");
    }
}
