<?php

/* timesheet/new.html.twig */
class __TwigTemplate_8450dd9cd1c413403b30afd866d6fafca7c404ee0f31fe7be11f87b0001aab5d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "timesheet/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->source); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 2
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
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate", "method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_new"))));
        // line 25
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), 'widget');
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
        return array (  51 => 26,  48 => 25,  46 => 18,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'bootstrap_3_layout.html.twig' %}



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

  {{  form_start(form, {
      'attr': {
          'novalidate': 'novalidate',
          'method': 'post',
          'action': path('timesheet_new')
      }
  })
  }}
    {{ form_widget(form)}}

<input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Ajouter\">
", "timesheet/new.html.twig", "/home/hamza/timesheet/app/Resources/views/timesheet/new.html.twig");
    }
}
