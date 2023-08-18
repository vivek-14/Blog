<?php

namespace App\Http\Services;

use Str;

class PostControllerServices
{

    public function storeService($validatedData)
    {
        // Add current user & generate slug
        $validatedData = [
            'user_id' => auth()->user()->id,
            'slug' => Str::slug($validatedData['title'], '-'),
            'thumbnail' => request()->file('thumbnail')->store('thumbnails', 'public')
        ];
        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['slug'] = Str::slug($validatedData['title'], '-');
        // $validatedData['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');

        return $validatedData;
    }

    public function updateService($validatedData)
    {
        if (request()->file('thumbnail') !== null) {
            $validatedData['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        }

        return $validatedData;
    }

}