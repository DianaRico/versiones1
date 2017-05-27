<?php

/* CursoMainBundle:Default:Control.html.twig */
class __TwigTemplate_466818770e4d53ffdcdc4a13c9b1eb5e extends Twig_Template
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
    <title>Acceso</title>
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
        <li><a href=\"badges.html\">Inicio</a></li>
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
       <h2 align=\"center\">Control e Acceso</h2>
            <div class=\"form-group\">
                <label for=\"usuario\">Nombre de usuario:</label>
                <input type=\"email\" class=\"form-control\" id=\"usuario\" name=\"usuario\" placeholder=\"Usuario\">
            </div>
            <div class=\"form-group\">
                <label for=\"contrasena\">Contraseña:</label>
                <input type=\"password\" class=\"form-control\" id=\"contrasena\" name=\"contrasena\" placeholder=\"Contraseña\">
            </div>
            <div class=\"form-group\">
                <input type=\"button\" class=\"btn btn-success form-control\" id=\"Ingresar\"  value=\"Ingresar\"/>
            </div>
            



    </form>
  </div>
  
      </div>   
      </div><!--Cierra el row-->
   </body>
  </html> 

<script type=\"application/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"application/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--Se adjuntan los archivos JS-->

<script>
    \$(document).ready(function () {
       \$(\"#Ingresar\").click(function () {
           if(\$(\"#usuario\").val() == \"\" ) alert(\"Nombre de usuario es requerido.\");
           else if(\$(\"#contrasena\").val() == \"\") alert(\"Contraseña es requerida.\");
           else {
               \$.ajax({
                   url:\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("control");
        echo "\",
                   type: 'POST',
                   data: \$(\".form-control\").serialize(),
                   success:function(respuesta){
                    alert(respuesta);
                       if(\$.trim(respuesta) == 1){
                            document.location.href = \"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("index");
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
        return "CursoMainBundle:Default:Control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 80,  106 => 74,  92 => 63,  88 => 62,  52 => 29,  27 => 7,  19 => 1,);
    }
}
