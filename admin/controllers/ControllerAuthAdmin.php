<?php
class ControllerAuthAdmin extends CoreAdmin
{
    public function fetch()
    {
        $request = new Request();
        $users_admin = new Users_admin();
        $userAdmin = new stdClass();
        $array_vars = array();

        if ($request->method() == 'POST' && $_POST['text'] != null) {
            if (!empty($request->post('text'))) {
                if ($this->validAdmin('text',$request->post('text'))) {
                    $text = trim($request->post('text'));
                    $count = $users_admin->getUserAdminCountName($text);
                    if ($count['number'] == 1) {
                        if (!empty($request->post('password'))) {
                            $userAdmin = $users_admin->getUserAdminName($text);
                            if ($request->post('password') == $userAdmin['pass']) {
                                $_SESSION['id_admin'] = $userAdmin['pass'];
                                header('Location:/admin/');
                            } else {
                                $message = 'Ошибка! Невероо введен логин или пароль!';
                            }
                        } else {
                            $message = 'Ошибка! Невероо введен логин или пароль!';
                        }
                    } else {
                        $message = 'Ошибка! Невероо введен логин или пароль!';
                    }
                } else {
                    $message = 'Ошибка! Невероо введен логин или пароль!';
                }
            } else {
                $message = 'Ошибка! Невероо введен логин или пароль!';
            }
        } else {
            $message = 'Ошибка! Невероо введен логин или пароль!';
        }
        if (isset($message) && !empty($message)) {
            $array_vars['message'] = $message;
        }
        return $this->view->render('viewAuthAdmin.html',$array_vars);
    }
}