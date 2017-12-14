<?php

/* viewMainAdmin.html */
class __TwigTemplate_43af06bb5a2f4c62758c7d4e7b178b85 extends Twig_Template
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
        echo "    ";
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "view_header_admin.html"), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"/admin/\">Товары</a></li>
                <li><a href=\"/admin/categories/\">Категории</a></li>
            </ul>
        </div>
    </div>
</div>
";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
            </div>
            <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                    <h3>Видимых ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["numberProducts"]) ? $context["numberProducts"] : null), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    <p></p>
                    <a href=\"/admin/product/?method=add\" class=\"btn btn-primary\">Добавить товар</a>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"></div>
            </div>
        </div>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"card-block\">
                <h2 class=\"card-title\">Список товаров</h2>
            </div>
        </div>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\">
            </div>
            <div class=\"col-lg-11 col-md-11 col-sm-11 col-xs-11\">
                ";
        // line 54
        echo (isset($context["productHTML"]) ? $context["productHTML"] : null);
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "viewMainAdmin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 54,  87 => 36,  78 => 29,  75 => 28,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
