<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('admin.showCategories',[ 'all' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $no_months = $_POST['no_months'];
        $no_users = $_POST['no_users'];

        DB::table('categories')->insert([
            'name' => $name,
            'price' => $price,
            'no_months' => $no_months,
            'no_users' => $no_users,

        ]);

        $data=DB::table('infos')->where('id',1)->first();
        DB::table('infos')->where('id',1)->update([
            'countCategories'=>$data->countCategories+1
        ]);
        return redirect()->route('categories.index');     
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(categories $categories,$id)
    {
        $cat = DB::table('categories')->where('id',$id)->get();
        return view('admin.editCategory',['cat' => $cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $no_months = $_POST['no_months'];
        $no_users = $_POST['no_users'];

        DB::table('categories')->where('id',$id)->update(
            ['name' => $name,
            'price' => $price,
            'no_months' => $no_months,
            'no_users' => $no_users]
        );

        return redirect()->route('categories.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(categories $categories,$id)
    {
        DB::table('categories')->where('id',$id)->delete();

        $gam3yat=DB::table('currents')->where('category_id',$id)->first();
        $count=DB::table('currents')->where('category_id',$id)->count();
        DB::table('currents')->where('category_id',$id)->delete();
        DB::table('user_currents')->where('current_id',$gam3yat->id)->delete();
        $data=DB::table('infos')->where('id',1)->first();
        DB::table('infos')->where('id',1)->update([
        'countgam3yat'=>$data->countgam3yat-$count
        ]);
        DB::table('infos')->where('id',1)->update([
        'countCategories'=>$data->countCategories-1
        ]);
        return redirect()->route('categories.index'); 

    }
    public function addAdmin(){
        DB::table('users')->insert([
            'name' => 'omar',
            'email' => 'omar@admin.com',
            'password' => Hash::make('123456789'),
            'role'=>1
        ]);

        DB::table('infos')->insert([
            'userID'=>1,
            'userType'=>'admin',
            'countCategories'=>0,
            'countgam3yat'=>0,
            'countUsers'=>0
        ]);
    }
}
