<?php

class Controller_Business extends Controller
{
    function action_index()
    {
        $this->view->generate('view_business.php', 'view_template.php');
    }
}