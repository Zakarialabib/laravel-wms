<div class="tile" id="logo">
    <form action="{{ route('settings.update') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <h3 class="tile-title">Site Logo</h3>
        <hr>
        <div class="tile-body">
            <div class="row">
                <div class="col-3">
                    @if (config('settings.site_logo') != null)
                        <img src="{{ asset('storage/'.config('settings.site_logo')) }}" id="logoImg" style="width: 80px; height: auto;">
                    @else
                        <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
                    @endif
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <label class="control-label">Site Logo</label>
                        <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="file" name="site_logo" onchange="loadFile(event,'logoImg')"/>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3">
                    @if (config('settings.site_favicon') != null)
                        <img src="{{ asset('storage/'.config('settings.site_favicon')) }}" id="faviconImg" style="width: 80px; height: auto;">
                    @else
                        <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="faviconImg" style="width: 80px; height: auto;">
                    @endif
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <label class="control-label">Site Favicon</label>
                        <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="file" name="site_favicon" onchange="loadFile(event,'faviconImg')"/>
                    </div>
                </div>
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
@push('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush