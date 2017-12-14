<?php

/* product.html */
class __TwigTemplate_a19c76e98da7d62b6d7170288ba1b664 extends Twig_Template
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
        <h1>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentProducts"]) ? $context["contentProducts"] : null), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "name"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
            <img src=\"/uploads/";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentProducts"]) ? $context["contentProducts"] : null), "image"), "html", null, true);
        echo "\" height=\"30%\">
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
            <div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 products_price\">
                    ";
        // line 33
        if ((!twig_test_empty($this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "price")))) {
            // line 34
            echo "                        <div>Цена: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "price"), "html", null, true);
            echo "</div>
                    ";
        } else {
            // line 36
            echo "                        ";
            if ((!twig_test_empty($this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "sale_price")))) {
                // line 37
                echo "                            <div>Цена: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "sale_price"), "html", null, true);
                echo "</div>
                        ";
            } else {
                // line 39
                echo "                            <div>Цена уточняется</div>
                        ";
            }
            // line 41
            echo "                    ";
        }
        // line 42
        echo "                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    Артикул: #";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "sku"), "html", null, true);
        echo "
                </div>                
            </div>
            
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                <!-- ";
        // line 49
        if ((!twig_test_empty($this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "stock")))) {
            // line 50
            echo "                    <h5>Колличесво: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "stock"), "html", null, true);
            echo "</h5>
                ";
        } else {
            // line 52
            echo "                    <h5>Колличесво уточняется</h5>
                ";
        }
        // line 53
        echo " -->
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contentImgs"]) ? $context["contentImgs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contentImg"]) {
            // line 57
            echo "                    <img src=\"/uploads/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentImg"]) ? $context["contentImg"] : null), "filename"), "html", null, true);
            echo "\" height=\"10%\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentImg'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                
                    ";
        // line 62
        if ((!twig_test_empty($this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "stock")))) {
            // line 63
            echo "                        <div class=\"title\">Описание товара:</div>
                        <div class=\"content\">";
            // line 64
            echo $this->getAttribute((isset($context["contentProducts"]) ? $context["contentProducts"] : null), "description");
            echo "</div>
                    ";
        } else {
            // line 66
            echo "                        <div class=\"content\">Описание уточняется</div>
                    ";
        }
        // line 68
        echo "                
            </div> 
        </div>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> 
                <label>Выберете колличество: </label>
                <select id=\"selectManyPurchases_js\" type='number' name='amount'> 
                    ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["contentVariant"]) ? $context["contentVariant"] : null), "stock")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 75
            echo "                        * ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "
                        <option value='";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 78
        echo "                </select>

            <button id=\"manyPurchases_js\" class=\"btn btn-success oneBuy_js\" data-productId=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentProducts"]) ? $context["contentProducts"] : null), "id"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span><span style=\"margin-left: 5px;\">Купить</span></button>

            <form method=\"post\">
                <input type=\"hidden\" name=\"wish_product_id\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentProducts"]) ? $context["contentProducts"] : null), "id"), "html", null, true);
        echo "\">
            </form>
        </div>
    </div>   
</div>
<script type=\"text/javascript\">
    \$(function(){
        \$('#manyPurchases_js').click(function(e){
            \$.ajax({
                method : 'POST',
                url : '/core/ajax.php',
                dataType : 'json',
                data : {
                    id : \$(e.currentTarget).attr('data-productId'),
                    amount : \$('#selectManyPurchases_js').val(),
                }, 
                success : function(dataName) {
                    console.log(dataName);
                }
            });
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "product.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 83,  211 => 80,  207 => 78,  197 => 76,  192 => 75,  188 => 74,  180 => 68,  176 => 66,  171 => 64,  168 => 63,  166 => 62,  161 => 59,  152 => 57,  148 => 56,  143 => 53,  139 => 52,  133 => 50,  131 => 49,  123 => 44,  119 => 42,  116 => 41,  112 => 39,  106 => 37,  103 => 36,  97 => 34,  95 => 33,  87 => 28,  78 => 24,  74 => 22,  71 => 21,  64 => 17,  61 => 16,  58 => 15,  52 => 12,  49 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
