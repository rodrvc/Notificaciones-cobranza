<?= $this->Form->create($cobranzaNotificacionConfiguracione )?>
        <fieldset class="grid-form" >
            <legend class="col-template1-4" ><?= $title_form ?></legend>
            <?php  
                 echo $this->Form->control('cobranza_notificacion_tipo_id', ['options' => $cobranzaNotificacionTipos]);
                 $days = ['Monday' => 'Lunes', 'Tuesday' => 'Martes', 'Wednesday' => 'Miercoles' , 'Thursday' => 'Jueves' , 'Friday' => 'Viernes'];
                 
                 echo $this->Form->control('dias', ['input' , 'min' => '0'  ]);              
                 echo $this->Form->control('dia_notificacion', ['options' => $days]);  
                //  echo $this->Form->control('mensaje', [ 'id' => 'mensaje']);
                 echo $this->Form->control('asunto', [ 'style' => 'grid-column:1/4' ]);
                 $esActicado = [ true => 'Activado' , false => 'No activado']; 
                 echo $this->Form->control('activo', ['options' => $esActicado]);
                //  echo $this->Form->control('mensaje', [ 'id' => 'mensaje' ]);

                $mensaje = $cobranzaNotificacionConfiguracione->mensaje; 

                if (empty($mensaje) ) {
                    // $mensaje = $this->Html->image("logo-empresa.png", ['fullBase' => true]);
                    // $path = 'D:\laragon\www\notificacion-cobranzas\webroot\img\logo-empresa.png';
                    
                    // // Extensión de la imagen
                    // $type = pathinfo($path, PATHINFO_EXTENSION);
                    
                    // // Cargando la imagen
                    // $data = file_get_contents($path);
                    
                    // // Decodificando la imagen en base64
                    // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                    
                    // // Mostrando la imagen
        
                    // $mensaje = '<img src="'.$base64.'" ></img>'; 
                    

                    $urlLogoSession =  "https://w7.pngwing.com/pngs/608/842/png-transparent-logo-trading-company-organization-empresa-fruitwishes-international-corp-blue-company-text.png"; 

                    $mensaje = '<img src="'.$urlLogoSession.'"><img/>'; 

                }

                
                //hacer la estructura
                //la ruta del prugins se asumira que se encuentra en el dir, luego se cambiara donde se guarde la imagen

                
                
                 echo '<textarea name="mensaje" id="mensaje">'
                        .$mensaje.
                       '</textarea>
 
                 <script>
                 // Replace the <textarea id="mensaje"> with a CKEditor 4
                 // instance, using default configuration.
                 //this instace not contain image plugins instead use enhaced image plugin
                     var editor = CKEDITOR.replace( "mensaje" );
                     console.log("this is a mensaje")
 
                     var url = [] ; 
                     
                    

                  </script>';
                echo $this->Form->control('general_user_id', ['options' => $generalUsers, 'class' => 'form-control'] );
                echo $this->Form->control('general_maestro_cliente_id' ,['options' => $generalMaestroClientes ]);         
            ?>
        </fieldset>
        <?= $this->Form->button(__('Enviar' ) , ['class' => 'btn btn-primary btn-lg'  ] ) ?>
<?= $this->Form->end()  ?>