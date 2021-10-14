<?php

namespace App\Http\Controllers;

use App\Models\DailyMail;
use App\Models\France24;
use App\Models\Hespress;
use App\Models\LaVieEco;
use App\Models\R360Model;
use App\Models\RtModel;
use App\Models\SkyNews;
use App\Models\Telegraph;
use App\Models\TelQuel;
use App\Models\TheIndependant;
use App\Models\TodaysModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminSpaceController extends Controller
{

    public function Add(){
        return view('admin.AddRssadmin');
    }

    public function Hesspress_all(){
        $articles = Hespress::latest()->paginate(3);
        return view('admin.Journals.adminhesspress',compact('articles'));
    }
    public function Hesspress_delete($id){
        $delete = Hespress::find($id)->delete();
        return Redirect()->back();
    }
    public function Telquel_all(){
        $articles = TelQuel::latest()->paginate(3);
        return view('admin.Journals.admintelquel',compact('articles'));
    }
    public function Telquel_delete($id){
        $delete = TelQuel::find($id)->delete();
        return Redirect()->back();
    }
    public function France_all(){
        $articles = France24::latest()->paginate(3);
        return view('admin.Journals.franceadmin',compact('articles'));
    }
    public function France_delete($id){
        $delete = France24::find($id)->delete();
        return Redirect()->back();
    }
    public function R360_all(){
        $articles = R360Model::latest()->paginate(3);
        return view('admin.Journals.adminle360',compact('articles'));
    }
    public function R360_delete($id){
        $delete = R360Model::find($id)->delete();
        return Redirect()->back();
    }
    public function today_all(){
        $articles = TodaysModel::latest()->paginate(3);
        return view('admin.Journals.admintoday',compact('articles'));
    }
    public function today_delete($id){
        $delete = TodaysModel::find($id)->delete();
        return Redirect()->back();
    }public function lavieco_all(){
    $articles = LaVieEco::latest()->paginate(3);
    return view('admin.Journals.adminlavieco',compact('articles'));
}
    public function lavieco_delete($id){
        $delete = LaVieEco::find($id)->delete();
        return Redirect()->back();
    }
    public function dailymail_all(){
    $articles = DailyMail::latest()->paginate(3);
    return view('admin.Journals.admindailymail',compact('articles'));
}
    public function dailymail_delete($id){
        $delete = DailyMail::find($id)->delete();
        return Redirect()->back();
    }
    public function rt_all(){
        $articles = RtModel::latest()->paginate(3);
        return view('admin.Journals.adminrt',compact('articles'));
    }
    public function rt_delete($id){
        $delete = RtModel::find($id)->delete();
        return Redirect()->back();
    } public function independant_all(){
    $articles = TheIndependant::latest()->paginate(3);
    return view('admin.Journals.adminindependant',compact('articles'));
}
    public function independant_delete($id){
        $delete = TheIndependant::find($id)->delete();
        return Redirect()->back();
    } public function skynews_all(){
    $articles = SkyNews::latest()->paginate(3);
    return view('admin.Journals.adminskynews',compact('articles'));
}
    public function skynews_delete($id){
        $delete = SkyNews::find($id)->delete();
        return Redirect()->back();
    } public function telegraph_all(){
    $articles = Telegraph::latest()->paginate(3);
    return view('admin.Journals.admintelegraph',compact('articles'));
}
    public function telegraph_delete($id){
        $delete = Telegraph::find($id)->delete();
        return Redirect()->back();
    }
}
