<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Send email to yourself
        Mail::raw(
            "New contact form submission:\n\n" .
            "Name: {$validated['name']}\n" .
            "Email: {$validated['email']}\n\n" .
            "Message:\n{$validated['message']}",
            function ($message) use ($validated) {
                $message->to('mrshanebarron@gmail.com')
                    ->subject('New Contact Form Submission from ' . $validated['name'])
                    ->replyTo($validated['email']);
            }
        );

        return redirect('/#contact')->with('success', 'Message sent successfully! I\'ll get back to you soon.');
    }
}
