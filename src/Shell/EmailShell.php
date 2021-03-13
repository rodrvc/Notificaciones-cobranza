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
        // $to = 'rodrigovalladares.dev@gmail.com'; 
        // $subject = 'Hi messaje for yu'; 
        // $message = 'Nothing much '; 
 
            // $mail = $this->Email->send_email($to, $subject , $message);
            // if ($mail) {
            //     # code...\
            //     $this->out("MESAJE".$to);
            // }else {
            //     $this->out("mail error"); 
            // }

        
            //****  EMAIL MANUAL TEST*****// 
            $notificacionSeleccionada = null ; 
            $idNotificacion = 47; //Ingresar Notificacion Manual
            $ServicioCobranza = new Service(); 
            $maestro_persona_id = 1; // manual empresa cliente
            $ListNotificacionCobranzas = $ServicioCobranza->evaluatedFactures();
            $i ; 
            foreach ($ListNotificacionCobranzas as $key => &$valor) {
                // $this->out("se registra notificacion id ".$key." tiene que ser" .$idNotificacion);
                // $this->out($key);
                ++ $i;
                if($key == $idNotificacion ){
                    $this->out("mail error ".$key);
                    $notificacionSeleccionada = $valor;
                    // $this->out("correo enviado a ".$key ); 
                }
            }
            $this->out("mail error ".$i);
            if(!isset($notificacionSeleccionada)){
                $this->out("mail error ".$key); 
                return; 
            }
            
            

            // $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->get(45);
            // $notificacion = $this->CobranzaNotificacionConfiguraciones->get(45);
            
            // $email = new Email();
            // $email
            // ->setAttachments([
            //     'logo.png' => 
            //     [
            //         'file' => 'D:\laragon\www\notificacion-cobranzas\webroot\img\logo-empresa.png' , 
            //         'mimetype' => 'image/png' , 
            //         'contentId' => 'logo-empresa'    
            //     ]
            // ])
            
            
            // ->setTemplate( 'plantilla')
            // ->setEmailFormat('html')
            // ->setViewVars(['notificacion' => $notificacionSeleccionada , 'maestro_persona_id' => $maestro_persona_id ])
            // ->setSubject($notificacionSeleccionada["asunto"])
            // ->setTo('rodrigovalladares.dev@gmail.com')
            // ->setFrom('app@domain.com')
            // ->setDomain('www.example.org')
            // ->send();
    }
}


