<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
       $rules = [
            'name' => 'required|string|max:100',
            'lastName' => 'required|string|max:100',
            'company' => 'required|string|max:150',
            'email' => 'nullable|email|max:150',
            'phone' => 'required|string|max:20',
            'contactMessage' => 'required|string',
            'services' => 'required|array|min:1',
            'services.*' => 'string',
            'g-recaptcha-response' => 'required',
        ];

        $messages = [
            'name.required' => 'El nombre es obligatorio.',
            'lastName.required' => 'El apellido es obligatorio.',
            'company.required' => 'El nombre de la empresa es obligatorio.',
            'email.email' => 'Ingresa un correo electrónico válido.',
            'phone.required' => 'El teléfono es obligatorio.',
            'contactMessage.required' => 'El mensaje es obligatorio.',
            'services.required' => 'Los servicios de interés son obligatorios',
            'services.min' => 'Seleccione al menos un servicio',
            'g-recaptcha-response.required' => 'Por favor complete el captcha para continuar'
        ];

        $validated = $request->validate($rules, $messages);

        //Validating ReCaptcha
        $recaptcha_response = $validated["g-recaptcha-response"];
        $g_response = Http::asForm()->withOptions([
                'verify' => false,
            ])
            ->post("https://www.google.com/recaptcha/api/siteverify",[
                "secret" => config("services.recaptcha.secret_key"),
                "response" => $recaptcha_response,
                "remoteip" => $request->ip()
            ]
        );

        Mail::to($validated['email'])
            ->cc(env("MAIL_TO"))
            ->send(new ContactMessage($validated));

        return redirect()->route('sent');
    }
}
