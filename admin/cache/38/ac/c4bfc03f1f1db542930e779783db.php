<?php

/* viewPageAdmin.html */
class __TwigTemplate_38acc4bfc03f1f1db542930e779783db extends Twig_Template
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
                    <li class=\"active\"><a href=\"/admin/pages/\">Страницы</a></li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Добавление страниц</h1>
        </div>
        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-10\">
             <form method=\"post\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id"), "html", null, true);
        echo "\">
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
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label>Название страницы</label>
                        <input class=\"form-control ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 0), "html", null, true);
        echo "\" type=\"text\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        echo "\" required>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label>URL</label>
                        <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"col-lg-1\">
                    <div class=\"form-group\">
                        <label>Видимость</label>
                        <input class=\"form-control\" type=\"checkbox\" name=\"visible\" value=";
        // line 59
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array(), "any", true, true)) {
            echo " \"1\" checked ";
        } else {
            echo " \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible"), "html", null, true);
            echo "\" checked ";
        }
        echo "\">
                    </div>
                </div>
                <div class=\"col-lg-1\"></div>
                <div class=\"col-lg-12\"> 
                    <div class=\"form-group\">
                        <script type=\"text/javascript\" src=\"http://js.nicedit.com/nicEdit-latest.js\"></script> <script type=\"text/javascript\">
                        //<![CDATA[
                            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                        //]]>
                        </script>
                        <label>Текст страницы <small></small></label>
                        <textarea class=\"form-control\" name=\"textpage\" rows=\"8\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "textpage"), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <div class=\"col-lg-12\"> 
                    <div class=\"form-group\">
                        <label>Описание</label>
                        <textarea class=\"form-control\" name=\"description\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description"), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <div class=\"col-lg-12\"> 
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"save\" value=\"Сохранить\">
                </div>
            </form>
        </div>
        <div class=\"col-lg-1\"></div>            
        </div>        
    </div>
</div> 
";
    }

    public function getTemplateName()
    {
        return "viewPageAdmin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 77,  155 => 71,  134 => 59,  125 => 53,  114 => 47,  108 => 43,  99 => 40,  96 => 39,  92 => 38,  87 => 36,  77 => 28,  74 => 27,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
