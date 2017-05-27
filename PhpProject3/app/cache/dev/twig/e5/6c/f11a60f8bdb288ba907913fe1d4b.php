<?php

/* CursoMainBundle:Default:formularios.html.twig */
class __TwigTemplate_e56cf11a60f8bdb288ba907913fe1d4b extends Twig_Template
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
        echo "
<!Doctype html>

<html>
  <head>
    <title>Registro </title>
 
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/materialize.min.css"), "html", null, true);
        echo "\">


  </head>
  <body>
    <div ><!--ajusta el contenido del la pagina -->
     <div class=\"row\">
    <nav class=\"grey darken-2\" >
    <div class=\"nav-wrapper \">
     <a href=\"#\" class=\"brand-logo\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/Img/imagen2.jpg"), "html", null, true);
        echo "\" width=\"65\" height=\"65\" class=\"responsive-img circle\"></a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
      <a href=\"#\" class=\"brand-logo center\" >Cita Medica por internet</a>
      <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
 
      <li> Usuario:<span class=\"label\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nombre"), "method"), "html", null, true);
        echo "</span></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("salir");
        echo "\">Cerrar Seccion</a></li>
      <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("formulario");
        echo "\">Formularios</a></li><!--en este se listaran todos lso form para ser editados-->
       <li><a href=\"collapsible.html\"></a></li>
      </ul>
      <ul class=\"side-nav\" id=\"mobile-demo\">
        <li><a href=\"Control.html.twig\">Sass</a></li>
        <li><a href=\"badges.html\">Components</a></li>
        <li><a href=\"collapsible.html\">JavaScript</a></li>
      </ul>
    
    
    <div class=\"nav-content\">
     
    </div>
  </nav>

   </body>
       <table class=\"striped\" aling=\"center\">
        <thead>
          <tr>
              <th>Formularios</th>
              <th>Acccion</th>
              <th>Reporte</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Afiliados</td>
             <td><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("afiliado");
        echo "\">Editar</a></td>

            
            <td>Reporte</td>
          </tr>
          <tr>
            <td>Medicos</td>
           <td><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("afiliado");
        echo "\">Editar</a></td>
            <td>Reporte</td>
          </tr>
          <tr>
            <td>Instituciones</td>
            <td><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("afiliado");
        echo "\">Editar</a></td>
            <td>Reporte</td>
          </tr>
          <tr>
            <td>Zona</td>
            <td><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("afiliado");
        echo "\">Editar</a></td>
            <td>Reporte</td>
          </tr>
        </tbody>
      </table>

</html>";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:formularios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 71,  107 => 66,  99 => 61,  89 => 54,  58 => 26,  54 => 25,  50 => 24,  41 => 18,  29 => 9,  19 => 1,);
    }
}
