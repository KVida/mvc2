<?php
class ControllerAuthAdmin extends CoreAdmin
{
    public function fetch()
    {
        $request = new Request();
        $users_admin = new Users_admin();
        $userAdmin = new stdClass();
        $array_vars = array();
        
        $isPostTextExist = $request->method() == 'POST' && isset($_POST['text']) && !empty($request->post('text'));
        $isPassExist = !empty($request->post('password'));
        $isSetPassAndLogin = $isPostTextExist && $isPassExist;


        if ($isSetPassAndLogin) {
            if ($this->validAdmin('text', $request->post('text'))) {
                $text = trim($request->post('text'));
                $count = $users_admin->getUserAdminCountName($text);
                
                if ($count['number']) {
                    $userAdmin = $users_admin->getUserAdminName($text);

                    if ($this->isEqualPass($request->post('password'), $userAdmin['pass'])) {
                        $_SESSION['id_admin'] = $userAdmin['pass'];
                        
                        header('Location:/admin/');
                        exit;
                    }
                }
            }
        }

        $message = 'Ошибка! Неверно введен логин или пароль!';

        if ($request->method() === 'POST' && isset($message) && !empty($message)) {
            $array_vars['message'] = $message;
        }

        return $this->view->render('viewAuthAdmin.html',$array_vars);
    }

    private function isEqualPass($incoming_pass, $original_pass)
    {
        return $incoming_pass === $original_pass;
    }
}