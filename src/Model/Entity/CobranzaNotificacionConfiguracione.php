<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CobranzaNotificacionConfiguracione Entity
 *
 * @property int $id
 * @property int $general_user_id
 * @property int $general_maestro_cliente_id
 * @property int $cobranza_notificacion_tipo_id
 * @property int|null $dias
 * @property bool|null $activo
 * @property string|null $mensaje
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $asunto
 * @property string|null $dia_notificacion
 *
 * @property \App\Model\Entity\GeneralUser $general_user
 * @property \App\Model\Entity\GeneralMaestroCliente $general_maestro_cliente
 * @property \App\Model\Entity\CobranzaNotificacionTipo $cobranza_notificacion_tipo
 */
class CobranzaNotificacionConfiguracione extends Entity
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
        'general_user_id' => true,
        'general_maestro_cliente_id' => true,
        'cobranza_notificacion_tipo_id' => true,
        'dias' => true,
        'activo' => true,
        'mensaje' => true,
        'created' => true,
        'modified' => true,
        'asunto' => true,
        'dia_notificacion' => true,
        'general_user' => true,
        'general_maestro_cliente' => true,
        'cobranza_notificacion_tipo' => true
    ];
}
