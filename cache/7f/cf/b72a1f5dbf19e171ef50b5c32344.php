<?php

/* viewOneProduct.html */
class __TwigTemplate_7fcfb72a1f5dbf19e171ef50b5c32344 extends Twig_Template
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
        echo "<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
    <div class=\"thumbnail\">
        <a href=\"/product/";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\" >
            <img src=\"/uploads/";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
        echo "\" style=\"max-height: 140px;\" class=\"d-inline-block align-top\" alt=\"\">
            <p class=\"text-center\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "</p> 
        </a>
        <hr>

        <button class=\"btn btn-success oneBuy_js\" data-productId=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span><span style=\"margin-left: 5px;\">Купить</span></button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "viewOneProduct.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
