<?php

namespace App\Http\Controllers;

use App\Models\CustomerDB3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\PesananDB3;
use App\Models\UsersDB3;
use App\Models\LayananDB3;


class AdminController extends Controller
{
    // Menampilkan halaman login admin
    public function showLogin()
    {
        return view('admin.login');
    }

    // Proses login admin
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->route('admin.beranda')->with('success', 'Selamat datang kembali!');
        }

        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }
    

    public function beranda()
    {

        $users = UsersDB3::all();
        $totalUsers = UsersDB3::count();
        $totalLayanan = LayananDB3::count(); // Menambahkan total layanan
        $totalPesanan = PesananDB3::count(); 
        $pendingOrders        = PesananDB3::where('status', 'pending')->count();
        $terimaOrders         = PesananDB3::where('status', 'Terima orderan')->count();
        $menyikatOrders       = PesananDB3::where('status', 'Proses Menyikat')->count();
        $pengeringanOrders    = PesananDB3::where('status', 'Proses Pengeringan')->count();
        $cleaningOrders       = PesananDB3::where('status', 'Proses Cleaning')->count();
        $mewangikanOrders     = PesananDB3::where('status', 'Proses Mewangikan')->count();
        $packingOrders        = PesananDB3::where('status', 'Proses Packing')->count();
        $dikirimOrders        = PesananDB3::where('status', 'dikirim')->count();
        $selesaiOrders        = PesananDB3::where('status', 'selesai')->count();
        $diprosesOrders = PesananDB3::where('status', 'diproses')->count(); // Ambil semua layanan dari database
        $layanans = LayananDB3::all();
        $pesanans = PesananDB3::all();

        return view('admin.beranda', compact('users','totalUsers', 'totalLayanan','totalPesanan','pendingOrders',
        'terimaOrders','menyikatOrders','pengeringanOrders','cleaningOrders','mewangikanOrders',
        'packingOrders','dikirimOrders', 'selesaiOrders', 'diprosesOrders', 'layanans', 'pesanans'));
    }


    

    // Menampilkan profil admin
    public function profile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('admin'));
    }

    // Logout admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Anda telah logout.');
    }


    // Menampilkan daftar pengguna
    public function pengguna()
    {
        $users = UsersDB3::all();
        return view('admin.pengguna', compact('users'));
    }

    // Menampilkan daftar pesanan
    public function pesanan()
    {
        $pesanans = PesananDB3::all();
        return view('admin.pesanan', compact('pesanan'));
    }

    public function create()
{
    return view('admin.tambah_pengguna');
}


public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:usersdb3,email',
        'phone_number' => 'nullable|string|max:20',
        'password' => 'required|string|min:6',
    ]);

    UsersDB3::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone_number' => $validated['phone_number'],
        'password' => bcrypt($validated['password']),
    ]);

    return redirect()->route('admin.pengguna')->with('success', 'Pengguna berhasil ditambahkan.');
}


    public function edit($id)
    {
        $user = UsersDB3::findOrFail($id);
        return view('admin.edit_pengguna', compact('user'));
    }


    public function destroy($id)
{
    $user = UsersDB3::findOrFail($id);
    $user->delete();

    return redirect()->route('admin.beranda')->with('success', 'Pengguna berhasil dihapus');
}


// mengedit users

public function update(Request $request, $id)
{
    $user = UsersDB3::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8',
    ]);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('admin.pengguna')->with('success', 'Data pengguna berhasil diperbarui.');
}

public function statistik()
{
    $totalUsers = CustomerDB3::count();
    $totalLayanan = LayananDB3::count();
    $totalPesanan = PesananDB3::count(); // <-- Tambahkan ini
    $penggunaTerbaru = CustomerDB3::latest()->take(5)->get();

    return view('admin.statistik.detail', compact('totalUsers', 'totalLayanan', 'totalPesanan', 'penggunaTerbaru'));
}


}
