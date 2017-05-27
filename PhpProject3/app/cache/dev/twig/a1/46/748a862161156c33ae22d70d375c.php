<?php

/* CursoMainBundle:Default:principal.html.twig */
class __TwigTemplate_a146748a862161156c33ae22d70d375c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "     
     <nav class=\"light- indigo darken-4\">
    <div class=\"nav-wrapper\">
    <!--logo linea 
      <a href=\"#\" class=\"brand-logo\" ><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/LogoM.png"), "html", null, true);
        echo "\"\" border=\"10\" height=\"65\"></a>
      -->
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
        <li><a href=\"sass.html\">Acerca de</a></li>
      </ul>
    </div>
  </nav>
</head>

<style type=\"text/css\">
body{
background: url(";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/imagen2.jpg"), "html", null, true);
        echo ") no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style>

<body class=\"page-login\">

<br>

    
  <div class=\"center\" >
      <div class=\"card bordered z-depth-5\" style=\"margin:0% auto; max-width:400px;\">
        <div class=\"card-header\">
        <div class=\"form-group\">
        <br>
           <h5 aling=\"center\">Inicio de sesión</h5>

        </div>
        <div class=\"card-content\">
          <form>
            <div class=\"input-field col s12\">
              <input id=\"usr\"  type=\"text\" name=\"usr\" class=\"form-control\" placeholder=\"Usuario\">
              
            </div>
            <div class=\"input-field col s12\">
              <input id=\"pass\" name=\"pass\" type=\"password\" class=\"form-control \" placeholder=\"Contraseña\">
              <br>
              
              <br>
            </div>
            
          </form>
        </div>
        <div class=\"card-action clearfix\">
          <div class=\"row\">
            <div class=\"col s12 \">
              <button type=\"button\" id=\"Ingresar\"  name=\"Ingresar\" value=\"Ingresar\" name=\"mulai_login\" class=\"btn grey \" >Ingresar</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
      <footer class=\"page-footer  indigo darken-3\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Sistema de gestion de ordenes de compra</h5>
                <p class=\"grey-text text-lighten-4\">Texto de pie de pagina</p>
              </div>
              <div class=\"col l4 offset-l2 s12\">
                
              </div>
            </div>
          </div>
          <div class=\"footer-copyright indigo darken-4\">
            <div class=\"container\">
           
            
            </div>
          </div>
        </footer>
</body>

</html>


<script type=\"application/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"application/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/materialize.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "SGOC";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/materialize.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/materialize.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "        <script type=\"application/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    
        <script type=\"application/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/materialbox.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 14,  173 => 12,  170 => 11,  164 => 9,  159 => 8,  156 => 7,  150 => 6,  145 => 112,  141 => 111,  58 => 31,  44 => 20,  38 => 16,  35 => 11,  33 => 7,  29 => 6,  22 => 1,);
    }
}
