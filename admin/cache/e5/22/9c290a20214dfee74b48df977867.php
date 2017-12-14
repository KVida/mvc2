<?php

/* view_footer.html */
class __TwigTemplate_e5229c290a20214dfee74b48df977867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <p class=\"text-center\"> &copy; Kvida 2017г.</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "view_footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
