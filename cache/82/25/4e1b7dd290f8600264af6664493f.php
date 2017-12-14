<?php

/* view_404.html */
class __TwigTemplate_82254e1b7dd290f8600264af6664493f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    }

    // line 6
    public function block_sitebar($context, array $blocks = array())
    {
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"card text-center h-100\">
    <div class=\"card-block\">
        <h1 class=\"card-title display-1\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "</h1>
        <h2 class=\"card-subtitle text-muted\">Запрашиваемая Вами страница не найдена!</h2>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "view_404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  43 => 10,  40 => 9,  35 => 6,  30 => 3,);
    }
}
