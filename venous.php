<?php

if ($_SESSION['user_logged_in'] != 'true')
{
    echo "<p class='container' style='color: deeppink; text-align: center; font-weight: bold; margin-top: 20px'>You're not authorized to use this page.<br>Please log in!</p>";


    echo '<meta http-equiv="refresh" content="4, url=index.php">';
    exit();
}
else
{
    echo '
            <div class="container">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac quam pulvinar magna commodo aliquam at sit amet diam. Nullam vel lectus non ligula eleifend porttitor. 
                   Fusce ut tincidunt urna. Etiam ut nisl eget sapien pellentesque condimentum non ac ipsum. Duis porta eros ut libero vestibulum, ultricies vulputate augue pretium. 
                   Pellentesque rutrum rutrum nunc nec vulputate. Sed volutpat nibh odio, sed pulvinar lectus vehicula in. Vestibulum nec ex ultrices, varius felis sed, tincidunt sapien. 
                   Mauris consequat, elit eu ullamcorper faucibus, purus libero venenatis nunc, ac rutrum nisi ante ut nulla. Mauris id tellus ut dui rutrum tincidunt vel at felis. 
                   Nam hendrerit arcu in neque congue, in fermentum ante accumsan. Etiam sodales cursus tortor, eget facilisis urna ullamcorper sit amet. </p>
            </div>';
}
?>
