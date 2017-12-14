<?php

/* index.html */
class __TwigTemplate_2defbef4fd1e00818a033facc3364c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'link' => array($this, 'block_link'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
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
        <link href=\"../../theme/assets/lib/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 7
        $this->displayBlock('link', $context, $blocks);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <div id=\"wrapper\">
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
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <p></p>
                        <p class=\"text-center\"> &copy; Kvida 2017г.</p>
                    </div>
                </div>
            </div>                     
        </div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_link($context, array $blocks = array())
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

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  93 => 17,  86 => 14,  82 => 12,  79 => 11,  74 => 7,  69 => 4,  54 => 19,  52 => 17,  49 => 16,  47 => 14,  44 => 13,  42 => 11,  29 => 4,  24 => 1,  110 => 56,  89 => 15,  80 => 31,  77 => 30,  61 => 16,  58 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 7,  32 => 3,);
    }
}
