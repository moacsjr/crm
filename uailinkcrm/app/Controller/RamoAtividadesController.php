<?php
App::uses('AppController', 'Controller');
/**
 * RamoAtividades Controller
 *
 * @property RamoAtividade $RamoAtividade
 */
class RamoAtividadesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RamoAtividade->recursive = 0;
		$this->set('ramoAtividades', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RamoAtividade->id = $id;
		if (!$this->RamoAtividade->exists()) {
			throw new NotFoundException(__('Ramo atividade inválido'));
		}
		$this->set('ramoAtividade', $this->RamoAtividade->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RamoAtividade->create();
			if ($this->RamoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('O ramo atividade foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O ramo atividade não pode ser salvo. Por favor, tente novamente.'));
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
		$this->RamoAtividade->id = $id;
		if (!$this->RamoAtividade->exists()) {
			throw new NotFoundException(__('Ramo atividade inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RamoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('O ramo atividade foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O ramo atividade não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->RamoAtividade->read(null, $id);
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
		$this->RamoAtividade->id = $id;
		if (!$this->RamoAtividade->exists()) {
			throw new NotFoundException(__('ramo atividade inválido.'));
		}
		if ($this->RamoAtividade->delete()) {
			$this->Session->setFlash(__('Ramo atividade excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ramo atividade não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}