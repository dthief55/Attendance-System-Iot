<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KehadiranController extends Controller
{
    public static function index_table() {
        $data_mahasiswa = Kehadiran::all();
        $user           = 'Kelompok 7';
        $latest_update  = Kehadiran::orderBy('created_at', 'desc')->first();

        if ($latest_update) {
            $formatted_timestamp = Carbon::parse($latest_update->created_at)->format('d M Y, H:i:s');
        } else {
            $formatted_timestamp = null;
        }

        return view('tables', compact('data_mahasiswa', 'formatted_timestamp', 'user'));
    }

    public static function index_welcome() {
        $data_mahasiswa = Kehadiran::all();
        $user           = 'Kelompok 7';
        $latest_update  = Kehadiran::orderBy('created_at', 'desc')->first();

        if ($latest_update) {
            $formatted_timestamp = Carbon::parse($latest_update->created_at)->format('d M Y, H:i:s');
        } else {
            $formatted_timestamp = null;
        }

        return view('welcome', compact('data_mahasiswa', 'formatted_timestamp', 'user'));
    }
}
