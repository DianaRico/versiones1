<?php

/* CursoMainBundle:Default:zona.html.twig */
class __TwigTemplate_df0a9a7c702ae73b86137807d109108f extends Twig_Template
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
        echo "<!Doctype html>

<html>
  <head>
    <title>Registro </title>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/materialize.min.css"), "html", null, true);
        echo "\">


  </head>
  <body>
    <div ><!--ajusta el contenido del la pagina -->
     <div class=\"row\">
    <nav class=\"grey darken-2\" >
    <div class=\"nav-wrapper \">
     <a href=\"#\" class=\"brand-logo\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/Img/imagen2.jpg"), "html", null, true);
        echo "\" width=\"65\" height=\"65\" class=\"responsive-img circle\"></a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
      <a href=\"#\" class=\"brand-logo center\" >Cita Medica por internet</a>
      <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
 
      <li> Usuario:<span class=\"label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nombre"), "method"), "html", null, true);
        echo "</span></li>
      <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("salir");
        echo "\">Cerrar Seccion</a></li>
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("formulario");
        echo "\">Formularios</a></li><!--en este se listaran todos lso form para ser editados-->
       <li><a href=\"collapsible.html\"></a></li>
      </ul>
      <ul class=\"side-nav\" id=\"mobile-demo\">
        <li><a href=\"Control.html.twig\">Sass</a></li>
        <li><a href=\"badges.html\">Components</a></li>
        <li><a href=\"collapsible.html\">JavaScript</a></li>
      </ul>
    
     <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/Img/imagen2.jpg"), "html", null, true);
        echo "\" class=\"responsive-img circle\">
     </div>
    <div class=\"nav-content\">
     
    </div>
  </nav>
<h1>Listado de zonas</h1>
<table class=\"striped\" aling=\"center\">

    <tbody>
       <thead>
        <tr>
          <th>Zona</th>
          <th>ID</th>
          <th>Acciones</th>
       </tr>
       </thead>

                   
    <tbody>
    ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 54
            echo "    <tr>
      <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : $this->getContext($context, "dato")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : $this->getContext($context, "dato")), "nomzona"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("zona/edit"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : $this->getContext($context, "dato")), "id"), "html", null, true);
            echo "\" title\"editar\">Editar</a>
      -
      <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("zona/delete"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : $this->getContext($context, "dato")), "id"), "html", null, true);
            echo " title=\"Eliminar\">Eliminar</a>
      </td>

    </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
</table>    
</body>
</html>


           <script type=\"application/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"application/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/materialize.min.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:zona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 72,  135 => 71,  127 => 65,  113 => 59,  106 => 57,  102 => 56,  98 => 55,  95 => 54,  91 => 53,  68 => 33,  56 => 24,  52 => 23,  48 => 22,  39 => 16,  27 => 7,  19 => 1,);
    }
}
