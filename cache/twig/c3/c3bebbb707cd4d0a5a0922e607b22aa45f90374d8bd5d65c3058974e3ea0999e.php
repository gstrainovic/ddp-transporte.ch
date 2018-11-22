<?php

/* modular/contact.html.twig */
class __TwigTemplate_f48d56d322b984fd26db22cec01c9d00a81d0b19837a7a79f98fc3105ccfaca9 extends Twig_Template
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
        echo "<div class=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
                <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h2>
                <span class=\"line\"></span>
                <div class=\"top\">";
        // line 7
        echo ($context["content"] ?? null);
        echo "</div>
            </div>
        </div>
        <div class=\"row os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
            ";
        // line 11
        $context["form_button_outer_classes"] = "form-field form-group col-md-12";
        // line 12
        echo "            ";
        $this->loadTemplate("forms/form.html.twig", "modular/contact.html.twig", 12)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("contact")))));
        // line 13
        echo "        </div>
        <h2>Hier finden Sie uns</h2>
        <span class=\"line\"></span>
        <div class=\"top\">
        <iframe width=100% height=480px frameborder=\"0\" style=\"border:0\" src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyDUUYNFXEhy1raQAPrhYCdSCttMLgMsxls%20%20%20%20%20%20&q=DD%20Pasuljanovic%20Transporte\" allowfullscreen></iframe> 

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  39 => 12,  37 => 11,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
                <h2>{{ page.header.title }}</h2>
                <span class=\"line\"></span>
                <div class=\"top\">{{ content }}</div>
            </div>
        </div>
        <div class=\"row os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
            {% set form_button_outer_classes = 'form-field form-group col-md-12' %}
            {% include \"forms/form.html.twig\" with {'form': forms('contact')} %}
        </div>
        <h2>Hier finden Sie uns</h2>
        <span class=\"line\"></span>
        <div class=\"top\">
        <iframe width=100% height=480px frameborder=\"0\" style=\"border:0\" src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyDUUYNFXEhy1raQAPrhYCdSCttMLgMsxls%20%20%20%20%20%20&q=DD%20Pasuljanovic%20Transporte\" allowfullscreen></iframe> 

    </div>
</div>
", "modular/contact.html.twig", "/srv/users/serverpilot/apps/gravcms/public/dd/user/themes/mymache/templates/modular/contact.html.twig");
    }
}
