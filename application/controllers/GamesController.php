<?php

class GamesController extends Zend_Controller_Action
{


    public function init()
    {
        /* Initialize action controller here */
         $this->view->asin = $this->_getParam('asin');
    }

    public function indexAction()
    {
        // action body
    }

    public function viewAction()
    {
        // action body
    }


}



