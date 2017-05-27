<?php

namespace Curso\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Curso\MainBundle\Funciones\DefaultFunciones;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Curso\MainBundle\Entity\zona;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
//zona
public function createAction(request $request){
    //insertar un registro
    $zona = new zona();
    $numzo=$request->get("Nozona");
    $nomzona=$request->get("Nomzona"); 
    $em = $this->getDoctrine()->getManager();
    $em->persist($zona);
    $em->flush();
    //solo para mandar un mensaje 
     return new Response ('se ha creado la zona  id '.$numzo->getId().$nomzona->getnombre());
}

    public function updateAction($id)
    {
    $em =$this->getDoctrine()->getManager();
    $zona= $em->getRepository('CursoMainBundle:zona')->find($id);

    if (!$zona) {
        throw $this->createNotFoundException('zona no id'.$id);
    }
  $zona->setnomzona('nombre nuevo registro 4');
  $em->flush();

  return $this->redirect($this->generateUrl('zona'));

    }

    public function deleteAction($id){
     $em= $this->getDoctrine()->getManager();
     $zona=$em->getRepository('CursoMainBundle:zona')->find($id);
if (!$zona) {
    throw $this->createNotFoundException('producto no elminado'.$id);
       }
     $em->remove($zona);
     $em->flush();

     return $this->redirect($this->generateUrl('zona'));
  }
    
public function ZonaAction()
    {
$datos=$this->getDoctrine()->getRepository('CursoMainBundle:zona')->findAll();

        return $this->render('CursoMainBundle:Default:zona.html.twig',compact("datos"));
    }


public function formzonaAction()
    {
        $datos=$this->getDoctrine()->getRepository('CursoMainBundle:zona')->findAll();
        return $this->render('CursoMainBundle:Default:formzona.html.twig',compact("datos"));
    }


//Todos los formularios 
public function formularioAction()
    {
        return $this->render('CursoMainBundle:Default:formularios.html.twig');
    }

public function afiliadoAction()
    {
        return $this->render('CursoMainBundle:Default:afiliado.html.twig');
    }    



     /**
     *metodo para cargar el detalle del producto**/

     public function detalleAction($id)
     {
        $datos=$this->getDoctrine()->getRepository('CursoMainBundle:zona')->find($id);
        if (!$datos) {
            throw $this->createNotFoundException('no existe zona '.$id);
        }
        return $this->render('CursoMainBundle:Default:detalle.html.twig',compact("datos"));
    }


     


    public function inicioAction()
    {
        return $this->render('CursoMainBundle:Default:inicio.html.twig');
    }

     public function indexAction(request $request)
    {
       $session=$request->getSession();
if ($session->has("id")) {
    
     return $this->render('CursoMainBundle:Default:index.html.twig');
}
else
{
$this->get('session')->getFlashBag()->add('mensaje', 'usuario no identificado');
return $this->redirect($this->generateUrl('control'));
}

       
    }
     
public function controlAction(request $request)
    {
            if ($request->getMethod()=="POST") 
            {
             //  die("HOLA");
             $correo=$request->get("usuario");
             $pass=$request->get("contrasena");
            // echo "correo=".$correo."pass= ".$pass;exit;
              //consulta condoctrine
             $user=$this->getDoctrine()->getRepository('CursoMainBundle:usuarios')->findOneBy(array("correo"=>$correo,"pass"=>$pass));
if ($user) {
//crear una seccion 
    $session=$request->getSession();
    $session->set("id",$user->getId());
    //set para mostrarlas 
    $session->set("nombre",$user->getUsuario());
    //get para mostrar 
    //verificar sessiones--echo $session->get("nombre");exit;
    return $this->redirect($this->generateUrl('index'));
}
else
{
$this->get('session')->getFlashBag()->add('mensaje','los datos ingresado no son validos');
return $this->redirect($this->generateUrl('control'));

   // die("no tiene acceso");
}
   }
      return $this->render('CursoMainBundle:Default:Control.html.twig');
    }
public function salirAction(request $request){
     $session=$request->getSession();
     $session->clear();
     $this->get('session')->getFlashBag()->add('mensaje','se ha cerrado sesion exitosamente');

     return $this->render('CursoMainBundle:Default:control.html.twig');

}
    
 public function principalAction(){
     
     return $this->render('CursoMainBundle:Default:principal.html.twig');

}

public function buildAction()
    {
       $repository =$this->getDoctrine()->getRepository('CursoMainBundle:zona');
       //builQueryBuilder(inicializa consulta y aleas realiza toda consulta )para hacer calculos 
       $query=$repository->createQueryBuilder('p')->where('p.idzona > :valor')->setParameter('valor','5')->orderBy('p.idzona','ASC')->getQuery();

       $datos=$query->getResult();

        return $this->render('CursoMainBundle:Default:build.html .twig',compact('datos'));
    }

public function dqlAction(){
$em = $this->getDoctrine()->getManager();
$query = $em->createQuery(
    'SELECT p
       FROM CursoMainBundle:zona p
      WHERE p.idzona < :valor
   ORDER BY p.idzona ASC'
)->setParameter('valor', '5');
 
$datos = $query->getResult();

return $this->render('CursoMainBundle:Default:dql.html.twig',compact('datos'));
    }
}