<?php

namespace App\Http\Controllers;

use App\Models\Mole_player;
use App\Models\Mole_team;
use App\Models\Valo_team;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MoleTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Mobile Legend Registartion';
        $slot = Mole_team::sum('slot');

        if ($slot >= 64) {
            return redirect('/')->with('errors', 'Slot Penuh')->with('title');
        }

        // return view('mole.regis-mole', compact('slot', 'title'));

        return redirect('/')->with('warning', 'Mohon maaf, pendaftaran telah ditutup')->with('title');
    }

    public function list()
    {
        $title = 'List Team Mobile Legend';
        $mole = Mole_team::where('status', 'approved')->get();

        return view('mole.daftar-team', compact('mole', 'title'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_team(Request $request)
    {
        $title = 'Dashboard';
        $team = new Mole_team();

        $validator = $request->validate([
            'nama_team' => 'required|unique:mole_teams',
            'logo' =>  'required|mimes:jpg,jpeg,png',
            'bukti' => 'required|mimes:jpg,jpeg,png',
            'slot' => 'required',
        ]);

        $nama_team = $request->old('nama_team');
        $nama_logo = $request->old('logo');
        $nama_bukti = $request->old('bukti');

        $nama_logo = $request->logo->getClientOriginalName();
        $nama_bukti = $request->bukti->getClientOriginalName();

        $request->bukti->storeAs('BuktiBayar/BuktiBayarMole', $request->nama_team."_".$nama_bukti);
        $request->logo->storeAs('LogoTeam/LogoTeamMole', $request->nama_team."_".$nama_logo);

        $team->nama_team = $request->nama_team;
        $team->logo_team = $request->logo;
        $team->payment = $request->bukti;
        $team->slot = $request->slot;

        $team->save();

        $nama_team = $team->nama_team;
        $id = $team->id;


        //Ketua Tim
        $ketua = new Mole_player();

        $nama_ttd = $request->ttd->getClientOriginalName();
        $nama_foto = $request->foto->getClientOriginalName();

        $request->ttd->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama."_".$nama_ttd);
        $request->foto->storeAs('Foto/Mole/'.$nama_team, $request->nama."_".$nama_foto);
        
        $ketua->mole_team_id = $id;
        $ketua->name = $request->nama;
        $ketua->nick = $request->nick;
        $ketua->id_server = $request->idserver;
        $ketua->no_hp = $request->nohp;
        $ketua->email = $request->email;
        $ketua->alamat = $request->alamat;
        $ketua->role = 'ketua';
        $ketua->tanda_tangan = $request->ttd;
        $ketua->foto = $request->foto;
        $ketua->save();


        //Player 2
        $player2 = new Mole_player();

        $nama_ttd2 = $request->ttd2->getClientOriginalName();
        $nama_foto2 = $request->foto2->getClientOriginalName();

        $request->ttd2->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama2."_".$nama_ttd2);
        $request->foto2->storeAs('Foto/Mole/'.$nama_team, $request->nama2."_".$nama_foto2);

        $player2->mole_team_id = $id;
        $player2->name = $request->nama2;
        $player2->nick = $request->nick2;
        $player2->id_server = $request->idserver2;
        $player2->no_hp = $request->nohp2;
        $player2->email = $request->email2;
        $player2->alamat = $request->alamat2;
        $player2->role = 'anggota';
        $player2->tanda_tangan = $request->ttd2;
        $player2->foto = $request->foto2;
        $player2->save();


        //Player 3
        $player3 = new Mole_player();

        $nama_ttd3 = $request->ttd3->getClientOriginalName();
        $nama_foto3 = $request->foto3->getClientOriginalName();

        $request->ttd3->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama3."_".$nama_ttd3);
        $request->foto3->storeAs('Foto/Mole/'.$nama_team, $request->nama3."_".$nama_foto3);

        $player3->mole_team_id = $id;
        $player3->name = $request->nama3;
        $player3->nick = $request->nick3;
        $player3->id_server = $request->idserver3;
        $player3->no_hp = $request->nohp3;
        $player3->email = $request->email3;
        $player3->alamat = $request->alamat3;
        $player3->role = 'anggota';
        $player3->tanda_tangan = $request->ttd3;
        $player3->foto = $request->foto3;
        $player3->save();


        //Player 4
        $player4 = new Mole_player();

        $nama_ttd4 = $request->ttd4->getClientOriginalName();
        $nama_foto4 = $request->foto4->getClientOriginalName();

        $request->ttd4->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama4."_".$nama_ttd4);
        $request->foto4->storeAs('Foto/Mole/'.$nama_team, $request->nama4."_".$nama_foto4);

        $player4->mole_team_id = $id;
        $player4->name = $request->nama4;
        $player4->nick = $request->nick4;
        $player4->id_server = $request->idserver4;
        $player4->no_hp = $request->nohp4;
        $player4->email = $request->email4;
        $player4->alamat = $request->alamat4;
        $player4->role = 'anggota';
        $player4->tanda_tangan = $request->ttd4;
        $player4->foto = $request->foto4;
        $player4->save();


        //Player 5
        $player5 = new Mole_player();

        $nama_ttd5 = $request->ttd5->getClientOriginalName();
        $nama_foto5 = $request->foto5->getClientOriginalName();

        $request->ttd5->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama5."_".$nama_ttd5);
        $request->foto5->storeAs('Foto/Mole/'.$nama_team, $request->nama5."_".$nama_foto5);

        $player5->mole_team_id = $id;
        $player5->name = $request->nama5;
        $player5->nick = $request->nick5;
        $player5->id_server = $request->idserver5;
        $player5->no_hp = $request->nohp5;
        $player5->email = $request->email5;
        $player5->alamat = $request->alamat5;
        $player5->role = 'anggota';
        $player5->tanda_tangan = $request->ttd5;
        $player5->foto = $request->foto5;
        $player5->save();

        if($request->hasFile('ttd6') && $request->hasFile('foto6') && $request->filled('nama6') && $request->filled('nick6') && $request->filled('idserver6') && $request->filled('nohp6') && $request->filled('email6') && $request->filled('alamat6'))
        {
            //Cadangan
            $cadangan = new Mole_player();
    
            $nama_ttd6 = $request->ttd6->getClientOriginalName();
            $nama_foto6 = $request->foto6->getClientOriginalName();
    
            $request->ttd6->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama6."_".$nama_ttd6);
            $request->foto6->storeAs('Foto/Mole/'.$nama_team, $request->nama6."_".$nama_foto6);
    
            $cadangan->mole_team_id = $id;
            $cadangan->name = $request->nama6;
            $cadangan->nick = $request->nick6;
            $cadangan->id_server = $request->idserver6;
            $cadangan->no_hp = $request->nohp6;
            $cadangan->email = $request->email6;
            $cadangan->alamat = $request->alamat6;
            $cadangan->role = 'cadangan';
            $cadangan->tanda_tangan = $request->ttd6;
            $cadangan->foto = $request->foto6;
            $cadangan->save();
        }

        if($request->hasFile('ttd7') && $request->hasFile('foto7') && $request->filled('nama7') && $request->filled('nick7') && $request->filled('idserver7') && $request->filled('nohp7') && $request->filled('email7') && $request->filled('alamat7'))
        {
            //Cadangan
            $cadangan2 = new Mole_player();
    
            $nama_ttd7 = $request->ttd7->getClientOriginalName();
            $nama_foto7 = $request->foto7->getClientOriginalName();
    
            $request->ttd7->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama7."_".$nama_ttd7);
            $request->foto7->storeAs('Foto/Mole/'.$nama_team, $request->nama7."_".$nama_foto7);
    
            $cadangan2->mole_team_id = $id;
            $cadangan2->name = $request->nama7;
            $cadangan2->nick = $request->nick7;
            $cadangan2->id_server = $request->idserver7;
            $cadangan2->no_hp = $request->nohp7;
            $cadangan2->email = $request->email7;
            $cadangan2->alamat = $request->alamat7;
            $cadangan2->role = 'cadangan';
            $cadangan2->tanda_tangan = $request->ttd7;
            $cadangan2->foto = $request->foto7;
            $cadangan2->save();
        }

        return redirect('/')->with('success', 'Terimakasih sudah mendaftar, mohon tunggu invitation dari humas')->with('title');
    }

    // public function create_player(Request $request, $id)
    // {
    //     $title = 'Dashboard';
    //     //nama team
    //     $team = Mole_team::where('id', $id)->first();
    //     $nama_team = $team->nama_team;

    

    //     //Ketua Tim
    //     $ketua = new Mole_player();

    //     $nama_ttd = $request->ttd->getClientOriginalName();
    //     $nama_foto = $request->foto->getClientOriginalName();

    //     $request->ttd->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama."_".$nama_ttd);
    //     $request->foto->storeAs('Foto/Mole/'.$nama_team, $request->nama."_".$nama_foto);
        
    //     $ketua->mole_team_id = $id;
    //     $ketua->name = $request->nama;
    //     $ketua->nick = $request->nick;
    //     $ketua->id_server = $request->idserver;
    //     $ketua->no_hp = $request->nohp;
    //     $ketua->email = $request->email;
    //     $ketua->alamat = $request->alamat;
    //     $ketua->role = 'ketua';
    //     $ketua->tanda_tangan = $request->ttd;
    //     $ketua->foto = $request->foto;
    //     $ketua->save();


    //     //Player 2
    //     $player2 = new Mole_player();

    //     $nama_ttd2 = $request->ttd2->getClientOriginalName();
    //     $nama_foto2 = $request->foto2->getClientOriginalName();

    //     $request->ttd2->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama2."_".$nama_ttd2);
    //     $request->foto2->storeAs('Foto/Mole/'.$nama_team, $request->nama2."_".$nama_foto2);

    //     $player2->mole_team_id = $id;
    //     $player2->name = $request->nama2;
    //     $player2->nick = $request->nick2;
    //     $player2->id_server = $request->idserver2;
    //     $player2->no_hp = $request->nohp2;
    //     $player2->email = $request->email2;
    //     $player2->alamat = $request->alamat2;
    //     $player2->role = 'anggota';
    //     $player2->tanda_tangan = $request->ttd2;
    //     $player2->foto = $request->foto2;
    //     $player2->save();


    //     //Player 3
    //     $player3 = new Mole_player();

    //     $nama_ttd3 = $request->ttd3->getClientOriginalName();
    //     $nama_foto3 = $request->foto3->getClientOriginalName();

    //     $request->ttd3->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama3."_".$nama_ttd3);
    //     $request->foto3->storeAs('Foto/Mole/'.$nama_team, $request->nama3."_".$nama_foto3);

    //     $player3->mole_team_id = $id;
    //     $player3->name = $request->nama3;
    //     $player3->nick = $request->nick3;
    //     $player3->id_server = $request->idserver3;
    //     $player3->no_hp = $request->nohp3;
    //     $player3->email = $request->email3;
    //     $player3->alamat = $request->alamat3;
    //     $player3->role = 'anggota';
    //     $player3->tanda_tangan = $request->ttd3;
    //     $player3->foto = $request->foto3;
    //     $player3->save();


    //     //Player 4
    //     $player4 = new Mole_player();

    //     $nama_ttd4 = $request->ttd4->getClientOriginalName();
    //     $nama_foto4 = $request->foto4->getClientOriginalName();

    //     $request->ttd4->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama4."_".$nama_ttd4);
    //     $request->foto4->storeAs('Foto/Mole/'.$nama_team, $request->nama4."_".$nama_foto4);

    //     $player4->mole_team_id = $id;
    //     $player4->name = $request->nama4;
    //     $player4->nick = $request->nick4;
    //     $player4->id_server = $request->idserver4;
    //     $player4->no_hp = $request->nohp4;
    //     $player4->email = $request->email4;
    //     $player4->alamat = $request->alamat4;
    //     $player4->role = 'anggota';
    //     $player4->tanda_tangan = $request->ttd4;
    //     $player4->foto = $request->foto4;
    //     $player4->save();


    //     //Player 5
    //     $player5 = new Mole_player();

    //     $nama_ttd5 = $request->ttd5->getClientOriginalName();
    //     $nama_foto5 = $request->foto5->getClientOriginalName();

    //     $request->ttd5->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama5."_".$nama_ttd5);
    //     $request->foto5->storeAs('Foto/Mole/'.$nama_team, $request->nama5."_".$nama_foto5);

    //     $player5->mole_team_id = $id;
    //     $player5->name = $request->nama5;
    //     $player5->nick = $request->nick5;
    //     $player5->id_server = $request->idserver5;
    //     $player5->no_hp = $request->nohp5;
    //     $player5->email = $request->email5;
    //     $player5->alamat = $request->alamat5;
    //     $player5->role = 'anggota';
    //     $player5->tanda_tangan = $request->ttd5;
    //     $player5->foto = $request->foto5;
    //     $player5->save();

    //     if($request->hasFile('ttd6') && $request->hasFile('foto6') && $request->filled('nama6') && $request->filled('nick6') && $request->filled('idserver6') && $request->filled('nohp6') && $request->filled('email6') && $request->filled('alamat6'))
    //     {
    //         //Cadangan
    //         $cadangan = new Mole_player();
    
    //         $nama_ttd6 = $request->ttd6->getClientOriginalName();
    //         $nama_foto6 = $request->foto6->getClientOriginalName();
    
    //         $request->ttd6->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama6."_".$nama_ttd6);
    //         $request->foto6->storeAs('Foto/Mole/'.$nama_team, $request->nama6."_".$nama_foto6);
    
    //         $cadangan->mole_team_id = $id;
    //         $cadangan->name = $request->nama6;
    //         $cadangan->nick = $request->nick6;
    //         $cadangan->id_server = $request->idserver6;
    //         $cadangan->no_hp = $request->nohp6;
    //         $cadangan->email = $request->email6;
    //         $cadangan->alamat = $request->alamat6;
    //         $cadangan->role = 'cadangan';
    //         $cadangan->tanda_tangan = $request->ttd6;
    //         $cadangan->foto = $request->foto6;
    //         $cadangan->save();
    //     }

    //     if($request->hasFile('ttd7') && $request->hasFile('foto7') && $request->filled('nama7') && $request->filled('nick7') && $request->filled('idserver7') && $request->filled('nohp7') && $request->filled('email7') && $request->filled('alamat7'))
    //     {
    //         //Cadangan
    //         $cadangan2 = new Mole_player();
    
    //         $nama_ttd7 = $request->ttd7->getClientOriginalName();
    //         $nama_foto7 = $request->foto7->getClientOriginalName();
    
    //         $request->ttd7->storeAs('TandaTangan/Mole/'.$nama_team, $request->nama7."_".$nama_ttd7);
    //         $request->foto7->storeAs('Foto/Mole/'.$nama_team, $request->nama7."_".$nama_foto7);
    
    //         $cadangan2->mole_team_id = $id;
    //         $cadangan2->name = $request->nama7;
    //         $cadangan2->nick = $request->nick7;
    //         $cadangan2->id_server = $request->idserver7;
    //         $cadangan2->no_hp = $request->nohp7;
    //         $cadangan2->email = $request->email7;
    //         $cadangan2->alamat = $request->alamat7;
    //         $cadangan2->role = 'cadangan';
    //         $cadangan2->tanda_tangan = $request->ttd7;
    //         $cadangan2->foto = $request->foto7;
    //         $cadangan2->save();
    //     }

    //     return redirect('/')->with('success', 'Terimakasih sudah mendaftar, mohon tunggu invitation dari humas')->with('title');
    // }
}
