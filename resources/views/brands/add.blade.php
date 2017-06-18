@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"
                         style="color:white; background: #2C3E50; font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                        Add New Car Brand
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <div class="form-group">
                                <label for="car_brand">
                                    Brand
                                </label>
                                <input type="email" class="form-control" name="car_brand" id="car_brand"/>
                            </div>
                            <div class="form-group">
                                <label for="car_price">
                                    Price
                                </label>
                                <input type="number" class="form-control" name="car_price" id="car_price"/>
                            </div>
                            <div class="form-group">
                                <label for="car_specification">
                                    Specification
                                </label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="car_picture">
                                    Picture
                                </label>
                                <input type="file" name="car_picture" id="car_picture"/>
                                {{--<p class="help-block">--}}
                                {{--Example block-level help text here.--}}
                                {{--</p>--}}
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection