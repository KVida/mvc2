<?php

/* viewCategoryAdmin.html */
class __TwigTemplate_f3f30f44635635596d865370e772dcae extends Twig_Template
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
                    <li><a href=\"/admin/\">Товары</a></li>
                    <li class=\"active\"><a href=\"/admin/categories/\">Категории</a></li>
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
        <div class=\"col-lg-12\">
            <h1>Добавление категории</h1>
        </div>
        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-10\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"row\">
                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["messageLine"]) {
            // line 39
            echo "                        <div class=\"col-md-12\">
                            <p class=\"text-center text-danger bg-warning\">";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["messageLine"]) ? $context["messageLine"] : null), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageLine'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "                </div>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
        echo "\">
                <div class=\"col-lg-6\">    
                    <div class=\"form-group ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 0), "html", null, true);
        echo "\">
                        <label>Название категории</label>
                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo "\" required>
                    </div>
                </div>
                <div class=\"col-lg-1\">
                    <div class=\"form-group\">
                        <label>Видимость</label>
                        <input class=\"form-control\" type=\"checkbox\" name=\"visible\" value=";
        // line 54
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array(), "any", true, true)) {
            echo " \"1\" checked ";
        } else {
            echo " ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible") > 0)) {
                echo " \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible"), "html", null, true);
                echo "\" checked ";
            } else {
                echo " \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible"), "html", null, true);
                echo "\" ";
            }
            echo " ";
        }
        echo ">
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label>Картинка</label>
                        <input class=\"form-control\" type=\"file\" name=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-1\">
                    <div class=\"form-group\">
                        <p> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "image"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"col-lg-6\"> 
                    <div class=\"form-group\">
                        <label>URL</label>
                        <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"col-lg-6\"> 
                    <div class=\"form-group\">
                        <label>Категория <small>(нужно выбрать категорию к которой будет относиться новая категория)</small></label>
                        <select name=\"parent_id\" class=\"selectpicker form-control\"> 
                            ";
        // line 78
        $this->env->loadTemplate("main/tree-showOption.html.twig")->display(array("fullCategory" => (isset($context["arrayCategor"]) ? $context["arrayCategor"] : null)));
        // line 79
        echo "                        </select>
                    </div>
                </div>
                <div class=\"card-block col-lg-12\">                
                    <div class=\"form-group\">
                        <script type=\"text/javascript\" src=\"http://js.nicedit.com/nicEdit-latest.js\"></script> <script type=\"text/javascript\">
                        //<![CDATA[
                            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                        //]]>
                        </script>
                        <label>Описание</label>
                        <textarea class=\"form-control\" name=\"description\">";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description"), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <div class=\"card-block col-lg-12\">
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"save\" value=\"Сохранить\">
                </div>
            </form>
        </div>
        <div class=\"col-lg-1\"></div>    
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "viewCategoryAdmin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 90,  176 => 79,  174 => 78,  164 => 71,  155 => 65,  127 => 54,  118 => 48,  113 => 46,  108 => 44,  105 => 43,  96 => 40,  93 => 39,  89 => 38,  78 => 29,  75 => 28,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
