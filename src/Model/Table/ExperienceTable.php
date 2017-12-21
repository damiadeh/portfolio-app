<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Experience Model
 *
 * @method \App\Model\Entity\Experience get($primaryKey, $options = [])
 * @method \App\Model\Entity\Experience newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Experience[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Experience|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experience patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Experience[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Experience findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExperienceTable extends Table
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

        $this->setTable('experience');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->requirePresence('company', 'create')
            ->notEmpty('company');

        $validator
            ->requirePresence('exp_duration', 'create')
            ->notEmpty('exp_duration');

        $validator
            ->requirePresence('exp_description', 'create')
            ->notEmpty('exp_description');

        return $validator;
    }
}
