<?php

/* viewMessage.html */
class __TwigTemplate_0570f40b5f2797e7d7fb2b90f3d7b1ff extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "viewHeader.html"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
        // line 12
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "viewMenu.html"), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_sitebar($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
    ";
        // line 17
        echo (isset($context["sideBarCategories"]) ? $context["sideBarCategories"] : null);
        echo "
</div>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"col-xs-9 col-sm-9 col-md-9\">
    <div class=\"col-xs-8 col-sm-8 col-md-8 .col-md-offset-2\">
        <p class=\"lead\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-4 col-sm-4 col-md-4\">
        <a class=\"navbar-brand btn-primary\" href=\"/\">Перейти на главную</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "viewMessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  74 => 22,  71 => 21,  64 => 17,  61 => 16,  58 => 15,  52 => 12,  49 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
