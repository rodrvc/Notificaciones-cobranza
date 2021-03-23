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
          

            $ServicioCobranza = new Service();  
            $ListNotificacionCobranzas = $ServicioCobranza->evaluatedFactures();

            $notificacionSeleccionada = null ; 
            $idNotificacion = 56; //Ingresar Notificacion Manual
            
            $maestro_persona_id = 3 ; // manual empresa cliente
            
            $i = 0 ; 
            $esPosibleEnviar = false; 

            //la key son las id de las notificaciones
            foreach ($ListNotificacionCobranzas as $id => &$valor) {
                if($id == $idNotificacion ){
                    $notificacionSeleccionada = $valor;

                    $i = $id;
                }
            }
          
            if(!isset($notificacionSeleccionada)){
                $this->out("Notificacion No Existe "); 
                return; 
            }

            foreach ($notificacionSeleccionada["general_maestro_personas"] as $key => $value) {
                $this->out("Esta notificacion puede ser enviada al cliente con id:".$key ." y con el correo".$value["email"]);

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

            $nombreMinus = strtolower( $notificacionSeleccionada["nombre"]);
            $fromEmail = 'cobranza@'.str_replace(' ', '' , $nombreMinus) .'.com';
  
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
            
            ->setFrom($fromEmail )
            ->setBcc($notificacionSeleccionada["email"])
            ->setTemplate( 'plantilla')
            ->setEmailFormat('html')
            ->setViewVars(['notificacion' => $notificacionSeleccionada , 'maestro_persona_id' => $maestro_persona_id ])
            ->setSubject($notificacionSeleccionada["asunto"])
            ->setTo('silver.rvc@gmail.com')

            
            ->setDomain('www.example.org')
            ->send();
    }



    public function mails(){
    

        $ServicioCobranza = new Service();  
        $ListNotificacionCobranzas = $ServicioCobranza->evaluatedFactures();


        empty($ListNotificacionCobranzas) ? $this->out("No existen notificaciones el dia de hoy ") : null;



        foreach ($ListNotificacionCobranzas as $id => $notificacion) {
            $this->out("preparando notificacion id: ".$id ); 

          
            //array de dtes
            if (empty($notificacion["general_maestro_personas"])) {
                # code...
                $this->out("La notificacion id: ".$id." No tiene facturas en su rango\n " );
                continue; 
            }

            foreach ($notificacion["general_maestro_personas"] as $key => $persona) {
                # code...
                $this->out("correo de notificacion : ".$id." propietario: ".$notificacion["razon_social"] ." envia a su cliente: " .$persona["email"]);
                //$this->envioCorreo($notificacion, $persona["id"],  $persona["email"]);


                $nombreMinusculaSistema = strtolower( $notificacion["razon_social"]);
                $fromEmail = 'cobranza@'.str_replace(' ', '' , $nombreMinusculaSistema) .'.com';
                
              
                


                $email = new Email();
                $email

                ->setFrom($fromEmail, 'Sistema Notificacion')
                ->setCc($notificacion["email"])
                ->setDomain('www.abz.cl')
                ->setTemplate( 'plantilla')
                ->setEmailFormat('html')
                ->setViewVars(['notificacion' => $notificacion , 'maestro_persona_id' => $key ])
                ->setSubject($notificacion["asunto"])
                ->setTo($persona["email"])
                ->setDomain('www.example.org')
                ->send();

            }
        }
    }


    public function envioCorreo($from, $sender, $domain , $plantilla, $tipe , $viewVars, $subject , $setTo   ){
        $email = new Email();
        $email
        ->setFrom($fromEmail, $sender)
        ->setCc($notificacion["email"])
        ->setDomain('www.example.org')
        // ->setFrom('example@example.org')
        ->setTemplate( 'plantilla')
        ->setEmailFormat('html')
        ->setViewVars(['notificacion' => $notificacion , 'maestro_persona_id' => $key ])
        ->setSubject($notificacion["asunto"])
        ->setTo($persona["email"])
        ->send();
    }
}


