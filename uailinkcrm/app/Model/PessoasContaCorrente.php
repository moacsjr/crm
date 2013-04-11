<?php
App::uses('AppModel', 'Model');
/**
 * PessoasContaCorrente Model
 *
 * @property Pessoa $Pessoa
 */
class PessoasContaCorrente extends AppModel {

    public $name = "PessoasContaCorrente";
    

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pessoa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Sua mensagem de validação aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
	);

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações belongsTo
 *
 * @var array
 */
	public $belongsTo = array(
		'Pessoa' => array(
			'className' => 'Pessoa',
			'foreignKey' => 'pessoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
