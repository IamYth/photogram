@extends('layouts.app')

@section('content')

{{--    <div class="page-header">
    </div>

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('profile.album.update', $album->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('profile.album.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
 --}}

<?php
            dump($album);
            ?>
            <form action="{{ route('profile.album.photo.save', $album->id) }}" method="POST" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <span name='form_inner' id='form_inner'>
                            <input type='file' name='image[]'/>
                        </span>

                        
                            <br>
                            <input class="btn btn-primary" type="submit" value="Загрузить">

            </form>  







@endsection