<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\todoModel;
use Illuminate\Http\Request;
class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = session('loggedUser');
        //use first instead of get if you want to find a specific name
        $user = User::where('user_id', $userID)->first();


        $fetch = todoModel::where('userID', $userID)->get();
        
          return view('dashboard', compact('fetch', 'user'));
        //$data = ['user'=>User::where('userID', session('loggedUser'))->first()];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userID = session('loggedUser');
        $list_item = new todoModel();
        $list_item->content = $request->listItem;
        $list_item->userID = $userID;
        $list_item->is_complete = 0;
        $list_item->save();

        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = todoModel::where('list_id', $id)->first();
        $item->delete();

        return redirect('dashboard');
    }


    public function logout(){
        auth()->logout();
        return redirect('login');
    }
}
