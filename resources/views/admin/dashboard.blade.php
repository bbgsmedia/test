@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">
                            Category 0
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">
                            Material 0
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">
                            User 0
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">
                            User today 0
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create category</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Category</h4>
                    <p class="list-group-item-text">
                        Amount of materials
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create material</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Material</h4>
                    <p class="list-group-item-text">
                        Category
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection