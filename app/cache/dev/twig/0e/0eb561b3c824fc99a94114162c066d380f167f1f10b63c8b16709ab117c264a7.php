<?php

/* :Form:roles_matrix_list.html.twig */
class __TwigTemplate_19e3df9f47b2d3cf37fe54ab39524d21df472da18598d38782f56e1a10adc870 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:roles_matrix_list.html.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["roles"] ?? $this->getContext($context, "roles"))));
        foreach ($context['_seq'] as $context["role"] => $context["attributes"]) {
            // line 12
            echo "    <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["attributes"], "form", array()), 'widget', array("label" => $this->getAttribute($context["attributes"], "role_translated", array()), "value" => $this->getAttribute($context["attributes"], "role", array())));
            echo "</li>
    ";
            // line 13
            if ( !$this->getAttribute($context["attributes"], "is_granted", array())) {
                // line 14
                echo "        <script>
            \$('input[value=\"";
                // line 15
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "\"]').iCheck('disable');
            \$('form').on('submit', function() {
                \$('input[value=\"";
                // line 17
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "\"]').iCheck('enable');
            });
        </script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Form:roles_matrix_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 17,  36 => 15,  33 => 14,  31 => 13,  26 => 12,  22 => 11,);
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
{% for role, attributes in roles|sort %}
    <li>{{ form_widget(attributes.form, {label: attributes.role_translated, value: attributes.role}) }}</li>
    {% if not attributes.is_granted %}
        <script>
            \$('input[value=\"{{ role }}\"]').iCheck('disable');
            \$('form').on('submit', function() {
                \$('input[value=\"{{ role }}\"]').iCheck('enable');
            });
        </script>
    {% endif %}
{% endfor %}
", ":Form:roles_matrix_list.html.twig", "/var/www/html/timesheet/app/Resources/views/Form/roles_matrix_list.html.twig");
    }
}
