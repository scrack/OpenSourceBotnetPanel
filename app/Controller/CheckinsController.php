<?php
App::uses('AppController', 'Controller');
/**
 * Checkins Controller
 *
 * @property Checkin $Checkin
 * @property PaginatorComponent $Paginator
 */
class CheckinsController extends AppController {

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
		$this->Checkin->recursive = 0;
		$this->set('checkins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Checkin->exists($id)) {
			throw new NotFoundException(__('Invalid checkin'));
		}
		$options = array('conditions' => array('Checkin.' . $this->Checkin->primaryKey => $id));
		$this->set('checkin', $this->Checkin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		$this->view = 'home';
		$this->layout =  'blank';

		if ($this->request->is('post')) {
			$this->Checkin->create();
			if ($this->Checkin->save($this->request->data)) {
				return $this->redirect(array('action' => 'index'));
			} else {
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Checkin->exists($id)) {
			throw new NotFoundException(__('Invalid checkin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Checkin->save($this->request->data)) {
				$this->Flash->success(__('The checkin has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The checkin could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Checkin.' . $this->Checkin->primaryKey => $id));
			$this->request->data = $this->Checkin->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Checkin->id = $id;
		if (!$this->Checkin->exists()) {
			throw new NotFoundException(__('Invalid checkin'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Checkin->delete()) {
			$this->Flash->success(__('The checkin has been deleted.'));
		} else {
			$this->Flash->error(__('The checkin could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
