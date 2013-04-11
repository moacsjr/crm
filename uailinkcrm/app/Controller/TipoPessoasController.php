<?php
App::uses('AppController', 'Controller');
/**
 * TipoPessoas Controller
 *
 * @property TipoPessoa $TipoPessoa
 */
class TipoPessoasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TipoPessoa->recursive = 0;
		$this->set('tipoPessoas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TipoPessoa->id = $id;
		if (!$this->TipoPessoa->exists()) {
			throw new NotFoundException(__('Tipo pessoa inválido'));
		}
		$this->set('tipoPessoa', $this->TipoPessoa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoPessoa->create();
			if ($this->TipoPessoa->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo pessoa foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo pessoa não pode ser salvo. Por favor, tente novamente.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TipoPessoa->id = $id;
		if (!$this->TipoPessoa->exists()) {
			throw new NotFoundException(__('Tipo pessoa inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TipoPessoa->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo pessoa foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo pessoa não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->TipoPessoa->read(null, $id);
		}
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
		$this->TipoPessoa->id = $id;
		if (!$this->TipoPessoa->exists()) {
			throw new NotFoundException(__('tipo pessoa inválido.'));
		}
		if ($this->TipoPessoa->delete()) {
			$this->Session->setFlash(__('Tipo pessoa excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo pessoa não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}