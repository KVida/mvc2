<?php
class ControllerError404 extends Core
{
    public function fetch()
    {
        $array_vars = array(
            'error' => '404 ошибка',
        );
        return $this->view->render('view_404.html', $array_vars);
    }
}