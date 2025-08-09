<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    /**
     * Send contact message
     */
    public function send(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', __('Veuillez corriger les erreurs dans le formulaire.'));
        }

        try {
            // Create message data
            $messageData = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'sent_at' => now(),
            ];

            // Send email notification (you can configure this later)
            // Mail::to('justin.fimbo@uzashop.com')->send(new ContactMessage($messageData));

            return back()
                ->with('success', __('Votre message a été envoyé avec succès ! Je vous répondrai dans les plus brefs délais.'));
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', __('Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer.'));
        }
    }
}
