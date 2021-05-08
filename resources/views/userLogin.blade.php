<h1>Login to your account</h1>

<form action="login" mothod="POST">
    @csrf
    <label>Username</label>
    <input type="text" name="username"/><br/>
    <label>Password</label>
    <input type="password" name="password"/><br/>
    <button type="submit">Submit</button>
</form>

