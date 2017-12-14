<?php

/* viewOneProductAdmin.html */
class __TwigTemplate_90c517c2bc1b220ac17d43ca9cdfa76b extends Twig_Template
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
        echo "<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 divProduct\">
    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10 ";
        // line 2
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 0)) {
            echo " hiddenProduct ";
        }
        echo "\">
        <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
            <img src=\"/uploads/";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
        echo "\" height=\"10%\" class=\"d-inline-block align-top\" alt=\"\">
        </div>
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
            <p></p>
            <!-- ";
        // line 11
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 0)) {
            // line 12
            echo "                (товар не видимый)
            ";
        }
        // line 13
        echo " -->
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
        echo " грн.
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stock"), "html", null, true);
        echo " шт.
        </div>
    </div>
    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
        <a href=\"/admin/product/?method=edit&id=";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\" class=\"btn btn-primary\" role=\"button\">Редактировать</a>
        <p></p>
        <a href=\"/admin/product/?method=delete&id=";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\" class=\"btn btn-primary\" role=\"button\">Удалить</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "viewOneProductAdmin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  66 => 23,  59 => 19,  53 => 16,  48 => 13,  44 => 12,  42 => 11,  35 => 7,  29 => 4,  22 => 2,  19 => 1,);
    }
}
