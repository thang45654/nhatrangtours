<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequestTours;
use App\Http\Requests\Admin\RequestTourUpdate;
use App\Models\Tour;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class TourController extends Controller
{
    public function index()
    {

        $tours = Tour::orderBy('id', 'desc')->paginate(20);
        $viewData =[
          'tours' => $tours
        ];
        return view('pages.tours.index',$viewData);
    }

    public function create()
    {
        return view('pages.tours.create');
    }

    public function store(AdminRequestTours $request)
    {

        $tour = new Tour();
        $tour->name = $request->name;
        $tour->slug = str::slug($request->name);
        $tour->price = $request->price;
        $tour->discount_percent = $request->discount_percent;
        $tour->discount_percent_customer = $request->discount_percent_customer;
        $tour->save();
        return "Bạn đã thêm thành công";


    }


    public function getTour(Request $request)
    {

        $tour = Tour::find($request->id);


        return $this->response($tour, 200);
    }

    public function update(RequestTourUpdate $request , $id){

        $tour = Tour::find($id);

        $tour->slug = Str::slug($request->name);
        $tour->name = $request->name;
        $tour->price = $request->price;
        $tour->discount_percent = $request->discount_percent;
        $tour->discount_percent_customer = $request->discount_percent_customer;
        $tour->save();
        return "Bạn đã sửa thành công";


    }
    public function show($id)
    {
        $tour = Tour::find($id);

        return view('pages.tours.show',compact('tour'));
    }
    public function destroy($id)
    {

        $tour = Tour::findOrFail($id);

        if($tour){
            $tour->delete();
        }
        return " Xoá thành công ";

    }

}
