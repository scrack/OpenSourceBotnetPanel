<?php
App::uses('AppController', 'Controller');
/**
 * Bots Controller
 *
 * @property Bot $Bot
 * @property PaginatorComponent $Paginator
 */
class BotsController extends AppController {

	public $component = array('Security', 'Flash');

	public function beforeFilter() {

		$this->Security->csrfCheck = false;
	}
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
		$this->Bot->recursive = 0;
		$this->set('bots', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bot->exists($id)) {
			throw new NotFoundException(__('Invalid bot'));
		}
		$options = array('conditions' => array('Bot.' . $this->Bot->primaryKey => $id));
		$this->set('bot', $this->Bot->find('first', $options));
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
			$this->Bot->create();
			if ($this->Bot->save($this->request->data)) {
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
		if (!$this->Bot->exists($id)) {
			throw new NotFoundException(__('Invalid bot'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bot->save($this->request->data)) {
				$this->Flash->success(__('The bot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bot could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bot.' . $this->Bot->primaryKey => $id));
			$this->request->data = $this->Bot->find('first', $options);
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
		$this->Bot->id = $id;
		if (!$this->Bot->exists()) {
			throw new NotFoundException(__('Invalid bot'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bot->delete()) {
			$this->Flash->success(__('The bot has been deleted.'));
		} else {
			$this->Flash->error(__('The bot could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
