<h1>Rejestracja</h1>
<form action="/register" method="post">
    <div class="form-group">
        <label for="first_name">Imię</label>
        <input type="text" name="first_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="last_name">Nazwisko</label>
        <input type="text" name="last_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Hasło</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="confirm_password">Potwierdz hasło</label>
        <input type="password" name="confirm_password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>