<?php

namespace App\Http\Controllers;

class StorageController extends Controller
{
    public function serve(string $path)
    {
        $base = realpath(storage_path('app/public'));
        $fullPath = storage_path('app/public/' . $path);
        $real = realpath($fullPath);

        if ($real === false || $base === false || strncmp($real, $base, strlen($base)) !== 0) {
            abort(404);
        }

        return response()->file($real);
    }
}
