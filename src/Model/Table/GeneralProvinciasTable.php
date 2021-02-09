<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneralProvincias Model
 *
 * @property \App\Model\Table\GeneralMaestroPersonasTable|\Cake\ORM\Association\HasMany $GeneralMaestroPersonas
 *
 * @method \App\Model\Entity\GeneralProvincia get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneralProvincia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneralProvincia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneralProvincia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralProvincia|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralProvincia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralProvincia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralProvincia findOrCreate($search, callable $callback = null, $options = [])
 */
class GeneralProvinciasTable extends Table
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

        $this->setTable('general_provincias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('GeneralMaestroPersonas', [
            'foreignKey' => 'general_provincia_id'
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

        return $validator;
    }
}
