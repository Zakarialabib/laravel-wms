<div class="tile" id="analytics">
    <form action="{{ route('settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Analytics</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="google_analytics">Google Analytics Code</label>
                <textarea
                    class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" 
                    rows="4"
                    placeholder="Enter google analytics code"
                    id="google_analytics"
                    name="google_analytics"
                >{!! Config::get('settings.google_analytics') !!}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="facebook_pixels">Facebook Pixel Code</label>
                <textarea
                    class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" 
                    rows="4"
                    placeholder="Enter facebook pixel code"
                    id="facebook_pixels"
                    name="facebook_pixels"
                >{{ Config::get('settings.facebook_pixels') }}</textarea>
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>