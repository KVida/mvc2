<?php
class ControllerPagesAdmin extends CoreAdmin
{
    public function fetch()
    {
        $pages = new Pages();

        $array_vars = array(
            'arrayPages' => $pages->selectNameTablePages(),
        );

        return $this->view->render('viewPagesAdmin.html',$array_vars);
    }
}