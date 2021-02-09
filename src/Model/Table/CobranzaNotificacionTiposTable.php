<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CobranzaNotificacionTipos Model
 *
 * @property \App\Model\Table\CobranzaNotificacionConfiguracionesTable|\Cake\ORM\Association\HasMany $CobranzaNotificacionConfiguraciones
 *
 * @method \App\Model\Entity\CobranzaNotificacionTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionTipo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CobranzaNotificacionTipo findOrCreate($search, callable $callback = null, $options = [])
 */
class CobranzaNotificacionTiposTable extends Table
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

        $this->setTable('cobranza_notificacion_tipos');
        $this->setDisplayField('nombre');
        
        $this->setPrimaryKey('id');

        $this->hasMany('CobranzaNotificacionConfiguraciones', [
            'foreignKey' => 'cobranza_notificacion_tipo_id'
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
