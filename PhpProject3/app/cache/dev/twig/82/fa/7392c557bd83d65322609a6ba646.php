<?php

/* CursoMainBundle:Default:inicio.html.twig */
class __TwigTemplate_82fa7392c557bd83d65322609a6ba646 extends Twig_Template
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
    <title>Curso de Materialize </title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/materialize.min.css"), "html", null, true);
        echo "\">


  </head>
  <body>
    <div  ><!--ajusta el contenido del la pagina -->
     <div class=\"row\">
    <nav class=\"nav-extended teal darken-1\">
    <div class=\"nav-wrapper\">
      <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("control");
        echo "\"> Iniciar Seccion</a></li>
        <li><a href=\"badges.html\">Registrarte</a></li>
        <li><a href+=\"collapsible.html\">Acerca de </a></li>
      </ul>
      <ul class=\"side-nav\" id=\"mobile-demo\">
        <li><a href=\"Control.html.twig\">Sass</a></li>
        <li><a href=\"badges.html\">Components</a></li>
        <li><a href=\"collapsible.html\">JavaScript</a></li>
      </ul>
    
     <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/Img/imagen2.jpg"), "html", null, true);
        echo "\">
     </div>
    <div class=\"nav-content\">
     
    </div>
  </nav>

  <div class=\"container\">
    
    <div class=\"slider\">
    <ul class=\"slides\">
      <li>
        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/Img/imagen6.jpg"), "html", null, true);
        echo "\" class=\"responsive-img\"> <!-- random image -->
        <div class=\"caption center-align\">
          <h3>This is our big Tagline!</h3>
          <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/Img/images8.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
        <div class=\"caption left-align\">
          <h3>Left Aligned Caption</h3>
          <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/Img/images7.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
        <div class=\"caption right-align\">
          <h3>Right Aligned Caption</h3>
          <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/Img/images9.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
        <div class=\"caption center-align\">
          <h3>This is our big Tagline!</h3>
          <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

    
  
  </div>
  
        
      </div><!--Cierra el row-->
 </body>

</html> 
      
    <!--Se adjuntan los archivos JS-->
    <script type=\"application/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"application/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    <script>
    \$(document).ready(function(){
    \$('.slider').slider();

    });
       
    </script>
 

";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 81,  121 => 80,  98 => 60,  88 => 53,  78 => 46,  68 => 39,  53 => 27,  40 => 17,  26 => 6,  19 => 1,);
    }
}
