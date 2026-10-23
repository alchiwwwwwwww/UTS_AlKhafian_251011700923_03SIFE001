<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CameraController extends Controller
{
    public function index(Request $request): View
    {
        $types = Camera::query()->select('type')->distinct()->orderBy('type')->pluck('type');

        $cameras = Camera::query()
            ->when($request->filled('type'), fn ($query) => $query->where('type', $request->input('type')))
            ->when($request->filled('q'), function ($query) use ($request) {
                $term = $request->string('q')->toString();
                $query->where(function ($search) use ($term) {
                    $search->where('brand', 'like', "%{$term}%")
                        ->orWhere('model', 'like', "%{$term}%")
                        ->orWhere('type', 'like', "%{$term}%");
                });
            })
            ->orderBy('brand')
            ->orderBy('model')
            ->get();

        return view('cameras.index', compact('cameras', 'types'));
    }

    public function show(Camera $camera): View
    {
        return view('cameras.show', compact('camera'));
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function rentalGuide(): View
    {
        return view('pages.rental-guide');
    }

    public function faq(): View
    {
        return view('pages.faq');
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'contactEmail' => config('store.email'),
        ]);
    }
}

