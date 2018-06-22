<?php

/* :Admin/Core:user_block.html.twig */
class __TwigTemplate_adec489c1689b444bc1ce4afcf1ffdbd5de805af0e22c31a1a1d19832304bae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/Core:user_block.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 13
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 14
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 15
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_admin_security_logout");
            // line 16
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 17
            echo "        ";
            $context["_profile_uri"] = (($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "userAdmin", array()), "isGranted", array(0 => "EDIT", 1 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method")) ? ($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "userAdmin", array()), "generateUrl", array(0 => "edit", 1 => array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "method")) : ($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "userAdmin", array()), "generateUrl", array(0 => "show", 1 => array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "method")));
            // line 18
            echo "        ";
            $context["_profile_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_profile", array(), "SonataUserBundle");
            // line 19
            echo "        ";
            $context["_user_image"] = (($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "defaultAvatar", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "defaultAvatar", array()))) : (null));
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            // line 22
            echo "
        ";
            // line 23
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "impersonating", array()))) {
                // line 24
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 25
                echo "            ";
                $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit")));
                // line 26
                echo "            ";
                $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("switch_user_exit", array(), "SonataUserBundle");
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        <li class=\"user-header ";
            // line 29
            echo twig_escape_filter($this->env, ($context["_bg_class"] ?? $this->getContext($context, "_bg_class")), "html", null, true);
            echo "\">
            ";
            // line 30
            if (($context["_user_image"] ?? $this->getContext($context, "_user_image"))) {
                // line 31
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, ($context["_user_image"] ?? $this->getContext($context, "_user_image")), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 33
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</p>
        </li>

";
            // line 42
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["_profile_uri"] ?? $this->getContext($context, "_profile_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, ($context["_profile_text"] ?? $this->getContext($context, "_profile_text")), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["_logout_uri"] ?? $this->getContext($context, "_logout_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, ($context["_logout_text"] ?? $this->getContext($context, "_logout_text")), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 49,  107 => 45,  102 => 42,  95 => 33,  89 => 31,  87 => 30,  83 => 29,  80 => 28,  77 => 27,  74 => 26,  71 => 25,  68 => 24,  66 => 23,  63 => 22,  61 => 21,  59 => 20,  56 => 19,  53 => 18,  50 => 17,  47 => 16,  44 => 15,  41 => 14,  38 => 13,  26 => 12,  23 => 11,);
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

{% block user_block %}
    {% if app.user %}
        {% set _bg_class          = \"bg-light-blue\" %}
        {% set _logout_uri        = url('sonata_user_admin_security_logout') %}
        {% set _logout_text       = 'user_block_logout'|trans({}, 'SonataUserBundle') %}
        {% set _profile_uri       = sonata_user.userAdmin.isGranted('EDIT', app.user) ? sonata_user.userAdmin.generateUrl('edit', {id: app.user.id}) : sonata_user.userAdmin.generateUrl('show', {id: app.user.id}) %}
        {% set _profile_text      = 'user_block_profile'|trans({}, 'SonataUserBundle') %}
        {% set _user_image        = sonata_user.defaultAvatar ? asset(sonata_user.defaultAvatar) : null %}
        {# Customize this with your profile picture implementation, see below for example #}
        {#{% set _user_image  = app.user.profilePicture|default(asset(sonata_user.defaultAvatar)) %}#}

        {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}
            {% set _bg_class    = \"bg-light-green\" %}
            {% set _logout_uri  = url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) %}
            {% set _logout_text = 'switch_user_exit'|trans({}, 'SonataUserBundle') %}
        {% endif %}

        <li class=\"user-header {{ _bg_class }}\">
            {% if _user_image %}
                <img src=\"{{ _user_image }}\" class=\"img-circle\" alt=\"Avatar\" />
            {% endif %}
            <p>{{ app.user }}</p>
        </li>

{#
    Uncomment to add some information
        <li class=\"user-body\">

        </li>
#}

        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"{{ _profile_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> {{ _profile_text }}</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"{{ _logout_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> {{ _logout_text }}</a>
            </div>
        </li>
    {% endif %}
{% endblock %}
", ":Admin/Core:user_block.html.twig", "/var/www/html/timesheet/app/Resources/views/Admin/Core/user_block.html.twig");
    }
}
