@extends('layouts.app')

 @section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> User
            <a class="btn btn-success pull-right" href="{{ route('profile.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>
    </div>
@endsection

@section('content')

<section class="content-block gallery-1">
        
        <div class="container">
        
            <div class="underlined-title">
                <div class="editContent">
                    <h1>A</h1>
                </div>
                <hr>
                <div class="editContent">
                    <h2>Hand-picked just for you</h2>
                </div>
            </div>
            
            <div class="editContent">
                <ul class="filter">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".artwork">Artwork</a></li>
                    <li><a href="#" data-filter=".creative">Creative</a></li>
                    <li><a href="#" data-filter=".nature">Nature</a></li>
                    <li><a href="#" data-filter=".outside">Outside</a></li>
                    <li><a href="#" data-filter=".photography">Photography</a></li>
                </ul>
            </div>
            <!-- /.gallery-filter -->
            
            <div class="row">
                <div id="isotope-gallery-container">
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        <div class="gallery-item">                            <div class="gallery-thumb">

                                <img src="http://placehold.it/800x600" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="http://placehold.it/800x600" rel="prettyPhoto[pp_gal]" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>1st Gallery Item</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper nature outside">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="http://placehold.it/800x600" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="http://placehold.it/800x600" rel="prettyPhoto[pp_gal]" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>2nd Gallery Item</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper photography artwork">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="http://placehold.it/800x600" class="img-responsive" alt="3rd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="http://placehold.it/800x600" rel="prettyPhoto[pp_gal]" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>3rd Gallery Item</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper creative nature">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="http://placehold.it/800x600" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="http://placehold.it/800x600" rel="prettyPhoto[pp_gal]" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>4th Gallery Item</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="http://placehold.it/800x600" class="img-responsive" alt="5th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="http://placehold.it/800x600" rel="prettyPhoto[pp_gal]" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>5th Gallery Item</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="http://placehold.it/800x600" class="img-responsive" alt="6th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="http://placehold.it/800x600" rel="prettyPhoto[pp_gal]" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>6th Gallery Item</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper nature outside">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="http://placehold.it/800x600" class="img-responsive" alt="7th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="http://placehold.it/800x600" rel="prettyPhoto[pp_gal]" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>7th Gallery Item</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper photography artwork">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="http://placehold.it/800x600" class="img-responsive" alt="8th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="http://placehold.it/800x600" rel="prettyPhoto[pp_gal]" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>8th Gallery Item</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!--// End Gallery 1-1 -->
    

@endsection



@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($user->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($user as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-warning" href="{{ route('profile.edit', $item->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('profile.delete', $item->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $user->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection 