<?php

/* viewOneProductCart.html */
class __TwigTemplate_e213b517e38045dcc26ef572ad5ca7cd extends Twig_Template
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
        echo "
<input type=\"hidden\" name=\"id[]\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentProducts"]) ? $context["contentProducts"] : null), "id"), "html", null, true);
        echo "\">
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 product_js\">
    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
        <img src=\"/uploads/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentProducts"]) ? $context["contentProducts"] : null), "image"), "html", null, true);
        echo "\" height=\"15%\">
    </div>
    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
        <h5>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentProducts"]) ? $context["contentProducts"] : null), "name"), "html", null, true);
        echo "</h5>
        <h6>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "name"), "html", null, true);
        echo "</h6>
    </div>

    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 price\">
    ";
        // line 13
        if ((!twig_test_empty($this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "price")))) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "price"), "html", null, true);
            echo " грн
    ";
        } else {
            // line 16
            echo "        ";
            if ((!twig_test_empty($this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "sale_price")))) {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "sale_price"), "html", null, true);
                echo " грн
        ";
            } else {
                // line 19
                echo "            уточняется
        ";
            }
            // line 21
            echo "    ";
        }
        // line 22
        echo "    </div>
    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
        <select class=\"selectManyPurchases_js\" type='number' name='amount[]'> 
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "stock")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["amountProduct"]) ? $context["amountProduct"] : null))) {
                // line 27
                echo "                    <option value='";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "' selected>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 29
                echo "                    <option value='";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                ";
            }
            // line 31
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "    
        </select>
    </div>
    <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 totalPrice\">
        ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
        echo "  
    </div>
    <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "viewOneProductCart.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  97 => 31,  89 => 29,  81 => 27,  78 => 26,  74 => 25,  69 => 22,  66 => 21,  62 => 19,  56 => 17,  53 => 16,  47 => 14,  45 => 13,  38 => 9,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }
}
