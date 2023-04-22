@extends('header')
<div class="login-sign-up-content">
    <div class="login-signup-content-title row">
        <div class="login-heading">
            <p>Login</p>
        </div>
        <div class="signup-heading">
            <p>Signup</p>
        </div>
    </div>
    <div class="login-signup-content-bottom">
        <div class="login-content-bottom">
            <div class="login-bottom-account">
                <form action="./login.php" method="post">
                <div class="login-bottom-account-username">
                    <p>Email</p>
                    <input type="text" placeholder="Enter your username" name="user" required>
                </div>
                <div class="login-bottom-account-password">
                    <p>Password</p>
                    <input type="password" placeholder="Enter your password" name="password" required>
                </div>
                <div class="login-bottom-account-button">
                    <button type="submit">Login</button>
                </div>
            </form>
            </div>
        </div>
        <div class="signup-conten-bottom">
            <div class="signup-bottom-account">
                <form action="./signup.php" method="post">
                
                <div class="signup-bottom-account-username">
                    <p>Email</p>
                    <input type="text" placeholder="Enter your email" name="email" required value="{{$users -> email}}">
                </div>
                <div class="signup-bottom-account-password">
                    <p>Password</p>
                    <input type="password" placeholder="Enter your password" name="password" required value="{{$users -> remenber_password}}">
                </div>
                <div class="signup-bottom-account-username">
                    <p>Repassword</p>
                    <input type="text" placeholder="Retype your password" name="repassword" required value="{{$users -> remember_token}}">
                </div>
                <div class="signup-bottom-account-username">
                    <p>Name</p>
                    <input type="text" placeholder="Enter your username" name="name" required value="{{$users -> name}}">
                </div>
                <div class="signup-bottom-account-username">
                    <p>Email verified at</p>
                    <input type="text" placeholder="Verified" name="email" required value="{{$users -> email_verified_at}}">
                </div>
                <div class="signup-bottom-account-username">
                    <p>Create</p>
                    <input type="text" placeholder="dd/mm/yyyy" name="create" required value="{{$users -> created_at}}">
                </div>
                <div class="signup-bottom-account-username">
                    <p>Update</p>
                    <input type="text" placeholder="dd/mm/yyyy" name="update" required value="{{$users -> update_at}}">
                </div>
                <div class="signup-bottom-account-button">
                    <button type="submit">SignUp</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@extends('footer')