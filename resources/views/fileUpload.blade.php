<h1>Upload File using laravel</h1>

<form method="POST" action="fileUpload" enctype="multipart/form-data">
    @csrf
    <input type="text" name="username" />
    <input type="file" name="userAvter" />
    <input type="submit" />
</form>