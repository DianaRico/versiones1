<?php

/* CursoMainBundle:Default:afiliado.html.twig */
class __TwigTemplate_88e88c7c1487b57712554cdb192afbe7 extends Twig_Template
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
    <title>Afiliados </title>
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
    
     </div>
    <div class=\"nav-content\">
     
    </div>
  </nav>
<div class=\"container center\">
   <div align=\"center\">
   <form  action=\"#\" class=\"center\">
          <div class=\"row\">
             <div class=\"input-field col s3\" >
             </div>

              <div class=\"input-field col s6\" >
             <input type=\"text\" id=\"Cedula\" class=\"form-control\" name=\"Cedula\">
             <label for=\"Cedula\">Cedula</label>
            </div>
              <div class=\"input-field col s3\" >
               <input type=\"text\" id=\"Horario\" class=\"form-control\" name=\"Horario\">
             <label for=\"Horario\">Horario</label>

             </div>
             </div>
            
              <div class=\"row\">
              <div class=\"input-field col s3\" >
             </div>
             <div class=\"input-field col s6\" id=\"Contraseña\" >
             <input type=\"text\" id=\"medico\" class=\"form-control\" name=\"medico\">
             <label for=\"Medico\">Medico</label>
             </div>
             <div class=\"input-field col s3\" >
              <input type=\"text\" id=\"UnMed\" class=\"form-control\" name=\"UnMed\" >
             <label for=\"UnidadMedica\">Unidad Medica</label>

             </div>
          </div>
   <div class=\"row\"><!--boton -->
              <div class=\"input-field col s3\" >
              </div>
              <div class=\"input-field col s6\" >
              <button class=\"btn waves-effect waves-light form-control\" type=\"button\" name=\"action\" aling=\"Cen\" id=\"Agregar\" value=\"Agregar\" >Agregar 
              <i class=\"material-icons assignment_ind\">assignment_ind</i>
              </button>
              <button class=\"btn waves-effect waves-light form-control\" type=\"button\" name=\"action\" aling=\"Cen\" id=\"Borrar\" value=\"Borrar\">Borrar 
              <i class=\"material-icons assignment_ind\">assignment_ind</i>
              </button>
               <button class=\"btn waves-effect waves-light form-control\"  type=\"button\" name=\"action\" aling=\"Cen\" id=\"Buscar\" value=\"Buscar\">Buscar 
              <i class=\"material-icons assignment_ind\">assignment_ind</i>
              </button>
              </div>
              <div class=\"input-field col s3\" >
             </div>
          </div>

    </form>
  </div>

  <script type=\"application/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"application/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/materialize.min.js"), "html", null, true);
        echo "\"></script>

<script>
    \$(document).ready(function () {
       \$(\"#Agregar\").click(function () {
           if(\$(\"#Cedula\").val() == \"\" ) alert(\"Cedula requerida.\");
           else if(\$(\"#Horario\").val() == \"\") alert(\"EL campo horario esta vacio.\");
           else if (\$(\"#medico\").val()==\"\") alert(\"El campo medico esta vacio\");
            else if (\$(\"#UnMed\").val()==\"\") alert(\"El campo Unidad Medica esta vacio\");
           else {
               \$.ajax({
                   url:\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("afiliado");
        echo "\",
                   type: 'POST',
                   data: \$(\".form-control\").serialize(),
                   success:function(respuesta){
                    alert(respuesta);
                       if(\$.trim(respuesta) == 1){
                            document.location.href = \"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("zona");
        echo "\";
                       }
                   },
               });
           }
       });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:afiliado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 108,  143 => 102,  129 => 91,  125 => 90,  56 => 24,  52 => 23,  48 => 22,  39 => 16,  27 => 7,  19 => 1,);
    }
}
