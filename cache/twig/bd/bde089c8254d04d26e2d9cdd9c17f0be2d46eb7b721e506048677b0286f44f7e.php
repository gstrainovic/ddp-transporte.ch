<?php

/* @Var:[neue Nachricht über Web-Kontaktformular] {{ form.value.name|e }} */
class __TwigTemplate_4d98e5c62eec8e31153b42af69f5f47bf9735e06c8f0278a881a039bf1fffaa9 extends Twig_Template
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
        echo "[neue Nachricht über Web-Kontaktformular] ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "name", array()));
    }

    public function getTemplateName()
    {
        return "@Var:[neue Nachricht über Web-Kontaktformular] {{ form.value.name|e }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[neue Nachricht über Web-Kontaktformular] {{ form.value.name|e }}", "@Var:[neue Nachricht über Web-Kontaktformular] {{ form.value.name|e }}", "");
    }
}
