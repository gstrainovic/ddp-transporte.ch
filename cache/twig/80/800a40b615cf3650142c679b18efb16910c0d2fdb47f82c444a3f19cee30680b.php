<?php

/* forms/fields/textarea/textarea.html.twig */
class __TwigTemplate_b82908ecbaa1aed693fb5dffbc71f4f9333e5c8d64b1fbed2b4ca32d426f2df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/textarea/textarea.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-textarea-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", array());
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
        echo "\">
        <textarea
            ";
        // line 7
        echo "            name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\"
            ";
        // line 9
        echo "            ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 27
        echo "            >";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["value"] ?? null)), "html");
        echo "</textarea>
    </div>
";
    }

    // line 9
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 10
        echo "                class=\"";
        echo ($context["form_field_textarea_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "classes", array());
        echo "\"
                ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 12
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 13
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "placeholder", array()));
            echo "\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 17
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", array());
            echo "\"";
        }
        // line 19
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array());
            echo "\"";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())) {
            echo "title=\"";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('tu')->getCallable(), array($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array()))));
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())));
            }
            echo "\"";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "rows", array(), "any", true, true)) {
            echo "rows=\"";
            echo $this->getAttribute(($context["field"] ?? null), "rows", array());
            echo "\"";
        }
        // line 23
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "cols", array(), "any", true, true)) {
            echo "cols=\"";
            echo $this->getAttribute(($context["field"] ?? null), "cols", array());
            echo "\"";
        }
        // line 24
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "minlength", array(), "any", true, true)) {
            echo "minlength=\"";
            echo $this->getAttribute(($context["field"] ?? null), "minlength", array());
            echo "\"";
        }
        // line 25
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "maxlength", array(), "any", true, true)) {
            echo "maxlength=\"";
            echo $this->getAttribute(($context["field"] ?? null), "maxlength", array());
            echo "\"";
        }
        // line 26
        echo "            ";
    }

    public function getTemplateName()
    {
        return "forms/fields/textarea/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 26,  159 => 25,  152 => 24,  145 => 23,  138 => 22,  127 => 21,  120 => 20,  115 => 19,  108 => 18,  103 => 17,  98 => 16,  93 => 15,  86 => 14,  81 => 13,  74 => 12,  68 => 11,  61 => 10,  58 => 9,  50 => 27,  47 => 9,  42 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"{{ form_field_wrapper_classes ?: 'form-textarea-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
        <textarea
            {# required attribute structures #}
            name=\"{{ (scope ~ field.name)|fieldName }}\"
            {# input attribute structures #}
            {% block input_attributes %}
                class=\"{{ form_field_textarea_classes }} {{ field.classes }}\"
                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                {% if field.validate.message %}title=\"{% if grav.twig.twig.filters['tu'] is defined %}{{ field.validate.message|tu|e }}{% else %}{{ field.validate.message|t|e }}{% endif %}\"{% endif %}
                {% if field.rows is defined %}rows=\"{{ field.rows }}\"{% endif %}
                {% if field.cols is defined %}cols=\"{{ field.cols }}\"{% endif %}
                {% if field.minlength is defined %}minlength=\"{{ field.minlength }}\"{% endif %}
                {% if field.maxlength is defined %}maxlength=\"{{ field.maxlength }}\"{% endif %}
            {% endblock %}
            >{{ value|trim|e('html') }}</textarea>
    </div>
{% endblock %}
", "forms/fields/textarea/textarea.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/plugins/form/templates/forms/fields/textarea/textarea.html.twig");
    }
}
