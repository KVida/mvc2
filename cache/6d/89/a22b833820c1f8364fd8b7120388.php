<?php

/* viewAuthorization.html */
class __TwigTemplate_6d89a22b833820c1f8364fd8b7120388 extends Twig_Template
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
        <div class=\"col-xs-12 col-sm-12 col-lg-12\">
            <div class=\"col-xs-3 col-sm-3 col-md-3\">
            </div>
            <div class=\"col-xs-6 col-sm-6 col-md-6\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Авторизация на сайте</h3>
                    </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-xs-3 col-sm-3 col-md-3 separator social-login-box\"> 
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 login-box\">
                            <form id=\"contact-form\" method=\"post\" role=\"form\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <p class=\"text-center text-danger bg-warning\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email пользователя\" required=\"\" autofocus=\"\" name=\"loginUser\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Ваш пароль\" required=\"\" name=\"passUser\">
                                </div>
                                У вас нет аккаунта? <a href=\"/registration\">Регистрация</a>

                                <div class=\"panel-footer\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4 col-sm-4 col-md-4\">
                                        </div>
                                        <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                            <input type=\"submit\" class=\"btn btn-labeled btn-success\" name=\"comeIn\" value=\"Войти\">
                                        </div>
                                        <div class=\"col-xs-5 col-sm-5 col-md-5\">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-xs-3 col-sm-3 col-md-3\">
                        </div>
                    </div>
                </div> 
            </div>
            <div class=\"col-xs-3 col-sm-3 col-md-3\">
            </div>            
        </div>
        <div class=\"col-xs-12 col-sm-12 col-lg-12\">
            <div class=\"col-xs-5 col-sm-5 col-md-5\">
            </div>
            <div class=\"col-xs-7 col-sm-7 col-md-7\">
                <a class=\"btn btn-labeled btn-success\" href=\"/\">Перейти на главную</a>  
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "viewAuthorization.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 45,  91 => 40,  71 => 22,  68 => 21,  61 => 16,  58 => 15,  52 => 12,  49 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
