<?php
class ControllerAuthorization extends Core
{
    public function fetch() 
    {
        new ControllerMenu($this->view);
        $users = new Users();
        $request = new RequestForm();
        $user = new stdClass();
        
        $array_vars = array();
        $email = '';

        if($request->method() == 'POST' && isset($_POST['comeIn'])) {
            if (!empty($_POST['loginUser']) && !empty($_POST['passUser'])){
                if ($this->validForm('email',trim($request->post('loginUser')))){
                    $email = strip_tags(trim($request->post('loginUser')));
                    $countUserEmail = $users->getCountUserEmail($email);
                    if ($countUserEmail['number'] == 0) {
                        $message = 'Ошибка! Неверлый логин или пароль';  
                    } else {
                        $user = $users->getUserEmail($email);
                        $password = trim($request->post('passUser'));
                     
                        if (password_verify($password,$user['password'])) { 
                            session_name('id_user');
                            $_SESSION['id_user'] = $user['id'];
                            
                            if ($_COOKIE['cart']) {
                                setcookie('cart',1,time()-3600*24*7,'/');
                                header( 'Location: /cart/');
                            } else {
                                header( 'Location: /');
                            }
                            
                        } else {
                            $message = 'Ошибка! Неверлый логин или пароль';   
                        }
                    }
                } else {
                    $message = 'Ошибка! Неверлый логин или пароль';
                }
            } else {
                $message = 'Введитете логин и пароль!';
            }
        }
        if (isset($message)) {
            $array_vars['message'] = $message;
            $array_vars['email'] = $email;
        }

        return $this->view->render('viewAuthorization.html',$array_vars);
        
    }    
}