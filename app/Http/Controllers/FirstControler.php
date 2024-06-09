<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\CatagoryModel;
use App\Models\ImageModel;
use App\Models\UserModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FirstControler extends Controller
{
    public function ViewController()
    {
        return view('login');
    }

    public function Userlogout(Request $request)
    {
        Session::flush();
        Auth::logout();
        // remove all the sessionIds related to the current user
        return redirect()->route('gallery');
    }


    public function LoginPost(Request $res)
    {
        // return view('login');
        // dd($res->all());
        $email = $res->email;
        $password = $res->password;
        // echo $email;
        $data = UserModel::where('email', $email)->first();
        // dd($data);
        // echo $data->count();
        if ($data) {
            // echo "Success </br>";
            // echo $data->name;
            if (Hash::check($password, $data->password)) {
                $res->session()->put('name', $data->name);
                $ddt = ['email' => $email, 'password' => $password];
                Auth::guard('UserGuard')->attempt($ddt);
                return redirect()->route('gallery');
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
    public function dashboard()
    {
        return view('dashboard');
    }
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $res1)
    {
        $validated = $res1->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user',
            'phone' => 'required',
            'password' => 'required',
            'gender' => 'required',
        ]);
        $data = UserModel::create([
            'name' => $res1->name,
            'email' => $res1->email,
            'phone' => $res1->phone,
            'password' => $res1->password,
            'gender' => $res1->gender
        ]);
        if ($data) {
            Mail::to($res1->email)->send(new WelcomeMail($res1->name, $res1->email, $res1->password));
            return redirect()->route('login')->with('success', 'Register successsful');
        } else {
            return redirect()->route('login')->with('error', 'Register unsuccesssful');
        }
        //dd($res1->all());

    }

    public function gallery()
    {
        $image_data = CatagoryModel::orderBY('id', 'ASC')->get();
        return view('main', compact(['image_data']));
    }

    public function animal_inner($id)
    {
        $inner_data = ImageModel::where('catagory', $id)->get();
        return view('animal_inner', compact(['inner_data']));
    }

    public function LoginApi(Request $res)
    {
        $email = $res->email;
        $password = $res->password;

        $data = UserModel::where('email', $email)->first();
        if ($data) {

            if (Hash::check($password, $data->password)) {
                //    $tokan=$data->createToken('API Token')->accessToken;
                $token = $data->createToken('API Token')->accessToken;
                return response(['info' => $data, 'token' => $token, 'status' => true]);
            } else {
                return response(['error' => 'Password not match', 'status' => false]);
            }
        } else {
            return response(['error' => 'User Not Found.', 'status' => false]);
        }
    }
    public function RegisterApi(Request $res1)
    {
        // $validated = $res1->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:user',
        //     'phone' => 'required',
        //     'password' => 'required',
        //     'gender' => 'required',
        // ]);
        $data_find = UserModel::where('email', $res1->email)->first();
        if ($data_find) {
            return response(['msg' => 'Data Already Exist.', 'status' => false]);
        } else {
            $data = UserModel::create([
                'name' => $res1->name,
                'email' => $res1->email,
                'phone' => $res1->phone,
                'password' => Hash::make($res1->password),
                'gender' => $res1->gender
            ]);
            if ($data) {
                Mail::to($res1->email)->send(new WelcomeMail($res1->name, $res1->email, $res1->password));

                return response(['info' => $data, 'msg' => 'Registration Successful.', 'status' => true]);
            } else {
                return response(['error' => 'Registration Unsuccessful.', 'status' => false]);
            }
        }
    }
    public function UserApiDashboard($userid)
    {
        if (Auth::guard('UserAPI')->user()) {
            try{
            $data=UserModel::where('id',$userid)->first();
            if($data){
                return response([
                    'info' => $data,
                    'msg' => 'Registration Successful.',
                    'status' => 1
                ]);
            }
            else{
                return response([
                    'info' => null,
                    'msg' => 'No Record found.',
                    'status' => 0
                ]);
            }
            

        }catch(Exception $e){
            return response([
                'info' => null,
                'msg' => $e->getMessage(),
                'status' => 2
            ]);
        }

        } else {
            return response([
                'info' => null,
                'msg' => 'Unauthorized.',
                'status' => 2
            ]);
        }
    }

    public function like($id)
{
    $picture =ImageModel ::find($id)->increment('likes');

    return back();
}

   
}
