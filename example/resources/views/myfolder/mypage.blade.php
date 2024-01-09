<h1>My Folder and My Page</h1>
<h1>
    <?php echo $val_a . ' ' . $val_b; ?>
</h1>
<h1>{{$val_a . ' ' . $val_b }}</h1>
<form action="/my-controller" method="POST">
    @csrf
    <input type="text" name="myinput" id="">
    <button type="submit">submit</button>
</form>
