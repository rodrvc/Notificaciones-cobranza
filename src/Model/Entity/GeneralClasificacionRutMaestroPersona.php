<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeneralClasificacionRutMaestroPersona Entity
 *
 * @property int $id
 * @property int $general_maestro_persona_id
 * @property int $general_maestro_cliente_id
 * @property int|null $general_clasificacion_rut_id
 * @property int $estado
 * @property string|null $plazo_venta
 * @property string|null $plazo_compra
 *
 * @property \App\Model\Entity\GeneralMaestroPersona $general_maestro_persona
 * @property \App\Model\Entity\GeneralMaestroCliente $general_maestro_cliente
 * @property \App\Model\Entity\GeneralClasificacionRut $general_clasificacion_rut
 * @property \App\Model\Entity\MedioPagoVenta $medio_pago_venta
 * @property \App\Model\Entity\MedioPagoCompra $medio_pago_compra
 */
class GeneralClasificacionRutMaestroPersona extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'general_maestro_persona_id' => true,
        'general_maestro_cliente_id' => true,
        'general_clasificacion_rut_id' => true,
        'estado' => true,
        'plazo_venta' => true,
        'plazo_compra' => true,
        'general_maestro_persona' => true,
        'general_maestro_cliente' => true,
        'general_clasificacion_rut' => true,
      
    ];
}
