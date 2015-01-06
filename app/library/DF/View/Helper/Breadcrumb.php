<?php
namespace DF\View\Helper;
class Breadcrumb extends HelperAbstract
{
    public function breadcrumb($menu_name = 'default')
    {
        $nav_item = $this->view->menu($menu_name);
        return $this->view->navigation()->breadcrumbs($nav_item)->setSeparator(' &raquo; ')->setMinDepth(1);
    }
}