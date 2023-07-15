<?php

namespace App\Http\Controllers\Admin;

use App\Models\ParticipantInfo;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreParticipantInfoRequest;
use App\Http\Requests\UpdateParticipantInfoRequest;

class ParticipantInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participant_info = ParticipantInfo::first();
        return view('dashboard.participant-info.index', compact('participant_info'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParticipantInfoRequest $request)
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
                $path = public_path('uploads/images/participant/' . $imageName);
                file_put_contents($path, $imageData);

                // Delete old image if it exists
                $oldImageName = basename($image->getAttribute('src'));
                $oldImagePath = public_path('uploads/images/participant/' . $oldImageName);
                if ($oldImageName && file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }

                $image->removeAttribute('src');
                $image->setAttribute('src', '/uploads/images/participant/' . $imageName);

                $updatedImageNames[] = $imageName;
            }
        }

        $content = $dom->saveHTML();
        $event = ParticipantInfo::first();
        if ($event) {
            // Delete old images not present in the updated content
            // $oldContent = $event->content;
            // $oldDom = new \DomDocument();
            // $oldDom->loadHtml($oldContent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            // $oldImageFiles = $oldDom->getElementsByTagName('img');

            // foreach ($oldImageFiles as $oldImage) {
            //     $oldImageName = basename($oldImage->getAttribute('src'));
            //     if (!in_array($oldImageName, $updatedImageNames)) {
            //         $oldImagePath = public_path('uploads/images/event/' . $oldImageName);
            //         if ($oldImageName && file_exists($oldImagePath)) {
            //             unlink($oldImagePath);
            //         }
            //     }
            // }

            $event->update(['content' => $content]);
        } else {
            ParticipantInfo::create(['content' => $content]);
        }
        try {
            Alert::success('Success', 'Participant Info Updated Successfully');
            return back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Oops something went wrong, Please try again later');
            return back();
        }
    }
}
