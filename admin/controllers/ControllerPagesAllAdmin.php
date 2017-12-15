<?php
class ControllerPagesAllAdmin extends CoreAdmin
    {
        public function fetch()
        {
            $pages = new Pages();

            $array_vars = array(
                'arrayPages' => $pages->selectNameTablePages(),
            );

            return $this->view->render('viewAllPagesAdmin.html',$array_vars);
        }
    }