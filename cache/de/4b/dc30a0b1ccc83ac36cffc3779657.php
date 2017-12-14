<?php

/* viewPage.html */
class __TwigTemplate_de4bdc30a0b1ccc83ac36cffc3779657 extends Twig_Template
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
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3 class=\"text-center\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["textPage"]) ? $context["textPage"] : null), "title"), "html", null, true);
        echo "</h3>  
    </div>
    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
    <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\">
        ";
        // line 25
        echo $this->getAttribute((isset($context["textPage"]) ? $context["textPage"] : null), "textpage");
        echo "    
    </div>
    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "viewPage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  70 => 21,  66 => 19,  63 => 18,  58 => 15,  52 => 12,  49 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
