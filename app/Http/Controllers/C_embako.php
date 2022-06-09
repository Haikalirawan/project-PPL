<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Pemesanan;
use App\Models\Product;
use App\Models\Ulasan;

use App\Models\User;


class C_embako extends Controller
{
    public function landing()
    {
        return view('landing');
    }




    public function dokumentasi()
    {
        return view('welcome');
    }



    public function registrasi()
    {
        return view('registrasi');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:5', 'max:255', 'unique:customers'],
            'email' => ['required', 'email:dns', 'unique:customers'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Customer::create($validatedData);

        return redirect('/login')->with('status', 'Registrasi berhasil! Silahkan login');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $auth = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
        $password = $auth['password'];
        $dabes = DB::table('customers')
            ->select('customers.*')
            ->where('customers.email', '=', $auth['email'])
            ->get();

        $idCustomer = $dabes['0']->{'id'};

        // Custom Authentication
        if ($dabes['0']->{'email'} === $auth['email']) {
            if (Hash::check($password, $dabes['0']->{'password'})) {
                $request->session()->regenerate();

                return redirect('/dashboard_customer/' . $idCustomer);
            }
            return back()->with('loginError', 'Login Failed!');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function dashboard_Customer($idCustomer)
    {
        return view('dashboardCustomer', [
            'title' => "Dashboard",
            'dataCustomer' => Customer::find($idCustomer),
            'dataProduk' => Product::all(),
        ]);
    }


    public function detailProduk(Request $request, Product $product)
    {
        $idCustomer = $request->input('id');
        return view('detailProduk', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),

            "detailProduk" => $product
        ]);
    }

    public function detailMitra(Request $request, User $user)
    {
        $idCustomer = $request->input('id');
        return view('detailMitra', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),

            "detailMitra" => $user
        ]);
    }


    public function pesanan(Request $request, $id)
    {
        $idCustomer = $request->input('id');
        $pemesanan = DB::table('pemesanans')
            ->join('products', 'products.id', '=', 'pemesanans.product_id')
            ->join('customers', 'customers.id', '=', 'pemesanans.customer_id')
            ->select('products.title', 'products.thumbnail', 'products.description', 'pemesanans.order_date', 'pemesanans.amount', 'pemesanans.status', 'products.price')
            ->where('pemesanans.customer_id', '=', $id)
            ->get();

        $totalHarga = DB::table('pemesanans')
            ->leftJoin('products', 'products.id', '=', 'pemesanans.product_id')
            ->where('pemesanans.customer_id', '=', $id)
            ->sum('price');


        return view('pesanan', [
            'title' => 'Pemesanan',
            'dataCustomer' => Customer::find($idCustomer),
            'totalHarga' => $totalHarga,
            'dataPesanan' => $pemesanan
        ]);
    }

    public function detailUlasan(Request $request, $id)
    {
        $idCustomer = $request->input('id');
        $ulasan = DB::table('ulasans')
            ->join('products', 'products.id', '=', 'ulasans.product_id')
            ->join('customers', 'customers.id', '=', 'ulasans.customer_id')
            ->select('ulasans.name', 'ulasans.feedback', 'customers.image')
            ->where('ulasans.product_id', '=', $id)
            ->get();

        $productId = DB::table('ulasans')
            ->join('products', 'products.id', '=', 'ulasans.product_id')
            ->select('products.id')
            ->where('ulasans.product_id', '=', $id)
            ->first();

        return view('detailUlasan', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),
            'produkId' => $productId,
            'dataUlasan' => $ulasan
        ]);
    }

    public function tambahUlasan(Request $request, $id)
    {
        $idCustomer = $request->input('id');
        // Masalah disini (Kalo ga ada ulasan ga bisa tampil)
        $productId = DB::table('ulasans')
            ->join('products', 'products.id', '=', 'ulasans.product_id')
            ->select('products.id')
            ->where('ulasans.product_id', '=', $id)
            ->first();

        return view('tambahUlasan', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),
            'produkId' => $productId
        ]);
    }



    public function storeUlasan(Request $request, $id)
    {
        $idCustomer = $request->input('id');
        $validatedData = $request->validate([
            'name' => ['required'],
            'customer_id' => ['required'],
            'product_id' => ['required'],
            'feedback' => ['required', 'min:5', 'max:255']
        ]);
        $productId = DB::table('ulasans')
            ->join('products', 'products.id', '=', 'ulasans.product_id')
            ->select('products.id')
            ->where('ulasans.product_id', '=', $id)
            ->first();
        $ulasan = DB::table('ulasans')
            ->join('products', 'products.id', '=', 'ulasans.product_id')
            ->join('customers', 'customers.id', '=', 'ulasans.customer_id')
            ->select('ulasans.name', 'ulasans.feedback', 'customers.image')
            ->where('ulasans.product_id', '=', $id)
            ->get();

        Ulasan::create($validatedData);

        return view('detailUlasan', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),
            'produkId' => $productId,
            'dataUlasan' => $ulasan
        ])->with('status', 'Ulasan berhasil ditambahkan');
    }
}
