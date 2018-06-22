<?php

/* :Admin/Security:login.html.twig */
class __TwigTemplate_66de853558e72afc229fd0d8c0c9c3c1f45b639fdc81cb07f50b0f72962d450f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'login_box_header' => array($this, 'block_login_box_header'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), ":Admin/Security:login.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/Security:login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 26
        echo "
    <div class=\"login-box\">
        ";
        // line 28
        $this->displayBlock('login_box_header', $context, $blocks);
        // line 42
        echo "        <div class=\"login-box-body\">
            ";
        // line 43
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 123
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_login_box_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login_box_header"));

        // line 29
        echo "            <div class=\"login-logo\">
                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                    ";
        // line 31
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method"), array(0 => "single_image", 1 => "both"))) {
            // line 32
            echo "                        <div>
                            <img style=\"width:350px;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        // line 36
        echo "                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method"), array(0 => "single_text", 1 => "both"))) {
            // line 37
            echo "                        <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                    ";
        }
        // line 39
        echo "                </a>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 44
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 51
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</p>
                ";
        // line 52
        if (array_key_exists("qrCodeUrl", $context)) {
            // line 53
            echo "                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <p align=\"middle\"> <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, ($context["qrCodeUrl"] ?? $this->getContext($context, "qrCodeUrl")), "html", null, true);
            echo "\" alt=\"QR-code\"></p>
                            <p align=\"middle\">";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qr_code_secret", array(), "SonataUserBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, ($context["qrSecret"] ?? $this->getContext($context, "qrSecret")), "html", null, true);
            echo "</p>
                            <p align=\"middle\">
                                <a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qr_go_next", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                            </p>
                        </div>
                    </div>
                ";
        } elseif (((        // line 62
array_key_exists("two_step_submit", $context)) ? (_twig_default_filter(($context["two_step_submit"] ?? $this->getContext($context, "two_step_submit")), false)) : (false))) {
            // line 63
            echo "                    <form method=\"POST\" role=\"form\">
                        ";
            // line 64
            if ((($context["state"] ?? $this->getContext($context, "state")) == "error")) {
                // line 65
                echo "                            <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_two_step_code_error", array(), "SonataUserBundle"), "html", null, true);
                echo "</div>
                        ";
            }
            // line 67
            echo "                        <label for=\"_code\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_two_step_code", array(), "SonataUserBundle"), "html", null, true);
            echo "</label>
                        <div class=\"input-group input-group-lg\">
                            <input type=\"text\" class=\"form-control\" id=\"_code\" name=\"_code\" autocomplete='off' />
                            <span class=\"input-group-btn\">
                                <input class=\"btn btn-primary\"
                                    id=\"_submit\"
                                    name=\"_submit\"
                                    type=\"submit\"
                                    value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" />
                            </span>
                        </div>
                        <span class=\"help-block sonata-ba-field-help\">";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_two_step_code_help", array(), "SonataUserBundle"), "html", null, true);
            echo "</span>
                    </form>
                ";
        } else {
            // line 81
            echo "                    <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_check");
            echo "\" method=\"post\" role=\"form\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"username\"
                                name=\"_username\"
                                placeholder=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
            echo "\"
                                required=\"required\"
                                type=\"text\"
                                value=\"";
            // line 91
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
            echo "\"/>
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        </div>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"password\"
                                name=\"_password\"
                                placeholder=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
            echo "\"
                                required=\"required\"
                                type=\"password\"/>
                            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-8\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        ";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-xs-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </form>

                    <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, ($context["reset_route"] ?? $this->getContext($context, "reset_route")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 122
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 45
        echo "                    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 46
            echo "                        <div class=\"alert alert-danger alert-error\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 50
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 50,  320 => 47,  317 => 46,  314 => 45,  308 => 44,  301 => 122,  294 => 120,  286 => 115,  278 => 110,  264 => 99,  253 => 91,  247 => 88,  238 => 82,  233 => 81,  227 => 78,  221 => 75,  209 => 67,  203 => 65,  201 => 64,  198 => 63,  196 => 62,  187 => 58,  180 => 56,  176 => 55,  172 => 53,  170 => 52,  165 => 51,  162 => 44,  156 => 43,  147 => 39,  141 => 37,  138 => 36,  130 => 33,  127 => 32,  125 => 31,  121 => 30,  118 => 29,  112 => 28,  102 => 123,  100 => 43,  97 => 42,  95 => 28,  91 => 26,  85 => 25,  73 => 23,  62 => 20,  51 => 17,  40 => 14,  25 => 12,);
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

{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        {% block login_box_header %}
            <div class=\"login-logo\">
                <a href=\"{{ path('sonata_admin_dashboard') }}\">
                    {% if sonata_admin.adminPool.getOption('title_mode') in ['single_image', 'both'] %}
                        <div>
                            <img style=\"width:350px;\" src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                        </div>
                    {% endif %}
                    {% if sonata_admin.adminPool.getOption('title_mode') in ['single_text', 'both'] %}
                        <span>{{ sonata_admin.adminPool.title }}</span>
                    {% endif %}
                </a>
            </div>
        {% endblock %}
        <div class=\"login-box-body\">
            {% block sonata_user_login_form %}
                {% block sonata_user_login_error %}
                    {% if error %}
                        <div class=\"alert alert-danger alert-error\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</p>
                {% if qrCodeUrl is defined %}
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <p align=\"middle\"> <img src=\"{{ qrCodeUrl }}\" alt=\"QR-code\"></p>
                            <p align=\"middle\">{{ 'qr_code_secret'|trans({}, 'SonataUserBundle') }}: {{ qrSecret }}</p>
                            <p align=\"middle\">
                                <a href=\"{{ path('sonata_admin_dashboard') }}\">{{ 'qr_go_next'|trans({}, 'SonataUserBundle') }}</a>
                            </p>
                        </div>
                    </div>
                {% elseif two_step_submit|default(false) %}
                    <form method=\"POST\" role=\"form\">
                        {% if state == 'error' %}
                            <div class=\"alert alert-error\">{{ 'label_two_step_code_error'|trans({}, 'SonataUserBundle') }}</div>
                        {% endif %}
                        <label for=\"_code\">{{ 'label_two_step_code'|trans({}, 'SonataUserBundle') }}</label>
                        <div class=\"input-group input-group-lg\">
                            <input type=\"text\" class=\"form-control\" id=\"_code\" name=\"_code\" autocomplete='off' />
                            <span class=\"input-group-btn\">
                                <input class=\"btn btn-primary\"
                                    id=\"_submit\"
                                    name=\"_submit\"
                                    type=\"submit\"
                                    value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
                            </span>
                        </div>
                        <span class=\"help-block sonata-ba-field-help\">{{ 'message_two_step_code_help'|trans({}, 'SonataUserBundle') }}</span>
                    </form>
                {% else %}
                    <form action=\"{{ path(\"sonata_user_admin_security_check\") }}\" method=\"post\" role=\"form\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"username\"
                                name=\"_username\"
                                placeholder=\"{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}\"
                                required=\"required\"
                                type=\"text\"
                                value=\"{{ last_username }}\"/>
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        </div>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"password\"
                                name=\"_password\"
                                placeholder=\"{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}\"
                                required=\"required\"
                                type=\"password\"/>
                            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-8\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-xs-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>
                            </div>
                        </div>
                    </form>

                    <a href=\"{{ reset_route }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
                {% endif %}
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", ":Admin/Security:login.html.twig", "/var/www/html/timesheet/app/Resources/views/Admin/Security/login.html.twig");
    }
}
