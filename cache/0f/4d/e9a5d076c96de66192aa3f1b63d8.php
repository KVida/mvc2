<?php

/* products.html */
class __TwigTemplate_0f4de9a5d076c96de66192aa3f1b63d8 extends Twig_Template
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
        echo "<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        ";
        // line 24
        echo (isset($context["productHTML"]) ? $context["productHTML"] : null);
        echo "
    </div>    
</div>
<script type=\"text/javascript\">
    \$(function(){
        \$('.oneBuy_js').click(function(e){
            \$.ajax({
                method : 'POST',
                url : '/core/ajax.php',
                dataType : 'json',
                data : {
                    id : \$(e.currentTarget).attr('data-productId'),
                    amount : '1',
                }, 
                success : function(dataName) {
                    \$('.productCart').html(dataName);
                }
            });
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "products.html";
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
