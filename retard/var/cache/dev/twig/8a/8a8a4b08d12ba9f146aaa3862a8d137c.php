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

/* home/index.html.twig */
class __TwigTemplate_e6b3822911c6e04cec11456ceadfbfb3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "
    <div class=\"container\">
        <div class=\"container_content\">
            <h1>SOS Retard</h1>
            <h2>Votre échappatoire en cas de réveil tardif !</h2>
            <p>Oubliez les excuses ennuyeuses. Choisissez parmi une variété de scénarios farfelus pour expliquer votre retard et recevez une justification écrite qui pourrait remporter un prix Nobel de littérature. Transformez votre retard en une histoire convaincante et sauvez votre journée sans vous créer de problèmes.</p>
        </div>

        <div class=\"container_picture\">
            <img src=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/hero.png"), "html", null, true);
        echo " width=\"80%\" alt=\"hero signup\">
        </div>

        <div class=\"container_auth\">
            <h2>Rejoignez-nous</h2>
            <div class=\"container_btn\">
                <button>
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous</a>
                </button>
                <button>
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Inscrivez-vous</a>
                </button>
            </div>
        </div>
    </div>

    <style>
        .container{
            width: 100%;
            height: auto;

            position: relative;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container_content{
            width: 60%;
            height: 60vh;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1, h2, p{
            margin-bottom: 1em;
        }

        h1{
            font-size: 4em;
            text-transform: uppercase;
        }
        h2{
            font-size: 2em;
            font-weight: 500;
            color: #666d7a;
        }
        p{
            font-size: 18px;
            color: #8790a0;
            text-align: center;
        }

        .container_picture{
            width: 100%;
            height: 80vh;
            position: relative;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            background-color: #f7f9fc;
        }
        img{
            position: absolute;
            top: -2em;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }


        .container_auth{
            margin: 2em 0 5em 0;
            width : 100%;

            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container_btn{
            width: 50%;

            display: flex;
            align-items: center;
            justify-content: center
        }
        button{
            margin-right: 2em;
            padding: 1em;

            width: 20em;

            border-radius: 5px;
            background-color: #2b68da;
            border: 1px solid #2b68da;
        }
        button:hover{
            cursor: pointer;
        }
        button:first-child{
            background: transparent;
            border: 1px solid #d7d8da;
        }
        a{
            width: 100%;
            height: 100%;

            display: block;

            font-size: 16px;
            color: #fff;
            text-decoration: none;
        }
        button:first-child > a{
            color: #05192e;
        }
    </style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  109 => 22,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"container_content\">
            <h1>SOS Retard</h1>
            <h2>Votre échappatoire en cas de réveil tardif !</h2>
            <p>Oubliez les excuses ennuyeuses. Choisissez parmi une variété de scénarios farfelus pour expliquer votre retard et recevez une justification écrite qui pourrait remporter un prix Nobel de littérature. Transformez votre retard en une histoire convaincante et sauvez votre journée sans vous créer de problèmes.</p>
        </div>

        <div class=\"container_picture\">
            <img src={{asset('image/hero.png')}} width=\"80%\" alt=\"hero signup\">
        </div>

        <div class=\"container_auth\">
            <h2>Rejoignez-nous</h2>
            <div class=\"container_btn\">
                <button>
                    <a href=\"{{ path('app_login') }}\">Connectez-vous</a>
                </button>
                <button>
                    <a href=\"{{ path('inscription') }}\">Inscrivez-vous</a>
                </button>
            </div>
        </div>
    </div>

    <style>
        .container{
            width: 100%;
            height: auto;

            position: relative;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container_content{
            width: 60%;
            height: 60vh;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1, h2, p{
            margin-bottom: 1em;
        }

        h1{
            font-size: 4em;
            text-transform: uppercase;
        }
        h2{
            font-size: 2em;
            font-weight: 500;
            color: #666d7a;
        }
        p{
            font-size: 18px;
            color: #8790a0;
            text-align: center;
        }

        .container_picture{
            width: 100%;
            height: 80vh;
            position: relative;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            background-color: #f7f9fc;
        }
        img{
            position: absolute;
            top: -2em;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }


        .container_auth{
            margin: 2em 0 5em 0;
            width : 100%;

            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container_btn{
            width: 50%;

            display: flex;
            align-items: center;
            justify-content: center
        }
        button{
            margin-right: 2em;
            padding: 1em;

            width: 20em;

            border-radius: 5px;
            background-color: #2b68da;
            border: 1px solid #2b68da;
        }
        button:hover{
            cursor: pointer;
        }
        button:first-child{
            background: transparent;
            border: 1px solid #d7d8da;
        }
        a{
            width: 100%;
            height: 100%;

            display: block;

            font-size: 16px;
            color: #fff;
            text-decoration: none;
        }
        button:first-child > a{
            color: #05192e;
        }
    </style>

{% endblock %}", "home/index.html.twig", "/Users/anselme/Documents/Cours/MyDigitalSchool/retard2/retard/templates/home/index.html.twig");
    }
}
