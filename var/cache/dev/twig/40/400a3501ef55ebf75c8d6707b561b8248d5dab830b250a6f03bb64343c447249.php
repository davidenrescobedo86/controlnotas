<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_15a70073a83cdd27ae57704d0141d9ad8c4f10a50fdcd22de37185eff34a3f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43d906056d86b2b89af3831e9ebe1a5679dcd165ee38b40a99daa46741cdf4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d906056d86b2b89af3831e9ebe1a5679dcd165ee38b40a99daa46741cdf4ea->enter($__internal_43d906056d86b2b89af3831e9ebe1a5679dcd165ee38b40a99daa46741cdf4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_29873f486fc1bef2e25c25172562f9b5717231fecca6240b62698c95ba32b321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29873f486fc1bef2e25c25172562f9b5717231fecca6240b62698c95ba32b321->enter($__internal_29873f486fc1bef2e25c25172562f9b5717231fecca6240b62698c95ba32b321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d906056d86b2b89af3831e9ebe1a5679dcd165ee38b40a99daa46741cdf4ea->leave($__internal_43d906056d86b2b89af3831e9ebe1a5679dcd165ee38b40a99daa46741cdf4ea_prof);

        
        $__internal_29873f486fc1bef2e25c25172562f9b5717231fecca6240b62698c95ba32b321->leave($__internal_29873f486fc1bef2e25c25172562f9b5717231fecca6240b62698c95ba32b321_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8097ec5a8ed12f48299fccdca3596faefb982b2cad41c1909c0d807db9b7d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8097ec5a8ed12f48299fccdca3596faefb982b2cad41c1909c0d807db9b7d51->enter($__internal_a8097ec5a8ed12f48299fccdca3596faefb982b2cad41c1909c0d807db9b7d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e85aafeca00030e0032f63ef8d9b5ab36324865ed709f9d9b66fbd22ce0ffb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85aafeca00030e0032f63ef8d9b5ab36324865ed709f9d9b66fbd22ce0ffb87->enter($__internal_e85aafeca00030e0032f63ef8d9b5ab36324865ed709f9d9b66fbd22ce0ffb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e85aafeca00030e0032f63ef8d9b5ab36324865ed709f9d9b66fbd22ce0ffb87->leave($__internal_e85aafeca00030e0032f63ef8d9b5ab36324865ed709f9d9b66fbd22ce0ffb87_prof);

        
        $__internal_a8097ec5a8ed12f48299fccdca3596faefb982b2cad41c1909c0d807db9b7d51->leave($__internal_a8097ec5a8ed12f48299fccdca3596faefb982b2cad41c1909c0d807db9b7d51_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_20045d992c14273a0a8e4f05adf5c4d8ecda6fde9ee5ff79a910619c3788f479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20045d992c14273a0a8e4f05adf5c4d8ecda6fde9ee5ff79a910619c3788f479->enter($__internal_20045d992c14273a0a8e4f05adf5c4d8ecda6fde9ee5ff79a910619c3788f479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a86540893f09df83c067273f6275b31e73901b4b35298bd59c7f48e30b55f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a86540893f09df83c067273f6275b31e73901b4b35298bd59c7f48e30b55f0f->enter($__internal_5a86540893f09df83c067273f6275b31e73901b4b35298bd59c7f48e30b55f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5a86540893f09df83c067273f6275b31e73901b4b35298bd59c7f48e30b55f0f->leave($__internal_5a86540893f09df83c067273f6275b31e73901b4b35298bd59c7f48e30b55f0f_prof);

        
        $__internal_20045d992c14273a0a8e4f05adf5c4d8ecda6fde9ee5ff79a910619c3788f479->leave($__internal_20045d992c14273a0a8e4f05adf5c4d8ecda6fde9ee5ff79a910619c3788f479_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_608c7eccf112f53de34e38782f5a9ca72346cba5b4a90ec8da0854b5fbef31e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608c7eccf112f53de34e38782f5a9ca72346cba5b4a90ec8da0854b5fbef31e9->enter($__internal_608c7eccf112f53de34e38782f5a9ca72346cba5b4a90ec8da0854b5fbef31e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8563908961c9f661f6197c7fe0a44107af8190e0ce75e777e5c94c770a654156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8563908961c9f661f6197c7fe0a44107af8190e0ce75e777e5c94c770a654156->enter($__internal_8563908961c9f661f6197c7fe0a44107af8190e0ce75e777e5c94c770a654156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8563908961c9f661f6197c7fe0a44107af8190e0ce75e777e5c94c770a654156->leave($__internal_8563908961c9f661f6197c7fe0a44107af8190e0ce75e777e5c94c770a654156_prof);

        
        $__internal_608c7eccf112f53de34e38782f5a9ca72346cba5b4a90ec8da0854b5fbef31e9->leave($__internal_608c7eccf112f53de34e38782f5a9ca72346cba5b4a90ec8da0854b5fbef31e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\controlnotas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
