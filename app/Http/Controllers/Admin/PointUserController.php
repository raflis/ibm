<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\PointUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PointUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $point_users = PointUser::orderBy('id','desc')->paginate(30);
        return view('admin.point_users.index', compact('point_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.point_users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:point_users,email',
            'country' => 'required',
            'company' => 'required',
        ];

        $messages=[
            'email.required' => 'El correo es obligatorio',
            'email.unique' => 'Ya existe un usuario registrado con ese correo',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = PointUser::create($request->all());
            return redirect()->route('point_users.index')->with('message','Creado con éxito.')->with('typealert','success');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $point_user = PointUser::find($id);
        return view('admin.point_users.edit', compact('point_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illum   inate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:point_users,email,'.$id,
            'country' => 'required',
            'company' => 'required',
        ];

        $messages=[
            'email.required' => 'El correo es obligatorio',
            'email.unique' => 'Ya existe un usuario registrado con ese correo',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = PointUser::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('point_users.index')->with('message','Actualizado con éxito.')->with('typealert','success');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyed = PointUser::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
