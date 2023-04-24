@extends('header')
<head>
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
</head>
<form method='post'>
    <div class="container">
        <h2>Profile</h2>
        <table cellpadding='0' cellspacing='0'>
            <tr>
                <td>
                    ID:
                </td>
                <td>
                    <input type='text' name='username' value="{{$users -> id}}" disabled />
                </td>
            </tr>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type='text' name='fullname' value="{{$users -> name}}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type='text' name='email' value="{{$user -> email}}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type='text' name='password'value="{{$user-> Password}}" />
                    </td>
                </tr>
                {{-- <tr>
                    <td>
                        Address:
                    </td>
                    <td>
                        <input type='text' name='address'value="{{xxx}}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Number:
                    </td>
                    <td>
                        <input type='text' name='number'value="{{xxx}}" />
                    </td> --}}
                </tr>  
                
                

        </table>
        <div class="button">
            <input type="submit" name="update" value="Update" style=" width:280px">
            <input type="submit" name="home" value="Home"style="width:280px">
        </div>
    </div>

</form>
  @extends('footer')