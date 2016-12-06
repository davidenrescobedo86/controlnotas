<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_68f6c824937917dae6fa6d2228591885b8abf619c4858f64776a68fe0488823b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe40f7d1ccf1a61dbb338f29b025aed3cd7704fa3ed0323458f6a0c575299105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe40f7d1ccf1a61dbb338f29b025aed3cd7704fa3ed0323458f6a0c575299105->enter($__internal_fe40f7d1ccf1a61dbb338f29b025aed3cd7704fa3ed0323458f6a0c575299105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cf25d28333970974da72732b47d46b7d170b24fda271ee97470dbb5b3130465d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf25d28333970974da72732b47d46b7d170b24fda271ee97470dbb5b3130465d->enter($__internal_cf25d28333970974da72732b47d46b7d170b24fda271ee97470dbb5b3130465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe40f7d1ccf1a61dbb338f29b025aed3cd7704fa3ed0323458f6a0c575299105->leave($__internal_fe40f7d1ccf1a61dbb338f29b025aed3cd7704fa3ed0323458f6a0c575299105_prof);

        
        $__internal_cf25d28333970974da72732b47d46b7d170b24fda271ee97470dbb5b3130465d->leave($__internal_cf25d28333970974da72732b47d46b7d170b24fda271ee97470dbb5b3130465d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb4ba5b46dfc0c101e95edca14f637ac3b6f0aa4e5d25ce58b387813ff91cf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4ba5b46dfc0c101e95edca14f637ac3b6f0aa4e5d25ce58b387813ff91cf77->enter($__internal_bb4ba5b46dfc0c101e95edca14f637ac3b6f0aa4e5d25ce58b387813ff91cf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_486cb1f2894d958ad7342529895596dbaa53ee5395a3ee30be9c694dc0fa2ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486cb1f2894d958ad7342529895596dbaa53ee5395a3ee30be9c694dc0fa2ffc->enter($__internal_486cb1f2894d958ad7342529895596dbaa53ee5395a3ee30be9c694dc0fa2ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_486cb1f2894d958ad7342529895596dbaa53ee5395a3ee30be9c694dc0fa2ffc->leave($__internal_486cb1f2894d958ad7342529895596dbaa53ee5395a3ee30be9c694dc0fa2ffc_prof);

        
        $__internal_bb4ba5b46dfc0c101e95edca14f637ac3b6f0aa4e5d25ce58b387813ff91cf77->leave($__internal_bb4ba5b46dfc0c101e95edca14f637ac3b6f0aa4e5d25ce58b387813ff91cf77_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_204611f298cb1cc82c191959c0487ed6e5e830920e247d0544adc6309b9108ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204611f298cb1cc82c191959c0487ed6e5e830920e247d0544adc6309b9108ee->enter($__internal_204611f298cb1cc82c191959c0487ed6e5e830920e247d0544adc6309b9108ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_89fb0d632af12c7556f44d13a9e5fa7fe76046770698b7cb848a9ee4d3e85ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fb0d632af12c7556f44d13a9e5fa7fe76046770698b7cb848a9ee4d3e85ff7->enter($__internal_89fb0d632af12c7556f44d13a9e5fa7fe76046770698b7cb848a9ee4d3e85ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_89fb0d632af12c7556f44d13a9e5fa7fe76046770698b7cb848a9ee4d3e85ff7->leave($__internal_89fb0d632af12c7556f44d13a9e5fa7fe76046770698b7cb848a9ee4d3e85ff7_prof);

        
        $__internal_204611f298cb1cc82c191959c0487ed6e5e830920e247d0544adc6309b9108ee->leave($__internal_204611f298cb1cc82c191959c0487ed6e5e830920e247d0544adc6309b9108ee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_daa789c6d3e4d2262588eb4fdf971f4f1ad3ee1b39a51ce0840c3cb72c006858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa789c6d3e4d2262588eb4fdf971f4f1ad3ee1b39a51ce0840c3cb72c006858->enter($__internal_daa789c6d3e4d2262588eb4fdf971f4f1ad3ee1b39a51ce0840c3cb72c006858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed8d3f739bbe208456e831aa8ac87fc2d4869f516e1a6f304055e5646dc2b413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8d3f739bbe208456e831aa8ac87fc2d4869f516e1a6f304055e5646dc2b413->enter($__internal_ed8d3f739bbe208456e831aa8ac87fc2d4869f516e1a6f304055e5646dc2b413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ed8d3f739bbe208456e831aa8ac87fc2d4869f516e1a6f304055e5646dc2b413->leave($__internal_ed8d3f739bbe208456e831aa8ac87fc2d4869f516e1a6f304055e5646dc2b413_prof);

        
        $__internal_daa789c6d3e4d2262588eb4fdf971f4f1ad3ee1b39a51ce0840c3cb72c006858->leave($__internal_daa789c6d3e4d2262588eb4fdf971f4f1ad3ee1b39a51ce0840c3cb72c006858_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\controlnotas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
