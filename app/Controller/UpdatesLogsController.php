<?php
App::uses('AppController', 'Controller');
/**
 * UpdatesLogs Controller
 *
 * @property UpdatesLog $UpdatesLog
 * @property PaginatorComponent $Paginator
 */
class UpdatesLogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UpdatesLog->recursive = 0;
		$this->set('updatesLogs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UpdatesLog->exists($id)) {
			throw new NotFoundException(__('Invalid updates log'));
		}
		$options = array('conditions' => array('UpdatesLog.' . $this->UpdatesLog->primaryKey => $id));
		$this->set('updatesLog', $this->UpdatesLog->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->view = 'home';
		$this->layout = 'blank';

		if ($this->request->is('post')) {
			$this->UpdatesLog->create();
			if ($this->UpdatesLog->save($this->request->data)) {
				return $this->redirect(array('action' => 'index'));
			} else {
			}
		}
		$updates = $this->UpdatesLog->Update->find('list');
		$this->set(compact('updates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UpdatesLog->exists($id)) {
			throw new NotFoundException(__('Invalid updates log'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UpdatesLog->save($this->request->data)) {
				$this->Flash->success(__('The updates log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The updates log could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UpdatesLog.' . $this->UpdatesLog->primaryKey => $id));
			$this->request->data = $this->UpdatesLog->find('first', $options);
		}
		$updates = $this->UpdatesLog->Update->find('list');
		$this->set(compact('updates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UpdatesLog->id = $id;
		if (!$this->UpdatesLog->exists()) {
			throw new NotFoundException(__('Invalid updates log'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UpdatesLog->delete()) {
			$this->Flash->success(__('The updates log has been deleted.'));
		} else {
			$this->Flash->error(__('The updates log could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
