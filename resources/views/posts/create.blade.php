@extends('view')
@section('main')
    <div class="ui centered grid">
        <h1>Tạo POST</h1>
        <div class="six wide tablet eight wide computer column">
            @csrf
            <form class="ui form" action="" method="post" >
                <div class="field">
                    <label>Tiêu đề </label>
                    <input type="text" name="title" placeholder="First Name">
                </div>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="field">
                    <label>Last Name</label>
                    <textarea name="content" id="text" cols="30" rows="10"></textarea>
                    <script src={{ url('ckeditor/ckeditor.js') }}></script>
                    <script>
                        CKEDITOR.replace( 'text', {
                            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

                        } );
                    </script>
                    @include('ckfinder::setup')
                </div>

                @error('content')
                <div class="alert alert-danger">{{ $message1 }}</div>
                @enderror
                <button class="ui button" type="submit">Submit</button>
            </form>
        </div>
    </div>

@endsection
@include('ckfinder::setup')
