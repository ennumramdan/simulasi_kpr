<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;


class SimulationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     * 
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = null;
        if (isset($request['price'])){
            $no = 0;
            $input = $request->all();
            $besar_pinjaman = $input['price'] - $input['dp'];
            $jangka = $input['waktu'] * 12;
            $bunga = $input['bunga'];

            $hutang = $besar_pinjaman;
            do {
                $no++;
                $anuitas = $this->count_credit($besar_pinjaman, $jangka, $bunga);
                $ang_bunga = $hutang*(($bunga/12)/100);
                $ang_pokok = $anuitas-$ang_bunga;
                $hutang = $hutang - $ang_pokok;
                $cicilan = $ang_bunga+$ang_pokok;

                $data[$no] = array(
                    'no' => $no,
                    'angka_bunga' => $ang_bunga,
                    'angka_pokok' => $ang_pokok,
                    'hutang' => $hutang,
                    'cicilan' => $cicilan,
                );
            } while ($no < $jangka);
        }
        return view('simulation', [
            'datas' => $data
            ]);
    }

    private function count_credit($besar_pinjaman, $jangka, $bunga){
        $bunga_bulan      = ($bunga/12)/100;
        $pembagi          = 1-(1/pow(1+$bunga_bulan,$jangka));
        $hasil            = $besar_pinjaman/($pembagi/$bunga_bulan);

        return $hasil;
    }   
}