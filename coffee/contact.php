<?php ob_start(); ?> 
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>central coffee</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
     <!-- Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>    
    
</head>
<body>
    <div class="hero">
        <div class="nav-bar">
            <div class="nav-logo">
    
                <img src="7.png" alt="" class="src">
            </div>
        
            <div class="nav-links">
                <ul>
                    <a href="index.html"><li>HOME</li></a>
                    <a href="#"><li>MENU</li></a>
                    <a href="#"><li>FIND A STORE</li></a>
    
                </ul>
                
            </div>
        
        </div>
    
    <style>
        .form-control, .btn,.container {
            border-radius: 1px;
            background-color: rgba(233, 198, 134, 0.815);
        }   
        </style>
        
        <br>
        <br>
        <br>
            <div class="container"> <!-- Container -->
                <div class="shadow p-3 mb-5 bg-white rounded"><!-- Regular shadow -->
                    <h3 class="mt33"><i>HOW CAN WE HELP YOU?</i></h3>
                    <h5 class="text-center text-success" id="message"></h5>
                    <br>
                    <form class="mt33" action="contact.php" method = "POST"><!--form -->
                        <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Name and Surname*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameandsurname" name="nameandsurname" placeholder="Enter your name" required>
                            </div>
                        </div>
                
                        <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Subject*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Phone Number*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
                            </div>
                        </div>
        
                    
                          <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Email*</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control" id="e_mail" name="e_mail" placeholder="Enter e-mail" required>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Message*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="message" name="message" placeholder="Enter message" required>
                            </div>
                        </div>
        
                        <!-- btn insert data -->
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-9 pull-right">
                                <button type="submit" name="save" class="btn btn-warning">Save</button>
                            </div>
                        </div>
                    </form><!--end form -->
                    <hr/>
                    <form class="mt33" action="contact.php" method = "POST"><!--form -->
                    <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">ID for Update*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameandsurname" name="id" placeholder="ID for Update" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Name and Surname*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameandsurname" name="nameandsurname" placeholder="Enter your name" required>
                            </div>
                        </div>
                
                        <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Subject*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Phone Number*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
                            </div>
                        </div>
        
                    
                          <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Email*</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control" id="e_mail" name="e_mail" placeholder="Enter e-mail" required>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">Message*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="message" name="message" placeholder="Enter message" required>
                            </div>
                        </div>                   
        
                        <!-- btn insert data -->
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-9 pull-right">
                                <button type="submit" name="update" class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form><!--end form -->
                    <hr/>
                    <form class="mt33" action="contact.php" method = "POST"><!--form -->
                    <div class="form-group row">
                            <label for="description" class="control-label col-sm-3">ID for Delete*</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameandsurname" name="id" placeholder="ID for Delete" required>
                            </div>
                        </div>              
        
                        <!-- btn insert data -->
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-9 pull-right">
                                <button type="submit" name="delete" class="btn btn-warning">Delete</button>
                            </div>
                        </div>
                    </form><!--end form -->
                    <table border="1" align="center" width="80%" style="margin:50px; color:black;text-align:center">
                    <tr>
                        <td style="font-weight: bold; text-align: center">ID</td>
                        <td style="font-weight: bold; text-align: center">Name and Surname</td>
                        <td style="font-weight: bold; text-align: center">Subject</td>
                        <td style="font-weight: bold; text-align: center">Phone Number</td>
                        <td style="font-weight: bold; text-align: center">Email</td>
                        <td style="font-weight: bold; text-align: center">Message</td>
                    </tr>
                    <?php
                        $db = mysqli_connect("localhost","root","","kahve_db");
                        $sql=mysqli_query($db,"select * from kahve"); 
                        mysqli_set_charset($db, "utf8");

                        while($db=mysqli_fetch_array($sql))
                        {
                        echo '<tr>';
                        echo '<td>'.$db['id'].'</td>';
                        echo '<td>'.$db['name_and_surname'].'</td>';
                        echo '<td>'.$db['subjectt'].'</td>';
                        echo '<td>'.$db['phone'].'</td>';
                        echo '<td>'.$db['e_mail'].'</td>';
                        echo '<td>'.$db['message'].'</td>';
                        echo '</tr>';
                        }
                    ?>
                </table>
                </div><!--end container -->
            </div><!-- Regular shadow -->
        
            <script>
                $(document).ready(function()
                {
                    setTimeout(function()
                    {
                        $('#message').hide();
                    },3000);
                });
            </script>
        
    </div>
</body>
</html>

<?php
if(isset($_POST["save"]))
{
    $name_and_surname = $_POST["nameandsurname"];
    $subject = $_POST["subject"];
    $phone = $_POST["phone"];
    $e_mail = $_POST["e_mail"];
    $message = $_POST["message"];
    $db = mysqli_connect("localhost","root","","kahve_db");
    $sql = "Insert Into kahve(name_and_surname,subjectt, phone, e_mail, message) values( '".$name_and_surname."','".$subject."','".$phone."','".$e_mail."','".$message."')";
    $print = mysqli_query($db, $sql);
}
if(isset($_POST["update"]))
{
    $db = mysqli_connect("localhost","root","","kahve_db");
    $sql = "UPDATE kahve SET name_and_surname='".$_POST["nameandsurname"]."', subjectt='".$_POST["subject"]."', phone='".$_POST["phone"]."' , e_mail='".$_POST["e_mail"]."', message='".$_POST["message"]."' WHERE id='".$_POST["id"]."'";
    $print = mysqli_query($db,$sql);
    mysqli_close($db);
}
if(isset($_POST["delete"]))
{
    $db = mysqli_connect("localhost","root","","kahve_db");
    $sql = "delete from kahve where id='".$_POST["id"]."'";
    $print = mysqli_query($db,$sql);
    header("Refresh: 0.1; url=contact.php");
}
?>
<?php ob_flush(); ?> 