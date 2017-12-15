<?php

/* view_header_admin.html */
class __TwigTemplate_17f28967b7f416cbb28d35765a61a4bc extends Twig_Template
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
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                <a class=\"navbar-brand\" href=\"/admin\">
                    <img src=\"theme/assets/images/wizards.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
                    Vida-CMS
                </a>
            </div>
            <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                <div class=\"top-cover center-block\">
                    <p class=\"text-center top-name center-block\"></p>
                </div>
            </div>
        </header>
        <nav class=\"navbar navbar-default\">
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"nav-item active\">
                        <a href=\"product/\"><img src=\"theme/assets/images/catalog.png\" alt=\"catalog\">Каталог</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"pages/\"><img src=\"theme/assets/images/pages.png\" alt=\"pages\">Страницы</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "view_header_admin.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  108 => 54,  87 => 36,  78 => 29,  75 => 28,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
