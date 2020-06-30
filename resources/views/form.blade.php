<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <body>
            <h1>Register New Account!</h1>
            <h3>Sign Up Form</h3>
            <!-- Bisa Akses Halaman Welcome -->
            <form action="/welcome" method="POST">
                <input type="hidden" name="_token" value=
                "<?php echo csrf_token() ?>">

                <!-- Form Data Nama -->
                <label for="fn">First name: </label>
                    <br><br>
                    <input type="text" name="fn">
                    <br><br>
                <label for="ln">Last name: </label>
                    <br><br>
                    <input type="text" name="ln">
                    <br><br>

                <label for="gd">Gender : </label>
                    <br><br>
                    <input type="radio" name="gd" id="male" value="male"> 
                    <label for="male">Male</label><br>
		            <input type="radio" name="gd" id="female" value="female"> 
                    <label for="female">Female</label>
                        <br>
                    <input type="radio" name="gd" id="other" value="other"> 
                    <label for="other">Other</label>
                    <br><br>

                <label for="ntly">Nationality: </label>
                    <br><br>
                    <select>
                        <option>Indonesian</option>
                        <option>Singaporean</option>
                        <option>Malaysian</option>
                        <option>Australian</option>
                    </select>
                    <br><br>

                <label for="lgg">Languange Spoken: </label>
                <br><br>
                    <input type="checkbox" name="lgg"> Bahasa Indonesia
                    <br>
                    <input type="checkbox" name="lgg"> English
                    <br>
                    <input type="checkbox" name="lgg"> Other
                    <br>
                    <br>

                <label for="bio">Bio: </label>
                <br>
                <textarea cols="30" rows="10">

                </textarea>
                <br>

                <input type="submit" value="Sign Up">
            </form>
        </body>
    </head>
</html>
</body>
</html>