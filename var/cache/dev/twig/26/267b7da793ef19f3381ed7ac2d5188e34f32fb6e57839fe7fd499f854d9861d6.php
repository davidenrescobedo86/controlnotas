<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_31c14c9351113bb57eba7bd46d7e6f34b1164288c420ffd585eceac507ae06e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfdc73a53f0a7a2738def4e6951e25aca9fbaed807efecea6325920d80b23905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdc73a53f0a7a2738def4e6951e25aca9fbaed807efecea6325920d80b23905->enter($__internal_dfdc73a53f0a7a2738def4e6951e25aca9fbaed807efecea6325920d80b23905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_780454ceaa1b07847fe9dd816bdb314b089b87b6f258371aaa7c08b3c21aaf28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780454ceaa1b07847fe9dd816bdb314b089b87b6f258371aaa7c08b3c21aaf28->enter($__internal_780454ceaa1b07847fe9dd816bdb314b089b87b6f258371aaa7c08b3c21aaf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfdc73a53f0a7a2738def4e6951e25aca9fbaed807efecea6325920d80b23905->leave($__internal_dfdc73a53f0a7a2738def4e6951e25aca9fbaed807efecea6325920d80b23905_prof);

        
        $__internal_780454ceaa1b07847fe9dd816bdb314b089b87b6f258371aaa7c08b3c21aaf28->leave($__internal_780454ceaa1b07847fe9dd816bdb314b089b87b6f258371aaa7c08b3c21aaf28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e69e150569afacfc6b7956124a12aefc861b0795506c0aa8c47b188992bf967e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69e150569afacfc6b7956124a12aefc861b0795506c0aa8c47b188992bf967e->enter($__internal_e69e150569afacfc6b7956124a12aefc861b0795506c0aa8c47b188992bf967e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_93c86c996f1dbabfddbb940ae3376a4a682d0e8caecdf36aff27d3c9f64103f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c86c996f1dbabfddbb940ae3376a4a682d0e8caecdf36aff27d3c9f64103f9->enter($__internal_93c86c996f1dbabfddbb940ae3376a4a682d0e8caecdf36aff27d3c9f64103f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_93c86c996f1dbabfddbb940ae3376a4a682d0e8caecdf36aff27d3c9f64103f9->leave($__internal_93c86c996f1dbabfddbb940ae3376a4a682d0e8caecdf36aff27d3c9f64103f9_prof);

        
        $__internal_e69e150569afacfc6b7956124a12aefc861b0795506c0aa8c47b188992bf967e->leave($__internal_e69e150569afacfc6b7956124a12aefc861b0795506c0aa8c47b188992bf967e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\controlnotas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
