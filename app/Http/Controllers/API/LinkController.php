<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenerateShortLinkRequest;
use App\Models\Link;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    public function generateShortLink(GenerateShortLinkRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $shortCode = Str::random(6);

        Link::create([
            'original_url' => $validated['url'],
            'short_code' => $shortCode,
        ]);

        return response()->json(['shortened_url' => url($shortCode)]);
    }

    public function redirect($shortCode): RedirectResponse
    {
        $link = Link::where('short_code', $shortCode)->firstOrFail();

        $link->increment('clicks');
        return redirect($link->original_url);
    }
}
