<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers = [
        //     '0' => [
        //         'id' => 1,
        //         'name' => 'customer1',
        //         'bod' => '1998-09-01',
        //         'email' => 'customer1@gmail.com'
        //     ],

        //     '1' => [
        //         'id' => 2,
        //         'name' => 'customer2',
        //         'bod' => '1998-09-01',
        //         'email' => 'customer2@gmail.com'
        //     ],

        //     '2' => [
        //         'id' => 3,
        //         'name' => 'customer3',
        //         'bod' => '1998-09-01',
        //         'email' => 'customer3@gmail.com'
        //     ]
        // ];



        //return view('customers.index', compact('customers'));

        //gọi view và truyền data xuống
        // cách 1
        // return view('customers.index', compact('customers'))

        //cách 2
        // return view('customers.index')->with('customers',$customers);

        $customers = Customer::all();
        //cách 3
        $params = [
            'customers' => $customers,
            'name' => 'Thuy'
        ];
        return view('customers.index', $params);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $params = [];
        return view('customers.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //in ra dữ liệu được gửi đi
        //dd($request->all());
        $roles = [
            'name'      => 'required|max:255',
            'email'     => 'required|unique:customers',
            'phone'     => 'required',
        ];
        $messages = [
            'name.required' => 'Tên là bắt buộc',
            'email.required' => 'Email là bắt buộc',
            'phone.required' => 'Phone là bắt buộc',
            'unique'   => 'Đã tồn tại'
        ];
        $validator = Validator::make($request->all(), $roles, $messages);
        //nếu thất bại => chuyển hướng về create
        if ($validator->fails()) {
            return redirect()->route('customers.create')
                ->withErrors($validator)
                ->withInput();
        }
        //Nếu thành công => lưu vào csdl
        $objCustomer = new Customer();
        $objCustomer->name = $request->name;
        $objCustomer->email = $request->email;
        $objCustomer->phone = $request->phone;
        $objCustomer->save();
        session()->flash('thong_bao', 'Lưu thành công');

        //chuyển hướng
        return redirect()->route('customers.index');
    }
    public function store_bk(Request $request)
    {
        $roles = [
            'name'      => 'required|max:255',
            'email'     => 'required|unique:customers',
            'phone'     => 'required',
        ];
        $messages = [
            'name.required' => 'Tên là bắt buộc',
            'email.required' => 'Email là bắt buộc',
            'phone.required' => 'Phone là bắt buộc',
            'unique'   => 'Đã tồn tại'
        ];
        $this->validate($request, $roles, $messages);
        $objCustomer = new Customer();
        $objCustomer->name = $request->name;
        $objCustomer->email = $request->email;
        $objCustomer->phone = $request->phone;
        $objCustomer->save();

        //chuyển hướng
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return (__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return (__METHOD__);
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
        return (__METHOD__);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return (__METHOD__);
    }
}
