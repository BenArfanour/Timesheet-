<?php

/* SonataUserBundle:Form:roles_matrix.html.twig */
class __TwigTemplate_387ec3928c5c6dd1868e213df24d03bde5dcf4dc30576e48c5621fae784169ff extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:roles_matrix.html.twig"));

        // line 11
        echo "<table class=\"table table-condensed\">
    <thead>
    <tr>
        <th></th>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["permission_labels"] ?? $this->getContext($context, "permission_labels"))));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 16
            echo "            <th> ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " </th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grouped_roles"] ?? $this->getContext($context, "grouped_roles")));
        foreach ($context['_seq'] as $context["admin_label"] => $context["roles"]) {
            // line 22
            echo "        <tr>
            <th>";
            // line 23
            echo twig_escape_filter($this->env, $context["admin_label"], "html", null, true);
            echo "</th>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($context["roles"]));
            foreach ($context['_seq'] as $context["role"] => $context["attributes"]) {
                // line 25
                echo "                <td>
                    ";
                // line 26
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["attributes"], "form", array()), 'widget', array("label" => false));
                echo "
                    ";
                // line 27
                if ( !$this->getAttribute($context["attributes"], "is_granted", array())) {
                    // line 28
                    echo "                        <script>
                            \$('input[value=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "\"]').iCheck('disable');
                            \$('form').on('submit', function() {
                                \$('input[value=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "\"]').iCheck('enable');
                            });
                        </script>
                    ";
                }
                // line 35
                echo "                </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['role'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['admin_label'], $context['roles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:roles_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  92 => 37,  85 => 35,  78 => 31,  73 => 29,  70 => 28,  68 => 27,  64 => 26,  61 => 25,  57 => 24,  53 => 23,  50 => 22,  46 => 21,  41 => 18,  32 => 16,  28 => 15,  22 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<table class=\"table table-condensed\">
    <thead>
    <tr>
        <th></th>
        {% for label in permission_labels|sort %}
            <th> {{ label }} </th>
        {% endfor %}
    </tr>
    </thead>
    <tbody>
    {% for admin_label, roles in grouped_roles %}
        <tr>
            <th>{{ admin_label }}</th>
            {% for role, attributes in roles|sort %}
                <td>
                    {{ form_widget(attributes.form, { label: false }) }}
                    {% if not attributes.is_granted %}
                        <script>
                            \$('input[value=\"{{ role }}\"]').iCheck('disable');
                            \$('form').on('submit', function() {
                                \$('input[value=\"{{ role }}\"]').iCheck('enable');
                            });
                        </script>
                    {% endif %}
                </td>
            {% endfor %}
        </tr>
    {% endfor %}
    </tbody>
</table>

", "SonataUserBundle:Form:roles_matrix.html.twig", "/var/www/html/timesheet/vendor/sonata-project/user-bundle/src/Resources/views/Form/roles_matrix.html.twig");
    }
}
