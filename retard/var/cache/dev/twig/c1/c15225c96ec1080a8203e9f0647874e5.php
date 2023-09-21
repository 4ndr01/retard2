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

/* inscription/index.html.twig */
class __TwigTemplate_76a57bda2edf4da73ef3be26ae3e5a99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"content_bloc\">
        <div class=\"form_container\">
            <h1>Inscription</h1>
            <form method=\"post\">
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'row');
        echo "
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "prenom", [], "any", false, false, false, 10), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), 'row');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "password", [], "any", false, false, false, 12), 'row');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "ville", [], "any", false, false, false, 13), 'row');
        echo "

                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Déjà inscrit ?</a>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
        echo "


            </form>
        </div>
    </div>
    <div class=\"picture_bloc\">
        <img src=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/singup.png"), "html", null, true);
        echo " width=\"80%\">
    </div>

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


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "inscription/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  103 => 16,  99 => 15,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"content_bloc\">
        <div class=\"form_container\">
            <h1>Inscription</h1>
            <form method=\"post\">
                {{ form_start(form) }}
                {{ form_row(form.nom) }}
                {{ form_row(form.prenom) }}
                {{ form_row(form.email) }}
                {{ form_row(form.password) }}
                {{ form_row(form.ville) }}

                <a href=\"{{ path('app_login') }}\">Déjà inscrit ?</a>
                {{ form_end(form) }}


            </form>
        </div>
    </div>
    <div class=\"picture_bloc\">
        <img src={{asset('image/singup.png')}} width=\"80%\">
    </div>

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


{% endblock %}
", "inscription/index.html.twig", "/Users/anselme/Documents/Cours/MyDigitalSchool/retard2/retard/templates/inscription/index.html.twig");
    }
}
