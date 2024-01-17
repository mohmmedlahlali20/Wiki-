<?php session_start(); ?>
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="index.php" class="text-lg font-semibold"><img class="h-20 w-20" src="imags\cover.webp" alt=""></a>

        <ul class="nav-links">
            <?php
            //  var_dump($_SESSION);

             if (isset($_SESSION['user'])) {
                
                //  var_dump($_SESSION['user']);
             
                 if ($_SESSION['user'] === 'admin') {
                     echo "<li><a href='index.php' class='hover:text-gray-300'>Home</a></li>";
                     echo "<li><a href='index.php?action=add_category' class='hover:text-gray-300'>Add Category</a></li>";
                     echo "<li><a href='index.php?action=add_tag' class='hover:text-gray-300'>Add Tag</a></li>";
                     echo "<li><a href='' class='hover:text-gray-300'>Dashboard admin</a></li>";
                 } elseif ($_SESSION['user'] === 'auteur') {
                     echo "<li><a href='index.php' class='hover:text-gray-300'>Home</a></li>";
                     echo "<li><a href='index.php?action=logout' class='hover:text-gray-300'>Logout</a></li>";
                 } else {
                     echo "<li><a href='index.php' class='hover:text-gray-300'>Home</a></li>";
                     echo "<li><a href='index.php?action=add_wiki' class='hover:text-gray-300'>Add Wiki</a></li>";
                     echo "<li><a href='index.php?action=logout' class='hover:text-gray-300'>Logout</a></li>";
                 }
             } else {
                 
                echo "<li><a href='index.php?action=register' class='hover:text-gray-300'>Register</a></li>";
                echo "<li><a href='index.php?action=login' class='hover:text-gray-300'>Login</a></li>";
             }
             ?>


        </ul>
    </div>
</nav>