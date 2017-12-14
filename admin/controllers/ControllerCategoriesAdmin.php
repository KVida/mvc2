<?php
class ControllerCategoriesAdmin extends CoreAdmin
{
    public function fetch()
    {
        $categories = new Categories();
        $request = new Request();
        $category = new stdClass();

        $treeCategors = $categories->selectNameANDParentIDTableCategoriesVis();
                    
        $fullCategoryTree =  $request->build_tree_all($treeCategors,0);

        $array_vars = array(
            'fullCategoryTree'=>$fullCategoryTree,
        );

        return $this->view->render('viewCategoriesAdmin.html',$array_vars);
    }
}