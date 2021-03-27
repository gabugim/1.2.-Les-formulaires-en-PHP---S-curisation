<?php 


    if($_POST)
    {
        //not empty
        //atleast 6 characters long
        $errors = array();

        //start validation
        if(empty($_POST['firstName']))
            {
                $errors['firstName1'] = "Your first name cannot be empty";
            }

        if(empty($_POST['lastName']))
            {
                $errors['lastName1'] = "Your last name cannot be empty";
            }

        if(empty($_POST['email']))
            {
                $errors['email1'] = "Your email cannot be empty";
            }elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $errors ['email1']  = "Invalid email format";
    }
        

        if(empty($_POST['phoneNumber']))
            {
                $errors['phoneNumber1'] = "Your phone number cannot be empty";
            }

        if(empty($_POST['topic']))
            {
                $errors['topic1'] = "Your topic cannot be empty";
            }

        if(empty($_POST['message']))
            {
                $errors['message1'] = "Your message cannot be empty";
            }

        //check errors

        if(count($errors) == 0)
            {
                //redirect to success pages
                header("location: success.php");
                exit();
            }
    }
    // check if e-mail address is well-formed

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" target=" ">
        <p>
            <label for="firstName">firstName</label>
            <input type ="text" name="firstName" id="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>" required />
        </p>
        <p> 
        <?php if(isset($errors['firstName1'])) echo $errors['firstName1'];  ?>    
        </p>

        <p>
            <label for="lastName">lastName</label>
            <input type ="text" name="lastName" id="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>" required/>
        </p>
        <p> 
        <?php if(isset($errors['lastName1'])) echo $errors['lastName1'];  ?>    
        </p>

        <p>
            <label for="email">email</label>
            <input type ="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required/>
        </p>
        <p> 
        <?php if(isset($errors['email1'])) echo $errors['email1'];  ?>    
        </p>
        <p>
            <label for="phoneNumber">phoneNumber</label>
            <input type ="text" name="phoneNumber" id="phoneNumber" value="<?php if(isset($_POST['phoneNumber'])) echo $_POST['phoneNumber']; ?>" required /> 
        </p>
        <p> 
        <?php if(isset($errors['phoneNumber1'])) echo $errors['phoneNumber1'];  ?>    
        </p>
        <p>
            <label for="topic">topic</label>
            <select name="topic" id="topic" >
                <option value="">--Please choose a topic--</option>
                <option value="animals">animals</option>
                <option value="Sport">Sport</option>
                <option value="school">school</option>
            </select>
            <!-- <input type ="text" name="topic" id="topic" value=" required /> -->
        </p>
        <p> 
        <?php if(isset($errors['topic1'])) echo $errors['topic1'];  ?>    
        </p>
        <p>
            <label for="message">message</label>
            <textarea type ="message" name="message" id="message" value="<?php if(isset($_POST['message'])) echo $_POST['message']; ?>" required></textarea>
        </p>
        <p> 
        <?php if(isset($errors['message1'])) echo $errors['message1']; ?>    
        </p>
        <p>

        <input type="submit" value="submit"/>


    </form>
</body>
</html>