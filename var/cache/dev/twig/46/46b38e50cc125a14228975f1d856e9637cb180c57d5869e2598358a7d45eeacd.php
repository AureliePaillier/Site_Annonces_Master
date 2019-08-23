<?php

/* job/show.html.twig */
class __TwigTemplate_ff0d60343a4971ca72584558c187dcb65cf03db4b8c43131640cadfc1b37bc14 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/show.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        ";
        $this->loadTemplate("job/control_panel.html.twig", "job/show.html.twig", 5)->display(["job" =>         // line 6
(isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 6, $this->source); })()), "deleteForm" =>         // line 7
(isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 7, $this->source); })())]);
        // line 10
        echo "    <h1>annonces</h1>

    <div class=\"media\" style=\"margin-top: 60px;\">
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 13, $this->source); })()), "logo", [])) {
            // line 14
            echo "            <div class=\"media-left\">
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 15, $this->source); })()), "url", []), "html", null, true);
            echo "\" target=\"_blank\">
                    <img class=\"media-object\" style=\"width:100px; height:100px;\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((isset($context["jobs_web_directory"]) || array_key_exists("jobs_web_directory", $context) ? $context["jobs_web_directory"] : (function () { throw new Twig_Error_Runtime('Variable "jobs_web_directory" does not exist.', 16, $this->source); })()) . "/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 16, $this->source); })()), "logo", []), "filename", []))), "html", null, true);
            echo "\">
                </a>
            </div>
        ";
        }
        // line 20
        echo "
        <div class=\"media-body\">
            <div class=\"row\">
                <div class=\"col-sm-10\">
                    <h3 class=\"media-heading\"><strong>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 24, $this->source); })()), "company", []), "html", null, true);
        echo "</strong> <i>(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 24, $this->source); })()), "location", []), "html", null, true);
        echo ")</i></h3>
                </div>

                <div class=\"col-sm-2\">
                    <i class=\"pull-right\">Posté le ";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 28, $this->source); })()), "createdAt", []), "m/d/Y"), "html", null, true);
        echo "</i>
                </div>
            </div>

            <p>
                <strong>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 33, $this->source); })()), "position", []), "html", null, true);
        echo "</strong>
                <small> - <i>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 34, $this->source); })()), "type", []), "html", null, true);
        echo "</i></small>
            </p>

            <p>";
        // line 37
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 37, $this->source); })()), "description", []), "html", null, true));
        echo "</p>

            <p style=\"margin-top: 40px;\">
                <strong>Comment Candidater ?</strong>
            </p>

            <p>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 43, $this->source); })()), "howToApply", []), "html", null, true);
        echo "</p>

            <div class=\"row\">
                <div class=\"col-sm-12 text-right\">
                    <a class=\"btn btn-default\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.list");
        echo "\">
                        <span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>
                        Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 47,  121 => 43,  112 => 37,  106 => 34,  102 => 33,  94 => 28,  85 => 24,  79 => 20,  72 => 16,  68 => 15,  65 => 14,  63 => 13,  58 => 10,  56 => 7,  55 => 6,  53 => 5,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
{#{% if hasControlAccess is defined and hasControlAccess %}#}
        {% include 'job/control_panel.html.twig' with {
            'job': job,
            'deleteForm': deleteForm
        } only %}
{#{% endif %}#}
    <h1>annonces</h1>

    <div class=\"media\" style=\"margin-top: 60px;\">
        {% if job.logo %}
            <div class=\"media-left\">
                <a href=\"{{ job.url }}\" target=\"_blank\">
                    <img class=\"media-object\" style=\"width:100px; height:100px;\" src=\"{{ asset(jobs_web_directory ~ '/' ~ job.logo.filename) }}\">
                </a>
            </div>
        {% endif %}

        <div class=\"media-body\">
            <div class=\"row\">
                <div class=\"col-sm-10\">
                    <h3 class=\"media-heading\"><strong>{{ job.company }}</strong> <i>({{ job.location }})</i></h3>
                </div>

                <div class=\"col-sm-2\">
                    <i class=\"pull-right\">Posté le {{ job.createdAt|date('m/d/Y') }}</i>
                </div>
            </div>

            <p>
                <strong>{{ job.position }}</strong>
                <small> - <i>{{ job.type }}</i></small>
            </p>

            <p>{{ job.description|nl2br }}</p>

            <p style=\"margin-top: 40px;\">
                <strong>Comment Candidater ?</strong>
            </p>

            <p>{{ job.howToApply }}</p>

            <div class=\"row\">
                <div class=\"col-sm-12 text-right\">
                    <a class=\"btn btn-default\" href=\"{{ path('job.list') }}\">
                        <span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>
                        Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "job/show.html.twig", "C:\\Users\\Aurelie\\Documents\\Symfony\\siteAnnonces-master\\templates\\job\\show.html.twig");
    }
}
