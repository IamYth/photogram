
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Галереи
                </div>
                <div class="panel-body">
<?php
dump(route('profile.album.save'));
?>
           <form action="{{ route('profile.album.save')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!--  Name -->
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Новая галерея</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
        <!--Button-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Создать
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>








@endsection