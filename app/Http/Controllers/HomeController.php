<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Product;
use App\Models\Image;
use App\Models\Review;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;
use Shopcart;

class HomeController extends Controller
{
    public static function getCount()
    {
        return DB::table('shopcarts')->where('user_id', Auth::id())->count();

    }
    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();

    }
    public static function getsetting()
    {
        
        return Setting::first();

    }

    public static function countreview($id)
    {
        return Review::where('product_id', $id)->where('status','True')->count();
    }

    public static function avrgreview($id)
    {
        return Review::where('product_id', $id)->average('rate');
    }
    
    public function index()
    {
        $setting = Setting::first();
        $slider = Product::select('id','title','image','price','slug')->where('status','=','True')->limit(4)->get();
        $new = Product::select('id','title','image','price','slug')->where('status','=','True')->limit(6)->inRandomOrder()->get();
        $all = Product::select('id','title','image','price','slug')->where('status','=','True')->limit(8)->inRandomOrder()->get();
        $best = Product::select('id','title','image','price','slug')->where('status','=','True')->limit(9)->inRandomOrder()->get();
        $data= [
            'setting' => $setting,
            'slider' => $slider,
            'new' => $new,
            'all' => $all,
            'best' => $best,
            'page' => 'home',
        ];
        return view('home.index',$data); 

    }
    
    public function product($id,$slug)
    {
        $data = Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        $reviews = Review::where('product_id',$id)->where('status','True')->get();

        return view('home.product_detail',['data'=> $data,'datalist'=> $datalist,'reviews'=> $reviews]); 
    }

    public function getproduct(Request $request)
    {
        $search=$request->input('search');
        $count = Product::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data = Product::where('title','like','%'.$search.'%')->first();
            return redirect()->route('product',['id'=> $data->id,'slug'=> $data->slug]);
        }
        else
        {
            return redirect()->route('productlist',['search'=> $search]);
        } 
    }

    public function productlist($search)
    {
        $datalist = Product::where('title','like','%'.$search.'%')->get();
        return view('home.search_products',['search'=> $search,'datalist'=>$datalist]);
    }

    public function addtocart($id)
    {
        $data = Product::find($id);
        print_r($data);
        exit();

    }

    public function categoryproducts($id,$slug)
    {
        $datalist = Product::where('category_id', $id)->where('status','=','True')->get();
        $data = Category::find($id);
        return view('home.category_products',['data'=> $data, 'datalist'=> $datalist]); 

    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=> $setting]); 

    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=> $setting]);  

    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');  
        return view('home.faq',['datalist'=> $datalist]); 

    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=> $setting]); 
    }

    public function sendmessage(Request $request)
    {
        $data = new Message;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('info', 'Mesajınız Kaydedildi.');  
    }

    public function login()
    {
        return view('admin.login');

    }


    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
                
                if (Auth::attempt($credentials)){
                    $request->session()->regenerate();
                    return redirect()->intended('admin');

                }
               
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);

        }
        else{
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

