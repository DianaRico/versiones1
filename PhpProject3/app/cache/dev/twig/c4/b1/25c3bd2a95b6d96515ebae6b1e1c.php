<?php

/* CursoMainBundle:Default:Control.html.twig */
class __TwigTemplate_c4b125c3bd2a95b6d96515ebae6b1e1c extends Twig_Template
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

       <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\">Inicio</a></li>
        <li><a href=\"collapsible.html\">Acerca de</a></li>

        

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
  </head>
  <body>
";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "<span class=\"alert-success\">
  ";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
  <hr>
</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
   <div align=\"center\">

      <div class=\"card bordered z-depth-5\" style=\"margin:0% auto; max-width:400px;\">
        <div class=\"card-header\">

   <form  action=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("control");
        echo "\" class=\"center\" method=\"POST\">
       <h4 align=\"center\">Control de Acceso</h4>
 <div class=\"card-content\">

            <div class=\"input-field col12\">
                <input type=\"email\" class=\"form-control\" id=\"usuario\" name=\"usuario\" >
                <label for=\"usuario\">Nombre de usuario:</label>
            </div>

            <div class=\"input-field col12\">
                <label for=\"contrasena\">Contraseña:</label>
                <input type=\"password\" class=\"form-control\" id=\"contrasena\" name=\"contrasena\" >
            </div>
            <div class=\"input-field col12\">
                <input type=\"submit\" class=\"btn btn-success form-control\" id=\"Ingresar\"  value=\"Ingresar\"/>
            </div>
            



    </form>

    </div>
  </div>
  </div>
  </div>
        
      </div><!--Cierra el row-->
   </body>
  </html> 

<script type=\"application/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"application/javascript\" src=\"";
        // line 87
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
        // line 98
        echo $this->env->getExtension('routing')->getPath("control");
        echo "\",
                   type: 'POST',
                   data: \$(\".form-control\").serialize(),
                   success:function(respuesta){
                    alert(respuesta);
                       if(\$.trim(respuesta) == 1){
                            document.location.href = \"";
        // line 104
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
        return array (  158 => 104,  149 => 98,  135 => 87,  131 => 86,  97 => 55,  89 => 49,  79 => 45,  76 => 44,  72 => 43,  48 => 22,  39 => 16,  27 => 7,  19 => 1,);
    }
}
