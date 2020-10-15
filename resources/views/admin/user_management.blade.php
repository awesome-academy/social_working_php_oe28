@extends('layouts.admin')

@section('content')
    <section class="tile color transparent-black">
        <div class="tile-header">
            <h1><strong>{{ trans('adminApp.user') }}</strong> {{ trans('adminApp.table') }}</h1>
            <div class="controls">
                <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                <a href="#" class="remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="tile-body nopadding">
            <table class="table table-bordered table-sortable">
                <thead>
                    <tr>
                        <th class="sortable sort-alpha sort-asc">{{ trans('adminApp.username') }}</th>
                        <th class="sortable sort-alpha">{{ trans('adminApp.email') }}</th>
                        <th class="sortable sort-alpha">{{ trans('adminApp.role') }}</th>
                        <th id="">{{ trans('adminApp.feature') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role->name }}</td>
                            @if ($user->status === config('controller.status.pending'))
                                <td>
                                    <a href="#" class="check-toggler checked" data-route="{{ route('changeUserStatus', ['id' => $user->id]) }}"></a>
                                    <a data-="{{ route('resetPassword', ['id' => $user->id]) }}" class="resetPassword" href="#"><i class="fa fa-edit"></i></a>
                                </td>
                                @else
                                    <td><a href="#" class="check-toggler unchecked" data-route="{{ route('changeUserStatus', ['id' => $user->id]) }}"></a>
                                        <a data-route="{{ route('resetPassword', ['id' => $user->id]) }}" class="resetPassword" href="#"><i class="fa fa-edit"></i></a>
                                    </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </section>
@endsection
@push('after-js')
    <script src="{{ asset('js/user_management.js') }}"></script>
@endpush
