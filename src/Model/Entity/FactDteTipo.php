<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FactDteTipo Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $codigo_SII
 *
 * @property \App\Model\Entity\FactDteTipoDetalle[] $fact_dte_tipo_detalles
 * @property \App\Model\Entity\FactDte[] $fact_dtes
 */
class FactDteTipo extends Entity
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
        'nombre' => true,
        'codigo_SII' => true,
        'fact_dte_tipo_detalles' => true,
        'fact_dtes' => true
    ];
}
