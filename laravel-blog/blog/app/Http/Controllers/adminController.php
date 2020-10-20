<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\login;
use DB;
use Session;
session_start();


class adminController extends Controller
{
    public function kayit(Request $request){
        
        $kayit = new login(); 
        $kayit->login_isim = $request->login_isim;
        $kayit->login_email = $request->login_email;
        $kayit->login_sifre = $request->login_sifre;      
        $kayit->save();

        return redirect('/')->with('success','Basarlıyla Kayettiniz');
    }

    public function giris(Request $request){
    	$login_email=$request->login_email;
    	$login_sifre=$request->login_sifre;
    	$result=DB::table('tbl_login')
    		->where('login_email',$login_email)
    		->where('login_sifre',$login_sifre)
    		->first();
    		
    	
        if($result){
            Session::put('login_isim',$result->login_isim);
            Session::put('login_id',$result->login_id);
            return Redirect::to('/index');
        } 		
    }

    public function index(){
        $this->AdminAuthCheck();
    	return view('admin.index');
    }

    public function logout (){
        Session::flush();
        return Redirect::to('/');
    }

    public function AdminAuthCheck(){
        $login_id =Session::get('login_id');
        if($login_id){
            return;
        }else{
            return Redirect::to('/')->send();
        }
    }
}
