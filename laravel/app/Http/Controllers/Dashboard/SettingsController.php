<?php

namespace App\Http\Controllers\Dashboard;



use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Support\Str;

class SettingsController extends Controller
{

    public function index()
    {
        $setting = Setting::first();
        $this->authorize('view', $setting);
        return view('dashboard.settings');
    }

    public function update(Request $request ,Setting $setting)
    {
        $data = [
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'twitter' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',

        ];
       
        $validatedData = $request->validate($data);
        $setting->update($request->except('image', 'favicon', '_token'));
        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = 'images/' . $filename;
            $setting->update(['logo' => $path]);
        }
        if ($request->file('favicon')) {
            $file = $request->file('favicon');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = '/images/' . $filename;
            $setting->update(['favicon' => $path]);
        }
        return redirect()->route('dashboard.settings');
    }
}


