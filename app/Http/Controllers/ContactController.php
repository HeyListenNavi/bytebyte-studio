<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'services' => 'required|array',
            'services.*' => 'string',
        ];

        $messages = [
            'name.required' => 'El nombre es obligatorio.',
            'lastName.required' => 'El apellido es obligatorio.',
            'company.required' => 'El nombre de la empresa es obligatorio.',
            'email.email' => 'Ingresa un correo electrónico válido.',
            'phone.required' => 'El teléfono es obligatorio.',
            'contactMessage.required' => 'El mensaje es obligatorio.',
            'services.required' => 'Los servicios de interés son obligatorios'
        ];

        $validated = $request->validate($rules, $messages);

        Mail::to('vero.guzmanochoa@gmail.com')
            ->send(new ContactMessage(
                $validated['name'],
                $validated['lastName'],
                $validated['company'],
                $validated['email'] ?? null,
                $validated['phone'],
                $validated['contactMessage'],
                $validated['services'],
            ));

        return redirect()->route('sent');
    }
}
