<?php

/* main/tree-showOption.html.twig */
class __TwigTemplate_94c90fa0656d4326e756e31cb77ba871 extends Twig_Template
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
        echo "<option value=\"0\">Корневая категория</option> 
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fullCategory"]) ? $context["fullCategory"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "id"), "html", null, true);
            echo "\" style=\"margin-left:5px\" ";
            if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "isSelected")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "name"), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 4
        echo "s";
    }

    public function getTemplateName()
    {
        return "main/tree-showOption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
