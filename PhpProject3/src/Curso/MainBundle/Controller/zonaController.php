<?php

namespace Curso\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Curso\MainBundle\Funciones\DefaultFunciones;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class zonaController extends Controller
{

    
    public function indexAction()
    {//codigo de insert 
        /*if ($_SERVER['REQUEST_METHOD']=='POST') {
            $nombre=$_POST['Nombre']
        }*/

        return $this->render('CursoMainBundle:zona:zona.html.twig');
    }
    
    public function inicioAction()
    {
        return $this->render('CursoMainBundle:Default:inicio.html.twig');
    }
     
     public function controlAction(request $request)
    {
    /* if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = $_POST['usuario'];
            $pass = $_POST['contrasena'];
            $fn = new DefaultFunciones();
            if($row = $fn->validausr($usuario, $pass)) 
            {
                $session = $request->getSession();
                $session->start();
                $this->get('session')->set('Correo', $row['Correo']);
                die("1");
            } 
            else die("0");
       
    }
*/
        return $this->render('CursoMainBundle:Default:Control.html.twig');
    }

    
 public function principalAction(){
     
     return $this->render('CursoMainBundle:Default:principal.html.twig');

}
}