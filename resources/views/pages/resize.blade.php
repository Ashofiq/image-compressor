@extends('home')

@section('title', 'Resize Image')

@section('content')

    <div class="col-12">
    @error('width')
        <div class="alert alert-danger text-center">{{ $message }}</div>
    @enderror

    @error('height')
        <div class="alert alert-danger text-center">{{ $message }}</div>
    @enderror
        <form method="post" action="{{ route('resizer.post') }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Resize Image</h3>
                </div>
                <div class="card-body">
                    
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-2 ps-5"><input name="width" type="text" class="form-control @error('width') is-invalid @enderror" value="{{ old('width') }}" placeholder="width"></div>
                            <div class="col-2 text-center pt-2">X</div>
                            <div class="col-2 pe-5"><input name="height" type="text" class="form-control @error('height') is-invalid @enderror" value="{{ old('height') }}" placeholder="height"></div>
                            <div class="col-3"></div>
                        </div>
                        <div class="upload__box">
                            <div class="upload__btn-box">
                                <label class="upload__btn">
                                    <h3>Upload images </h3><br>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                    </svg>
                                    <input type="hidden" name="user" class="user">
                                    <input name="file[]" type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                </label>
                            </div>
                        </div>

                        <div class="upload__img-wrap row"></div>
                    <br>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Resize</button>
                </div>
            </div>
        </form>
    </div>

@endsection