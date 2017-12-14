<?php

/* categories.html */
class __TwigTemplate_9b3574b7915fcfd7fd6a24392b19b6e5 extends Twig_Template
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <ul class=\"nav nav-tabs\">
                    <li href=\"/admin/\"><a href=\"/admin/\">Товары</a></li>
                    <li><a class=\"active\">Категории</a></li>
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
        <div class=\"col-lg-12\">
            <h1>Добавление категории</h1>
        </div>
        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-10\">
            <form method=\"post\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
        echo "\">
                <div class=\"form-group\">
                    <label>Название категории</label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <label>Видимость</label>
                    <input class=\"form-control\" type=\"checkbox\" name=\"visible\" value=\"1\">
                </div>
                <div class=\"form-group\">
                    <label>URL</label>
                    <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <select name=\"parent_id\">
                        <option value=\"0\">Корневая категория</option>
                        <option value=\"0\">Пункт 1</option>
                        <option value=\"1\">Пункт 1.1</option>
                    </select>
                </div>
                
                <div class=\"form-group\">
                    <label>Картинка</label>
                    <input class=\"form-control\" type=\"file\" name=\"image\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "image"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <label>Описание</label>
                    <textarea class=\"form-control\" name=\"description\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description"), "html", null, true);
        echo "</textarea>
                </div>

                <input type=\"submit\" name=\"save\" value=\"Сохранить\">
            </form>
        </div>
        <div class=\"col-lg-1\"></div> 



        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["selectImageTableCategories"]) ? $context["selectImageTableCategories"] : null), "html", null, true);
        echo "
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["selectNameTableCategories"]) ? $context["selectNameTableCategories"] : null), "html", null, true);
        echo "
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                
            </div>
        </div> 

";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["aaa"]) ? $context["aaa"] : null), "html", null, true);
        echo "


        
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <p>Все товары</p>
            ";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayCategor"]) ? $context["arrayCategor"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categor"]) {
            // line 99
            echo "                <div class=\"col-lg-6\">
                    ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categor"]) ? $context["categor"] : null), "name"), "html", null, true);
            echo "
                </div>
                <div class=\"col-lg-6\">
                    ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categor"]) ? $context["categor"] : null), "parent_id"), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categor'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 106
        echo "        </div> 
    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 106,  186 => 103,  180 => 100,  177 => 99,  173 => 98,  164 => 92,  151 => 82,  145 => 79,  130 => 67,  123 => 63,  107 => 50,  96 => 42,  90 => 39,  80 => 31,  77 => 30,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
