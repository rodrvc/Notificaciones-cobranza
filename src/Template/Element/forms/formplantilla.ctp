<?= $this->Form->create($cobranzaNotificacionConfiguracione)?>
        <fieldset class="grid-form" >
            <legend class="col-template1-4" ><?= $title_form ?></legend>
            <?php  
                 echo $this->Form->control('cobranza_notificacion_tipo_id', ['options' => $cobranzaNotificacionTipos]);
                 $days = ['1' => 'Lunes', '2' => 'Martes', '3' => 'Miercoles' , '4' => 'Jueves' , '5' => 'Viernes' , '6 ' => 'Sabado' , '0' => 'Domingo'];
                 
                 echo $this->Form->control('dias', ['input' , 'min' => '0'  ]);              
                 echo $this->Form->control('dia_notificacion', ['options' => $days]);  
                //  echo $this->Form->control('mensaje', [ 'id' => 'mensaje']);
                 echo $this->Form->control('asunto', [ 'style' => 'grid-column:1/4' ]);
                 $esActicado = [ true => 'Activado' , false => 'No activado']; 
                 echo $this->Form->control('activo', ['options' => $esActicado]);
                //  echo $this->Form->control('mensaje', [ 'id' => 'mensaje' ]);

                $mensaje = $cobranzaNotificacionConfiguracione->mensaje; 
                $logo = ''; 
                if (empty($mensaje) ) {
              
                    //Remplazar por logo en la sesion 
                    // $urlLogoSession =  $SESSION->LOGO;  
                    $logo = $sesionEmulada->logo;
                    $mensaje =  $this->Html->image(  $logo ,  ['fullBase' => true]);


                }
                
                
                //**CKEDITOR INSTANCIA**//
                 echo '<textarea name="mensaje" id="mensaje">'
                        .$mensaje.
                       '</textarea>
 
                 <script>

                 // Replace the <textarea id="mensaje"> with a CKEditor 4
                 // instance, using default configuration.
                 //this instace not contain image plugins instead use enhaced image plugin
                     var editor = CKEDITOR.replace( "mensaje" ,  { customValues: { logo : "'.$sesionEmulada->logo.'" }, 
                     extraPlugins: "default"
                    });
                     console.log("this is a mensaje")
 
                    var url = [] ; 
                     
                </script>';
                echo $this->Form->control('general_user_id', ['options' => $generalUsers, 'class' => 'form-control'] );
                echo $this->Form->control('general_maestro_cliente_id' ,['options' => $generalMaestroClientes ]);         
            ?>
        </fieldset>
        <?= $this->Form->button(__('Enviar' ) , ['class' => 'btn btn-primary btn-lg'  ] ) ?>
<?= $this->Form->end()  ?>