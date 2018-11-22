<?php

/* forms/field.html.twig */
class __TwigTemplate_1b07a8d5c1fee3fdef9effdde2cbd8357b296187b51dfe43acb4c12bc4d8d69e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'outer_field_classes' => array($this, 'block_outer_field_classes'),
            'contents' => array($this, 'block_contents'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 5
        $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", array())) . "-") . $this->getAttribute(($context["field"] ?? null), "name", array()));
        // line 6
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ((((null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null))))) : (($context["value"] ?? null)));
        // line 7
        $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", array()), $this->getAttribute(($context["field"] ?? null), "name", array()));
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"";
        echo ((($context["form_field_outer_classes"] ?? null)) ? (($context["form_field_outer_classes"] ?? null)) : ("form-field"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "outerclasses", array());
        echo " ";
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 11
        $this->displayBlock('contents', $context, $blocks);
        // line 68
        echo "    </div>
";
    }

    // line 10
    public function block_outer_field_classes($context, array $blocks = array())
    {
    }

    // line 11
    public function block_contents($context, array $blocks = array())
    {
        // line 12
        echo "            <div class=\"";
        echo ((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : ("form-data"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "dataclasses", array());
        echo "\"
                ";
        // line 13
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 18
        echo "            >
                ";
        // line 19
        $this->displayBlock('group', $context, $blocks);
        // line 60
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", array())) {
            // line 61
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
            echo "\">
                        <span class=\"form-description\">";
            // line 62
            echo $this->getAttribute(($context["field"] ?? null), "description", array());
            echo "</span>
                    </div>
                ";
        }
        // line 65
        echo "
            </div>
        ";
    }

    // line 13
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 14
        echo "                data-grav-field=\"";
        echo $this->getAttribute(($context["field"] ?? null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 15
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 19
    public function block_group($context, array $blocks = array())
    {
        // line 20
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 59
        echo "                ";
    }

    // line 20
    public function block_input($context, array $blocks = array())
    {
        // line 21
        echo "                        <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", array());
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
        echo "\">
                            ";
        // line 22
        $this->displayBlock('prepend', $context, $blocks);
        // line 23
        echo "                            <input
                                ";
        // line 25
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\"
                                value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 28
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 48
        echo "                            />
                            ";
        // line 49
        $this->displayBlock('append', $context, $blocks);
        // line 50
        echo "                            ";
        if (($this->getAttribute(($context["form"] ?? null), "inline_errors", array()) && ($context["errors"] ?? null))) {
            // line 51
            echo "                                <div class=\"";
            echo ((($context["form_errors_classes"] ?? null)) ? (($context["form_errors_classes"] ?? null)) : ("form-errors"));
            echo "\">
                                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 53
                echo "                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $context["error"];
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                </div>
                            ";
        }
        // line 57
        echo "                        </div>
                    ";
    }

    // line 22
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 28
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 29
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute(($context["field"] ?? null), "classes", array());
            echo "\" ";
        }
        // line 30
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 31
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 32
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 33
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "placeholder", array()));
            echo "\"";
        }
        // line 34
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 35
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 36
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 37
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", array());
            echo "\"";
        }
        // line 38
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "attributes", array(), "any", true, true)) {
            // line 39
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 40
                echo "                                          ";
                echo $this->getAttribute($context["attribute"], "name", array());
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                    ";
        }
        // line 43
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 44
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array()));
            echo "\"";
        }
        // line 45
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 46
($context["field"] ?? null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", array())));
            echo "\" ";
        }
        // line 47
        echo "                                ";
    }

    // line 49
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 49,  317 => 47,  311 => 46,  304 => 45,  297 => 44,  292 => 43,  289 => 42,  278 => 40,  273 => 39,  270 => 38,  263 => 37,  258 => 36,  253 => 35,  248 => 34,  241 => 33,  236 => 32,  229 => 31,  222 => 30,  215 => 29,  212 => 28,  207 => 22,  202 => 57,  198 => 55,  189 => 53,  185 => 52,  180 => 51,  177 => 50,  175 => 49,  172 => 48,  169 => 28,  165 => 26,  160 => 25,  157 => 23,  155 => 22,  146 => 21,  143 => 20,  139 => 59,  136 => 20,  133 => 19,  127 => 16,  123 => 15,  118 => 14,  115 => 13,  109 => 65,  103 => 62,  96 => 61,  93 => 60,  91 => 19,  88 => 18,  86 => 13,  79 => 12,  76 => 11,  71 => 10,  66 => 68,  64 => 11,  51 => 10,  45 => 9,  42 => 8,  40 => 7,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
{% set value = (is_object(value) or value is null ? (get_cookie(cookie_name) is null ? field.default : get_cookie(cookie_name)) : value) %}
{% set errors = attribute(form.messages, field.name) %}

{% block field %}
    <div class=\"{{ form_field_outer_classes ?: 'form-field' }} {{ field.outerclasses }} {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %}\">
        {% block contents %}
            <div class=\"{{ form_field_outer_data_classes ?: 'form-data' }} {{ field.dataclasses }}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.attributes is defined %}
                                      {% for attribute in field.attributes %}
                                          {{ attribute.name }}=\"{{ attribute.value|e }}\"
                                      {% endfor %}
                                    {% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                            {% if form.inline_errors and errors %}
                                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                    {% for error in errors %}
                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">{{ field.description|raw }}</span>
                    </div>
                {% endif %}

            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/field.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/themes/mache/templates/forms/field.html.twig");
    }
}
