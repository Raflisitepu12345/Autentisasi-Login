<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

// ...semua route kamu sebelumnya tetap

// GET /booking → Menampilkan halaman form pemesanan
Route::get('/booking', function () {
    return view('booking'); // pastikan ada file resources/views/booking.blade.php
})->name('booking');

// POST /booking → Memproses form pemesanan
Route::post('/booking', function (Request $request) {
    // Validasi form booking
    $request->validate([
        'nama' => 'required|string|max:100',
        'tanggal' => 'required|date',
        'gunung' => 'required|string',
        // Tambahkan validasi lain sesuai kebutuhan form kamu
    ]);

    // Simulasi proses booking
    // Kamu bisa simpan ke database jika punya model Booking

    return back()->with('status', 'Pemesanan berhasil dikirim!');
})->name('booking.process');


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/inweb', function () {
    return view('inweb');
})->name('inweb');

// GET /login
Route::get('/login', function () {
    return view('login');
})->name('login');

// POST /login
Route::post('/login', function (Request $request) {
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $user = User::where('username', $request->username)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        // Simulasi login berhasil
        return redirect()->route('inweb')->with('status', 'Login berhasil!');
    } else {
        return back()->withErrors(['username' => 'Username atau password salah']);
    }
})->name('login.process');

// GET /signup
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

// POST /signup
Route::post('/signup', function (Request $request) {
    $request->validate([
        'fullname' => 'required',
        'email' => 'required|email|unique:users,email',
        'username' => 'required|unique:users,username',
        'password' => 'required',
        'confirm-password' => 'required|same:password',
        'terms' => 'accepted',
    ]);

    User::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'username' => $request->username,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('status', 'Pendaftaran berhasil! Silakan login.');
})->name('signup.process');

// GET /forgot-password
Route::get('/forgot-password', function () {
    return view('forgot');
})->name('forgot');

// POST /forgot-password
Route::post('/forgot-password', function (Request $request) {
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    // Simulasi kirim link reset
    return back()->with('status', 'Link reset sudah dikirim ke email.');
})->name('forgot-password');



