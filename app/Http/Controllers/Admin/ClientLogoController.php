<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientLogoController extends Controller
{
    public function index()
    {
        $logos = ClientLogo::orderBy('sort_order')->get();

        return view('admin.client-logos.index', compact('logos'));
    }

    public function create()
    {
        return view('admin.client-logos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'image', 'max:2048'],
            'sort_order' => ['nullable', 'integer'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $data = [
            'name' => $validated['name'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_published' => $request->boolean('is_published'),
        ];

        if ($request->hasFile('logo')) {
            $data['logo_path'] = $request->file('logo')->store('client-logos', 'public');
        }

        ClientLogo::create($data);

        return redirect()->route('admin.client-logos.index')->with('status', 'Logo klien berhasil ditambahkan.');
    }

    public function edit(ClientLogo $clientLogo)
    {
        return view('admin.client-logos.edit', ['logo' => $clientLogo]);
    }

    public function update(Request $request, ClientLogo $clientLogo)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'image', 'max:2048'],
            'sort_order' => ['nullable', 'integer'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $data = [
            'name' => $validated['name'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_published' => $request->boolean('is_published'),
        ];

        if ($request->hasFile('logo')) {
            if ($clientLogo->logo_path) {
                Storage::disk('public')->delete($clientLogo->logo_path);
            }
            $data['logo_path'] = $request->file('logo')->store('client-logos', 'public');
        }

        $clientLogo->update($data);

        return redirect()->route('admin.client-logos.index')->with('status', 'Logo klien berhasil diperbarui.');
    }

    public function destroy(ClientLogo $clientLogo)
    {
        if ($clientLogo->logo_path) {
            Storage::disk('public')->delete($clientLogo->logo_path);
        }

        $clientLogo->delete();

        return redirect()->route('admin.client-logos.index')->with('status', 'Logo klien berhasil dihapus.');
    }
}
