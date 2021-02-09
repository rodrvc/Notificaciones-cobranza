<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeneralMaestroPersona Entity
 *
 * @property int $id
 * @property int $general_persona_tipo_id
 * @property int|null $general_regione_id
 * @property int|null $general_provincia_id
 * @property int|null $general_comuna_id
 * @property string $rut
 * @property string $dv
 * @property string|null $nombre
 * @property string|null $apellido_paterno
 * @property string|null $apellido_materno
 * @property string|null $razon_social
 * @property string|null $telefono
 * @property string|null $email
 * @property string|null $direccion
 * @property string|null $referencia
 * @property string|null $nombre_fantasia
 *
 * @property \App\Model\Entity\GeneralMaestroPersonaTipo $general_maestro_persona_tipo
 * @property \App\Model\Entity\GeneralRegione $general_regione
 * @property \App\Model\Entity\GeneralProvincia $general_provincia
 * @property \App\Model\Entity\GeneralComuna $general_comuna
 * @property \App\Model\Entity\FactDte[] $fact_dtes
 * @property \App\Model\Entity\GeneralClasificacionRutMaestroPersona[] $general_clasificacion_rut_maestro_personas
 * @property \App\Model\Entity\GeneralMaestroCliente[] $general_maestro_clientes
 */
class GeneralMaestroPersona extends Entity
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
        'general_persona_tipo_id' => true,
        'general_regione_id' => true,
        'general_provincia_id' => true,
        'general_comuna_id' => true,
        'rut' => true,
        'dv' => true,
        'nombre' => true,
        'apellido_paterno' => true,
        'apellido_materno' => true,
        'razon_social' => true,
        'telefono' => true,
        'email' => true,
        'direccion' => true,
        'referencia' => true,
        'nombre_fantasia' => true,
        'general_maestro_persona_tipo' => true,
        'general_regione' => true,
        'general_provincia' => true,
        'general_comuna' => true,
        'fact_dtes' => true,
        'general_clasificacion_rut_maestro_personas' => true,
        'general_maestro_clientes' => true
    ];
}
