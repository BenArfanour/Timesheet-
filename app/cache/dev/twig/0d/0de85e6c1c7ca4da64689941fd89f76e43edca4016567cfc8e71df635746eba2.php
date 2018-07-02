<?php

/* ::profile.html.twig */
class __TwigTemplate_fab00af93266b04f62b771f75c781bad082d948fc3492e9baeaf3f1aa1804ef2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::profile.html.twig"));

        // line 1
        echo "<script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
<link href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>

<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" >
<!------ Include the above in your HEAD tag ---------->

<!--

-->

<div class=\"container\">
    <div class=\"row profile\">
        <div class=\"col-md-3\">
            <div class=\"profile-sidebar\">
                <!-- SIDEBAR USERPIC -->
                ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "<br><br>
                <div class=\"profile-userpic\">

                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/homme.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class=\"profile-usertitle\">
                    <div class=\"profile-usertitle-name\">
                        ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "user", array()), "getFirstname", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "user", array()), "getLastname", array(), "method"), "html", null, true);
        echo "
                    </div>
                    <div class=\"profile-usertitle-job\">

                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                ";
        // line 36
        echo "                    ";
        // line 37
        echo "                    ";
        // line 38
        echo "                ";
        // line 39
        echo "                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class=\"profile-usermenu\">
                    <ul class=\"nav\">
                        <li class=\"active\">
                            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
        echo "\">
                                <i class=\"glyphicon glyphicon-home\"></i>
                                Modifer Mon Compte </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\">
                                <i class=\"glyphicon glyphicon-user\"></i>
                                Modifier Mon mot de passe</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar");
        echo "\" target=\"_blank\">
                                <i class=\"glyphicon glyphicon-ok\"></i> Timesheet
                                </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">
                                <i class=\"glyphicon glyphicon-flag\"></i>
                                Déconnexion </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class=\"col-md-9\">
            <div class=\"profile-content\">

                ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "            </div>
        </div>
    </div>
</div>

<br>
<br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "                 ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->controller("AppBundle:Default:cal"));
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 72,  159 => 71,  152 => 18,  146 => 17,  132 => 74,  130 => 71,  115 => 59,  107 => 54,  99 => 49,  91 => 44,  84 => 39,  82 => 38,  80 => 37,  78 => 36,  65 => 27,  56 => 21,  51 => 18,  49 => 17,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
<link href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>

<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" >
<!------ Include the above in your HEAD tag ---------->

<!--

-->

<div class=\"container\">
    <div class=\"row profile\">
        <div class=\"col-md-3\">
            <div class=\"profile-sidebar\">
                <!-- SIDEBAR USERPIC -->
                {% block header %}
                {% endblock %}<br><br>
                <div class=\"profile-userpic\">

                    <img src=\"{{ asset('images/homme.jpg') }}\" class=\"img-responsive\" alt=\"\">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class=\"profile-usertitle\">
                    <div class=\"profile-usertitle-name\">
                        {{ app.user.getFirstname() }} {{ app.user.getLastname() }}
                    </div>
                    <div class=\"profile-usertitle-job\">

                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                {#<div class=\"profile-userbuttons\">#}
                    {#<button type=\"button\" class=\"btn btn-success btn-sm\">Follow</button>#}
                    {#<button type=\"button\" class=\"btn btn-danger btn-sm\">Message</button>#}
                {#</div>#}
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class=\"profile-usermenu\">
                    <ul class=\"nav\">
                        <li class=\"active\">
                            <a href=\"{{ path('fos_user_profile_edit') }}\">
                                <i class=\"glyphicon glyphicon-home\"></i>
                                Modifer Mon Compte </a>
                        </li>
                        <li>
                            <a href=\"{{ path('fos_user_change_password') }}\">
                                <i class=\"glyphicon glyphicon-user\"></i>
                                Modifier Mon mot de passe</a>
                        </li>
                        <li>
                            <a href=\"{{ path('calendar') }}\" target=\"_blank\">
                                <i class=\"glyphicon glyphicon-ok\"></i> Timesheet
                                </a>
                        </li>
                        <li>
                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                <i class=\"glyphicon glyphicon-flag\"></i>
                                Déconnexion </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class=\"col-md-9\">
            <div class=\"profile-content\">

                {% block body %}
                 {{ render(controller('AppBundle:Default:cal')) }}
                {% endblock %}
            </div>
        </div>
    </div>
</div>

<br>
<br>
", "::profile.html.twig", "/home/hamza/timesheet/app/Resources/views/profile.html.twig");
    }
}
