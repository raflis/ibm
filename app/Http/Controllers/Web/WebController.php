<?php

namespace App\Http\Controllers\Web;

use DB;
use Mail;
use Validator;
use App\Models\Record;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class WebController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        $fin = new Carbon('2022-09-16');
        $hoy = \Carbon\Carbon::now();
        $cantidadDias = $hoy->diffInDays($fin) + 1;

        return view('web.index', compact('agent', 'cantidadDias'));
    }

    public function postContacto(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'company' => 'required',
            'position' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese su nombre',
            'lastname.required' => 'Ingrese su apellido',
            'company.required' => 'Ingrese su empresa',
            'position.required' => 'Ingrese su cargo',
            'telephone.required' => 'Ingrese su teléfono',
            'email.required' => 'Ingrese su correo',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            return response()->json(['success_fail' => false]);
        else:
            $record = Record::create($request->all());
            if($record):
                $email = $request->email;
                $record_email = $request->all();
                Mail::send('web.emails.email', $record_email, function($message) use ($email)
                {
                    $message->to($email)->subject('¡Gracias por registrarte a la transmisión en vivo del IBM INNOVATION SUMMIT 2022!');    
                });
                return response()->json(['success' => true]);
            else:
                return response()->json(['success' => false]);
            endif;
        endif;
    }

    public function gracias()
    {
        return view('web.gracias');
    }

}
