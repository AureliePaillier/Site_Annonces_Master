<?php

/* job/control_panel.html.twig */
class __TwigTemplate_68be4ff5a66bd3ef14ca2821e1c3b12d8405c448e2726bfe20082582e03d1fef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/control_panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/control_panel.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <span class=\"navbar-brand\"> Panneau de contrôle </span>
        </div>
        <div class=\"collapse navbar-collapse\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["class" => "navbar-form navbar-left"]]);
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 8, $this->source); })()), 'widget');
        echo "
                    <button type=\"submit\" class=\"btn btn-default\" onclick=\"return confirm('Etes-vous sûr ?')\">
                        <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                        Delete
                    </button>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 13, $this->source); })()), 'form_end');
        echo "

            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 15, $this->source); })()), "activated", [])) {
            // line 16
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 16, $this->source); })()), "expiresAt", []) < twig_date_converter($this->env))) {
                // line 17
                echo "                    <p class=\"navbar-text\"> Expiré </p>
                ";
            } else {
                // line 19
                echo "                    <p class=\"navbar-text\"> Expire dans
                        <strong>";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 20, $this->source); })()), "expiresAt", []), "diff", [0 => twig_date_converter($this->env)], "method"), "%a"), "html", null, true);
                echo "</strong>
                        jours
                    </p>
                ";
            }
            // line 24
            echo "
                ";
            // line 25
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 25, $this->source); })()), "expiresAt", []), "diff", [0 => twig_date_converter($this->env)], "method"), "%a") < 5)) {
                // line 26
                echo "                    <a class=\"btn btn-default navbar-btn\" href=\"#\">
                        <span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>
                        Prolonger de 30 jours
                    </a>
                ";
            }
            // line 31
            echo "            ";
        } else {
            // line 32
            echo "                <a class=\"btn btn-default navbar-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.edit", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 32, $this->source); })()), "token", [])]), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>Edition
                </a>
                ";
            // line 38
            echo "            ";
        }
        // line 39
        echo "
            <p class=\"navbar-text navbar-right\">
                [Mettre en bookmark <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("job.preview", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 41, $this->source); })()), "token", [])]), "html", null, true);
        echo "\">URL</a> pour pouvoir le gérer]
            </p>
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "job/control_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  98 => 39,  95 => 38,  88 => 32,  85 => 31,  78 => 26,  76 => 25,  73 => 24,  66 => 20,  63 => 19,  59 => 17,  56 => 16,  54 => 15,  49 => 13,  41 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <span class=\"navbar-brand\"> Panneau de contrôle </span>
        </div>
        <div class=\"collapse navbar-collapse\">
            {{ form_start(deleteForm, {'attr':{'class':'navbar-form navbar-left' }}) }}
                {{ form_widget(deleteForm)}}
                    <button type=\"submit\" class=\"btn btn-default\" onclick=\"return confirm('Etes-vous sûr ?')\">
                        <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                        Delete
                    </button>
            {{ form_end(deleteForm) }}

            {%  if job.activated %}
                {% if job.expiresAt < date() %}
                    <p class=\"navbar-text\"> Expiré </p>
                {%  else %}
                    <p class=\"navbar-text\"> Expire dans
                        <strong>{{ job.expiresAt.diff(date())|date('%a') }}</strong>
                        jours
                    </p>
                {% endif %}

                {% if job.expiresAt.diff(date())|date('%a') < 5 %}
                    <a class=\"btn btn-default navbar-btn\" href=\"#\">
                        <span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>
                        Prolonger de 30 jours
                    </a>
                {% endif %}
            {% else %}
                <a class=\"btn btn-default navbar-btn\" href=\"{{path('job.edit',{'token':job.token})}}\">
                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>Edition
                </a>
                {#<a class=\"btn btn-default navbar-btn\" href=\"#\">
                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\">Publication</span>
                </a>#}
            {% endif %}

            <p class=\"navbar-text navbar-right\">
                [Mettre en bookmark <a href=\"{{ url('job.preview', {'token':job.token}) }}\">URL</a> pour pouvoir le gérer]
            </p>
        </div>
    </div>
</nav>", "job/control_panel.html.twig", "C:\\Users\\Aurelie\\Documents\\Symfony\\siteAnnonces-master\\templates\\job\\control_panel.html.twig");
    }
}
