<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnersRequest;
use App\Models\Order;
use App\Models\User;
use BaconQrCode\Exception\OutOfBoundsException;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\Partner;
use Illuminate\Support\Str;

class PartnersController extends Controller
{
    public function index()
    {

        $partners = Partner::orderBy('id', 'desc')->paginate(10);
        $orders = Order::orderBy('created_at', 'desc')->get();
        $partner = DB::table('partners')->selectRaw('count(*) as total_partners')->first();
        $data = [
            'page_name' => 'Quản lý CTV',
            'orders' => $orders,
            'total_partners' => $partner->total_partners,
            'total_tickets' => $orders->sum('quatity'),
            'total_revenue' => $orders->sum('total_price'),
            'total_tours' => $orders->groupBy('tour_id')->count()
        ];
        return view('pages.partners.index', ['data'=>$data, 'partners'=>$partners]);
    }
    public function show($id)
    {
        $orders = Order::with('customer')->orderBy('id', 'desc')->paginate(10);

        $partner = Partner::find($id);
        return view('pages.partners.show', compact('partner','orders'));
    }
    public function store(PartnersRequest $request)
    {
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->phone = $request->phone;
        $partner->email = $request->email;
        $partner->password = $request->password;
        $partner->address = $request->address;
        $partner->job = $request->job;
        $partner->date_of_birth = $request->date_of_birth;
        $partner->active_area = $request->active_area;
        $partner->identity_card = $request->identity_card;
        $partner->payment = $request->payment;
        if($request->payment == 1){
            $partner->account_number = $request->account_number;
            $partner->bank = $request->bank;
        }
        $partner->save();
        return "Thêm CTV thành công !";
    }
    public function  edit(Request $request){
        $partner = Partner::find($request->id);
        return $this->response($partner, 200);
    }
    public function  update(PartnersRequest $request, $id){
        if($id){
            $partner = Partner::findOrFail($id);
        }
        $partner->name = $request->name;
        $partner->phone = $request->phone;
        $partner->email = $request->email;
        $partner->address = $request->address;
        $partner->job = $request->job;
        $partner->date_of_birth = $request->date_of_birth;
        $partner->active_area = $request->active_area;
        $partner->identity_card = $request->identity_card;
        $partner->payment = $request->payment;
        if($request->payment == 1){
            $partner->account_number = $request->account_number;
            $partner->bank = $request->bank;
        }
        if(!empty($request->password)){
            $partner->password = bcrypt($request->password);
        }
        $partner->save();
        return "Sửa CTV thành công !";
    }
    public function delete($id){
        $partner = Partner::find($id);
        if($partner) $partner->delete();
        return redirect()->route('admin.partners.index')->with('success', 'Xóa thành công');
    }
}
