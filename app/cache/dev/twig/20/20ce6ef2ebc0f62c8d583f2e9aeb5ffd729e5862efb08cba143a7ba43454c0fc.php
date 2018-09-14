<?php

/* timesheet/new.html.twig */
class __TwigTemplate_fa2e0351b212b51616401a1a4fce1a2f0fb1f28aaf2172950381a46a0128e4e2 extends Twig_Template
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
        echo "
";
        // line 3
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonatacore/vendor/moment/min/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 5
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 7
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />

";
        // line 9
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 10
        echo "
  ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate", "method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_new"))));
        // line 18
        echo "
    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'widget');
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
        return array (  55 => 19,  52 => 18,  50 => 11,  47 => 10,  45 => 9,  39 => 7,  34 => 5,  29 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{#<script type=\"text/javascript\" src=\"path_to_jquery.min.js\"></script>#}
<script type=\"text/javascript\" src=\"{{ asset('bundles/sonatacore/vendor/moment/min/moment-with-locales.min.js') }}\"></script>
{#<script type=\"text/javascript\" src=\"\"></script>#}
<script type=\"text/javascript\" src=\"{{ asset('bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}\"></script>
{#<link rel=\"stylesheet\" href=\"path_to_bootstrap.min.css\" />#}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}\" />

{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

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
", "timesheet/new.html.twig", "/var/www/html/Timesheet-/app/Resources/views/timesheet/new.html.twig");
    }
}
