<?php

class Controller_Education extends Controller
{
    function action_index()
    {
        $this->view->generate('view_education.php', 'view_template.php');
    }
}