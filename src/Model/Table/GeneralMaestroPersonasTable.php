<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneralMaestroPersonas Model
 *
 * @property \App\Model\Table\GeneralMaestroPersonaTiposTable|\Cake\ORM\Association\BelongsTo $GeneralMaestroPersonaTipos
 * @property \App\Model\Table\GeneralRegionesTable|\Cake\ORM\Association\BelongsTo $GeneralRegiones
 * @property \App\Model\Table\GeneralProvinciasTable|\Cake\ORM\Association\BelongsTo $GeneralProvincias
 * @property \App\Model\Table\GeneralComunasTable|\Cake\ORM\Association\BelongsTo $GeneralComunas
 * @property \App\Model\Table\FactDtesTable|\Cake\ORM\Association\HasMany $FactDtes
 * @property \App\Model\Table\GeneralClasificacionRutMaestroPersonasTable|\Cake\ORM\Association\HasMany $GeneralClasificacionRutMaestroPersonas
 * @property \App\Model\Table\GeneralMaestroClientesTable|\Cake\ORM\Association\HasMany $GeneralMaestroClientes
 *
 * @method \App\Model\Entity\GeneralMaestroPersona get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersona|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroPersona findOrCreate($search, callable $callback = null, $options = [])
 */
class GeneralMaestroPersonasTable extends Table
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

        $this->setTable('general_maestro_personas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('GeneralMaestroPersonaTipos', [
            'foreignKey' => 'general_persona_tipo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('GeneralRegiones', [
            'foreignKey' => 'general_regione_id'
        ]);
        $this->belongsTo('GeneralProvincias', [
            'foreignKey' => 'general_provincia_id'
        ]);
        $this->belongsTo('GeneralComunas', [
            'foreignKey' => 'general_comuna_id'
        ]);
        $this->hasMany('FactDtes', [
            'foreignKey' => 'general_maestro_persona_id'
        ]);
        $this->hasMany('GeneralClasificacionRutMaestroPersonas', [
            'foreignKey' => 'general_maestro_persona_id'
        ]);
        $this->hasMany('GeneralMaestroClientes', [
            'foreignKey' => 'general_maestro_persona_id'
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
            ->scalar('rut')
            ->maxLength('rut', 15)
            ->requirePresence('rut', 'create')
            ->notEmpty('rut');

        $validator
            ->scalar('dv')
            ->maxLength('dv', 1)
            ->requirePresence('dv', 'create')
            ->notEmpty('dv');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->allowEmpty('nombre');

        $validator
            ->scalar('apellido_paterno')
            ->maxLength('apellido_paterno', 255)
            ->allowEmpty('apellido_paterno');

        $validator
            ->scalar('apellido_materno')
            ->maxLength('apellido_materno', 255)
            ->allowEmpty('apellido_materno');

        $validator
            ->scalar('razon_social')
            ->maxLength('razon_social', 255)
            ->allowEmpty('razon_social');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 255)
            ->allowEmpty('telefono');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('direccion')
            ->allowEmpty('direccion');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 255)
            ->allowEmpty('referencia');

        $validator
            ->scalar('nombre_fantasia')
            ->maxLength('nombre_fantasia', 255)
            ->allowEmpty('nombre_fantasia');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['general_persona_tipo_id'], 'GeneralMaestroPersonaTipos'));
        $rules->add($rules->existsIn(['general_regione_id'], 'GeneralRegiones'));
        $rules->add($rules->existsIn(['general_provincia_id'], 'GeneralProvincias'));
        $rules->add($rules->existsIn(['general_comuna_id'], 'GeneralComunas'));

        return $rules;
    }
}
