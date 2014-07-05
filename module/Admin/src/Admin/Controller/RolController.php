<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Entity\Rol;
use Admin\Entity\Usuario;

class RolController extends AbstractActionController
{
    public function listarAction()
    {
        $objectManager = $this              //nos sirve para conectarnos cn la Doctrine
        ->getServiceLocator()
        ->get('Doctrine\ORM\EntityManager');
        //Listar todos los datos
        
        $claserol = $objectManager->getRepository('Admin\Entity\Rol');
        $rol = $claserol->findAll(); //recupera todos los datos
        
        $valores = array("titulo"=>'Listado de Roles',
            "datos"=>$rol);
        
        return new ViewModel($valores);
        //insertar datos a Rol
        /*$rol = new Rol();
        $rol->setNombre('Limberg');
        $objectManager->persist($rol);  //para guardar en la base de datos
        $objectManager->flush();        //guardar toda una transaccion en la base de datos
        //die(var_dump($rol->getId()));
        echo $rol->getId();
        echo ' - ';
        echo $rol->getNombre();*/
        
        //Buscar por ID
        
        /*$rol = $objectManager->find('Admin\Entity\Rol',3);
        //modifica el campo escogido en la linea de arriba
        $rol->setNombre('Cajero');
        $objectManager->flush();
        echo $rol->getId();
        echo '-'.$rol->getNombre();*/
        
        //Eliminar un elemento
        /*$rol = $objectManager->find('Admin\Entity\Rol',4);
        $objectManager->remove($rol);
        $objectManager->flush();
        echo $rol->getNombre().' fue eliminado de la bd';*/
        
        //Listar todos los datos
        
        /*$claserol = $objectManager->getRepository('Admin\Entity\Rol');
        $rol = $claserol->findAll(); //recupera todos los datos
        print_r($rol);*/
        
        //guardar en una sociacion de clases de muchos a uno
        
        //crear usuario
        /*$usuario = new Usuario();
        $usuario->setNombrecompleto('Estefania Muiba');
        $usuario->setUser('muiba');
        $usuario->setPassword('12345');
        $usuario->setEstado('activo');
        $usuario->setEmail('amor@hotmail.com');
        $objectManager -> persist($usuario);
        
        //obtener objeto rol a asociar
        $rol = $objectManager->find('Admin\Entity\Rol',2);
        $usuario->setRol($rol);             //asignar el objeto asosiado o clave Foranea de rol
        $objectManager->flush();
        echo $usuario->getId().' - '.$usuario->getNombrecompleto();*/
        
    }
}
