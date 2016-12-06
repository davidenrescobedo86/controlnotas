<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_96c3702da422029297a9f958e4fd50cefadb9b5d5c406ceb08cb17ca6cc15ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2bae93bac4c2f51c7d098e22a9f73c86aa8f0fec7cf080d8e201bfd16deff496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bae93bac4c2f51c7d098e22a9f73c86aa8f0fec7cf080d8e201bfd16deff496->enter($__internal_2bae93bac4c2f51c7d098e22a9f73c86aa8f0fec7cf080d8e201bfd16deff496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_38cd3f6362ea67cd71d7d8aa5f619bfe63de890546d0ec2826cbd7693f24e690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cd3f6362ea67cd71d7d8aa5f619bfe63de890546d0ec2826cbd7693f24e690->enter($__internal_38cd3f6362ea67cd71d7d8aa5f619bfe63de890546d0ec2826cbd7693f24e690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bae93bac4c2f51c7d098e22a9f73c86aa8f0fec7cf080d8e201bfd16deff496->leave($__internal_2bae93bac4c2f51c7d098e22a9f73c86aa8f0fec7cf080d8e201bfd16deff496_prof);

        
        $__internal_38cd3f6362ea67cd71d7d8aa5f619bfe63de890546d0ec2826cbd7693f24e690->leave($__internal_38cd3f6362ea67cd71d7d8aa5f619bfe63de890546d0ec2826cbd7693f24e690_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a0385961d35dcc6111e29e5288d0755a4bb87e393f7499f1020891d76002e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0385961d35dcc6111e29e5288d0755a4bb87e393f7499f1020891d76002e5e->enter($__internal_2a0385961d35dcc6111e29e5288d0755a4bb87e393f7499f1020891d76002e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6822fd3fa3404692c47cd2d7d6fbae3e50a1ceeeba1e4510cf044afe1d9665ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6822fd3fa3404692c47cd2d7d6fbae3e50a1ceeeba1e4510cf044afe1d9665ca->enter($__internal_6822fd3fa3404692c47cd2d7d6fbae3e50a1ceeeba1e4510cf044afe1d9665ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6822fd3fa3404692c47cd2d7d6fbae3e50a1ceeeba1e4510cf044afe1d9665ca->leave($__internal_6822fd3fa3404692c47cd2d7d6fbae3e50a1ceeeba1e4510cf044afe1d9665ca_prof);

        
        $__internal_2a0385961d35dcc6111e29e5288d0755a4bb87e393f7499f1020891d76002e5e->leave($__internal_2a0385961d35dcc6111e29e5288d0755a4bb87e393f7499f1020891d76002e5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_904c1fd6a4820aca6dccb8fb2dae45b537168f9c5edcc3584f7aa01b185ba450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904c1fd6a4820aca6dccb8fb2dae45b537168f9c5edcc3584f7aa01b185ba450->enter($__internal_904c1fd6a4820aca6dccb8fb2dae45b537168f9c5edcc3584f7aa01b185ba450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_58d140cac92001e6e274f95eb59206fbef976fbc6e1ff8c55150481f613516a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d140cac92001e6e274f95eb59206fbef976fbc6e1ff8c55150481f613516a3->enter($__internal_58d140cac92001e6e274f95eb59206fbef976fbc6e1ff8c55150481f613516a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_58d140cac92001e6e274f95eb59206fbef976fbc6e1ff8c55150481f613516a3->leave($__internal_58d140cac92001e6e274f95eb59206fbef976fbc6e1ff8c55150481f613516a3_prof);

        
        $__internal_904c1fd6a4820aca6dccb8fb2dae45b537168f9c5edcc3584f7aa01b185ba450->leave($__internal_904c1fd6a4820aca6dccb8fb2dae45b537168f9c5edcc3584f7aa01b185ba450_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8db99688b4bc5ee2b4b1f7e7fd83696ebf8fae3b79856511e280a1a0c67da74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db99688b4bc5ee2b4b1f7e7fd83696ebf8fae3b79856511e280a1a0c67da74c->enter($__internal_8db99688b4bc5ee2b4b1f7e7fd83696ebf8fae3b79856511e280a1a0c67da74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ca50e839d02665ad14fcab091d885a07ad2abacc406492796b9f0f618d024e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca50e839d02665ad14fcab091d885a07ad2abacc406492796b9f0f618d024e2->enter($__internal_2ca50e839d02665ad14fcab091d885a07ad2abacc406492796b9f0f618d024e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ca50e839d02665ad14fcab091d885a07ad2abacc406492796b9f0f618d024e2->leave($__internal_2ca50e839d02665ad14fcab091d885a07ad2abacc406492796b9f0f618d024e2_prof);

        
        $__internal_8db99688b4bc5ee2b4b1f7e7fd83696ebf8fae3b79856511e280a1a0c67da74c->leave($__internal_8db99688b4bc5ee2b4b1f7e7fd83696ebf8fae3b79856511e280a1a0c67da74c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\controlnotas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
