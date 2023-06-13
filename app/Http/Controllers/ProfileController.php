<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile');
    }

/**
 * Store the uploaded avatar and banner.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\RedirectResponse
 */
public function store(Request $request)
{
    $avatar = $request->file('avatar');
    $banner = $request->file('banner');

    if ($avatar) {
        $avatarName = time().'.'.$avatar->getClientOriginalExtension();
        $avatar->move(public_path('avatars'), $avatarName);

        Auth::user()->update(['avatar' => $avatarName]);
    } else {
        // Set default avatar if no avatar file is uploaded
        Auth::user()->update(['avatar' => 'prof.png']);
    }

    if ($banner) {
        $bannerName = time().'.'.$banner->getClientOriginalExtension();
        $banner->move(public_path('banners'), $bannerName);

        // Delete the previous banner if it is not the default banner
        $user = Auth::user();
        if ($user->banner !== 'ban.png') {
            $previousBannerPath = public_path( $user->banner);
            if (File::exists($previousBannerPath)) {
                File::delete($previousBannerPath);
            }
        }

        // Update the user's banner attribute to the new banner name
        $user->banner =$bannerName;
        $user->save();
    }

    return back()->with('success', 'Profile updated successfully.');
}



/**
 * Delete the avatar.
 *
 * @return \Illuminate\Http\RedirectResponse
 */
public function destroy()
{
    $user = Auth::user();

    // Check if the current avatar is the default avatar
    if ($user->avatar === 'prof.png') {
        return back()->with('error', 'Default avatar cannot be deleted.');
    }

    // Delete the current avatar file
    $avatarPath = public_path( $user->avatar);
    if (File::exists($avatarPath)) {
        File::delete($avatarPath);
    }

    // Set the user's avatar attribute to the default avatar
    $user->avatar = 'prof.png';
    $user->save();

    return back()->with('success', 'Avatar deleted successfully.');
}


    

    /**
 * Delete the banner.
 *
 * @return \Illuminate\Http\RedirectResponse
 */
public function destroybanner()
{
    $user = Auth::user();

    // Check if the current banner is the default banner
    if ($user->banner === 'ban.png') {
        return back()->with('error', 'Default banner cannot be deleted.');
    }

    // Delete the current banner file
    $bannerPath = public_path($user->banner);
    if (File::exists($bannerPath)) {
        File::delete($bannerPath);
    }

    // Update the user's banner attribute to default
    $user->banner = 'ban.png';
    $user->save();

    return back()->with('success', 'Banner deleted successfully.');
}

}

