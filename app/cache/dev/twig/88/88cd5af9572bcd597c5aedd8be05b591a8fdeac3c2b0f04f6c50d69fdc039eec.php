<?php

/* ::dayclick.html.twig */
class __TwigTemplate_1a472456713efbfe50fad002dde248a6817f812c6e660a8c57494e37a9ccfa38 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::dayclick.html.twig"));

        // line 2
        echo "
<script>


    \$('#appbundle_timesheet_type_0').change(function () {


        if (\$('#appbundle_timesheet_type_0').is(':checked')) {
            \$('#appbundle_timesheet_sheeets').val('160').attr('disabled', 'disabled');
            console.log('checked');
        } else {
            \$('#appbundle_timesheet_sheeets').val('');
            \$('#appbundle_timesheet_sheeets').removeAttr('disabled');
            console.log('unchecked');
        }
    });

</script>
<div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span> <span
                            class=\"sr-only\">close</span></button>
                <h4 id=\"modalTitle\" class=\"modal-title\"> Insérez :</h4>
            </div>
            <div id=\"modalBody\" class=\"modal-body\">

                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Timesheet:new"), array());
        // line 31
        echo "
            </div>
            <div class=\"modal-footer\">

                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::dayclick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 31,  52 => 30,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>#}

<script>


    \$('#appbundle_timesheet_type_0').change(function () {


        if (\$('#appbundle_timesheet_type_0').is(':checked')) {
            \$('#appbundle_timesheet_sheeets').val('160').attr('disabled', 'disabled');
            console.log('checked');
        } else {
            \$('#appbundle_timesheet_sheeets').val('');
            \$('#appbundle_timesheet_sheeets').removeAttr('disabled');
            console.log('unchecked');
        }
    });

</script>
<div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span> <span
                            class=\"sr-only\">close</span></button>
                <h4 id=\"modalTitle\" class=\"modal-title\"> Insérez :</h4>
            </div>
            <div id=\"modalBody\" class=\"modal-body\">

                {% render(controller('AppBundle:Timesheet:new')) %}

            </div>
            <div class=\"modal-footer\">

                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>", "::dayclick.html.twig", "/var/www/html/timesheet/app/Resources/views/dayclick.html.twig");
    }
}
