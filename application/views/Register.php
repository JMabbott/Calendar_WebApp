
<div id="container">

<form method="post" action="/register/validation">  <!-- missing the action="??" part -->

    <legend> Register Form </legend>

    <fieldset>
        User Name:
        <input type="text" name="username">
        <br>

        Name:
        <input type="text" name="fullname">
        <br>

        Email:
        <input type="email" name="email">
        <br>

        Password:
        <input type="password" name="password1">
        <br>

        Confirm Password:
        <input type="password" name="password2">
        <br>

        <input type="submit" value="Login">
    </fieldset>
</div>
