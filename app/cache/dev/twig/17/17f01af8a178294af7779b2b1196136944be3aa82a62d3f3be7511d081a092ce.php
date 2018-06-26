<?php

/* timesheet/new.html.twig */
class __TwigTemplate_cfed907312bf2ae3a79bf087d5a5a7d4a23b0baa994e2971cfcd12932bdb8347 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "timesheet/new.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 3
        echo "


    <link href=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css\" rel=\"stylesheet\"/>


    <script src=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js\"></script>
    <script>

        \$(document).ready(function() {
            // you may need to change this code if you are not using Bootstrap Datepicker
            \$('.js-datepicker').datepicker({
                format: 'HH:mm'
            });
        });
    </script>
    ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("timesheet_new"), "method" => "POST"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Ajouter\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "timesheet/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  45 => 19,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    {% form_theme form 'bootstrap_3_layout.html.twig' %}



    <link href=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css\" rel=\"stylesheet\"/>


    <script src=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js\"></script>
    <script>

        \$(document).ready(function() {
            // you may need to change this code if you are not using Bootstrap Datepicker
            \$('.js-datepicker').datepicker({
                format: 'HH:mm'
            });
        });
    </script>
    {{ form_start(form, {'action': path('timesheet_new'), 'method': 'POST'}) }}
    {{ form_widget(form)}}

    <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Ajouter\">
", "timesheet/new.html.twig", "/var/www/html/timesheet/app/Resources/views/timesheet/new.html.twig");
    }
}
