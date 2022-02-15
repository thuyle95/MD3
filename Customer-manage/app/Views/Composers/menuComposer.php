<?php
namespace App\Views\Composers;
use Illuminate\View\View;
class MenuComposer {
    public function compose(View $view)
    {
        $menus = [
            [
                'name' => 'customers.index',
                'text' => 'Danh sách khách hàng'
            ],
            [
                'name' => 'customers.create',
                'text' => 'Thêm mới khách hàng'
            ]
        ];
        $view->with('menus', $menus);
    }
}
?>