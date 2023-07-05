<?php

namespace App\Http\Controllers\Admin;

use App\Models\History;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHistoryRequest;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $history = History::first();
        return view('dashboard.history.index', compact('history'));
    }

    public function store(StoreHistoryRequest $request)
    {
        $request->validated();
        $content = $request->content;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFiles = $dom->getElementsByTagName('img');

        // Keep track of updated image filenames
        $updatedImageNames = [];

        foreach ($imageFiles as $item => $image) {
            $data = $image->getAttribute('src');

            // Check if the data URL syntax is present
            if (strpos($data, ';') !== false) {
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $imageData = base64_decode($data);

                // Get original image extension
                $extension = '';
                $typeParts = explode('/', $type);
                if (count($typeParts) > 1) {
                    $extension = $typeParts[1];
                }

                $imageName = time() . $item . '.' . $extension;
                $path = public_path('uploads/images/history/' . $imageName);
                file_put_contents($path, $imageData);

                // Delete old image if it exists
                $oldImageName = basename($image->getAttribute('src'));
                $oldImagePath = public_path('uploads/images/history/' . $oldImageName);
                if ($oldImageName && file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }

                $image->removeAttribute('src');
                $image->setAttribute('src', '/uploads/images/history/' . $imageName);

                $updatedImageNames[] = $imageName;
            }
        }

        $content = $dom->saveHTML();
        $history = History::first();
        if ($history) {
            // Delete old images not present in the updated content
            // $oldContent = $history->content;
            // $oldDom = new \DomDocument();
            // $oldDom->loadHtml($oldContent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            // $oldImageFiles = $oldDom->getElementsByTagName('img');

            // foreach ($oldImageFiles as $oldImage) {
            //     $oldImageName = basename($oldImage->getAttribute('src'));
            //     if (!in_array($oldImageName, $updatedImageNames)) {
            //         $oldImagePath = public_path('uploads/images/history/' . $oldImageName);
            //         if ($oldImageName && file_exists($oldImagePath)) {
            //             unlink($oldImagePath);
            //         }
            //     }
            // }

            $history->update(['content' => $content]);
        } else {
            History::create(['content' => $content]);
        }
    }
}
