<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $contactEmail = SiteSetting::get('contact_email', '');
        $contactPhone = SiteSetting::get('contact_phone', '');

        return view('admin.settings.edit', compact('contactEmail', 'contactPhone'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'contact_email' => ['required', 'email', 'max:255'],
            'contact_phone' => ['required', 'string', 'max:50'],
        ]);

        SiteSetting::set('contact_email', $validated['contact_email']);
        SiteSetting::set('contact_phone', $validated['contact_phone']);

        return redirect()->route('admin.settings.edit')->with('status', 'Info kontak berhasil diperbarui.');
    }
}
