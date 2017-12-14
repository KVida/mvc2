<?php

/* viewProductAdmin.html */
class __TwigTemplate_5a90aad357c755ac796ce2790bc9f7ae extends Twig_Template
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
        <div class=\"col-lg-1\">
        </div>
        <div class=\"col-lg-10\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"row\">
                    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["messageLine"]) {
            // line 37
            echo "                        <div class=\"col-md-12\">
                            <p class=\"text-center text-danger bg-warning\">";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["messageLine"]) ? $context["messageLine"] : null), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageLine'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "                </div> 

                <input type=\"hidden\" name=\"id\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
                <div class=\"col-lg-6\">    
                    <div class=\"form-group ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 0), "html", null, true);
        echo "\">
                        <label>Название</label>
                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\" required>
                    </div>
                </div>
                <div class=\"col-lg-1\">  
                    <div class=\"form-group\">
                        <label>Видимость</label>
                        <input class=\"form-control\" type=\"checkbox\" name=\"visible\" value=";
        // line 53
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array(), "any", true, true)) {
            echo " \"1\" checked ";
        } else {
            echo " \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible"), "html", null, true);
            echo "\" checked ";
        }
        echo ">
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label>Картинка основная</label>
                        <input class=\"form-control\" type=\"file\" name=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <p></p>
                        <p> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-lg-6\"> 
                    <div class=\"form-group\">
                        <label>Категория <small>(нужно выбрать категорию к которой будет относиться товара)</small></label>
                        <select name=\"parent_id\" class=\"selectpicker form-control\">
                            ";
        // line 72
        $this->env->loadTemplate("main/tree-showOption.html.twig")->display(array("fullCategory" => (isset($context["arrayCategor"]) ? $context["arrayCategor"] : null)));
        // line 73
        echo "                        </select>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label>URL</label>
                        <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
                    </div>
                </div>
                
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label>Остальные картинки</label>
                        <input class=\"form-control\" type=\"file\" name=\"productImgs[]\"  multiple>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"form-group\">
                        <p></p>
                        ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayImage"]) ? $context["arrayImage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 93
            echo "                            <p> ";
            echo twig_escape_filter($this->env, (isset($context["images"]) ? $context["images"] : null), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 95
        echo "                    </div>
                </div>
                <div class=\"card-block col-lg-12\">
                    <div class=\"form-group\">
                        <script type=\"text/javascript\" src=\"http://js.nicedit.com/nicEdit-latest.js\"></script> <script type=\"text/javascript\">
                        //<![CDATA[
                            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                        //]]>
                        </script>
                        <label for=\"textTextarea\">Описание</label>
                        <textarea class=\"form-control\" id=\"textTextarea\" name=\"description\" cols=\"40\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <!-- variant -->
                <input type=\"hidden\" name=\"idVariant\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "id"), "html", null, true);
        echo "\"> 
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "product_id"), "html", null, true);
        echo "\">

                <div class=\"form-group ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 1), "html", null, true);
        echo "\">
                    <div class=\"col-lg-3\">
                        <label>Название варианта</label>
                        <input class=\"form-control\" type=\"text\" name=\"nameVariant\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "name"), "html", null, true);
        echo "\" required>
                    </div>
                </div>
                <div class=\"form-group ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 2), "html", null, true);
        echo "\">
                    <div class=\"col-lg-2\">
                        <label>Артикул</label>
                        <input class=\"form-control\" type=\"text\" name=\"sku\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "sku"), "html", null, true);
        echo "\" required>
                    </div>
                </div>
                <div class=\"form-group ";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 3), "html", null, true);
        echo "\">
                    <div class=\"col-lg-2\">
                        <label>Цена</label>
                        <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "price"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 4), "html", null, true);
        echo "\">
                    <div class=\"col-lg-2\">
                        <label>Со скидкой</label>
                        <input class=\"form-control\" type=\"text\" name=\"sale_price\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "sale_price"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group ";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 5), "html", null, true);
        echo "\">
                    <div class=\"col-lg-2\">
                        <label>Колличество</label>
                        <input class=\"form-control\" type=\"text\" name=\"stock\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : null), "stock"), "html", null, true);
        echo "\" required>
                    </div>
                </div>
                <div class=\"col-lg-1\">
                    <p></p>
                    <!-- <input class=\"btn btn-primary\" type=\"submit\" name=\"addVariant\" value=\"Добавить еще один вариант\"> -->
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
        return "viewProductAdmin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 139,  272 => 136,  266 => 133,  260 => 130,  254 => 127,  248 => 124,  242 => 121,  236 => 118,  230 => 115,  224 => 112,  219 => 110,  215 => 109,  208 => 105,  196 => 95,  187 => 93,  183 => 92,  167 => 79,  159 => 73,  157 => 72,  147 => 65,  126 => 53,  117 => 47,  112 => 45,  107 => 43,  103 => 41,  94 => 38,  91 => 37,  87 => 36,  78 => 29,  75 => 28,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
