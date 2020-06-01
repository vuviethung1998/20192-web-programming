<?php

class ItemsController extends Controller
{

  function view($id = null, $name = null)
  {

    $this->set('todo', $this->Item->select($id));
    $this->set('title', $name . ' - My Todo List App');
   
  }

  function viewall()
  {

    $this->set('todo', $this->Item->selectAll());
    $this->set('title', 'All Items - My Todo List App');
    
  }

  function add()
  {
    $todo = $_POST['todo'];
    $this->set('title', 'Success - My Todo List App');
    $this->set('todo', $this->Item->query('insert into items (item_name) values (\'' . mysqli_real_escape_string($this->_dbHandle, $todo) . '\')'));
  }

  function delete($id = null)
  {
    $this->set('title', 'Success - My Todo List App');
    $this->set('todo', $this->Item->query('delete from items where id = \'' . mysqli_real_escape_string($this->_dbHandle, $id) . '\''));
  }
}