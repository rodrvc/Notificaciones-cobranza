<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeneralUser Entity
 *
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string|null $telefono
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool $status
 * @property bool $administrador
 * @property int|null $general_cargo_id
 *
 * @property \App\Model\Entity\GeneralCargo $general_cargo
 * @property \App\Model\Entity\CobranzaNotificacionConfiguracione[] $cobranza_notificacion_configuraciones
 * @property \App\Model\Entity\FactDte[] $fact_dtes
 */
class GeneralUser extends Entity
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
        'username' => true,
        'name' => true,
        'last_name' => true,
        'email' => true,
        'password' => true,
        'telefono' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'administrador' => true,
        'general_cargo_id' => true,
        'general_cargo' => true,
        'cobranza_notificacion_configuraciones' => true,
        'fact_dtes' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
