<?php 

namespace App\Shell; 



use Cake\Console\Shell;
use Cake\Log\Log; 
use Cake\Mailer\Email;
use App\Service\Service; 
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use App\Controller\Component\EmailComponent; // component 

use App\Controller\AppController;
use Cake\ORM\TableLocator;

use Cake\ORM\TableRegistry;



class EmailShell extends Shell 
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('CobranzaNotificacionConfiguraciones'); 


        //load component
        // $this->Email = new EmailComponent(new ComponentRegistry());

    }
    
    public function main(){
        //test email 
  
            Log::write('debug' , 'Welcome to'); 
            $this->out("Welcome to " ); 
       
            // Log::write('debug' , 'User cannot be found ') ; 
            // $this->abort('User cannot be found ', 128); 
    
    }

    // SEND EMAIL WITH SHELL
    public function mail()
    {

            //****  EMAIL MANUAL TEST*****// 
            $notificacionSeleccionada = null ; 
            $idNotificacion = 48; //Ingresar Notificacion Manual
            $ServicioCobranza = new Service(); 
            $maestro_persona_id = 2; // manual empresa cliente
            $ListNotificacionCobranzas = $ServicioCobranza->evaluatedFactures();
            $i = 0 ; 
            $esPosibleEnviar = false; 

            foreach ($ListNotificacionCobranzas as $key => &$valor) {
                if($key == $idNotificacion ){
                    $notificacionSeleccionada = $valor;
                 
                    $i = $key;
                }
            }
          
            if(!isset($notificacionSeleccionada)){
                $this->out("Notificacion No Existe "); 
                return; 
            }

            foreach ($notificacionSeleccionada["general_maestro_personas"] as $key => $value) {
                $this->out("Esta notificacion puede ser enviada al cliente con id:".$key);

                if($key == $maestro_persona_id){
                    $esPosibleEnviar = true; 
                }
            }

           if (!$esPosibleEnviar) {
                $this->out("La empresa deseada (id:".$maestro_persona_id.") no tiene notificaciones. No se envia correo");
                return; 
           }else { 
            $this->out("correo enviado notificacion id:". $i." al cliente id:".$maestro_persona_id ); 
           }
            
            

  
            $email = new Email();
            $email
            // ->setAttachments([
            //     'logo.png' => 
            //     [
            //         'file' => 'D:\laragon\www\notificacion-cobranzas\webroot\img\logo-empresa.png' , 
            //         'mimetype' => 'image/png' , 
            //         'contentId' => 'logo-empresa'    
            //     ]
            // ])
            
            
            ->setTemplate( 'plantilla')
            ->setEmailFormat('html')
            ->setViewVars(['notificacion' => $notificacionSeleccionada , 'maestro_persona_id' => $maestro_persona_id ])
            ->setSubject($notificacionSeleccionada["asunto"])
            ->setTo('rodrigovalladares.dev@gmail.com')
            ->setFrom('app@domain.com')
            ->setDomain('www.example.org')
            ->send();
    }
}


