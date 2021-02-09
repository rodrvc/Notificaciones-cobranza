<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneralCargos Model
 *
 * @property \App\Model\Table\GeneralUsersTable|\Cake\ORM\Association\HasMany $GeneralUsers
 *
 * @method \App\Model\Entity\GeneralCargo get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneralCargo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneralCargo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneralCargo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralCargo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralCargo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralCargo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralCargo findOrCreate($search, callable $callback = null, $options = [])
 */
class GeneralCargosTable extends Table
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

        $this->setTable('general_cargos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('GeneralUsers', [
            'foreignKey' => 'general_cargo_id'
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
            ->scalar('cargo')
            ->maxLength('cargo', 255)
            ->allowEmpty('cargo');

        return $validator;
    }
}
