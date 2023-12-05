<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $artists = Artist::with('user')->where('status_num', '=', 1)->get();
        return view('admin.index', ['artist' => $artists]);
    }
    public function OrderNew()
    {
        $artists = Artist::with('user')->where('status_num', '=', 0)->get();
        return view('admin.ordersNew', ['artist' => $artists]);
    }
    public function OrderDeny()
    {
        $artists = Artist::with('user')->where('status_num', '=', 2)->get();
        return view('admin.ordersDeny', ['artist' => $artists]);
    }
    public function OrderAccept()
    {
        $artists = Artist::with('user')->where('status_num', '=', 1)->get();
        return view('admin.ordersAccept', ['artist' => $artists]);
    }
    public function AcceptApp(Artist $id){
        $id->fill(['status_num' => 1]);
        $id->save();
        return redirect("admin")->with("succes", 'Успешное обновление');
    }
    public function DenayApp(Artist $id){
        $id->fill(['status_num' => 2]);
        $id->save();
        return redirect("admin")->with("succes", 'Успешное обновление');
    }
    public function Delete(Artist $id)
    {
        $id->delete();
        return redirect('admin')->with("succes", 'Артист удален');
    }
}
