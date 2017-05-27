<?php

/* CursoMainBundle:Default:index.html.twig */
class __TwigTemplate_9e34dd3a670b3684e69779795d160f0c extends Twig_Template
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
    <nav class=\"nav-extended teal darken-1\">
    <div class=\"nav-wrapper \">
      <a href=\"#\" class=\"brand-logo center\" >Cita Medica por internet</a>
      <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
        <li><a href=\"Control.html.twig\">Cerrar Seccion</a></li>
        <li><a href=\"\">Inicio</a></li>
        <li><a href=\"collapsible.html\">Acerca de</a></li>
      </ul>
      <ul class=\"side-nav\" id=\"mobile-demo\">
        <li><a href=\"Control.html.twig\">Sass</a></li>
        <li><a href=\"badges.html\">Components</a></li>
        <li><a href=\"collapsible.html\">JavaScript</a></li>
      </ul>
    
     <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/Img/imagen2.jpg"), "html", null, true);
        echo "\" class=\"responsive-img circle\">
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
              <div class=\"input-field col s6\" id=\"usuario\" >
             <input type=\"text\" id=\"nombre\" class=\"form-control\">
             <label for=\"Cedula\">Cedula</label>
            </div>
              <div class=\"input-field col s3\" >
               <input type=\"text\" id=\"Horario\" class=\"form-control\">
             <label for=\"Horario\">Horario</label>

             </div>
             </div>
            
              <div class=\"row\">
              <div class=\"input-field col s3\" >
             </div>
             <div class=\"input-field col s6\" id=\"Contraseña\" >
             <input type=\"text\" id=\"medico\" class=\"form-control\">
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
  
      </div>   
      </div><!--Cierra el row-->
   </body>
    <html> 
    <script>
      //aqui va el codigo del ajax 
       \$(document).ready(function () {
       \$(\"input[type=button]\").click(function () {
        var btn = \$(this).val();
           if(\$(\"#Nombre\").val() == \"\" ) alert(\"Nombre de Medico es requerido.\");
           else if(\$(\"#Horario\").val() == \"\") alert(\"Contraseña es requerida.\");
           else {
            alert(\$(\".form-control\").serialize());
               \$.ajax({
                   url:\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("control");
        echo "\",
                   type: 'POST',
                   data: \$(\".form-control\").serialize(),
                   success:function(respuesta){
                    alert(respuesta);
                       if(\$.trim(respuesta) == 1){
                            document.location.href = \"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\";
                       }
                   },
               });
           }
       });
    });

    </script>
    
    <!--Se adjuntan los archivos JS-->
    <script type=\"application/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"application/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/materialize.min.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 118,  149 => 117,  135 => 106,  126 => 100,  52 => 29,  27 => 7,  19 => 1,);
    }
}
