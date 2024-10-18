<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlShortenerController extends Controller
{
    public function shortenUrl(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|url',
            'alias' => 'nullable|string|max:20|alpha_num'
        ]);

        $customAlias = $validated['alias'];
        
        // If no custom alias is provided, generate a random string
        if (empty($customAlias)) {
            $customAlias = Str::random(6);
        }

        // Store the long URL and custom alias (You can save it to the database for persistence)
        
        // Check if the alias is already taken (this is where you'd query the database)
        // For now, we just simulate that by using a simple array
        $existingAliases = []; // Replace with your database query
        if (in_array($customAlias, $existingAliases)) {
            return redirect()->back()->withErrors(['alias' => 'Alias already taken. Please choose another one.']);
        }

        // Assuming you are storing the URLs in a session for demonstration
        session(['shortened_url' => url('/').'/'.$customAlias]);
        
        return redirect()->back()->with('shortened_url', url('/').'/'.$customAlias);
    }


}
