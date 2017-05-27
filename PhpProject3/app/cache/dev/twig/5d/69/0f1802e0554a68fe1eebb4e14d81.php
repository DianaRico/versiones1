<?php

/* CursoMainBundle:Default:formzona.html.twig */
class __TwigTemplate_5d690f1802e0554a68fe1eebb4e14d81 extends Twig_Template
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
    <nav class=\"green lighten-1\" >
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
                  
              <div class=\"row\">
              <div class=\"input-field col s6\" >
             
             </div>
              
             <div class=\"input-field col s6\" id=\"Contraseña\" >
             <input type=\"text\" id=\"Nozona\" name=\"Nozona\" class=\"form-control\">
             <label for=\"No Zona\">Numero Zona</label>
             </div>
             <div class=\"input-field col s6\" >
             
             </div>
             <div class=\"input-field col s6\" >
              <input type=\"text\" id=\"zona\" class=\"form-control\" name=\"NomZona\" >
             <label for=\"NomZona\">Nombre de la Zona</label>

             </div>
          </div>
   <div class=\"row\"><!--boton -->
              <div class=\"input-field col s6\" >
              </div>
              <div class=\"input-field col s6\" >
              <button class=\"btn waves-effect waves-light form-control\" type=\"button\" name=\"action\" aling=\"Cen\" id=\"Agregar\" value=\"Agregar\" >Agregar 
              <i class=\"material-icons assignment_ind\">assignment_ind</i>
              </button>
              <button class=\"btn waves-effect waves-light form-control\" type=\"button\" name=\"action\" aling=\"Cen\" id=\"Borrar\" value=\"Borrar\" >Borrar <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("zona/add"), "html", null, true);
        echo "/{dato.id}\"></a>
              <i class=\"material-icons assignment_ind\">assignment_ind</i>
              </button>
               <button class=\"btn waves-effect waves-light form-control\"  type=\"button\" name=\"action\" aling=\"Cen\" id=\"Buscar\" value=\"Buscar\">Buscar 
              <i class=\"material-icons assignment_ind\">assignment_ind</i>
              </button>
              </div>
             
          </div>

    </form>
  </div>
  
      </div>   
      </div><!--Cierra el row-->
   </body>
    </html> 
    <script>
      //aqui va el codigo del ajax 
       \$(document).ready(function () {
       \$(\"input[type=button]\").click(function () {
        var btn = \$(this).val();
           if(\$(\"#Nozona\").val() == \"\" ) alert(\"Nombre de Medico es requerido.\");
           else if(\$(\"#NomZona\").val() == \"\") alert(\"Contraseña es requerida.\");
           else {
            alert(\$(\".form-control\").serialize());
               \$.ajax({
                   url:\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\",
                   type: 'POST',
                   data: \$(\".form-control\").serialize(),
                   success:function(respuesta){
                    alert(respuesta);
                       if(\$.trim(respuesta) == 1){
                            document.location.href = \"";
        // line 100
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
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"application/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/materialize.min.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:formzona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 112,  155 => 111,  141 => 100,  132 => 94,  102 => 67,  56 => 24,  52 => 23,  48 => 22,  39 => 16,  27 => 7,  19 => 1,);
    }
}
