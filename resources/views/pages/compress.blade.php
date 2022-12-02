@extends('home')

@section('title', 'Compress Image')

@section('content')
   

    <div class="col-md-12">
      <form class="card" method="post" action="{{ route('post') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Compress Image</h3>
        </div>
        <div class="card-body">
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
            <!-- <input type="submit" value="Compress" class="btn btn-info compress" style="display:none"> -->
      
          
        </div>
        <div class="card-footer text-end">
          <button type="submit" class="btn btn-primary compress">Compress</button>
        </div>
      </form>
    </div>


@endsection