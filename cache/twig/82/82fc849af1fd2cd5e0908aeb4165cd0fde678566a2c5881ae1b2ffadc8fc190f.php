<?php

/* error.html.twig */
class __TwigTemplate_e7251b7159ac7f33a6e4d35af229d2f359f49796546d903063e1f64c75065ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
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
        <h2>";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ERROR");
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "http_response_code", array());
        echo "</h2>
        <span class=\"line\"></span>
        <center>
            <h3 class=\"top\">";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</h3>
        </center>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
        <h2>{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h2>
        <span class=\"line\"></span>
        <center>
            <h3 class=\"top\">{{ page.content }}</h3>
        </center>
    </div>
</div>
{% endblock %}


", "error.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/themes/mymache/templates/error.html.twig");
    }
}
