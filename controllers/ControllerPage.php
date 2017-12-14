<?php
include 'ControllerProducts.php';
class ControllerPage extends Core
{
    public function fetch() 
    {     
        header( 'Location: /');
    }

    public function fetch_param($string)
    {
        $pages = new Pages();
        $request = new RequestForm();
        
        $string = $string .'/';
        if ($pages->getCountPageSrt($string)['number'] > 0) {
            new ControllerMenu($this->view);
            $textPage = $pages->getPageSrt($string);
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
            $array_vars = array(
                'textPage' => $textPage,
                'sessionUser'=>$sessionUser,
                'name'=>$name,
            );

            $res = $this->view->render('viewPage.html',$array_vars);
            return $res;
        } else {
            header('Location: /page404');
        }
    }  
}