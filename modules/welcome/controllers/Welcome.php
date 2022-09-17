<?php
class Welcome extends Trongate {

    function index() {
      //$this->view('welcome');

      $data['someData'] = 'Some Data Here';
      $data['moreData'] = 'More Data Yhere';

      // Our View File
      $data['view_module'] = 'welcome';
      // View File - Otherwise defaults to index
      $data['view_file'] = 'welcome';
      // Our Default Template
      $this->template('simplix', $data);

    }
}
