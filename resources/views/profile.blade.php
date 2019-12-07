<div class="wrapper fadeInDown">
    <div id="formContent">
        <form action="year" method="post">
            @csrf
            <input type="text" id="login" class="fadeIn second" name="number" placeholder="xin vui long nhap năm">
            @error('number')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" class="fadeIn fourth" value="kiem tra">
        </form>
    </div>
</div>
