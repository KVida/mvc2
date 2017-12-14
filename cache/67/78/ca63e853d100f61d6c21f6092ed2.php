<?php

/* viewCart.html */
class __TwigTemplate_6778ca63e853d100f61d6c21f6092ed2 extends Twig_Template
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
    ";
        // line 23
        if (array_key_exists("message", $context)) {
            // line 24
            echo "    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3 class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h3>
    </div>
    ";
        } else {
            // line 28
            echo "    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3 class=\"text-center\">Ваша корзина</h3>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
            <h5>Картинка:</h5>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
            <h5>Название:</h5>
        </div>

        <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
            <h5>Цена:</h5>
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
            <h5>Выберете колличество: </h5>
        </div>

        <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
            <h5>Общая цена:</h5>        
        </div>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <form method=\"post\">
            ";
            // line 52
            echo (isset($context["productHTML"]) ? $context["productHTML"] : null);
            echo " 
            <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\">
                <p></p>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-5 col-xs-5\">
                <h4>Общая сумма заказа:</h4>
            </div>
            <div class=\"col-lg-5 col-md-5 col-sm-3 col-xs-3 totalPriceOrder\">
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                <p></p>
            </div>
            <input id=\"saveProductOrder\" class=\"btn btn-success\" type=\"submit\" name=\"saveProductOrder\" style=\"display:";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["displayCSSorder"]) ? $context["displayCSSorder"] : null), "html", null, true);
            echo "\" value=\"Оформить заказ\">
        </form>       
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"display:";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["displayCSSuser"]) ? $context["displayCSSuser"] : null), "html", null, true);
            echo "\">
        <h2 class=\"text-center\">Проверьте ваши данные:</h2>
        <form method=\"post\">
            <div class=\"row\">
                ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messageError"]) ? $context["messageError"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["messageLine"]) {
                // line 72
                echo "                    <div class=\"col-md-12\">
                        <p class=\"text-center text-danger bg-warning\">";
                // line 73
                echo twig_escape_filter($this->env, (isset($context["messageLine"]) ? $context["messageLine"] : null), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageLine'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 76
            echo "            </div> 
            <input type=\"hidden\" name=\"idOrder\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">
            <input type=\"hidden\" name=\"idPurchase\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "id"), "html", null, true);
            echo "\">
            <input class=\"inputTotalPriceOrder\" type=\"hidden\" name=\"orderTotalPrise\">
            <input type=\"hidden\" name=\"idUser\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
            echo "\">

            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <div class=\"form-group ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 0), "html", null, true);
            echo "\">
                        <label for=\"form_phone\">Телефон: </label>
                        <input type=\"tel\" name=\"phone\" id=\"form_phone\" class=\"form-control\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone"), "html", null, true);
            echo "\" required>
                    </div>
                </div>
                ";
            // line 89
            if (twig_test_empty($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))) {
                // line 90
                echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <div class=\"form-group\">
                        <label for=\"form_city\">Город </label>
                        <input type=\"text\" name=\"city\" id=\"form_city\" class=\"form-control\" value=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city"), "html", null, true);
                echo "\" required>
                    </div>
                </div>
                ";
            } else {
                // line 97
                echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <div class=\"form-group ";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 1), "html", null, true);
                echo "\">
                        <label for=\"form_city\">Город </label>
                        <input type=\"text\" name=\"city\" id=\"form_city\" class=\"form-control\" value=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "city"), "html", null, true);
                echo "\" required>
                    </div>
                </div>
                ";
            }
            // line 104
            echo "            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <div class=\"form-group ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 2), "html", null, true);
            echo "\">
                        <label for=\"form_street\">проспект/улица </label>
                        <input type=\"text\" name=\"street\" id=\"form_street\" class=\"form-control\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "user_street"), "html", null, true);
            echo "\" required>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    <div class=\"form-group ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 3), "html", null, true);
            echo "\">
                        <label for=\"form_house_number\">номер дома </label>
                        <input type=\"text\" name=\"house_number\" id=\"form_house_number\" class=\"form-control\"  value=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "user_house_number"), "html", null, true);
            echo "\" required>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                    <div class=\"form-group ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), 4), "html", null, true);
            echo "\">
                        <label for=\"form_apartment_number\">номер квартиры </label>
                        <input type=\"text\" name=\"apartment_number\" id=\"form_apartment_number\" class=\"form-control\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "user_apartment_number"), "html", null, true);
            echo "\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"form-group\">
                        <label for=\"form_message\">Коментарий к заказу: </label>
                        <textarea id=\"form_message\" name=\"comment\" class=\"form-control\" rows=\"4\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "user_comment"), "html", null, true);
            echo "</textarea>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                    <p></p>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    <input id=\"saveOrder_js\" class=\"btn btn-success\" type=\"submit\" name=\"saveOrder\" value=\"Оформить заказ\">
                </div>
        </form>
    </div>
    ";
        }
        // line 142
        echo "   
</div>
<script type=\"text/javascript\">
    \$(function(){
        \$('div.product_js').each(function(i,elem){
            var totalPrice = parseInt(\$(\$('div').find('.totalPrice')[i]).text());
            \$(\$('.product_js')[i]).find('.selectManyPurchases_js').change(function(e){
                \$(e.currentTarget).attr('value'); 
                \$(\$('.selectManyPurchases_js')[i]).attr('selected');
                var newSelect = \$(\$('.selectManyPurchases_js')[i]).val();
                var onePrice = \$(\$('div').find('.price')[i]).text();
                totalPrice = parseInt(newSelect,10) * parseInt(onePrice,10);
                \$(\$('div').find('.totalPrice')[i]).text(totalPrice);

                \$(\$('div').find('.totalPriceOrder')).text(countTotalPrice());
            }); 
        });
        \$(\$('div').find('.totalPriceOrder')).text(countTotalPrice());

        \$('.inputTotalPriceOrder').val(countTotalPrice());

        function countTotalPrice() {
            var res = 0;
            \$('.totalPrice').each(function(i,elem){
                res += parseInt(\$(elem).text(),10);
            });
            return res;
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "viewCart.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 142,  262 => 129,  251 => 121,  246 => 119,  239 => 115,  234 => 113,  227 => 109,  222 => 107,  217 => 104,  210 => 100,  205 => 98,  202 => 97,  195 => 93,  190 => 90,  188 => 89,  182 => 86,  177 => 84,  170 => 80,  165 => 78,  161 => 77,  158 => 76,  149 => 73,  146 => 72,  142 => 71,  135 => 67,  129 => 64,  114 => 52,  88 => 28,  82 => 25,  79 => 24,  77 => 23,  74 => 22,  71 => 21,  64 => 17,  61 => 16,  58 => 15,  52 => 12,  49 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
