<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::orderBy('sort_order')->get();

        return view('admin.solutions.index', compact('solutions'));
    }

    public function create()
    {
        return view('admin.solutions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'label' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'cta_text' => ['nullable', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['cta_text'] = $validated['cta_text'] ?: 'Pelajari Selengkapnya';

        Solution::create($validated);

        return redirect()->route('admin.solutions.index')->with('status', 'Solusi berhasil ditambahkan.');
    }

    public function edit(Solution $solution)
    {
        return view('admin.solutions.edit', compact('solution'));
    }

    public function update(Request $request, Solution $solution)
    {
        $validated = $request->validate([
            'label' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'cta_text' => ['nullable', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['cta_text'] = $validated['cta_text'] ?: 'Pelajari Selengkapnya';

        $solution->update($validated);

        return redirect()->route('admin.solutions.index')->with('status', 'Solusi berhasil diperbarui.');
    }

    public function destroy(Solution $solution)
    {
        $solution->delete();

        return redirect()->route('admin.solutions.index')->with('status', 'Solusi berhasil dihapus.');
    }
}
