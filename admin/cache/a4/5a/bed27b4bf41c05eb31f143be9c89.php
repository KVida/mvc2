<?php

/* product.html */
class __TwigTemplate_a45abed27b4bf41c05eb31f143be9c89 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "view_header_categories.html"), "html", null, true);
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-1\">
        </div>
        <div class=\"col-lg-10\">
            <form method=\"post\">  
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">              
                <div class=\"form-group\">
                    <label>Название</label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <label>Видимость</label>
                    <input class=\"form-control\" type=\"checkbox\" name=\"visible\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <label>URL</label>
                    <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <label>Картинка</label>
                    <input class=\"form-control\" type=\"file\" name=\"image\" value=\"\">
                </div>
                <div class=\"form-group\">
                    <label>Описание</label>
                    <textarea class=\"form-control\" name=\"description\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
                </div>
                <!-- variant -->
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "id"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"name\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"position\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "position"), "html", null, true);
        echo "\">

                <div class=\"form-group\">
                    <div class=\"col-lg-3\">
                        <label>Цена</label>
                        <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "price"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-lg-3\">
                        <label>Со скидкой</label>
                        <input class=\"form-control\" type=\"text\" name=\"sale_price\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "sale_price"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-lg-3\">
                        <label>Колличество</label>
                        <input class=\"form-control\" type=\"text\" name=\"stock\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "stock"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <p></p>
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"addVariant\" value=\"Добавить еще один вариант\">
                </div>
                
                <div class=\"col-lg-5\"></div>
                <div class=\"col-lg-7\">
                    <p></p>
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"save\" value=\"Сохранить\">
                </div>
            </form>
        </div>
        <div class=\"col-lg-1\">
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "product.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 79,  154 => 73,  145 => 67,  137 => 62,  133 => 61,  129 => 60,  125 => 59,  119 => 56,  108 => 48,  101 => 44,  94 => 40,  88 => 37,  80 => 31,  77 => 30,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
