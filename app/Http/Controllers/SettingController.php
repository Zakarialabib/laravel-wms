<?php

namespace App\Http\Controllers;

use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\BaseController;
use App\Models\Setting;
use App\Traits\FlashMessages;


class SettingController extends BaseController
{
    use UploadAble;
    use FlashMessages;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->setPageTitle('Settings', 'Manage Settings');
        return view('settings.index');
    }

    public function store()
    {
///
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
{
    // if there is a logo update, then check if the logo is set using the config('settings.site_logo) helper function
    // if there is a logo delete it and upload the new one and set it.
   // Same thing for the favicon.
    if ($request->has('site_logo') && ($request->file('site_logo') instanceof UploadedFile)) {

        if (config('settings.site_logo') != null) {
            $this->deleteOne(config('settings.site_logo'));
        }
        $logo = $this->uploadOne($request->file('site_logo'), 'img');
        Setting::set('site_logo', $logo);

    } elseif ($request->has('site_favicon') && ($request->file('site_favicon') instanceof UploadedFile)) {

        if (config('settings.site_favicon') != null) {
            $this->deleteOne(config('settings.site_favicon'));
        }
        $favicon = $this->uploadOne($request->file('site_favicon'), 'img');
        Setting::set('site_favicon', $favicon);

    } else {

        $keys = $request->except('_token');
        // Load all settings values submitted through the form (except the site_logo and site_favicon)
        // Loop through all the settings keys and set the value to whatever submitted using the form.
        foreach ($keys as $key => $value)
        {
            Setting::set($key, $value);
        }
    }
    return $this->responseRedirectBack('Settings updated successfully.', 'success');
}
}