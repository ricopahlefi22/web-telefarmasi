<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Exception;

class AuthUserController extends Controller
{
    function login()
    {
        return view('landing-page.login');
    }

    function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Mohon isi sesuai format email',
            'password.required' => 'Kata sandi tidak boleh kosong',
            'password.min' => 'Kata sandi minimal 8 karakter',
        ]);

        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return response()->json([
                    'code' => 200,
                    'status' => 'Berhasil!',
                    'message' => 'Selamat datang kembali, kami akan mengantarmu ke dalam sistem.',
                    'route' => '/',
                ]);
            } else {
                return response()->json([
                    'code' => 300,
                    'status' => 'Gagal!',
                    'message' => 'Kami tidak mengenali anda.',
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'code' => 500,
                'status' => 'Terjadi Kesalahan!',
                'message' => $e->getMessage(),
            ]);
        }
    }

    function register()
    {
        return view('landing-page.register');
    }

    function registerProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'address' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Mohon isi sesuai format email',
            'email.unique' => 'Email ini sudah tersedia',
            'phone_number.required' => 'Nomor handphone tidak boleh kosong',
            'address.required' => 'Alamat tidak boleh kosong',
            'password.required' => 'Kata sandi tidak boleh kosong',
            'password.min' => 'Kata sandi minimal 8 karakter',
            'confirm_password.required' => 'Konfirmasi kata sandi tidak boleh kosong',
            'confirm_password.same' => 'Kata sandi tidak sesuai',
        ]);

        try {
            $data = new User();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone_number = $request->phone_number;
            $data->address = $request->address;
            $data->password = bcrypt($request->password);
            $data->latitude = $request->latitude;
            $data->longitude = $request->longitude;
            $data->save();

            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Akun berhasil dibuat.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'code' => 500,
                'status' => 'Terjadi Kesalahan!',
                'message' => $e->getMessage(),
            ]);
        }
    }

    function forgotPassword()
    {
        return view('landing-page.forgot-password');
    }

    function forgotPasswordProcess(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
        ], [
            'phone_number.required' => 'Nomor handphone tidak boleh kosong',
        ]);

        try {
            $check = User::where('phone_number', $request->phone_number)->first();

            if (!empty($check)) {

                $checkOTP = PasswordReset::where('phone_number', $request->phone_number)->first();

                if (empty($checkOTP)) {
                    $otp = rand(123456, 999999);
                    $token = Str::random(60);
                    PasswordReset::insert([
                        'phone_number' => $request->phone_number,
                        'otp' => $otp,
                        'token' => $token,
                        'expired_at' => Carbon::now()->addMinutes(10)
                    ]);

                    $response = Http::asForm()->post('https://wa.srv2.wapanels.com/send-message', [
                        'api_key' => '0GxB0JURoGbukwlxok6sY9DKhnyjQTvy',
                        'sender' => '6285171121070',
                        'number' => $request->phone_number,
                        'message' => $otp . " adalah kode OTP anda untuk mengatur ulang kata sandi. Jangan berikan kode ini kepada siapapun. \n\n*Apotek Desta Farma*",
                    ]);

                    return response()->json([
                        'code' => 200,
                        'status' => 'OTP Terkirim!',
                        'message' => 'Mengarahkanmu ke halaman pemeriksaan OTP.',
                        'token' => $token,
                        'other' => $response,
                    ]);
                }

                return response()->json([
                    'code' => 200,
                    'status' => 'OTP Sudah Terkirim Sebelumnya!',
                    'message' => 'Mengarahkanmu ke halaman pemeriksaan OTP.',
                    'token' => $checkOTP->token,
                ]);
            }

            return response()->json([
                'code' => 500,
                'status' => 'Nomor Tidak Ditemukan!',
                'message' => 'Nomor handphone ini tidak terdaftar.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'code' => 500,
                'status' => 'Terjadi Masalah!',
                'message' => $e->getMessage(),
            ]);
        }
    }

    function otp(Request $request)
    {
        $request->validate([
            'otp' => 'required',
        ], [
            'otp.required' => 'OTP tidak boleh kosong',
        ]);

        $checkOTP = PasswordReset::where('token', $request->token)->first();

        if ($checkOTP->otp == $request->otp) {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Ayo buat kata sandi baru!',
                'route' => '/reset-password?token=' . $checkOTP->token,
            ]);
        }

        return response()->json([
            'code' => 300,
            'status' => 'Gagal!',
            'message' => 'Kode OTP yang anda masukkan salah.',
        ]);
    }

    function resetPassword(Request $request)
    {
        $check = PasswordReset::where('token', $request->token)->exists();

        if ($check) {
            $data['token'] = $request->token;
            return view('landing-page.reset-password', $data);
        }

        return abort(404);
    }

    function resetpasswordProcess(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ], [
            'password.required' => 'Kata sandi tidak boleh kosong',
            'password.min' => 'Panjang kata sandi minimal 8 karakter',
            'confirm_password.required' => 'Konfirmasi tidak boleh kosong',
            'confirm_password.same' => 'Konfirmasi kata sandi tidak sesuai',
        ]);

        try {
            $check = PasswordReset::where('token', $request->token)->first();
            if ($check) {
                $admin = User::where('phone_number', $check->phone_number)->first();
                $admin->password = bcrypt($request->password);
                $admin->save();
                $check->delete();

                return response()->json([
                    'code' => 200,
                    'status' => 'Berhasil!',
                    'message' => 'Kata sandi berhasil diperbaharui!',
                ]);
            }

            return response()->json([
                'code' => 300,
                'status' => 'Gagal!',
                'message' => 'Sesi Berakhir',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'code' => 300,
                'status' => 'Gagal!',
                'message' => $e->getMessage(),
            ]);
        }
    }

    function logout()
    {
        Auth::logout();

        return back();
    }
}
