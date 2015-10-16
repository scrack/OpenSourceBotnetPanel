<?php
App::uses('AppController', 'Controller');
/**
 * Loots Controller
 *
 * @property Loot $Loot
 * @property PaginatorComponent $Paginator
 */
class LootsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Loot->recursive = 0;
		$this->set('loots', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Loot->exists($id)) {
			throw new NotFoundException(__('Invalid loot'));
		}
		$options = array('conditions' => array('Loot.' . $this->Loot->primaryKey => $id));
		$this->set('loot', $this->Loot->find('first', $options));
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
			$this->Loot->create();
			if ($this->Loot->save($this->request->data)) {
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
		if (!$this->Loot->exists($id)) {
			throw new NotFoundException(__('Invalid loot'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Loot->save($this->request->data)) {
				$this->Flash->success(__('The loot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The loot could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Loot.' . $this->Loot->primaryKey => $id));
			$this->request->data = $this->Loot->find('first', $options);
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
		$this->Loot->id = $id;
		if (!$this->Loot->exists()) {
			throw new NotFoundException(__('Invalid loot'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Loot->delete()) {
			$this->Flash->success(__('The loot has been deleted.'));
		} else {
			$this->Flash->error(__('The loot could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
