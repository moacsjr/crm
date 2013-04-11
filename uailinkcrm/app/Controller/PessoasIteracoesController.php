<?php
App::uses('AppController', 'Controller');
/**
 * PessoasIteracoes Controller
 *
 * @property PessoasIteracao $PessoasIteracao
 */
class PessoasIteracoesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PessoasIteracao->recursive = 0;
		$this->set('pessoasIteracoes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PessoasIteracao->id = $id;
		if (!$this->PessoasIteracao->exists()) {
			throw new NotFoundException(__('Pessoas iteração inválido'));
		}
		$this->set('pessoasIteracao', $this->PessoasIteracao->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PessoasIteracao->create();
			if ($this->PessoasIteracao->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas iteração foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O pessoas iteração não pode ser salvo. Por favor, tente novamente.'));
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
		$this->PessoasIteracao->id = $id;
		if (!$this->PessoasIteracao->exists()) {
			throw new NotFoundException(__('Pessoas iteração inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PessoasIteracao->save($this->request->data)) {
				$this->Session->setFlash(__('O pessoas iteração foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O pessoas iteração não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->PessoasIteracao->read(null, $id);
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
		$this->PessoasIteracao->id = $id;
		if (!$this->PessoasIteracao->exists()) {
			throw new NotFoundException(__('pessoas iteração inválido.'));
		}
		if ($this->PessoasIteracao->delete()) {
			$this->Session->setFlash(__('Pessoas iteração excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pessoas iteração não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}