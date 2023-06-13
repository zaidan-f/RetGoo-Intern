<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
    <link rel="stylesheet" type="text/css" href="/css/profile.css">
</head> 
      
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>
      
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                            @csrf
      
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Avatar Upload -->
                            @if (Auth::user()->avatar)
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Current Avatar') }}</label>
                                    <div class="col-md-6">
                                        <img src="/avatars/{{ Auth::user()->avatar }}" style="width:80px;margin-top: 10px;">
                                    </div>
                                </div>
                            @endif

                            <div class="row mb-3">
                                <label for="avatar" class="col-md-4 col-form-label text-md-end">{{ __('New Avatar') }}</label>
                                <div class="col-md-6">
                                    <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">
      
                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Banner Upload -->
                            @if (Auth::user()->banner)
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Current Banner') }}</label>
                                    <div class="col-md-6">
                                        <img src="/banners/{{ Auth::user()->banner }}" style="width:200px;margin-top: 10px;">
                                    </div>
                                </div>
                            @endif

                            <div class="row mb-3">
                                <label for="banner" class="col-md-4 col-form-label text-md-end">{{ __('New Banner') }}</label>
                                <div class="col-md-6">
                                    <input id="banner" type="file" class="form-control @error('banner') is-invalid @enderror" name="banner" value="{{ old('banner') }}" required autocomplete="banner">
      
                                    @error('banner')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
      
                            <div class="submit">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn-up">{{ __('Upload Profile') }}</button>
                                </div>
                            </div>
                        </form>

                        <!-- Avatar Deletion -->
                        <div class="delete">
                            <form method="POST" action="{{ route('user.profile.destroy') }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btndel">Delete Avatar</button>
                            </form>
                        </div>

                        <!-- Banner Deletion -->
                        <div class="delete">
                            <form method="POST" action="{{ route('user.profile.destroy.banner') }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btndel">Delete Banner</button>
                            </form>
                        </div>

                        <form action="/account" >
                            <div class="next">
                                <button class="btnnext" type="submit">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    
</html>
