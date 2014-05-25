<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactsController
 *
 * @author Bruce
 */
class ContactsController extends AppController{
	
	    // include the session component
    public $components = array('Session');
	
	public function search($search = null)
	{
		if(!$search)
		{
			$data = $this->Contact->find('all', array('order' => 'name'));
		}
		else 
		{
			$data = $this->Contact->find('all', array('order' => 'name', 'conditions' => array('name LIKE' => '%'.$search.'%')));
		}
    	//$count = $this->Contact->find('count');
    	$info = array(
          'contacts' => $data,
          'count' => count($data)
      	);
      	$this->set($info);

	  	$this->render('index');	
    }
    
	
	public function delete($id=null)
	{
		$this->Contact->id = $id;
		
		if(!$id || !$this->Contact->exists())
		{
			throw new NotFoundException(__("ID was not set"));
		}
		
		if($this->request->is('post'))
		{
			if($this->Contact->delete())
			{
				$this->Session->setFlash("The contact was deleted");
			}
			else {
				$this->Session->setFlash("The contact was not deleted");
			}
		}
		
		$this->redirect('index');
	}
	
	public function edit($id = null)
	{
		if(!$id)
		{
            throw new NotFoundException(__("ID was not set, no contact to display."));
        }
        
        $data = $this->Contact->findById($id);
        
        if(!$data)
        {
            throw new NotFoundException(__("ID was not in the Database"));
        }
		
		if($this->request->is('post') || $this->request->is('put'))
        {
			// save the data and if it's a success then redirect them to the correct location
            if($this->Contact->save($this->request->data))
            {
                $this->Session->setFlash(__('The contact was updated.'));
                $this->redirect('index');
            }
            else
            {
                $this->Session->setFlash(__('The contact was not updated.'));
            }
        }
		$this->set('categories', $this->Contact->Category->find('list', array('order' => 'category_name')));
        $this->request->data = $data;
	}
	
	
	public function add()
	{
		$this->set('title_for_layout', 'Add a Contact');
		if($this->request->is('post'))
		{
			// prepare the model to insert a new item in the database.
			$this->Contact->create();
			
			if($this->Contact->save($this->request->data))
			{
				$this->redirect('index');
			}
			else 
			{
				// if the data fails to do something	
			}
		}
		$this->set('categories', $this->Contact->Category->find('list', array('order' => 'category_name')));
	}
    
    public function view($id = null)
    {
    	$this->layout = 'default';
        if(!$id)
        {
            throw new NotFoundException(__("ID was not set, no contact to display."));
        }
        // search the database based on the id (primary key) of the item 
        $data = $this->Contact->findById($id);
        
        if(!$data)
        {
            throw new NotFoundException(__("ID was not in the Database"));
        }
        $this->set('contact', $data);
    }
    
    public function index()
    {
      $data = $this->Contact->find('all', array('order' => 'name'));
      $count = $this->Contact->find('count');
      $info = array(
          'contacts' => $data,
          'count' => $count
      );
      $this->set($info);
     // $this->set('contacts', $data);
    //  $this->set('count', $count);
    }
    

}
