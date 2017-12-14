<?php

/* main.html */
class __TwigTemplate_b65a75f99c1dd74c6a5875f42b58d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
        <link href=\"../theme/assets/lib/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
    </head>
    <body>

        <div id=\"content\">
            ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 16
        echo "
            ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "        </div>

    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "            ";
    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        // line 15
        echo "            ";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "            ";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "            ";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  85 => 18,  82 => 17,  75 => 14,  71 => 12,  68 => 11,  63 => 4,  56 => 22,  54 => 20,  51 => 19,  49 => 17,  46 => 16,  44 => 14,  41 => 13,  39 => 11,  29 => 4,  24 => 1,  157 => 77,  154 => 76,  143 => 68,  137 => 65,  131 => 62,  123 => 56,  114 => 53,  108 => 50,  102 => 47,  96 => 43,  92 => 21,  78 => 15,  72 => 27,  69 => 26,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
