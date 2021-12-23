
<?php

    if ($_SESSION['user_logged_in'] != 'true')
    {
        echo' 
        
            <div class="container">
                <div class="loginBox">
                    <div class="row">
                        <div class="col-md-4"></div>
            
                        <div class="col-md-4">
                            <div class="decoration_box"></div>
            
                            <div class="content_box">
                                <form method="post" class="login-form">
                                    <p>Please Sign In</p>
            
                                    <p class="names">User name:</p>
                                    <input type="text" aria-label="username" class="form-control reacting-items" name="username" required>
            
                                    <p class="names">Password:</p>
                                    <input type="password" aria-label="password" class="form-control reacting-items" name="password" required>
            
                                    <input type="submit" class="btn btn-primary reacting-items ent-btn fw-bold" name="login_btn" value="ENTER">
                                </form>
                            </div>
                        </div>
            
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>        
        ';


        if(isset($_POST['login_btn'])) {
            $l = mysqli_connect('localhost', 'root', '', 'speaker_portal');

            $username = mysqli_real_escape_string($l, $_POST['username']);
            $password = mysqli_real_escape_string($l, $_POST['password']);

            $enc_password = hash("sha256", $password);

            $user_query = mysqli_query($l, "SELECT * FROM `users` WHERE `username` = '" . $username . "' AND `password` = '" . $enc_password . "'");
            $user_count = mysqli_num_rows($user_query);

            if ($user_count == 1) {

                $user_data = mysqli_fetch_array($user_query);

                $_SESSION['user_logged_in'] = 'true';
                $_SESSION['id'] = $user_data['id'];
                $_SESSION['username'] = $user_data['username'];

                echo '<meta http-equiv="refresh" content="2, url=index.php?page=mpaf">';

                echo '<p class="container" style="color: deeppink; text-align: center; font-weight: bold; margin-top: 20px">Success!<br>Welcome ' . $username . ' ';
            } else {
                echo '<p class="container" style="color: deeppink; text-align: center; font-weight: bold; margin-top: 20px">Your name or password was incorrect.<br>Please try it again.</p>';
            }

            mysqli_close($l);
        }
    }
    else
    {
        echo "<p class='container' style='color: deeppink; text-align: center; font-weight: bold; margin-top: 20px'>You're already logged in.";
    }

    ?>
















