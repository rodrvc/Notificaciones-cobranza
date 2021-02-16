<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione $cobranzaNotificacionConfiguracione
 */
?>
<div class=flex > 
    <div>
        <div class="panel panel-default m-6 side" id="actions-sidebar">
            <div class="panel-heading">
            Actions
            </div>
                <ul class="list-group">
                    <li class="list-group-item"><?= $this->Html->link(__('Edit Cobranza Notificacion Configuracione'), ['action' => 'edit', $cobranzaNotificacionConfiguracione->id]) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete Cobranza Notificacion Configuracione'), ['action' => 'delete', $cobranzaNotificacionConfiguracione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaNotificacionConfiguracione->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['action' => 'add']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List General Users'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New General User'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Cobranza Notificacion Tipos'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Cobranza Notificacion Tipo'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'add']) ?> </li>
                </ul>
            </div>
    </div>
    <div class="cobranzaNotificacionConfiguraciones m-6 container preview">
    <body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
        <!-- <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
            <thead>
            <tr>
                <th style="text-align:left;"><img style="max-width: 150px;" src="https://www.bachanatours.in/book/img/logo.png" alt="bachana tours"></th>
                <th style="text-align:right;font-weight:400;">05th Apr, 2017</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="height:35px;"></td>
            </tr>
            <tr>
                <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
                <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Tipo de mensaje</span><b style="color:green;font-weight:normal;margin:0"><?=h($configuration[$id]["tipo"])?> </b></p>
                <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> abcd1234567890</p>
                <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> Rs. 6000.00</p>
                </td>
            </tr>
            <tr>
                <td style="height:35px;"></td>
            </tr>
            <tr>
                <td style="width:50%;padding:20px;vertical-align:top">
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Nombre</span><?= h($configuration[$id]["mensaje"]) ?></p>
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Email</span> palash@gmail.com</p>
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Phone</span> +91-1234567890</p>
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">ID No.</span> 2556-1259-9842</p>
                </td>
                <td style="width:50%;padding:20px;vertical-align:top">
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Address</span> Khudiram Pally, Malbazar, West Bengal, India, 735221</p>
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Number of gusets</span> 2</p>
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Duration of your vacation</span> 25/04/2017 to 28/04/2017 (3 Days)</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:20px;padding:30px 15px 0 15px;">Items</td>
            </tr>
           
            <tr>
                <td colspan="2" style="padding:15px;">
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                    <span style="display:block;font-size:13px;font-weight:normal;">Homestay with fooding & lodging</span> Rs. 3500 <b style="font-size:12px;font-weight:300;"> /person/day</b>
                </p>
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;"><span style="display:block;font-size:13px;font-weight:normal;">Pickup & Drop</span> Rs. 2000 <b style="font-size:12px;font-weight:300;"> /person/day</b></p>
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;"><span style="display:block;font-size:13px;font-weight:normal;">Local site seeing with guide</span> Rs. 800 <b style="font-size:12px;font-weight:300;"> /person/day</b></p>
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;"><span style="display:block;font-size:13px;font-weight:normal;">Tea tourism with guide</span> Rs. 500 <b style="font-size:12px;font-weight:300;"> /person/day</b></p>
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;"><span style="display:block;font-size:13px;font-weight:normal;">River side camping with guide</span> Rs. 1500 <b style="font-size:12px;font-weight:300;"> /person/day</b></p>
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;"><span style="display:block;font-size:13px;font-weight:normal;">Trackking and hiking with guide</span> Rs. 1000 <b style="font-size:12px;font-weight:300;"> /person/day</b></p>
                </td>
            </tr>
            </tbody>
            <tfooter>
            <tr>
                <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
                <strong style="display:block;margin:0 0 10px 0;">Regards</strong> Bachana Tours<br> Gorubathan, Pin/Zip - 735221, Darjeeling, West bengal, India<br><br>
                <b>Phone:</b> 03552-222011<br>
                <b>Email:</b> contact@bachanatours.in
                </td>
            </tr>
            </tfooter>
        </table> -->
        <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
            <thead>
            <tr>
                <th style="text-align:left;"><img style="max-width: 150px;" src="https://www.bachanatours.in/book/img/logo.png"  alt="bachana tours"></th>
                <th style="text-align:right;font-weight:400;">05th Apr, 2017</th>
            </tr>
            
            </thead>
            <tbody>
            <tr>
                <td style="height:35px;"></td>
            </tr>
            <tr>
                <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
                <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Tipo de mensaje</span><b style="color:green;font-weight:normal;margin:0"><?=h($configuration[$id]["tipo"])?> </b></p>
                <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Nombre emisor</span> <?= mb_strtoupper(h($configuration[$id]["nombre"]))?></p>
                <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Monto a pagar</span> Rs. 6000.00</p>
                </td>
                
            </tr>
            <tr>
                <td style="height:35px;"></td>
            </tr>
            
                <tr>
                    <td style="width:50%;padding:20px;vertical-align:top">
                    <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Nombre</span><?= h($configuration[$id]["empresa"]["razon_social"]) ?></p>
                    <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Email</span> palash@gmail.com</p>
                    <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Telefono</span> +91-1234567890</p>
                    <!-- <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">ID No.</span> 2556-1259-9842 HEEEEEEEEELLLOOOOO</p> -->
                    </td>
                    <td style="width:50%;padding:20px;vertical-align:top">
                    <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Direccion</span> Khudiram Pally, Malbazar, West Bengal, India, 735221</p>
                    <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Number of gusets</span> 2</p>
                    <!-- <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Duration of your vacation</span> 25/04/2017 to 28/04/2017 (3 Days)</p> -->
                    </td>
                </tr>
            <thead>
            <tr>
                <td colspan="2" style="font-size:20px;padding:30px 15px 0 15px;">Asunto: <?= $configuration[$id]["asunto"]?></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:15px;padding:30px 15px 0 15px;"><?= $configuration[$id]["mensaje"]?></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:15px;padding:30px 15px 0 15px;">Detalle</td>
            </tr>
            <tr>
                <td colspan="2" style="padding:15px;">
                <?php foreach($configuration[$id]["empresa"]["fact_dtes"] as $value): ?>
                    <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                        <span style="display:block;font-size:13px;font-weight:normal;">Factura Folio:<?= $value["folio"]?></span>Vencimiento:<?= $value["fecha_vencimiento"]?> <b style="font-size:12px;font-weight:300;"> </b>
                    </p>
                <?php endforeach; ?>
                </td>

            </tr>
            </thead>
            </tbody>
            <tfooter>
            <tr>
                <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
                <strong style="display:block;margin:0 0 10px 0;">Regards</strong> Bachana Tours<br> Gorubathan, Pin/Zip - 735221, Darjeeling, West bengal, India<br><br>
                <b>Telefono:</b> 03552-222011<br>
                <b>Email:</b> contact@bachanatours.in
                </td>
            </tr>
            </tfooter>
        </table>
        
</body>
    
       
    </div>  
    <div class="cobranzaNotificacionConfiguraciones m-6 container preview ">

     
    </div>
</div>


