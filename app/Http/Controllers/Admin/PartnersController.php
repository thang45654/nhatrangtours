<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnersRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Partner;
use Illuminate\Support\Str;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partner::paginate(2);
        return view('pages.partners.index', compact('partners'));
    }
    public function show($id)
    {
        $partner = Partner::find($id);
        return view('pages.partners.show', compact('partner'));
    }
    public function store(PartnersRequest $request)
    {
        $data = $request->except('_token', 'confirm_password');
        $data['password']=bcrypt($request->password);
        $data['created_at'] =Carbon::now('Asia/Ho_Chi_Minh');
        $id = Partner::insertGetId($data);
        return redirect()->route('admin.partners.index')->with('success', 'Thêm thành công');
    }
//    public function  edit($id){
//        $partner = Partner::find($id);
////        return view('pages.partners.edit', compact('partner'));
//        return $this->response($partner, 200);
//    }
    public function  edit(Request $request){
        $partner = Partner::find($request->id);
//        return view('pages.partners.edit', compact('partner'));
        return $this->response($partner, 200);
    }
    public function  update(PartnersRequest $request, $id){
        dd('ok');
        $data = $request->except('_token');
        $partner = Partner::find($id)->update($data);
        return $this->sendResponse($partner, 'Chỉnh sửa partner thành công');
    }

    public function delete($id){
        $partner = Partner::find($id);
        if($partner) $partner->delete();
        return redirect()->route('admin.partners.index')->with('success', 'Xóa thành công');
    }
}
