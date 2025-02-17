<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FactDteTipoDetalles Model
 *
 * @property \App\Model\Table\FactDteTiposTable|\Cake\ORM\Association\BelongsTo $FactDteTipos
 *
 * @method \App\Model\Entity\FactDteTipoDetalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\FactDteTipoDetalle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FactDteTipoDetalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FactDteTipoDetalle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDteTipoDetalle|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDteTipoDetalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FactDteTipoDetalle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FactDteTipoDetalle findOrCreate($search, callable $callback = null, $options = [])
 */
class FactDteTipoDetallesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('fact_dte_tipo_detalles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('FactDteTipos', [
            'foreignKey' => 'fact_dte_tipo_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->allowEmpty('nombre');

        $validator
            ->nonNegativeInteger('codigo_sii')
            ->allowEmpty('codigo_sii');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['fact_dte_tipo_id'], 'FactDteTipos'));

        return $rules;
    }
}
