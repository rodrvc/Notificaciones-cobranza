<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneralMaestroClientes Model
 *
 * @property \App\Model\Table\GeneralMaestroPersonasTable|\Cake\ORM\Association\BelongsTo $GeneralMaestroPersonas
 * @property \App\Model\Table\CobranzaNotificacionConfiguracionesTable|\Cake\ORM\Association\HasMany $CobranzaNotificacionConfiguraciones
 * @property \App\Model\Table\FactDtesTable|\Cake\ORM\Association\HasMany $FactDtes
 * @property \App\Model\Table\GeneralClasificacionRutMaestroPersonasTable|\Cake\ORM\Association\HasMany $GeneralClasificacionRutMaestroPersonas
 *
 * @method \App\Model\Entity\GeneralMaestroCliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneralMaestroCliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroCliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroCliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralMaestroCliente|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralMaestroCliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroCliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralMaestroCliente findOrCreate($search, callable $callback = null, $options = [])
 */
class GeneralMaestroClientesTable extends Table
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

        $this->setTable('general_maestro_clientes');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->belongsTo('GeneralMaestroPersonas', [
            'foreignKey' => 'general_maestro_persona_id'
        ]);
        $this->hasMany('CobranzaNotificacionConfiguraciones', [
            'foreignKey' => 'general_maestro_cliente_id'
        ]);
        $this->hasMany('FactDtes', [
            'foreignKey' => 'general_maestro_cliente_id'
        ]);
        $this->hasMany('GeneralClasificacionRutMaestroPersonas', [
            'foreignKey' => 'general_maestro_cliente_id'
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

        $validator
            ->scalar('logo')
            ->maxLength('logo', 255)
            ->allowEmpty('logo');

        $validator
            ->scalar('actividad_economica')
            ->maxLength('actividad_economica', 255)
            ->allowEmpty('actividad_economica');

        $validator
            ->scalar('octava_username')
            ->maxLength('octava_username', 20)
            ->allowEmpty('octava_username');

        $validator
            ->scalar('octava_password')
            ->maxLength('octava_password', 50)
            ->allowEmpty('octava_password');

        $validator
            ->scalar('octava_apipass')
            ->maxLength('octava_apipass', 50)
            ->allowEmpty('octava_apipass');

        $validator
            ->scalar('prefijo_oc')
            ->maxLength('prefijo_oc', 10)
            ->allowEmpty('prefijo_oc');

        $validator
            ->boolean('activa')
            ->allowEmpty('activa');

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
        $rules->add($rules->existsIn(['general_maestro_persona_id'], 'GeneralMaestroPersonas'));

        return $rules;
    }
}
