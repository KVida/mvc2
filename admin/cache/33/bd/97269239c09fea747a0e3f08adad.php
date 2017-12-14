<?php

/* view_main.html */
class __TwigTemplate_33bd97269239c09fea747a0e3f08adad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("main.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Главная admin
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "view_header.html"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#\">Товары</a></li>
                    <li><a href=\"#\">Категории</a></li>
                    <li><a href=\"#\">Бренды</a></li>
                    <li><a href=\"#\">Свойства</a></li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    <h3>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["numberProducts"]) ? $context["numberProducts"] : null), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    <button>Добавить товар</button>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                </div>
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayProducts"]) ? $context["arrayProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 43
            echo "                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                        <!-- картинка -->
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                        ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                        ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stock"), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    <!-- картинка -->
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["selectNameTableProducts"]) ? $context["selectNameTableProducts"] : null), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["selectPriceTableProducts"]) ? $context["selectPriceTableProducts"] : null), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["selectStockTableProducts"]) ? $context["selectStockTableProducts"] : null), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "view_footer.html"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "view_main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 77,  154 => 76,  143 => 68,  137 => 65,  131 => 62,  123 => 56,  114 => 53,  108 => 50,  102 => 47,  96 => 43,  92 => 42,  78 => 31,  72 => 27,  69 => 26,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
