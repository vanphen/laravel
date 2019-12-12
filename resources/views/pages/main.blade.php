@extends('view')
@section('main')
    <div class="ui form">
        <form action="{{route('user')}}" method="get">
            @csrf
            <div class="fields">
                <div class="field">
                    <label>user_id</label>
                    <input type="text" name="id" placeholder="ID">
                </div>
                <div class="field">
                    <label>Phone</label>
                    <input type="text" name="phone" placeholder="phone">
                </div>
                <div class="field">
                    <label>role Name</label>
                    <input type="text" name="role" placeholder="role">
                </div>
                <div class="field">
                    <label>Action</label>
                    <input class="ui button" type="submit" value="tim kiem">
                </div>

            </div>
        </form>
    </div>
    <h3>Bảng dữ liệu</h3>
    <table class="ui celled table">
        <thead>
        <tr>
            <th>user id</th>
            <th>first name</th>
            <th>last name</th>
            <th>Phone</th>
            <th>Role name</th>
        </tr></thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>
                    {{ $user->id }}
                </td>
                <td>
                    {{ $user-> first_name }}
                </td>
                <td>
                    {{ $user-> last_name }}
                </td>
                <td>
                    {{ $user->number }}
                </td>
                <td>
                    {{ $user->name }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
