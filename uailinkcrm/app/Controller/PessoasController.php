<?php
App::uses('AppController', 'Controller');
/**
 * Pessoas Controller
 *
 * @property Pessoa $Pessoa
 */
class PessoasController extends AppController {

	
	public function isAuthorized($user) {		
		// todos os usuários registrados podem usar este controler
		return true;			
	}
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pessoa->recursive = 0;
		$this->set('pessoas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
   	    $this->Pessoa->recursive = 2;
		$this->Pessoa->id = $id;
		if (!$this->Pessoa->exists()) {
			throw new NotFoundException(__('Pessoa inválido'));
		}
		$this->set('pessoa', $this->Pessoa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pessoa->create();
			if ($this->Pessoa->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoa foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O pessoa não pode ser salvo. Por favor, tente novamente.'));
			}
		}
		$ramoAtividades = $this->Pessoa->RamoAtividade->find('list');
		$tipoPessoas = $this->Pessoa->TipoPessoa->find('list');
		$contaCorrentes = $this->Pessoa->ContaCorrente->find('list');
		$contatos = $this->Pessoa->Contato->find('list');
		$documentos = $this->Pessoa->Documento->find('list');
		$enderecos = $this->Pessoa->Endereco->find('list');
		$iteracoes = $this->Pessoa->Iteracao->find('list');		
		$this->set(compact('ramoAtividades', 'tipoPessoas', 'contaCorrentes', 'contatos', 'documentos', 'enderecos', 'iteracoes', 'tipos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Pessoa->id = $id;
		if (!$this->Pessoa->exists()) {
			throw new NotFoundException(__('Pessoa inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pessoa->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoa foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O pessoa não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Pessoa->read(null, $id);
		}
		$ramoAtividades = $this->Pessoa->RamoAtividade->find('list');
		$tipoPessoas = $this->Pessoa->TipoPessoa->find('list');
		$contaCorrentes = $this->Pessoa->ContaCorrente->find('list');
		$contatos = $this->Pessoa->Contato->find('list');
		$documentos = $this->Pessoa->Documento->find('list');
		$enderecos = $this->Pessoa->Endereco->find('list');
		$iteracoes = $this->Pessoa->Iteracao->find('list');
		$this->set(compact('ramoAtividades', 'tipoPessoas', 'contaCorrentes', 'contatos', 'documentos', 'enderecos', 'iteracoes', 'tipos'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Pessoa->id = $id;
		if (!$this->Pessoa->exists()) {
			throw new NotFoundException(__('pessoa inválido.'));
		}
		if ($this->Pessoa->delete()) {
			$this->Session->setFlash(__('Pessoa excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pessoa não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}
