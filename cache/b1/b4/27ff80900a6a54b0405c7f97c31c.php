<?php

/* index.html */
class __TwigTemplate_b1b427ff80900a6a54b0405c7f97c31c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'sitebar' => array($this, 'block_sitebar'),
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
        <link href=\"/theme/assets/lib/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"/theme/assets/css/style.css\" rel=\"stylesheet\">

        <script type=\"text/javascript\" src=\"/theme/assets/lib/jquery-3.1.0.min.js\"></script>
        <script type=\"text/javascript\" src=\"/theme/assets/lib/bootstrap/js/bootstrap.js\"></script>
    </head>
    <body>
        <div id=\"wrapper\">
            ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "
            ";
        // line 17
        $this->displayBlock('navbar', $context, $blocks);
        // line 19
        echo "
            <div class=\"container\"> 
                <div class=\"row\">
                    ";
        // line 22
        $this->displayBlock('sitebar', $context, $blocks);
        // line 24
        echo "                
                    ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "                </div>
            </div>

            <div class=\"container\" id=\"footer\">
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

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "            ";
    }

    // line 17
    public function block_navbar($context, array $blocks = array())
    {
        // line 18
        echo "            ";
    }

    // line 22
    public function block_sitebar($context, array $blocks = array())
    {
        // line 23
        echo "                    ";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  104 => 25,  100 => 23,  97 => 22,  93 => 18,  90 => 17,  86 => 15,  83 => 14,  78 => 4,  61 => 27,  59 => 25,  56 => 24,  54 => 22,  49 => 19,  47 => 17,  44 => 16,  42 => 14,  29 => 4,  24 => 1,);
    }
}
