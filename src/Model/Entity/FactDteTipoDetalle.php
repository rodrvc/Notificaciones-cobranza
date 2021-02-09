<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FactDteTipoDetalle Entity
 *
 * @property int $id
 * @property int|null $fact_dte_tipo_id
 * @property string|null $nombre
 * @property int|null $codigo_sii
 *
 * @property \App\Model\Entity\FactDteTipo $fact_dte_tipo
 */
class FactDteTipoDetalle extends Entity
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
        'fact_dte_tipo_id' => true,
        'nombre' => true,
        'codigo_sii' => true,
        'fact_dte_tipo' => true
    ];
}
