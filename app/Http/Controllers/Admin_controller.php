<?php

namespace App\Http\Controllers;

use App\Models\ImageModel;
use App\Models\Adminmodel;
use App\Models\CatagoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class Admin_controller extends Controller
{
    public function Adminlogin()
    {
        return view('dashboard.adminlogin');
    }

    public function AdminloginPost(Request $res)
    {
        // return view('login');
        // dd($res->all());
        $email = $res->email;
        $password = $res->password;
        // echo $email;
        $data = Adminmodel::where('email', $email)->first();
        // dd($data);
        // echo $data->count();
        if ($data) {
            if (Hash::check($password, $data->password)) {
                $res->session()->put('name', $data->name);
                $ddt = ['email' => $email, 'password' => $password];
                Auth::guard('admin')->attempt($ddt);
                return redirect()->route('admindashboard');
            } else {
                //echo "Unsuccess";
                session::flash('error', "unsuccess");
                return redirect()->back();
            }
        } else {
            session::flash('error', "user not found....");
            return redirect()->back();
        }
    }


    public function profile_view()
    {
        return view('dashboard.adminprofile');
    }
    public function adminProfile_edit(Request $res1)
    {
        // $request->validate([
        //         'title' => 'required',
        //         'sub_title' => 'required',
        //         'description' => 'required'
        // ]);
        $id = $res1->id;
        $name = $res1->name;
        $email = $res1->email;
        $phone = $res1->phone;
        $password = $res1->password;
        $gender = $res1->gender;
        
        
        $item =Adminmodel::find($id);
        $item->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => $password,
            'gender' => $gender


        ]);


        if ($item) {
            return redirect()->route('manage')->with('success', 'User updated Successfully');
        } else {
            return redirect()->route('manage')->with('error', 'User updated Unsuccessful');
        }
    }
    public function admindashboard()
    {
        $image_data = ImageModel::orderBY('id', 'DESC')->get();
        return view('dashboard.admindashboard', compact(['image_data']));

    }
    public function Addimage()
    {
        $catagory=CatagoryModel::orderBy('id','DESC')->get();
        return view('image.Addimage',compact('catagory'));
    }
    public function Addimageaction(Request $res1)
    {
        $validated = $res1->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'image' => 'required'
            // 'catagory'=>'required'
        ]);
        $file = $res1->file('image');
        $image_name = $file->getClientOriginalName(); //Get the File Name
        $image_type = $file->getClientOriginalExtension(); //Get the File Extension
        $coustom_name = time() . "." . $image_type;
        $data = ImageModel::create([
            'title' => $res1->title,
            'sub_title' => $res1->sub_title,
            'description' => $res1->description,
            'catagory'=>$res1->catagory,
            'image' => $coustom_name
        ]);
        if ($data) {
            $res1->image->move(public_path('image'), $coustom_name);
            return redirect()->route('manage')->with('success', 'image added successsfully');
        } else {
            return redirect()->route('manage')->with('success', 'unsuccess to add image');
        }
    }
    public function manage()
    {
        $image_data = ImageModel::orderBY('id', 'DESC')->get();
        return view('dashboard.manage', compact(['image_data']));
    }

    public function destroy($id)
    {

        $blog = ImageModel::find($id);
        $blog->delete();
        if ($blog) {
            return redirect()->route('manage')->with('success', 'User Deleted Successfully');
        } else {
            return redirect()->route('manage')->with('error', 'Here some problem to Delete user');
        }
    }
    public function image_view($id)
    {
        $item = ImageModel::orderBy('id','DESC')->first();
        $catagory=CatagoryModel::orderBy('id','DESC')->get();
        return view('image.update_image', compact('item','catagory'));
    }

    public function image_update(Request $request)
    {
        // $request->validate([
        //         'title' => 'required',
        //         'sub_title' => 'required',
        //         'description' => 'required'
        // ]);
        $id = $request->id;
        $title = $request->title;
        $sub_title = $request->sub_title;
        $description = $request->description;
        $catagory = $request->catagory;
        $old_image = $request->old_image;
        $filename = '';
        $file = $request->file('image');
        if ($file != '') {
            $filename = time() . "." . $file->getClientOriginalExtension();
        }

        $item = ImageModel::find($id);
        $item->update([
            'title' => $title,
            'sub_title' => $sub_title,
            'description' => $description,
            'catagory'=> $catagory,

            'image' => $filename ? $filename : $old_image

        ]);


        if ($item) {
            if ($filename != '') {
                $old_image = public_path('image') . $old_image;
                if (file_exists($old_image)) {
                    \File::delete($old_image);
                }
                $request->image->move(public_path('image'), $filename);
            }
            return redirect()->route('manage')->with('success', 'User updated Successfully');
        } else {
            return redirect()->route('manage')->with('error', 'User updated Unsuccessful');
        }
    }

    public function Addcatagory()
    {
        $catagory = CatagoryModel::orderBY('id', 'DESC')->get();
        return view('image.addcatagory', compact(['catagory']));
    }

   
    public function Addcatagoryaction(Request $res1)
    {
        $validated = $res1->validate([
            'catagory_name' => 'required',
            'image' => 'required'
            // 'catagory'=>'required'
        ]);
        $file = $res1->file('image');
        // $image_name = $file->getClientOriginalName(); //Get the File Name
        $image_type = $file->getClientOriginalExtension(); //Get the File Extension
        $coustom_name = time() . "." . $image_type;
        $data =CatagoryModel::create([
            'catagory_name'=>$res1-> catagory_name,
            'image' => $coustom_name
        ]);
        if ($data) {
            $res1->image->move(public_path('image'), $coustom_name);
            return redirect()->route('all_catagory')->with('success', 'Catagory added successsfully');
        } else {
            return redirect()->route('all_catagory')->with('error', 'unable to add catagory');
        }
    }

    public function Allcatagory()
    {
        $catagory= CatagoryModel::orderBY('id', 'DESC')->get();
        return view('image.allcatagory', compact(['catagory']));
    }

    public function destroy_catagory($id)
    {

        $blog =CatagoryModel::find($id);
        $blog->delete();
        if ($blog) {
            return redirect()->route('all_catagory')->with('success', 'Catagory Deleted Successfully');
        } else {
            return redirect()->route('all_catagory')->with('error', 'Here some problem to Delete catagory');
        }
    }
}
