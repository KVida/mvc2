<?php

/* viewAllPagesAdmin.html */
class __TwigTemplate_a35e843f6d9e1b0bf4b371fe414f918d extends Twig_Template
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
                    <li><a href=\"/admin/pages/\">Страницы</a></li>
                    <!-- <li class=\"active\"><a href=\"/admin/pagesAll/\">Все страницы</a></li> -->
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
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h3>Список страниц</h3>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
            <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-4\">
                ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayPages"]) ? $context["arrayPages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            echo "                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
                    <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                        <a href=\"/admin/page/?method=edit&id=";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
            echo "</a>
                    </div>
                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
                        ";
            // line 43
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible") == 0)) {
                // line 44
                echo "                            (товар не видимый)
                        ";
            }
            // line 46
            echo "                    </div>
                    <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"/admin/page/?method=edit&id=";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id"), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Редактировать</a>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"/admin/page/?method=delete&id=";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id"), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Удалить</a>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 57
        echo "            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
            </div>
        </div>
    </div>
</div> 
";
    }

    public function getTemplateName()
    {
        return "viewAllPagesAdmin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 57,  121 => 52,  115 => 49,  110 => 46,  106 => 44,  104 => 43,  96 => 40,  92 => 38,  88 => 37,  78 => 29,  75 => 28,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
