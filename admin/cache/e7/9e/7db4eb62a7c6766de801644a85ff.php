<?php

/* viewAllCategoriesAdmin.html */
class __TwigTemplate_e79e7db4eb62a7c6766de801644a85ff extends Twig_Template
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
        echo "../theme/assets/css/styleAdmin.css
";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "view_header.html"), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        // line 16
        echo "<!--     <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <ul class=\"nav nav-tabs\">
                    <li><a href=\"/admin/\">Товары</a></li>
                    //<li><a href=\"/admin/products/\">Все товары</a></li>
                    <li><a href=\"/admin/categories/\">Категории</a></li>
                    <li class=\"active\"><a href=\"/admin/categoriesAll/\">Все категории</a></li>
                </ul>
            </div>
        </div>
    </div> -->
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "<!--  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h2>Список всех категорий</h2>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"></div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                ";
        // line 39
        echo (isset($context["fullCategoryTree"]) ? $context["fullCategoryTree"] : null);
        echo "
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
            </div>
        </div>
    </div>
</div> -->
";
    }

    public function getTemplateName()
    {
        return "viewAllCategoriesAdmin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  80 => 31,  77 => 30,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
