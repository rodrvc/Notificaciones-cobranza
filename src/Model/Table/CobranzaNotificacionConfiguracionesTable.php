<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CobranzaNotificacionConfiguraciones Model
 *
 * @property \App\Model\Table\GeneralUsersTable|\Cake\ORM\Association\BelongsTo $GeneralUsers
 * @property \App\Model\Table\GeneralMaestroClientesTable|\Cake\ORM\Association\BelongsTo $GeneralMaestroClientes
 * @property \App\Model\Table\CobranzaNotificacionTiposTable|\Cake\ORM\Association\BelongsTo $CobranzaNotificacionTipos
 *
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione get($primaryKey, $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CobranzaNotificacionConfiguracionesTable extends Table
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

        $this->setTable('cobranza_notificacion_configuraciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('GeneralUsers', [
            'foreignKey' => 'general_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('GeneralMaestroClientes', [
            'foreignKey' => 'general_maestro_cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CobranzaNotificacionTipos', [
            'foreignKey' => 'cobranza_notificacion_tipo_id',
            'joinType' => 'INNER'
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
            ->nonNegativeInteger('dias')
            ->allowEmpty('dias');

        $validator
            ->boolean('activo')
            ->allowEmpty('activo');

        $validator
            ->scalar('mensaje')
            ->allowEmpty('mensaje');

        $validator
            ->scalar('asunto')
            ->maxLength('asunto', 255)
            ->allowEmpty('asunto');

        $validator
            ->scalar('dia_notificacion')
            ->maxLength('dia_notificacion', 45)
            ->allowEmpty('dia_notificacion');

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
        $rules->add($rules->existsIn(['general_user_id'], 'GeneralUsers'));
        $rules->add($rules->existsIn(['general_maestro_cliente_id'], 'GeneralMaestroClientes'));
        $rules->add($rules->existsIn(['cobranza_notificacion_tipo_id'], 'CobranzaNotificacionTipos'));

        return $rules;
    }
}
