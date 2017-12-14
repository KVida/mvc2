<?php
class ControllerOrderMade extends Core
{
    public function fetch() 
    {
        new ControllerMenu($this->view);
        $orders = new Orders();
        $categories = new Categories();
        $request = new RequestForm();
        $users = new Users();

        $order = new stdClass();
        $category = new stdClass();
        $user = new stdClass();

        $order = $orders->getOrderDesc();

        $treeCategors = $categories->selectNameANDParentIDTableCategories();
        $category = $categories->build_tree($treeCategors,0);

        if ($request->method() == 'POST' && isset($_POST['exitUser']))  {
            unset($_SESSION['id_user']);
            $sessionUser = '';
            $name = '';
        } else {
            if (isset($_SESSION['id_user'])) {
                $sessionUser = $_SESSION['id_user'];
                $user = $users->getUser($sessionUser);
                $name = $user['name'];
                $user = $users->getUser($sessionUser);
                $array_vars['user'] = $user;
            } else {
                $name = '';
                $sessionUser = '';
            }  
        }

        $array_vars = array(
            'order'=>$order,
            'sideBarCategories' => $category,
            'name' => $name,
            'sessionUser' => $sessionUser,
        );

        return $this->view->render('viewOrderMade.html',$array_vars);
    }
}