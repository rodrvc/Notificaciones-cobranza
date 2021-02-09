<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneralClasificacionRutMaestroPersonas Model
 *
 * @property \App\Model\Table\GeneralMaestroPersonasTable|\Cake\ORM\Association\BelongsTo $GeneralMaestroPersonas
 * @property \App\Model\Table\GeneralMaestroClientesTable|\Cake\ORM\Association\BelongsTo $GeneralMaestroClientes
 * @property \App\Model\Table\GeneralClasificacionRutsTable|\Cake\ORM\Association\BelongsTo $GeneralClasificacionRuts
 *
 * @method \App\Model\Entity\GeneralClasificacionRutMaestroPersona get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneralClasificacionRutMaestroPersona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneralClasificacionRutMaestroPersona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneralClasificacionRutMaestroPersona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralClasificacionRutMaestroPersona|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralClasificacionRutMaestroPersona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralClasificacionRutMaestroPersona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralClasificacionRutMaestroPersona findOrCreate($search, callable $callback = null, $options = [])
 */
class GeneralClasificacionRutMaestroPersonasTable extends Table
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

        $this->setTable('general_clasificacion_rut_maestro_personas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('GeneralMaestroPersonas', [
            'foreignKey' => 'general_maestro_persona_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('GeneralMaestroClientes', [
            'foreignKey' => 'general_maestro_cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('GeneralClasificacionRuts', [
            'foreignKey' => 'general_clasificacion_rut_id'
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
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        $validator
            ->scalar('plazo_venta')
            ->maxLength('plazo_venta', 100)
            ->allowEmpty('plazo_venta');

        $validator
            ->scalar('plazo_compra')
            ->maxLength('plazo_compra', 100)
            ->allowEmpty('plazo_compra');

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
        $rules->add($rules->existsIn(['general_maestro_cliente_id'], 'GeneralMaestroClientes'));
        $rules->add($rules->existsIn(['general_clasificacion_rut_id'], 'GeneralClasificacionRuts'));

        return $rules;
    }
}
