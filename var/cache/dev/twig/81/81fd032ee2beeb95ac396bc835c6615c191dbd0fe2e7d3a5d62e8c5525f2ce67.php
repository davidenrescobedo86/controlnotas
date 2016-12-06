<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a221db7720164b267176bf7cf541f17ac4119b2b4c45240dd2f82c7c257723f9 extends Twig_Template
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
        $__internal_00671e0ceeb5f66caee9e5476b96b5ef53d6e7b7abf2ac1c6454ba802c26e73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00671e0ceeb5f66caee9e5476b96b5ef53d6e7b7abf2ac1c6454ba802c26e73a->enter($__internal_00671e0ceeb5f66caee9e5476b96b5ef53d6e7b7abf2ac1c6454ba802c26e73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_81c866134fbaf5314b598f0b1928fd701f4f3ae1f71d695462ba982a30efc9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c866134fbaf5314b598f0b1928fd701f4f3ae1f71d695462ba982a30efc9d8->enter($__internal_81c866134fbaf5314b598f0b1928fd701f4f3ae1f71d695462ba982a30efc9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_00671e0ceeb5f66caee9e5476b96b5ef53d6e7b7abf2ac1c6454ba802c26e73a->leave($__internal_00671e0ceeb5f66caee9e5476b96b5ef53d6e7b7abf2ac1c6454ba802c26e73a_prof);

        
        $__internal_81c866134fbaf5314b598f0b1928fd701f4f3ae1f71d695462ba982a30efc9d8->leave($__internal_81c866134fbaf5314b598f0b1928fd701f4f3ae1f71d695462ba982a30efc9d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\controlnotas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
