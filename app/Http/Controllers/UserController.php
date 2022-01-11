<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == "1") {
                $request->session()->regenerate();

                return redirect()->intended('utama');
            } else if (auth()->user()->role == "2") {
                $request->session()->regenerate();

                return redirect()->intended('utama');
            } else {
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function user(Request $request)
    {
        $request->validate([
            'no_telp' => 'required',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('no_telp', $request->no_telp)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(["status" => "!ada"]);
        }
        $token = $user->createToken($request->device_name);

        return response()->json(["status" => "success", "id" => $user->id, "name" => $user->name, "no_telp" => $user->no_telp, "token" => $token->plainTextToken]);
    }


    public function regis_user(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'no_telp' => ['required'],
            'password' => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        $cek_telp = User::where('no_telp', $request->no_telp)->count();
        if ($cek_telp > 0) {
            return response([
                "message" => "duplicate"
            ], 500);
        } else {
            $insert = User::create($validatedData);
            if (!$insert) {
                return response()->json([
                    "message" => "error"
                ], 500);
            } else {
                return response()->json([
                    "message" => "success"
                ], 200);
            }
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function manajemen_admin()
    {
        // Admin role
        $data = User::where('role', "1")->get();
        return view('admin.manajemen_admin', [
            'title' => "Halaman Manajemen Admin | dakdok.id",
            'active' => "manajemen_admin",
            'data' => $data,
            'no' => 1
        ]);
    }
    public function tambah_admin()
    {
        return view('admin.tambah_admin', [
            'title' => "Halaman Tambah Admin | dakdok.id",
            'active' => "manajemen_admin",
        ]);
    }
    public function store_admin(Request $request)
    {

        $acak_password = Str::random(10);
        $password = ["password" => $acak_password];
        $kirim_password = Mail::send('mail', $password, function ($message) {
            $message->to(request()->email, 'Pendaftaran admin dakdok.id')->subject('Pendaftaran admin dakdok.id');
            $message->from('dakdok.id@gmail.com', 'dakdok.id');
        });
        User::create([
            "name" => request()->nama_admin,
            "email" => request()->email,
            "password" => bcrypt($acak_password),
            "no_telp" => request()->no_telp,
            "role" => "1"
        ]);

        return redirect('tambah_admin')->with('success', "Berhasil menambah admin baru");
        // dd($acak_password);
    }
    public function update_password_admin()
    {
        $role = auth()->user()->role;
        if ($role != "2") {
            $update = User::where('id', auth()->user()->id)->update(['password' => bcrypt(request()->password)]);

            return redirect()->back()->with('berhasil_update_password', 'Berhasil ubah password');
        } else if ($role == "2") {
            $update = User::where('id', auth()->user()->id)->update(['password' => bcrypt(request()->password)]);

            return redirect()->back()->with('berhasil_update_password', 'Berhasil ubah password');
        } else {
            return redirect()->back()->with('gagal_update_password', 'Gagal ubah password');
        }
        // dd($acak_password);
    }
    public function hapus_user_admin($id)
    {
        $hapus = User::where('id', $id)->delete();

        return redirect('manajemen_admin')->with('berhasil_hapus', 'Berhasil menghapus!');
        // dd($acak_password);
    }
}
