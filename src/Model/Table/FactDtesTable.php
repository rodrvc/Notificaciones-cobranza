<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * FactDtes Model
 *
 * @property \App\Model\Table\GeneralMaestroClientesTable|\Cake\ORM\Association\BelongsTo $GeneralMaestroClientes
 * @property \App\Model\Table\GeneralMaestroPersonasTable|\Cake\ORM\Association\BelongsTo $GeneralMaestroPersonas
 * @property \App\Model\Table\FactDteTiposTable|\Cake\ORM\Association\BelongsTo $FactDteTipos
 * @property \App\Model\Table\FactDteEstadosTable|\Cake\ORM\Association\BelongsTo $FactDteEstados
 * @property \App\Model\Table\FactDteMovimientosTable|\Cake\ORM\Association\BelongsTo $FactDteMovimientos
 * @property \App\Model\Table\FactDtePagosTable|\Cake\ORM\Association\BelongsTo $FactDtePagos
 * @property \App\Model\Table\FactSiiComercialsTable|\Cake\ORM\Association\BelongsTo $FactSiiComercials
 * @property \App\Model\Table\FactSiiMercaderiasTable|\Cake\ORM\Association\BelongsTo $FactSiiMercaderias
 * @property \App\Model\Table\GeneralUsersTable|\Cake\ORM\Association\BelongsTo $GeneralUsers
 *
 * @method \App\Model\Entity\FactDte get($primaryKey, $options = [])
 * @method \App\Model\Entity\FactDte newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FactDte[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FactDte|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDte|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FactDte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FactDte[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FactDte findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FactDtesTable extends Table
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

        $this->setTable('fact_dtes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('GeneralMaestroClientes', [
            'foreignKey' => 'general_maestro_cliente_id'
        ]);
        $this->belongsTo('GeneralMaestroPersonas', [
            'foreignKey' => 'general_maestro_persona_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('FactDteTipos', [
            'foreignKey' => 'fact_dte_tipo_id'
        ]);
        $this->belongsTo('FactDteEstados', [
            'foreignKey' => 'fact_dte_estado_id'
        ]);
        $this->belongsTo('FactDteMovimientos', [
            'foreignKey' => 'fact_dte_movimiento_id'
        ]);
        $this->belongsTo('FactDtePagos', [
            'foreignKey' => 'fact_dte_pago_id'
        ]);
        // $this->belongsTo('FactSiiComercials', [
        //     // 'foreignKey' => 'fact_sii_comercial_id'
        // ]);
        // $this->belongsTo('FactSiiMercaderias', [
        //     'foreignKey' => 'fact_sii_mercaderia_id'
        // ]);
        $this->belongsTo('GeneralUsers', [
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
            ->scalar('folio')
            ->maxLength('folio', 15)
            ->requirePresence('folio', 'create')
            ->notEmpty('folio');

        $validator
            ->date('fecha_pago')
            ->allowEmpty('fecha_pago');

        $validator
            ->date('fecha_emision')
            ->allowEmpty('fecha_emision');

        $validator
            ->date('fecha_vencimiento')
            ->allowEmpty('fecha_vencimiento');

        $validator
            ->allowEmpty('abono');

        $validator
            ->allowEmpty('saldo');

        $validator
            ->allowEmpty('descuento');

        $validator
            ->allowEmpty('monto_neto');

        $validator
            ->allowEmpty('monto_exento');

        $validator
            ->allowEmpty('monto_iva');

        $validator
            ->allowEmpty('monto_total');

        $validator
            ->scalar('observacion')
            ->allowEmpty('observacion');

        $validator
            ->scalar('referencias')
            ->maxLength('referencias', 255)
            ->allowEmpty('referencias');

        $validator
            ->date('fecha_contrato')
            ->allowEmpty('fecha_contrato');

        $validator
            ->date('fecha_embarque')
            ->allowEmpty('fecha_embarque');

        $validator
            ->date('fecha_llegada')
            ->allowEmpty('fecha_llegada');

        $validator
            ->scalar('pais_origen')
            ->maxLength('pais_origen', 255)
            ->allowEmpty('pais_origen');

        $validator
            ->scalar('incoterms')
            ->maxLength('incoterms', 20)
            ->allowEmpty('incoterms');

        $validator
            ->numeric('tipocambio')
            ->allowEmpty('tipocambio');

        $validator
            ->allowEmpty('acuse_recibo');

        $validator
            ->allowEmpty('recepcionado');

        $validator
            ->allowEmpty('contabilizado');

        $validator
            ->nonNegativeInteger('nota_credito')
            ->allowEmpty('nota_credito');

        $validator
            ->nonNegativeInteger('dte_ref')
            ->allowEmpty('dte_ref');

        $validator
            ->allowEmpty('isManual');

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
        $rules->add($rules->existsIn(['general_maestro_cliente_id'], 'GeneralMaestroClientes'));
        $rules->add($rules->existsIn(['general_maestro_persona_id'], 'GeneralMaestroPersonas'));
        $rules->add($rules->existsIn(['fact_dte_tipo_id'], 'FactDteTipos'));
        $rules->add($rules->existsIn(['fact_dte_estado_id'], 'FactDteEstados'));
        $rules->add($rules->existsIn(['fact_dte_movimiento_id'], 'FactDteMovimientos'));
        $rules->add($rules->existsIn(['fact_dte_pago_id'], 'FactDtePagos'));
        // $rules->add($rules->existsIn(['fact_sii_comercial_id'], 'FactSiiComercials'));
        // $rules->add($rules->existsIn(['fact_sii_mercaderia_id'], 'FactSiiMercaderias'));
        $rules->add($rules->existsIn(['general_user_id'], 'GeneralUsers'));

        return $rules;
    }

    public function testMethodTable(){
        $articles = TableRegistry::getTableLocator()->get('FactDtes');
        $query = $articles->find();
        $query->where(['id' => 1]);
    }
}
