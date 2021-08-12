<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{

    public function homeView ()
    {
        return view('home');
    }

    public function downloadCatalogue (Request $request)
    {
        $path = public_path('files/BrochureCatalogoHapec.pdf');

        $filename = 'BrochureCatalogoHapec.pdf';

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
        // return response()
        //     ->download($catalogue_path);
    }

    public function contactView ()
    {
        return view('contact');
    }

    public function contactSend (Request $request)
    {
        try {
            
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:10',
                'email' => 'required|min:6',
                'phone' => 'required|min:10|max:20',
                'message' => 'required|min:20',
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->route('contact.view')
                    ->with('error', '¡Oops! Los datos no son válidos.');
            }
            $data = [ // data to render on view
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
                'date' => (new Carbon)->isoFormat('D/M/YYYY H:m'),
            ];

            SendMailJob::dispatch(
                'emails.contact', // view
                $data,
                env('MAIL_FROM_ADDRESS'), // from email
                env('MAIL_FROM_NAME'), // from name
                'Nuevo Mensaje en Hapec', // subject text
                env('NOTIFICATION_EMAIL'), // mail recipient
            );

            return redirect()
                ->route('contact.view')
                ->with('success', '¡Gracias por tu mensaje! En breve te responderémos.');

        } catch (\Throwable $th) {
            
            return redirect()
                ->route('contact.view')
                ->with('error', '¡Oops! Error al enviar el mensaje.');
        }
    }
    
}
