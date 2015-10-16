<?php
App::uses('AppController', 'Controller');
/**
 * Updates Controller
 *
 * @property Update $Update
 * @property PaginatorComponent $Paginator
 */
class UpdatesController extends AppController {

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
		$this->Update->recursive = 0;
		$this->set('updates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Update->exists($id)) {
			throw new NotFoundException(__('Invalid update'));
		}
		$options = array('conditions' => array('Update.' . $this->Update->primaryKey => $id));
		$this->set('update', $this->Update->find('first', $options));
	}

	public function info() {

		echo "v0.1";
		die();
	}

	public function download() {

		$this->viewClass = 'Media';
		$params = array(
			'id'        => 'executable.exe',
			'name'      => 'executable',
			'download'  => true,
			'extension' => 'exe',
			'path'      => APP . 'outside_webroot_dir' . DS
		);
		$this->set($params);
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
			$this->Update->create();
			if ($this->Update->save($this->request->data)) {
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
		if (!$this->Update->exists($id)) {
			throw new NotFoundException(__('Invalid update'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Update->save($this->request->data)) {
				$this->Flash->success(__('The update has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The update could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Update.' . $this->Update->primaryKey => $id));
			$this->request->data = $this->Update->find('first', $options);
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
		$this->Update->id = $id;
		if (!$this->Update->exists()) {
			throw new NotFoundException(__('Invalid update'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Update->delete()) {
			$this->Flash->success(__('The update has been deleted.'));
		} else {
			$this->Flash->error(__('The update could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
