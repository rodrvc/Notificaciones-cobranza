<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneralMaestroPersonaTipos Model
 *
 * @method \App\Model\Entity\GeneralMaestroPersonaTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersonaTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersonaTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersonaTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersonaTipo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersonaTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersonaTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersonaTipo findOrCreate($search, callable $callback = null, $options = [])
 */
class GeneralMaestroPersonaTiposTable extends Table
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

        $this->setTable('general_maestro_persona_tipos');
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
            ->scalar('tipo')
            ->maxLength('tipo', 255)
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        return $validator;
    }
}
