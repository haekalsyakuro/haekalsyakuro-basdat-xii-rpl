<html>
    <head>
        <title> menggunakan metode post</title>
    </head>
    <body>
        <h1> menggunakan metode post</h1>
        <form method="POST">
            <div>
                <label>Email</label>
                <input type="Email" name="Email">
            </div>
            <div> 
            <label>Password</label>
                <input type="Password" name="Password">
            </div>
            <div>
                <button>Button</button>
            </div>
            <?php 
            $email =  @$_POST['email'];
            $password = @$_POST['password'];

            echo "email= {$email} <br>";
            echo "password= {$password}" ;
            
            ?>
            

        </form>
    </body>
</html>