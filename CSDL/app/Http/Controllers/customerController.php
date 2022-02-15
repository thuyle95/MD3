<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$customers = DB::table('customers')->get();
        $customers = Customer::all();

        return view('customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DB::table('customers')->insert([
        //     'name' => 'Bien Thuy',
        //     'phone' => '0356609985',
        //     'email' => 'thuyle2995@gmail.com'
        // ]);
        // $customers = new Customer;
        // $customers->name = 'Thuy Le';
        // $customers->phone = '0356609985';
        // $customers->email = '22445@gmail.com';
        // $customers->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $customer = Customer::where('id', 1)
            ->where('email', '=', 'thuyle2995@gmail.com')
            ->first();
        return view('customers.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //     $customer = DB::table('customers')
        //           ->where('id', 1)
        //           ->update(['name' => 'Thuy Ka', 'phone' => '035566327', 'email' => 'thuyka225@gmail.com']);
        $customers = Customer::find(1);
        $customers->name = 'Ka';
        $customers->phone = '0999999';
        $customers->email = 'thuyka225@gmail.com';
        $customers->save();
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
    public function destroy()
    {
        //$deleted = DB::table('customers')->where('id', '=', 1)->delete();
        $deleted = Customer::find(1);
        $deleted->delete();
    }
}
