<?php

/* viewRegistration.html */
class __TwigTemplate_aee868121a5da7912b600ce1ec70f595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'sitebar' => array($this, 'block_sitebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "KVidaCMS
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "viewHeader.html"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
        // line 12
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "viewMenu.html"), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_sitebar($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
    
</div> 
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2\">
            <h1 class=\"text-center\">Форма регистрации на сайте</h1>
            <p class=\"lead\"> * - обязятальные поля для заполнения</p>
            <p>Обратите внимание! Введенные данные могут содержать русские и английские буквы, цифры, знак подчёркивания, дефис</p>
            <form id=\"contact-form\" method=\"post\" role=\"form\">
                <div class=\"row\">
                    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["messageLine"]) {
            // line 31
            echo "                        <div class=\"col-md-12\">
                            <p class=\"text-center text-danger bg-warning\">";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["messageLine"]) ? $context["messageLine"] : null), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageLine'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "                </div> 
                <div class=\"controls\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"form-group ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 0), "html", null, true);
        echo "\">
                                <label for=\"form_name\">Имя *</label>
                                <input id=\"form_name\" type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Пожалуйста, введите ваше имя\" required=\"required\" data-error=\"Firstname is required.\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name"), "html", null, true);
        echo "\">
                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                        <div class=\"form-group ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 1), "html", null, true);
        echo "\">
                            <label for=\"form_email\">Email *</label>
                            <input id=\"form_email\" type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Пожалуйста, введите ваш email\" required=\"required\" data-error=\"Valid email is required.\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
        echo "\">
                            <div class=\"help-block with-errors\"></div>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                        <div class=\"form-group ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 2), "html", null, true);
        echo "\">
                            <label for=\"form_phone\">Телефон* </label>
                            <input id=\"form_phone\" type=\"tel\" name=\"phone\" class=\"form-control\" placeholder=\"Пожалуйста, введите ваш номер телефона\" required=\"required\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone"), "html", null, true);
        echo "\">
                            <div class=\"help-block with-errors\"></div>
                        </div>
                    </div>
                </div>             

                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                        <div class=\"form-group ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 3), "html", null, true);
        echo "\">
                            <label for=\"form_pass\">Пароль *</label>
                            <input id=\"form_pass\" type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Пожалуйста, введите ваш пароль\" required=\"required\" data-error=\"Valid password is required.\">
                            <div class=\"help-block with-errors\"></div>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                        <div class=\"form-group ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 4), "html", null, true);
        echo "\">
                            <label for=\"form_repaetpass\">Повторите пароль *</label>
                            <input id=\"form_repaetpass\" type=\"password\" name=\"passwordRepeat\" class=\"form-control\" placeholder=\"Пожалуйста, повторите ваш пароль\" required=\"required\" data-error=\"Valid password is required.\">
                            <div class=\"help-block with-errors\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"form_city\">Город </label>
                            <input type=\"text\" name=\"city\" id=\"form_city\" class=\"form-control\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-4 col-sm-4 col-md-4\">
                    </div>
                    <div class=\"col-xs-2 col-sm-2 col-md-2\">
                        <input type=\"submit\" class=\"btn btn-success btn-send\" name=\"save\" value=\"Сохранить\">
                    </div>
                    <div class=\"col-xs-2 col-sm-2 col-md-2\">
                        <a href=\"/\" class=\"btn btn-success\">Выход</a>
                    </div>
                    <div class=\"col-xs-4 col-sm-4 col-md-4\">
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "viewRegistration.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 88,  161 => 76,  150 => 68,  139 => 60,  134 => 58,  125 => 52,  120 => 50,  108 => 41,  103 => 39,  97 => 35,  88 => 32,  85 => 31,  81 => 30,  71 => 22,  68 => 21,  61 => 16,  58 => 15,  52 => 12,  49 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
