<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* principale/index.html.twig */
class __TwigTemplate_8cc77183622c3f75e59354ab04388f7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principale/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principale/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "principale/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Générez votre PDF";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .content_bloc,
        .picture_bloc{
            width:50%;
            height: 100vh;

            display: flex;
            align-items: center;
        }
        .picture_bloc{
            justify-content: center;
        }

        .form_container{
            margin-left: 5em;

            display: flex;
            flex-direction: column;
        }

        h1{
            margin-bottom: 1.5em;
        }

        form{
            display: flex;
            flex-direction: column;
        }

        form > div{
            display: flex;
            flex-direction: column;
        }

        input, select{
            margin: 0.5em 0 1em 0;

            width: 30em;
            height: 2em;

            border: 1px solid #d7d8da;
            border-radius: 5px;
        }

        a {
            align-self: flex-end;
        }

        button{
            margin-top: 20px;
            padding: 1em;

            width: 10em;

            align-self: flex-end;

            border: none;
            border-radius: 5px;
            background-color: #2b68da;

            color: #fff;
        }

        button:hover{
            cursor: pointer;
        }


    </style>

    <div class=\"content_bloc\">
        <div class=\"form_container\">
            <h1>Générez votre excuse</h1>

            ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_start');
        echo "
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "Nom", [], "any", false, false, false, 81), 'row');
        echo "
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "Prenom", [], "any", false, false, false, 82), 'row');
        echo "
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "Sujet", [], "any", false, false, false, 83), 'row');
        echo "
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "Excuses", [], "any", false, false, false, 84), 'row');
        echo "
            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "Vos_excuses", [], "any", false, false, false, 85), 'row');
        echo "
            ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"picture_bloc\">
        <img src=";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/generate.png"), "html", null, true);
        echo " width=\"70%\">
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "principale/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 91,  188 => 86,  184 => 85,  180 => 84,  176 => 83,  172 => 82,  168 => 81,  164 => 80,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Générez votre PDF{% endblock %}

{% block body %}
    <style>
        .content_bloc,
        .picture_bloc{
            width:50%;
            height: 100vh;

            display: flex;
            align-items: center;
        }
        .picture_bloc{
            justify-content: center;
        }

        .form_container{
            margin-left: 5em;

            display: flex;
            flex-direction: column;
        }

        h1{
            margin-bottom: 1.5em;
        }

        form{
            display: flex;
            flex-direction: column;
        }

        form > div{
            display: flex;
            flex-direction: column;
        }

        input, select{
            margin: 0.5em 0 1em 0;

            width: 30em;
            height: 2em;

            border: 1px solid #d7d8da;
            border-radius: 5px;
        }

        a {
            align-self: flex-end;
        }

        button{
            margin-top: 20px;
            padding: 1em;

            width: 10em;

            align-self: flex-end;

            border: none;
            border-radius: 5px;
            background-color: #2b68da;

            color: #fff;
        }

        button:hover{
            cursor: pointer;
        }


    </style>

    <div class=\"content_bloc\">
        <div class=\"form_container\">
            <h1>Générez votre excuse</h1>

            {{ form_start(form) }}
            {{ form_row(form.Nom) }}
            {{ form_row(form.Prenom) }}
            {{ form_row(form.Sujet) }}
            {{ form_row(form.Excuses)}}
            {{ form_row(form.Vos_excuses) }}
            {{ form_end(form) }}
        </div>
    </div>

    <div class=\"picture_bloc\">
        <img src={{asset('image/generate.png')}} width=\"70%\">
    </div>
{% endblock %}
", "principale/index.html.twig", "/Users/anselme/Documents/Cours/MyDigitalSchool/retard2/retard/templates/principale/index.html.twig");
    }
}
