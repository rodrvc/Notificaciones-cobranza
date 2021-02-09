<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FactDtesProducto Model
 *
 * @method \App\Model\Entity\FactDtesProducto get($primaryKey, $options = [])
 * @method \App\Model\Entity\FactDtesProducto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FactDtesProducto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FactDtesProducto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDtesProducto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDtesProducto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FactDtesProducto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FactDtesProducto findOrCreate($search, callable $callback = null, $options = [])
 */
class FactDtesProductoTable extends Table
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

        $this->setTable('fact_dtes_producto');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('producto')
            ->maxLength('producto', 255)
            ->requirePresence('producto', 'create')
            ->notEmpty('producto');

        return $validator;
    }
}
