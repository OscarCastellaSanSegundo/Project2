<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
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



        $todo = $request->input('mostrarTodo');
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

        }else{
            $usuarios = Usuari::all();
        }


        return view('administracion.index', compact('usuarios', 'user', 'adminTrue', 'supervisoresTrue', 'operadoresTrue', 'todoTrue' ));

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
