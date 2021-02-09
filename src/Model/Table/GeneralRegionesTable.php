<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneralRegiones Model
 *
 * @property \App\Model\Table\GeneralMaestroPersonasTable|\Cake\ORM\Association\HasMany $GeneralMaestroPersonas
 *
 * @method \App\Model\Entity\GeneralRegione get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneralRegione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneralRegione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneralRegione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralRegione|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralRegione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralRegione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralRegione findOrCreate($search, callable $callback = null, $options = [])
 */
class GeneralRegionesTable extends Table
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

        $this->setTable('general_regiones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('GeneralMaestroPersonas', [
            'foreignKey' => 'general_regione_id'
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
