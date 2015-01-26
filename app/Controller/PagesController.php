<?php

class PagesController extends AppController
{
    public $uses = array(
        'User'
    );

    /**
     * Displays a view
     *
     * @return void
     * @throws NotFoundException When the view file could not be found
     *         or MissingViewException in debug mode.
     */
    public function index()
    {
        $this->User->id = 1;
        $user = $this->User->read();
        $this->set(compact($user));
    }
}
