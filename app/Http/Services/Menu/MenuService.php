<?php

namespace App\Http\Services\Menu;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Models\Menu;



class MenuService
{
    public function getAll(){
        return Menu::orderbyDesc('id')->paginate(20);
    }
    public function getParent()
    {
        return Menu::where('parent_id',0)->get();
    }
    public function create($request)
    {
        try{
            Menu::create([
                'name'=> (String) $request->input('name'),
                'parent_id'=> (int) $request->input('parent_id'),
                'description'=> (String) $request->input('description'),
                'content'=> (String) $request->input('content'),
                'active'=> (String) $request->input('active')

            ]);

            Session::flash('success','Tạo danh mục thành công');
        }catch(\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
        
    }
    public function destroy($request){
        $id = (int) $request->input('id');
        $menu = Menu::where('id', $id)->first();
        
        if($menu){
            return Menu::where('id',$id)->orWhere('parent_id',$id)->delete();
        }
        return false;
    }
}