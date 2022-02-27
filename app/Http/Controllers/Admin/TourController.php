<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequestTours;
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



        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->name);

        $data['created_at'] =Carbon::now('Asia/Ho_Chi_Minh');

        $id = Tour::insertGetId($data);

        return redirect()->route('tours.index')->with('success','Bạn đã thêm thành công!!!');

    }

    public function delete($id)
        {
            $tour = Tour::find($id);
            if($tour)
            {
                $tour->delete();
            }
            return redirect()->route('tours.index')->with('success','Bạn đã xóa thành công!!!');

        }

    public function show($id)
    {
        return view('pages.tours.show');
    }
//    public function edit($id)
//    {
//        dd('13');
//        $tour = Tour::findOrFail($id);
//
//        return view('pages.tours.update',compact('tour'));
//    }

    public function update(AdminRequestTours $request , $id){

        $tour = Tour::find($id);
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->name);

        $data['created_at'] =Carbon::now('Asia/Ho_Chi_Minh');

        $tour->update($data);

        return redirect()->route('tours.index');

    }
    public function showForm(Request $request)
    {


             $tour = Tour::find($request->id);
//
            return $this->response($tour,200);


    }



}
