<?php

/* view_main.html */
class __TwigTemplate_b92751e1fe728e3af88d9dd1d0fd7077 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'link' => array($this, 'block_link'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
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
        echo "Главная admin
";
    }

    // line 7
    public function block_link($context, array $blocks = array())
    {
        // line 8
        echo "theme/assets/css/styleAdmin.css
";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "view_header_admin.html"), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"/admin/\">Товары</a></li>
                    <li><a href=\"/admin/categories/\">Категории</a></li>
                    <li><a href=\"#\">Бренды</a></li>
                    <li><a href=\"#\">Свойства</a></li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <!-- <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"> -->
                <h3>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["numberProducts"]) ? $context["numberProducts"] : null), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    <a href=\"/admin/product/\" class=\"btn btn-primary\">Добавить товар</a>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                </div>
            </div>
            <p>Все товары</p>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayProducts"]) ? $context["arrayProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                        <!-- картинка -->
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                        ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                        ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                        ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stock"), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "            </div>
            <p>Один товар</p>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    <!-- картинка -->
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["selectNameTableProducts"]) ? $context["selectNameTableProducts"] : null), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["selectPriceTableProducts"]) ? $context["selectPriceTableProducts"] : null), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["selectStockTableProducts"]) ? $context["selectStockTableProducts"] : null), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>

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
        return array (  153 => 75,  147 => 72,  141 => 69,  132 => 62,  123 => 59,  117 => 56,  111 => 53,  105 => 49,  101 => 48,  85 => 35,  79 => 31,  76 => 30,  60 => 16,  57 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
