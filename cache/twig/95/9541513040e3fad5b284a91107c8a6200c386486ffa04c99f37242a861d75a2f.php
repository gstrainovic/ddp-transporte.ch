<?php

/* forms/fields/hidden/hidden.html.twig */
class __TwigTemplate_dc21d2b77a1b264684399afae972ddc0ea3abf1d9cca1fa3d2bfbee0c0876631 extends Twig_Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? ((($this->getAttribute(($context["field"] ?? null), "evaluate", array())) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($context, $this->getAttribute(($context["field"] ?? null), "default", array()))) : ($this->getAttribute(($context["field"] ?? null), "default", array())))) : (($context["value"] ?? null)));
        // line 2
        echo "
<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/hidden/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? (field.evaluate ? evaluate(field.default) : field.default) : value) %}

<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ value|join(', ') }}\" />
", "forms/fields/hidden/hidden.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/plugins/form/templates/forms/fields/hidden/hidden.html.twig");
    }
}
