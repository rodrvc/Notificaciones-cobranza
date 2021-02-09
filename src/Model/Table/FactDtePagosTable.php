<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FactDtePagos Model
 *
 * @property \App\Model\Table\FactDtesTable|\Cake\ORM\Association\HasMany $FactDtes
 *
 * @method \App\Model\Entity\FactDtePago get($primaryKey, $options = [])
 * @method \App\Model\Entity\FactDtePago newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FactDtePago[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FactDtePago|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDtePago|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDtePago patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FactDtePago[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FactDtePago findOrCreate($search, callable $callback = null, $options = [])
 */
class FactDtePagosTable extends Table
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

        $this->setTable('fact_dte_pagos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('FactDtes', [
            'foreignKey' => 'fact_dte_pago_id'
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

        return $validator;
    }
}
