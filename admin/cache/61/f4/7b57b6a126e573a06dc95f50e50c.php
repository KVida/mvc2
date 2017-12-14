<?php

/* main/tree-show.html.twig */
class __TwigTemplate_61f47b57b6a126e573a06dc95f50e50c extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fullCategory"]) ? $context["fullCategory"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 2
            echo "    <li>
        ";
            // line 3
            if ((null === $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "parentId"))) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "id"), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "name"), "html", null, true);
                echo "</a>
        ";
            }
            // line 6
            echo "
        ";
            // line 7
            if ((!(null === $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "parent")))) {
                // line 8
                echo "            <ul>
                ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "id"), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "nameCat"));
                echo "
                ";
                // line 10
                $this->env->loadTemplate("main/tree-show.html.twig")->display(array_merge($context, array("cats" => $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "children"))));
                // line 11
                echo "            </ul>
        ";
            }
            // line 13
            echo "    </li>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "main/tree-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  67 => 11,  65 => 10,  59 => 9,  56 => 8,  54 => 7,  41 => 4,  39 => 3,  36 => 2,  19 => 1,  97 => 42,  95 => 41,  90 => 39,  80 => 31,  77 => 30,  61 => 16,  58 => 15,  51 => 6,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
