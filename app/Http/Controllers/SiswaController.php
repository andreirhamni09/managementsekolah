<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public static function login(){
        return view('siswa.auth.login');
    }
    
# DASHBOARD
    public static function dashboard(){
        return view('siswa.dashboard.index');
    }

    public static function daftar_nilai(){
        return view('siswa.dashboard.daftar_nilai');
    }

    public static function sertifikat(){
        return view('siswa.dashboard.sertifikat');
    }

    public static function daftar_dosen(){
        return view('siswa.dashboard.daftar_dosen');
    }
# DASHBOARD

    public static function pilih_jalur(){
        return view('siswa.pendaftaran.pilih_jalur');
    }

    public static function register(){        
        return view('siswa.pendaftaran.register');
    }

    public static function upload_dokumen(){        
        return view('siswa.pendaftaran.upload_dokumen');
    }

    public static function pembayaran(){        
        return view('siswa.dokumen.pembayaran');
    }
}
