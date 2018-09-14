<?php

/* ::calendar.html.twig */
class __TwigTemplate_2b0e19b85c6cc469b159eda9c1f4445eae74ccb882dd6c2cb782d3b1d4581d0a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::calendar.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "
    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/init.fullCalendar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
            crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.scss\">

    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/css/fullcalendar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fullcalendar/css/fullcalendar.print.css"), "html", null, true);
        echo "\" media=\"print\"/>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "   <div align=\"left\">
          <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/abshore.png"), "html", null, true);
        echo "\" style=\"border-radius:50px\" ;>
          ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "              <div align=\"right\">
              <b> Dernière connexion</b>  ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->source); })()), "user", array()), "getLastLogin", array(), "method"), "d/m/Y"), "html", null, true);
            echo "
              </div>

          ";
        }
        // line 35
        echo "
      </div>
      <div align=\"center\">

          ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "          <h3> Bienvenu </h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->source); })()), "user", array()), "getFirstname", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->source); })()), "user", array()), "getLastname", array(), "method"), "html", null, true);
            echo "
          ";
        }
        // line 42
        echo "      </div>

      <div algin=\"right\">

      </div>
    ";
        // line 47
        echo $this->extensions['fadosProduccions\fullCalendarBundle\Twig\fullCalendarExtension']->fullCalendar();
        echo "

    <!-- pop up of dayClick -->

    ";
        // line 51
        $this->loadTemplate("::dayclick.html.twig", "::calendar.html.twig", 51)->display($context);
        // line 52
        echo "


    <!-- Pop up event clic-->

    <div class=\"modal\" id=\"myModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\" id=\"modal-header\">
                    <h4 class=\"modal-title\"></h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\" id=\"modal-body\">

                    <center> ABSHORE</center>

                </div>

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>

            </div>
        </div>
    </div>


    <!-- end popup eventclic -->

    <style>
        .fc-widget-header {
            background-color: #45b2ea;
        }

        .fc-widget-content {
            background-color: rgba(255, 255, 255, 0.22);
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::calendar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 52,  166 => 51,  159 => 47,  152 => 42,  144 => 40,  142 => 39,  136 => 35,  129 => 31,  126 => 30,  124 => 29,  120 => 28,  117 => 27,  111 => 26,  99 => 20,  94 => 19,  88 => 18,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 2,  46 => 1,  39 => 26,  36 => 25,  34 => 18,  31 => 17,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascripts %}

    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/init.fullCalendar.js') }}\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
            crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.scss\">

    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/fullcalendar/css/fullcalendar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/fullcalendar/css/fullcalendar.print.css') }}\" media=\"print\"/>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}

{% block body %}
   <div align=\"left\">
          <img src=\"{{ asset('images/abshore.png') }}\" style=\"border-radius:50px\" ;>
          {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
              <div align=\"right\">
              <b> Dernière connexion</b>  {{ app.user.getLastLogin()|date('d/m/Y') }}
              </div>

          {% endif %}

      </div>
      <div align=\"center\">

          {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
          <h3> Bienvenu </h3>{{ app.user.getFirstname() }} {{ app.user.getLastname() }}
          {% endif %}
      </div>

      <div algin=\"right\">

      </div>
    {{ fullCalendar() }}

    <!-- pop up of dayClick -->

    {% include '::dayclick.html.twig' %}



    <!-- Pop up event clic-->

    <div class=\"modal\" id=\"myModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\" id=\"modal-header\">
                    <h4 class=\"modal-title\"></h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\" id=\"modal-body\">

                    <center> ABSHORE</center>

                </div>

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>

            </div>
        </div>
    </div>


    <!-- end popup eventclic -->

    <style>
        .fc-widget-header {
            background-color: #45b2ea;
        }

        .fc-widget-content {
            background-color: rgba(255, 255, 255, 0.22);
        }
    </style>

{% endblock %}
", "::calendar.html.twig", "/var/www/html/Timesheet-/app/Resources/views/calendar.html.twig");
    }
}
