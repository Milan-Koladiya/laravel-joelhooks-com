<h1>Edit This user</h1>

<form mothod="POST" name="EditUserForm" action="editUserData">
    @csrf
    <input type="hidden" name="id" value={{$editUser['id']}} />
    <label>FirstName</label>
    <input type="text" name="firstName" value={{$editUser['firstName']}} /><br/>
    <label>LastName</label>
    <input type="text" name="lastName" value={{$editUser['lastName']}} /><br/>
    <label>Email</label>
    <input type="text" name="email" value={{$editUser['email']}} /><br/>
    <input type="submit" />
</form>

