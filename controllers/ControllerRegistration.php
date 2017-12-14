<?php
class ControllerRegistration extends Core
{
    public function fetch() 
    {
        new ControllerMenu($this->view);

        $users = new Users();
        $request = new RequestForm();
        $categories = new Categories();

        $user = new stdClass();
        $category = new stdClass();

        if($request->method() == 'POST'  && isset($_POST['save']) && isset($_POST['email']) && isset($_POST['password'])) {
            $error = array();
            $message = array();
            if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordRepeat'])) {
                if ($this->validForm('name',trim($request->post('name')))){
                    $user->name = strip_tags(trim($request->post('name')));
                } else {
                    $error[0]='has-error';
                    $message[0] = 'Ошибка! В имени должны быть только буквы (русские или английские), без пробелов.';
                }

                if ($this->validForm('email',trim($request->post('email')))){
                    $user->email = strip_tags(trim($request->post('email')));
                    $email = strip_tags(trim($request->post('email')));
                } else {
                    $error[1]='has-error';
                    $message[1] = 'Ошибка! Еmail не валиден.';
                }

                if ($this->validForm('phone',trim($request->post('phone')))) {
                    $user->phone = trim($request->post('phone'));
                } else {
                    $error[2]='has-error';
                    $message[2] = 'Ошибка! Телефон должен содержать от 5 (если это стационарный телефон) до 12 цифр (если мобильный телефон)';
                }

                if ($this->validForm('password',trim($request->post('password')))) {
                    $password = trim($request->post('password'));
                } else {
                    $error[3]='has-error';
                }

                if ($this->validForm('passwordRepeat',trim($request->post('passwordRepeat')))){
                    
                    $passwordRepeat = trim($request->post('passwordRepeat'));
                } else {
                    $error[4]='has-error';
                }
                
                $user->city = $request->post('city');

                if (empty($error)) {
                    $countUserEmail = $users->getCountUserEmail($user->email);    
                    if ($countUserEmail['number'] == 0) {
                        if ($password == $passwordRepeat) {
                            $pass = password_hash($password,PASSWORD_DEFAULT);
                            $user->password = $pass;
                            $id = $users->addUser($user);
                            $user = $users->getUser($id);
                            $treeCategors = $categories->selectNameANDParentIDTableCategories();
                            $category = $categories->build_tree($treeCategors,0);
        
                            
                            $array_vars = array(
                                'message' => 'Регистрация прошла успешно!',
                                'sideBarCategories' => $category,
                            );
                            $user = $users->getUserEmail($email);
                            session_name('id_user');
                            $_SESSION['id_user'] = $user['id'];

                            if($request->method() == 'POST' && isset($_POST['exitUser']))  {
                                unset($_SESSION['id_user']);
                                $sessionUser = '';
                                $name = '';
                            } else {
                                if (isset($_SESSION['id_user'])) {
                                    $sessionUser = $_SESSION['id_user'];
                                    $users = new Users();
                                    $user = $users->getUser($_SESSION['id_user']);
                                    $name = $user['name'];
                                } else {
                                    $sessionUser = '';
                                    $name = '';
                                }
                                
                            }
                            $array_vars['name'] = $name;
                            $array_vars['sessionUser'] = $sessionUser;
                            
                            $res = $this->view->render('viewMessage.html',$array_vars);
                        } else {
                            $message[5] = 'Пароли не совпадают!!';

                            $array_vars = array(
                                'message' => $message,
                                'user' => $user,
                                'error' => $error,
                            );
                            $res =  $this->view->render('viewRegistration.html',$array_vars);
                        }
                        
                    } else {
                        $message[6] = 'Ошибка! Пользователь с таким Еmail уже существует!';
                        $error[6]='has-error';
                        $user->email = '';
                            
                        $array_vars = array(
                            'message' => $message,
                            'error' => $error,
                            'user' => $user,                  
                        );
                        $res = $this->view->render('viewRegistration.html',$array_vars);
                    }
                } else {
                    $array_vars = array(
                        'message' => $message,
                        'user' => $user,
                        'error' => $error,
                    );
                    $res = $this->view->render('viewRegistration.html',$array_vars);
                }
 
            } else {
                $message = 'Введите все обязательные поля!!';

                $array_vars = array(
                    'message' => $message,
                    'user' => $user,
                    'error' => $error,
                );
                $res =  $this->view->render('viewRegistration.html',$array_vars);
            }
        } else {
            $array_vars = array(
                
            );
            $res = $this->view->render('viewRegistration.html',$array_vars);
        }
        return $res;
    }    
}