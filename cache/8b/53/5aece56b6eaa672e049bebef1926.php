<?php

/* viewHeader.html */
class __TwigTemplate_8b535aece56b6eaa672e049bebef1926 extends Twig_Template
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
        // line 1
        echo "<div class=\"container\"> 
    <div class=\"row\">
        <header class=\"navbar bg-inverse\">
            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                <a class=\"navbar-brand\" href=\"/admin\">
                    <img src=\"/theme/assets/images/wizards.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
                    Vida-CMS
                </a>
            </div>
            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    
                    ";
        // line 13
        if ((!twig_test_empty((isset($context["sessionUser"]) ? $context["sessionUser"] : null)))) {
            // line 14
            echo "                        <div class=\"pull-right\">
                            <h4 class=\"pull-left userName\">";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "</h4>
                            <form method=\"post\" class=\"pull-left\">
                                <input type=\"submit\" class=\"btn btn-success btn-send\" name=\"exitUser\" value=\"Выход\">
                            </form>
                        </div>
                    ";
        } else {
            // line 21
            echo "                        <div class=\"pull-right\">
                            <a class=\"navbar-brand\" href=\"/authorization\">Вход</a>
                            <a class=\"navbar-brand\" href=\"/registration\">Регистрация</a> 
                        </div>
                    ";
        }
        // line 25
        echo " 
                </div>                
                
            </div>
        </header>
    </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "viewHeader.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 25,  47 => 21,  38 => 15,  35 => 14,  33 => 13,  19 => 1,);
    }
}
