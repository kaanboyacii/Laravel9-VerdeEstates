<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Comment;
use App\Models\service;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $sliderdata = Service::limit(6)->get();
        $servicelist1 = Service::limit(9)->get();
        $setting = Setting::first();
        return view('home.index', [
            'sliderdata' => $sliderdata,
            'servicelist1' => $servicelist1,
            'setting'=>$setting,
        ]);
    }
    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting'=>$setting
        ]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', [
            'setting'=>$setting
        ]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references', [
            'setting'=>$setting
        ]);
    }
    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }
    public function storeappointment(Request $request)
    {
        $data = New Appointment();
        $data->user_id = Auth::id();
        $data->service_id = $request->input('service_id');
        $data->worker_id = Auth::id();
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->price = $request->input('price');
        $data->payment = $request->input('payment');
        $data->note = $request->input('note');
        $data->status = $request->input('status');
        $data->IP = request()->IP();
        $data->save();
        return redirect()->route('service',['id'=>$request->input('service_id')])->with('success','Your appointment has been completed, Thank You');
    }
    public function services()
    {
        $data = Service::all();
        return view('home.services', [
            'data' => $data,
        ]);
    }
    public function service($id)
    {
        $data = Service::find($id);
        // $images = DB::table('images')->where('service_id',$id)->get();
        return view('home.service', [
            'data' => $data,
        ]);
    }
    public function aboutus()
    {
        return view(view: 'home.about');
    }
    public function login()
    {
        return view(view: 'admin.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();


                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'error' => 'The provided credentials do not match our'
            ]);
        } else {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
