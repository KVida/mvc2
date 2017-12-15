<?php

/* viewMenu.html */
class __TwigTemplate_f5d8aaa24f51149f636aee817e4e6583 extends Twig_Template
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
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["global_menuPages"]) ? $context["global_menuPages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuPage"]) {
            // line 7
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuPage"]) ? $context["menuPage"] : null), "url"), "html", null, true);
            echo "\" class=\"clickMenu\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuPage"]) ? $context["menuPage"] : null), "title"), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuPage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "
                    <li><a href=\"/cart/\">Корзина <span class=\"badge productCart\"></span></a></li>
                </ul> 
            </div>
        </nav>
    </div>
</div> 

<script type=\"text/javascript\">
    \$('.productCart').text(calculateProductsCount());
</script>";
    }

    public function getTemplateName()
    {
        return "viewMenu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  30 => 7,  26 => 6,  19 => 1,  217 => 83,  211 => 80,  207 => 78,  197 => 76,  192 => 75,  188 => 74,  180 => 68,  176 => 66,  171 => 64,  168 => 63,  166 => 62,  161 => 59,  152 => 57,  148 => 56,  143 => 53,  139 => 52,  133 => 50,  131 => 49,  123 => 44,  119 => 42,  116 => 41,  112 => 39,  106 => 37,  103 => 36,  97 => 34,  95 => 33,  87 => 28,  78 => 24,  74 => 22,  71 => 21,  64 => 17,  61 => 16,  58 => 15,  52 => 12,  49 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
