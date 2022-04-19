<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $users = Usuari::all();


        $datosUsuariosIncidentes = array();
        $datosUsuariosProvincias = array();

        foreach ($users as $userActual) {
            $incidentes = array();
            $provincies = array();

            $barcelona = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('provincies', 'cartes_trucades.provincies_id', '=', 'provincies.id')
                ->select('provincies.*')
                ->where('provincies.id', '=', 1)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $girona = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('provincies', 'cartes_trucades.provincies_id', '=', 'provincies.id')
                ->select('provincies.*')
                ->where('provincies.id', '=', 2)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $lleida = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('provincies', 'cartes_trucades.provincies_id', '=', 'provincies.id')
                ->select('provincies.*')
                ->where('provincies.id', '=', 3)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $tarragona = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('provincies', 'cartes_trucades.provincies_id', '=', 'provincies.id')
                ->select('provincies.*')
                ->where('provincies.id', '=', 4)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $foraCatalunya = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->select('cartes_trucades.*')
                ->where('cartes_trucades.fora_catalunya', '=', 1)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();



            $accident = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 1)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $assistenciaSanitaria = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 2)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $incendi = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 3)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $fuita = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 4)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $altres = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 5)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $seguretat = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 6)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $transit = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 7)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $civisme = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 8)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $mediAmbient = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 9)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();
            $meteo = Usuari::
                join('cartes_trucades', 'usuaris.id', '=', 'cartes_trucades.usuaris_id')
                ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                ->select('incidents.*')
                ->where('incidents.classes_incidents_id', '=', 10)
                ->where('usuaris.id', '=', $userActual->id)
                ->count();

            array_push($incidentes, $accident, $assistenciaSanitaria, $incendi, $fuita, $altres, $seguretat, $transit, $civisme, $mediAmbient, $meteo);
            array_push($provincies, $barcelona, $girona, $lleida, $tarragona, $foraCatalunya);
            array_push($datosUsuariosIncidentes, $incidentes);
            array_push($datosUsuariosProvincias, $provincies);
            unset($incidentes);
            unset($provincies);
        }


        $todo = $request->input('mostrarTodo');
        $buscarUsuarios = $request->input('buscarUsuarios');
        $operadores = $request->input('mostrarOperadores');
        $supervisores = $request->input('mostrarSupervisores');
        $admin = $request->input('mostrarAdmin');
        $adminTrue = false;
        $supervisoresTrue = false;
        $operadoresTrue = false;
        $todoTrue = false;

        if ($todo == 'true') {

            $usuarios = Usuari::all();
            $todoTrue = true;

        }else if ($operadores == 'true') {

            $usuarios = Usuari::where('perfils_id','=', 1)->get();
            $operadoresTrue = true;

        }else if ($supervisores == 'true') {

            $usuarios = Usuari::where('perfils_id','=', 2)->get();
            $supervisoresTrue = true;

        }else if ($admin == 'true') {

            $usuarios = Usuari::where('perfils_id','=', 3)->get();
            $adminTrue = true;

        }else if ($buscarUsuarios != 'null') {

            $usuarios = Usuari::where('id', 'LIKE', '%'.$buscarUsuarios.'%')
            ->orWhere('codi', 'LIKE', '%'.$buscarUsuarios.'%')
            ->orWhere('nom', 'LIKE', '%'.$buscarUsuarios.'%')
            ->orWhere('cognoms', 'LIKE', '%'.$buscarUsuarios.'%')
            ->get();

        }else{
            $usuarios = Usuari::all();
        }


        return view('administracion.index', compact('usuarios', 'user', 'adminTrue', 'supervisoresTrue', 'operadoresTrue', 'todoTrue', 'datosUsuariosProvincias', 'datosUsuariosIncidentes'));

    }

 public function showLogin()
 {
    // $user = Usuari::find(5);
    // $user->contrassenya=bcrypt("1234");
    // $user->save();
    return view('auth.login');
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nomUsuari = $request->input('nomUsuari');
        $nom = $request->input('nom');
        $cognoms = $request->input('cognoms');
        $password = $request->input('password');
        $tipusUsuari = $request->input('tipusUsuari');

        if ($nomUsuari == "" || $nom == "" || $cognoms == "" || $password == "") {
            $request->session()->flash('errorSubmit', 'No has rellenado todos los campos');
            $response = redirect()->action([CicleController::class, 'create'])->withInput();
            $resultado = $response;
        }else {

            $usuari = new Usuari();

            $usuari->codi = $nomUsuari;
            $usuari->contrassenya=bcrypt($password);
            $usuari->nom = $nom;
            $usuari->cognoms = $cognoms;
            $usuari->perfils_id = $tipusUsuari;

            $usuari->save();

            $resultado = redirect()->action([UsuariController::class, 'index']);
        }

        return $resultado;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function show(Usuari $usuari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request, Usuari $usuari)
    {

        $nomUsuari = $request->input('usuari');
        $nom = $request->input('nomUsuari');
        $cognoms = $request->input('cognomsUsuari');
        $tipusUsuari = $request->input('tipusUsuari');
        $password = $request->input('contraUsuari');

        $usuarioNuevo = Usuari::find($id);
        $usuarioNuevo->codi = $nomUsuari;
        $usuarioNuevo->nom = $nom;
        $usuarioNuevo->cognoms = $cognoms;
        $usuarioNuevo->perfils_id = $tipusUsuari;

        if ($password == null) {

        }else{
            $usuarioNuevo->contrassenya=bcrypt($password);
        }

        $usuarioNuevo->save();
        $usuari = Usuari::all();

        return redirect()->action([UsuariController::class, 'index']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuari $usuari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuari $usuari)
    {
        //
    }

    public function login(Request $request){
        $codi = $request->input('codi');
        $contrassenya = $request->input('contrassenya');

        $user = Usuari::where('codi', $codi)->first();

        if ($user !=null && Hash::check($contrassenya, $user->contrassenya)) {
        // if ($user !=null && $contrassenya== $user->contrassenya) {
            Auth::login($user);
            $response = redirect('/');
        }
        else {
            $request->session()->flash('error', 'Usuari o contrasenya incorrectes');
            $response = redirect('/login')->withInput();
        }

        return $response;
    }

    public function logout(){

        Auth::logout();
        return redirect('/login');
    }
}
