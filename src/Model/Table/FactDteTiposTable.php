<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FactDteTipos Model
 *
 * @property \App\Model\Table\FactDtesTable|\Cake\ORM\Association\HasMany $FactDtes
 *
 * @method \App\Model\Entity\FactDteTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\FactDteTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FactDteTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FactDteTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDteTipo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDteTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FactDteTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FactDteTipo findOrCreate($search, callable $callback = null, $options = [])
 */
class FactDteTiposTable extends Table
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

        $this->setTable('fact_dte_tipos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('FactDtes', [
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('codigo_SII')
            ->maxLength('codigo_SII', 255)
            ->requirePresence('codigo_SII', 'create')
            ->notEmpty('codigo_SII');

        return $validator;
    }
}
