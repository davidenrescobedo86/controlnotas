<?php

/* base.html.twig */
class __TwigTemplate_146c68e5d98646db4daa64074842b4281e4bcdf563de25c77cd11e58a61e0399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89abddf1d68e939ca5fc9871c2b0de04c52d050500ced1cd6fb2eb71ca17024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89abddf1d68e939ca5fc9871c2b0de04c52d050500ced1cd6fb2eb71ca17024->enter($__internal_a89abddf1d68e939ca5fc9871c2b0de04c52d050500ced1cd6fb2eb71ca17024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_611491901ac3b002b19d9576d267dbec2eb257e5f4d516bf3a13502eaea35025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611491901ac3b002b19d9576d267dbec2eb257e5f4d516bf3a13502eaea35025->enter($__internal_611491901ac3b002b19d9576d267dbec2eb257e5f4d516bf3a13502eaea35025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a89abddf1d68e939ca5fc9871c2b0de04c52d050500ced1cd6fb2eb71ca17024->leave($__internal_a89abddf1d68e939ca5fc9871c2b0de04c52d050500ced1cd6fb2eb71ca17024_prof);

        
        $__internal_611491901ac3b002b19d9576d267dbec2eb257e5f4d516bf3a13502eaea35025->leave($__internal_611491901ac3b002b19d9576d267dbec2eb257e5f4d516bf3a13502eaea35025_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80d1c061609c54e06e9b453190a1e63340c20ec52dbd85dd4e3b208af61f888d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d1c061609c54e06e9b453190a1e63340c20ec52dbd85dd4e3b208af61f888d->enter($__internal_80d1c061609c54e06e9b453190a1e63340c20ec52dbd85dd4e3b208af61f888d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84e167a94a9ea0a67d96e0cdc9a925958bda02d4e0b8c7b0bb3bc19993a6129f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e167a94a9ea0a67d96e0cdc9a925958bda02d4e0b8c7b0bb3bc19993a6129f->enter($__internal_84e167a94a9ea0a67d96e0cdc9a925958bda02d4e0b8c7b0bb3bc19993a6129f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_84e167a94a9ea0a67d96e0cdc9a925958bda02d4e0b8c7b0bb3bc19993a6129f->leave($__internal_84e167a94a9ea0a67d96e0cdc9a925958bda02d4e0b8c7b0bb3bc19993a6129f_prof);

        
        $__internal_80d1c061609c54e06e9b453190a1e63340c20ec52dbd85dd4e3b208af61f888d->leave($__internal_80d1c061609c54e06e9b453190a1e63340c20ec52dbd85dd4e3b208af61f888d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b6ca79eb3aca5ad1c14d091d76a9cac5857ba9c2903bcec2a09fce29f863f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6ca79eb3aca5ad1c14d091d76a9cac5857ba9c2903bcec2a09fce29f863f71->enter($__internal_1b6ca79eb3aca5ad1c14d091d76a9cac5857ba9c2903bcec2a09fce29f863f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2b398d73b5120f2f07c81f8b9992fd91d952881b18020dcf7368e300e5849f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b398d73b5120f2f07c81f8b9992fd91d952881b18020dcf7368e300e5849f00->enter($__internal_2b398d73b5120f2f07c81f8b9992fd91d952881b18020dcf7368e300e5849f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2b398d73b5120f2f07c81f8b9992fd91d952881b18020dcf7368e300e5849f00->leave($__internal_2b398d73b5120f2f07c81f8b9992fd91d952881b18020dcf7368e300e5849f00_prof);

        
        $__internal_1b6ca79eb3aca5ad1c14d091d76a9cac5857ba9c2903bcec2a09fce29f863f71->leave($__internal_1b6ca79eb3aca5ad1c14d091d76a9cac5857ba9c2903bcec2a09fce29f863f71_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_116e73492be2174eb342a52aaaeed9b5d9fd5e571205b2a6e45a56e974aa8de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116e73492be2174eb342a52aaaeed9b5d9fd5e571205b2a6e45a56e974aa8de4->enter($__internal_116e73492be2174eb342a52aaaeed9b5d9fd5e571205b2a6e45a56e974aa8de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19d969a19e73f726553a0f5a8622d10b9dbe941a54ddd9ff49e706d09654903d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d969a19e73f726553a0f5a8622d10b9dbe941a54ddd9ff49e706d09654903d->enter($__internal_19d969a19e73f726553a0f5a8622d10b9dbe941a54ddd9ff49e706d09654903d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19d969a19e73f726553a0f5a8622d10b9dbe941a54ddd9ff49e706d09654903d->leave($__internal_19d969a19e73f726553a0f5a8622d10b9dbe941a54ddd9ff49e706d09654903d_prof);

        
        $__internal_116e73492be2174eb342a52aaaeed9b5d9fd5e571205b2a6e45a56e974aa8de4->leave($__internal_116e73492be2174eb342a52aaaeed9b5d9fd5e571205b2a6e45a56e974aa8de4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c16d31e0d96d09122286c8cab437a5ab4936468322521e53ae1dad1d94d5424d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16d31e0d96d09122286c8cab437a5ab4936468322521e53ae1dad1d94d5424d->enter($__internal_c16d31e0d96d09122286c8cab437a5ab4936468322521e53ae1dad1d94d5424d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e68238c34af998f0cff952ab50685b3bf7fc30551473da9b479836f72ac2176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e68238c34af998f0cff952ab50685b3bf7fc30551473da9b479836f72ac2176->enter($__internal_6e68238c34af998f0cff952ab50685b3bf7fc30551473da9b479836f72ac2176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e68238c34af998f0cff952ab50685b3bf7fc30551473da9b479836f72ac2176->leave($__internal_6e68238c34af998f0cff952ab50685b3bf7fc30551473da9b479836f72ac2176_prof);

        
        $__internal_c16d31e0d96d09122286c8cab437a5ab4936468322521e53ae1dad1d94d5424d->leave($__internal_c16d31e0d96d09122286c8cab437a5ab4936468322521e53ae1dad1d94d5424d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\controlnotas\\app\\Resources\\views\\base.html.twig");
    }
}
