@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h2>Projects</h2>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td><a href="{{$project->link}}" target='_blank'>Link</a></td>
                        <td>{{$project->slug}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection