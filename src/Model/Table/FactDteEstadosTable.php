<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FactDteEstados Model
 *
 * @property \App\Model\Table\FactDtesTable|\Cake\ORM\Association\HasMany $FactDtes
 *
 * @method \App\Model\Entity\FactDteEstado get($primaryKey, $options = [])
 * @method \App\Model\Entity\FactDteEstado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FactDteEstado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FactDteEstado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDteEstado|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDteEstado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FactDteEstado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FactDteEstado findOrCreate($search, callable $callback = null, $options = [])
 */
class FactDteEstadosTable extends Table
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

        $this->setTable('fact_dte_estados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('FactDtes', [
            'foreignKey' => 'fact_dte_estado_id'
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
