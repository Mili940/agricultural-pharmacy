<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {

        $orders = Order::with('products')->get();
//        $orders = Order::with('products')->where('id', 1)->get();
//dd($orders);
        return view('orders.index', compact('orders'));

    }

    public function create()
    {
        return view('orders.create', [
            'users' => User::all(),
            'products' => Product::all(),

        ]);

    }


    public function store()
    {
        DB::beginTransaction();
        try {
            $order = new Order();

            $order->price_order = request('price_order');
            $order->payed = request('payed');
            $order->note = request('note');
            $order->user_id = request('user_id');
            $order->save();
            for($i = 0; $i<count(request('product')); $i++) {
                $order->products()->attach(request('product')[$i], [
                    'quantity' => request('quantity')[$i],
                    'price' => request('price')[$i],
                    'subtotal' => request('subtotal')[$i],
                ]);
            }
            DB::commit();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            DB::rollback();
        }

        return redirect('/orders');

    }

    public function show(Order $order)
    {
        $orders = Order::with('products')->get();

        return view('orders.show', compact('order'));
    }


    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $order->update(\request(['name', 'description', 'quantity']));

        return redirect('/products');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect('/order');
    }
}
