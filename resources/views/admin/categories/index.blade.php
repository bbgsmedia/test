@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Category list @endslot
            @slot('parent') Home @endslot
            @slot('active') Category @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.category.index')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create category</a>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td>
                        <a href="{{route('admin.category.edit', $category)}}"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Not result</h2></td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection