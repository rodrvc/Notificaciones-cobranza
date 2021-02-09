<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneralUsers Model
 *
 * @property \App\Model\Table\GeneralCargosTable|\Cake\ORM\Association\BelongsTo $GeneralCargos
 * @property \App\Model\Table\CobranzaNotificacionConfiguracionesTable|\Cake\ORM\Association\HasMany $CobranzaNotificacionConfiguraciones
 * @property \App\Model\Table\FactDtesTable|\Cake\ORM\Association\HasMany $FactDtes
 *
 * @method \App\Model\Entity\GeneralUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneralUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneralUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneralUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralUser|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralUser findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeneralUsersTable extends Table
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

        $this->setTable('general_users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('GeneralCargos', [
            'foreignKey' => 'general_cargo_id'
        ]);
        $this->hasMany('CobranzaNotificacionConfiguraciones', [
            'foreignKey' => 'general_user_id'
        ]);
        $this->hasMany('FactDtes', [
            'foreignKey' => 'general_user_id'
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
            ->scalar('username')
            ->maxLength('username', 50)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('name')
            ->maxLength('name', 30)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 30)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 30)
            ->allowEmpty('telefono');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->boolean('administrador')
            ->requirePresence('administrador', 'create')
            ->notEmpty('administrador');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['general_cargo_id'], 'GeneralCargos'));

        return $rules;
    }
}
