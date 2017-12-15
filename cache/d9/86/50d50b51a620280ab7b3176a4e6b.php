<?php

/* partialProduct.html */
class __TwigTemplate_d98650d50b51a620280ab7b3176a4e6b extends Twig_Template
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
        echo "<span class=\"label ";
        echo twig_escape_filter($this->env, (isset($context["cls"]) ? $context["cls"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "partialProduct.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
