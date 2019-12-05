<div class="wrapper fadeInDown">
    <div id="formContent">
        <form action="/user/update/{{$id}}" method="post">
            @csrf
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="please enter the email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="please enter the password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" class="fadeIn fourth" value="update">
        </form>
    </div>
</div>
