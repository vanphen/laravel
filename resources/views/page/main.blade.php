@extends('view')
@section('main')
    <div class="ui form">
        <form action="{{route('user')}}" method="get">
            @csrf
            <div class="fields">
                <div class="field">
                    <label>ID</label>
                    <input type="text" name="id" placeholder="ID">
                </div>
                <div class="field">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="field">
                    <label>Class</label>
                    <input type="text" name="class" placeholder="Class">
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
        <tr><th>ID</th>
            <th>Name</th>
            <th>Class</th>
        </tr></thead>
        <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user-> id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->class }}
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    @endsection
