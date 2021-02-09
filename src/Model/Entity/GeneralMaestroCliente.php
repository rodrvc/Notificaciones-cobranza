<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeneralMaestroCliente Entity
 *
 * @property int $id
 * @property int|null $general_maestro_persona_id
 * @property string|null $nombre
 * @property string|null $logo
 * @property string|null $actividad_economica
 * @property string|null $octava_username
 * @property string|null $octava_password
 * @property string|null $octava_apipass
 * @property string|null $prefijo_oc
 * @property bool|null $activa
 *
 * @property \App\Model\Entity\GeneralMaestroPersona $general_maestro_persona
 * @property \App\Model\Entity\CobranzaNotificacionConfiguracione[] $cobranza_notificacion_configuraciones
 * @property \App\Model\Entity\FactDte[] $fact_dtes
 * @property \App\Model\Entity\GeneralClasificacionRutMaestroPersona[] $general_clasificacion_rut_maestro_personas
 */
class GeneralMaestroCliente extends Entity
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
        'nombre' => true,
        'logo' => true,
        'actividad_economica' => true,
        'octava_username' => true,
        'octava_password' => true,
        'octava_apipass' => true,
        'prefijo_oc' => true,
        'activa' => true,
        'general_maestro_persona' => true,
        'cobranza_notificacion_configuraciones' => true,
        'fact_dtes' => true,
        'general_clasificacion_rut_maestro_personas' => true
    ];
}
