<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FactDte Entity
 *
 * @property int $id
 * @property int|null $general_maestro_cliente_id
 * @property int $general_maestro_persona_id
 * @property string $folio
 * @property int|null $fact_dte_tipo_id
 * @property int|null $fact_dte_estado_id
 * @property int|null $fact_dte_movimiento_id
 * @property int|null $fact_dte_pago_id
 * @property \Cake\I18n\FrozenDate|null $fecha_pago
 * @property \Cake\I18n\FrozenDate|null $fecha_emision
 * @property \Cake\I18n\FrozenDate|null $fecha_vencimiento
 * @property int|null $abono
 * @property int|null $saldo
 * @property int|null $descuento
 * @property int|null $monto_neto
 * @property int|null $monto_exento
 * @property int|null $monto_iva
 * @property int|null $monto_total
 * @property string|null $observacion
 * @property string|null $referencias
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $fact_sii_comercial_id
 * @property \Cake\I18n\FrozenDate|null $fecha_contrato
 * @property \Cake\I18n\FrozenDate|null $fecha_embarque
 * @property \Cake\I18n\FrozenDate|null $fecha_llegada
 * @property string|null $pais_origen
 * @property string|null $incoterms
 * @property float|null $tipocambio
 * @property int|null $fact_sii_mercaderia_id
 * @property int|null $acuse_recibo
 * @property int|null $recepcionado
 * @property int|null $contabilizado
 * @property int|null $nota_credito
 * @property int|null $general_user_id
 * @property int|null $dte_ref
 * @property int|null $isManual
 *
 * @property \App\Model\Entity\GeneralMaestroCliente $general_maestro_cliente
 * @property \App\Model\Entity\GeneralMaestroPersona $general_maestro_persona
 * @property \App\Model\Entity\FactDteTipo $fact_dte_tipo
 * @property \App\Model\Entity\FactDteEstado $fact_dte_estado
 * @property \App\Model\Entity\FactDteMovimiento $fact_dte_movimiento
 * @property \App\Model\Entity\FactDtePago $fact_dte_pago
 * @property \App\Model\Entity\FactSiiComercial $fact_sii_comercial
 * @property \App\Model\Entity\FactSiiMercaderia $fact_sii_mercaderia
 * @property \App\Model\Entity\GeneralUser $general_user
 */
class FactDte extends Entity
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
        'general_maestro_cliente_id' => true,
        'general_maestro_persona_id' => true,
        'folio' => true,
        'fact_dte_tipo_id' => true,
        'fact_dte_estado_id' => true,
        'fact_dte_movimiento_id' => true,
        'fact_dte_pago_id' => true,
        'fecha_pago' => true,
        'fecha_emision' => true,
        'fecha_vencimiento' => true,
        'abono' => true,
        'saldo' => true,
        'descuento' => true,
        'monto_neto' => true,
        'monto_exento' => true,
        'monto_iva' => true,
        'monto_total' => true,
        'observacion' => true,
        'referencias' => true,
        'created' => true,
        'fact_sii_comercial_id' => true,
        'fecha_contrato' => true,
        'fecha_embarque' => true,
        'fecha_llegada' => true,
        'pais_origen' => true,
        'incoterms' => true,
        'tipocambio' => true,
        'fact_sii_mercaderia_id' => true,
        'acuse_recibo' => true,
        'recepcionado' => true,
        'contabilizado' => true,
        'nota_credito' => true,
        'general_user_id' => true,
        'dte_ref' => true,
        'isManual' => true,
        'general_maestro_cliente' => true,
        'general_maestro_persona' => true,
        'fact_dte_tipo' => true,
        'fact_dte_estado' => true,
        'fact_dte_movimiento' => true,
        'fact_dte_pago' => true,
        'fact_sii_comercial' => true,
        'fact_sii_mercaderia' => true,
        'general_user' => true
    ];
}
