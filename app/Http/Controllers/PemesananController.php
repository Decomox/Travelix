<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function submitPemesanan(Request $request)
    {
        // Logic to handle booking submission
        // You can save the data to the database or send an email, etc.

        // For now, we'll just return a success message
        return redirect('/')->with('success', 'Pemesanan berhasil!'); // Redirect with a success message
    }
}
