<?php

class Controller_Family extends Controller
{
    function action_index()
    {
        $this->view->generate('view_family.php', 'view_template.php');
    }
}