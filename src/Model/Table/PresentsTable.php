<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Presents Model
 *
 * @method \App\Model\Entity\Present get($primaryKey, $options = [])
 * @method \App\Model\Entity\Present newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Present[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Present|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Present saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Present patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Present[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Present findOrCreate($search, callable $callback = null, $options = [])
 */
class PresentsTable extends Table
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

        $this->setTable('presents');
        $this->setDisplayField('eventsid');
        $this->setPrimaryKey(['eventsid', 'poniesid']);
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
            ->integer('eventsid')
            ->allowEmptyString('eventsid', null, 'create');

        $validator
            ->integer('poniesid')
            ->allowEmptyString('poniesid', null, 'create');

        return $validator;
    }
}
