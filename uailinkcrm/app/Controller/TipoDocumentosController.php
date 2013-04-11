<?php
App::uses('AppController', 'Controller');
/**
 * TipoDocumentos Controller
 *
 * @property TipoDocumento $TipoDocumento
 */
class TipoDocumentosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TipoDocumento->recursive = 0;
		$this->set('tipoDocumentos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TipoDocumento->id = $id;
		if (!$this->TipoDocumento->exists()) {
			throw new NotFoundException(__('Tipo documento inválido'));
		}
		$this->set('tipoDocumento', $this->TipoDocumento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoDocumento->create();
			if ($this->TipoDocumento->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo documento foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo documento não pode ser salvo. Por favor, tente novamente.'));
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
		$this->TipoDocumento->id = $id;
		if (!$this->TipoDocumento->exists()) {
			throw new NotFoundException(__('Tipo documento inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TipoDocumento->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo documento foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo documento não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->TipoDocumento->read(null, $id);
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
		$this->TipoDocumento->id = $id;
		if (!$this->TipoDocumento->exists()) {
			throw new NotFoundException(__('tipo documento inválido.'));
		}
		if ($this->TipoDocumento->delete()) {
			$this->Session->setFlash(__('Tipo documento excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo documento não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}