<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Experiencias Model
 *
 * @method \App\Model\Entity\Experiencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Experiencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Experiencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Experiencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experiencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Experiencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Experiencia findOrCreate($search, callable $callback = null, $options = [])
 */
class ExperienciasTable extends Table
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

        $this->table('experiencias');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf');

        $validator
            ->date('dt_nasc')
            ->allowEmpty('dt_nasc');

        $validator
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

        $validator
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->allowEmpty('telefone2');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('nec_especiais', 'create')
            ->notEmpty('nec_especiais');
		
		$validator
            ->allowEmpty('nec_especiais_qual');
        $validator
            ->requirePresence('eixo_tematico', 'create')
            ->notEmpty('eixo_tematico');

        $validator
            ->requirePresence('titulo_experiencia', 'create')
            ->notEmpty('titulo_experiencia');

        $validator
            ->requirePresence('autor1', 'create')
            ->notEmpty('autor1');

        $validator
            ->allowEmpty('autor2');

        $validator
            ->allowEmpty('autor3');

        $validator
            ->allowEmpty('autor4');

        $validator
            ->allowEmpty('autor5');

        $validator
            ->requirePresence('escola', 'create')
            ->notEmpty('escola');

        $validator
            ->requirePresence('escola_munic', 'create')
            ->notEmpty('escola_munic');

        $validator
            ->requirePresence('resumo', 'create')
            ->notEmpty('resumo');

        $validator
            ->requirePresence('deposito', 'create')
            ->notEmpty('deposito');

        $validator
            ->allowEmpty('resumo_titulo');

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
        $rules->add($rules->isUnique(['email'],'Este e-mail já foi cadastrado.'));
		$rules->add($rules->isUnique(['cpf'],  'Este cpf já foi cadastrado.'));

        return $rules;
    }
}
