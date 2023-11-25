<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\JsonRespone;
use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function create()
    {

        return view('admin.menu.add', [
            'title' => 'Thêm danh mục mới',
            'menus' => $this->menuService->getParent()
        ]);
        
    }
    public function store(CreateFormRequest $request)
    {

        $this->menuService->create($request);

        return redirect()->back();
    }

    public function index()
    {
        return view('admin.menu.list',[
            'title'=>'danh sạc danh mục mới nhất',
            'menus'=> $this->menuService->getAll()
        ]);
    }
    public function destroy(Request $request): JsonRespone
    {
        $result = $this->menuService->destroy($request);
        if ($result){
            return respone()->json([
                'error'=>false,
                'message'=>'xoá thành công danh mục'
            ]);
        }
        return respone()->json([
            'error'=>true
           
        ]);
    }
}
