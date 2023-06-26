<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderStatusController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $slider = Slider::findOrFail($id);
        $status = $slider->status == 1 ? '0' : '1';
        try {            
            $slider->update(['status' => $status]);
            return response()->json(['message' => 'Slider status changed Successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again later.'], 500);
        }
    }
}
