<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use RealRashid\SweetAlert\Facades\Alert;

use Alert;

use App\Models\Catagory;


class AdminController extends Controller
{
    public function Admin()
    {
        if(Auth::user()->usertype == 'admin')
        {
            return view('admin.dashboard');
        }else{
            return redirect('/login');
        }
    }

    public function Catagory()
    {
        $data=Catagory::all();
        return view('admin.catagory',compact('data'));
    }

    public function add_catagory( Request $request)
    {
        $data=new Catagory;

        $data->catagory=$request->catagory;

        $data->save();
        Alert::success('Catagory Add', 'Successfully');

        return redirect()->back();
    }

    public function edit_catagory($id)
    {
        $data=Catagory::find($id);
      return view('admin.edit-catagory',compact('data'));
    }

    public function edit_catagory_confirm(Request $request, $id)
    {
        $data=Catagory::find($id);

        $data->catagory=$request->catagory;

        $data->save();
        Alert::success('Catagory Edit', 'Successfully');

        return redirect('/catagory');
    }

    public function delete_catagory($id)
    {
        $data=Catagory::find($id);

        $data->delete();
        Alert::success('Catagory Deleted', 'Successfully');
        return redirect()->back();
    }

}
