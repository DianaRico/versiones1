<?php

/* CursoMainBundle:Default:detalle.html.twig */
class __TwigTemplate_0dffc054e14b04ae1f1bb32810e68eb4 extends Twig_Template
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
        echo "<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/materialize.min.css"), "html", null, true);
        echo "\">

<h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "nomzona"), "html", null, true);
        echo "</h1>
<ul>
    <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "nomzona"), "html", null, true);
        echo "= id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "idzona"), "html", null, true);
        echo " </li>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("zona"), "html", null, true);
        echo "\">volver atras </a>



</ul>

";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
