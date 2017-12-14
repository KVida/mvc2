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
                    <li><a href=\"/cart/\">Корзина <span class=\"productCart\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["global_numCart"]) ? $context["global_numCart"] : null), "html", null, true);
        echo "</span></a></li>
                </ul> 
            </div>
        </nav>
    </div>
</div> ";
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
        return array (  44 => 10,  41 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
