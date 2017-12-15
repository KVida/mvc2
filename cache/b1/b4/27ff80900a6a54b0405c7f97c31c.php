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
        <script type=\"text/javascript\">
            function getCookie(name) {
              var matches = document.cookie.match(new RegExp(
                \"(?:^|; )\" + name.replace(/([\\.\$?*|{}\\(\\)\\[\\]\\\\\\/\\+^])/g, '\\\\\$1') + \"=([^;]*)\"
              ));
              return matches ? decodeURIComponent(matches[1]) : undefined;
            }

            function calculateProductsCount() {
                var products = JSON.parse(getCookie('product_cart') || '{\"0\":0}'),
                    counts = Object.values(products);

                return counts.reduce(function(a,b){return(parseInt(a)+parseInt(b))}) || '';
            }
        </script>
    </head>
    <body>
        <div id=\"wrapper\">
            ";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "
            ";
        // line 32
        $this->displayBlock('navbar', $context, $blocks);
        // line 34
        echo "
            <div class=\"container\"> 
                <div class=\"row\">
                    ";
        // line 37
        $this->displayBlock('sitebar', $context, $blocks);
        // line 39
        echo "                
                    ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 42
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

    // line 29
    public function block_header($context, array $blocks = array())
    {
        // line 30
        echo "            ";
    }

    // line 32
    public function block_navbar($context, array $blocks = array())
    {
        // line 33
        echo "            ";
    }

    // line 37
    public function block_sitebar($context, array $blocks = array())
    {
        // line 38
        echo "                    ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  119 => 40,  115 => 38,  112 => 37,  108 => 33,  105 => 32,  101 => 30,  98 => 29,  93 => 4,  76 => 42,  74 => 40,  71 => 39,  69 => 37,  64 => 34,  62 => 32,  59 => 31,  57 => 29,  29 => 4,  24 => 1,);
    }
}
