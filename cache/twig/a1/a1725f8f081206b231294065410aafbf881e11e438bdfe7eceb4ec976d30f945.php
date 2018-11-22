<?php

/* default.html.twig */
class __TwigTemplate_345364ba78c1592bcdcb7c45358cf85a9fa1078c5e0fafb224c9f33613036b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\" id=\"defcontent\">
        ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array())) {
            // line 7
            echo "            <h2>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "</h2>
            <span class=\"line\"></span>
        ";
        }
        // line 10
        echo "        ";
        if (($context["content"] ?? null)) {
            // line 11
            echo "            ";
            echo ($context["content"] ?? null);
            echo "
        ";
        }
        // line 13
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  47 => 11,  44 => 10,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div class=\"container\">
    <div class=\"row\" id=\"defcontent\">
        {% if page.header.title %}
            <h2>{{ page.header.title }}</h2>
            <span class=\"line\"></span>
        {% endif %}
        {% if content %}
            {{ content }}
        {% endif %}
    </div>
</div>
{% endblock %}

", "default.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/themes/mymache/templates/default.html.twig");
    }
}
