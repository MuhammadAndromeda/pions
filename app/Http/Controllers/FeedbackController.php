<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
        ]);

        Feedback::create([
            'subject' => $request->subject,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Thank you for your feedback!');
    }
}
