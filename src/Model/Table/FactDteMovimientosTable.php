<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FactDteMovimientos Model
 *
 * @property \App\Model\Table\FactDtesTable|\Cake\ORM\Association\HasMany $FactDtes
 *
 * @method \App\Model\Entity\FactDteMovimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\FactDteMovimiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FactDteMovimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FactDteMovimiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDteMovimiento|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDteMovimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FactDteMovimiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FactDteMovimiento findOrCreate($search, callable $callback = null, $options = [])
 */
class FactDteMovimientosTable extends Table
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

        $this->setTable('fact_dte_movimientos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('FactDtes', [
            'foreignKey' => 'fact_dte_movimiento_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('movimiento')
            ->maxLength('movimiento', 255)
            ->allowEmpty('movimiento');

        return $validator;
    }
}
