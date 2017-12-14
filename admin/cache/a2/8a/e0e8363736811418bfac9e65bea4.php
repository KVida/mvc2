<?php

/* viewAuthAdmin.html */
class __TwigTemplate_a28ae0e8363736811418bfac9e65bea4 extends Twig_Template
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
        echo "
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container\">
    <div class=\"row\"> 
        <div class=\"col-xs-12 col-sm-12 col-lg-12\">
        </div>
    </div>
</div>
";
    }

    // line 16
    public function block_navbar($context, array $blocks = array())
    {
        // line 17
        echo "<div class=\"container\">
    <div class=\"row\"> 
        <div class=\"col-xs-12 col-sm-12 col-lg-12\">
        </div>
    </div>
</div>
";
    }

    // line 25
    public function block_sitebar($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
  
</div>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"container\">
    <div class=\"row\">              
        <div class=\"col-xs-12 col-sm-12 col-lg-12\">
            <div class=\"col-xs-3 col-sm-3 col-md-3\">
            </div>
            <div class=\"col-xs-6 col-sm-6 col-md-6\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Авторизация в админку</h3>
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
        // line 50
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Логин пользователя\" required=\"\" autofocus=\"\" name=\"text\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Ваш пароль\" required=\"\" name=\"password\">
                                </div>

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
        return "viewAuthAdmin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 55,  99 => 50,  79 => 32,  76 => 31,  69 => 26,  66 => 25,  56 => 17,  53 => 16,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
