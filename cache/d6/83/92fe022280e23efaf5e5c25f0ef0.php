<?php

/* main_all.html */
class __TwigTemplate_d68392fe022280e23efaf5e5c25f0ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'sitebar' => array($this, 'block_sitebar'),
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
        echo "KVidaCMS
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container\"> 
    <div class=\"row\">
        <header class=\"navbar bg-inverse\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                <a class=\"navbar-brand\" href=\"/admin\">
                    <img src=\"/theme/assets/images/wizards.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
                    Vida-CMS
                </a>
            </div>
            <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                <div class=\"top-cover center-block\">
                    <p class=\"text-center top-name center-block\"></p>
                </div>
            </div>
        </header>
    </div>
</div> 
";
    }

    // line 27
    public function block_navbar($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"container\"> 
    <div class=\"row\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuPages"]) ? $context["menuPages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuPage"]) {
            // line 34
            echo "                        <li><a href=\"page/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuPage"]) ? $context["menuPage"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuPage"]) ? $context["menuPage"] : null), "title"), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuPage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "                </ul> 
            </div>
        </nav>
    </div>
</div> 
";
    }

    // line 43
    public function block_sitebar($context, array $blocks = array())
    {
        // line 44
        echo "<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
    ";
        // line 45
        echo (isset($context["sideBarCategories"]) ? $context["sideBarCategories"] : null);
        echo "
</div>
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "<div class=\"container\"> 
    <div class=\"row\">
        ";
        // line 52
        echo (isset($context["textPage"]) ? $context["textPage"] : null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "main_all.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 52,  114 => 50,  111 => 49,  104 => 45,  101 => 44,  98 => 43,  89 => 36,  78 => 34,  74 => 33,  67 => 28,  64 => 27,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
