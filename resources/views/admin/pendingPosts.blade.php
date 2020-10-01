@extends('layouts.admin')

@section('content')
    <table class="table table-custom table-sortable">
        <thead>
        <tr>
            <th class="sortable sort-asc">{{ trans('post.title') }}</th>
            <th class="sortable sort-numeric">{{ trans('post.content') }}</th>
            <th class="sortable sort-amount">{{ trans('username') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($postsPending as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->user->name }}</td>
                <td class="text-center"><a href="#" data-route="{{ route('aprrovePost', ['id' => $post->id]) }}" class="check-toggler checked"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
