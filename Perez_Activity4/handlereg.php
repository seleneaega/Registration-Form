<!DOCTYPE html>
<html lang="en">
<head>
<title>Handle Register</title>
<link rel="icon" href="pics/registration-form.png">
<link rel="stylesheet" href="handle.css">
</head>
<body>
    <?php
    error_reporting(0);

    $first_name = $_POST["inputFirstName"];
    $last_name = $_POST["inputLastName"];
    $email_address = $_POST["inputEmailAddress"];
    $birthdate = $_POST["inputBday"];
    $password = $_POST["inputPassword"];
    $confirm_password = $_POST["inputCpass"];
    $question1 = $_POST["inputQ1"];
    $question2 = $_POST["inputQ2"];
    $question3 = $_POST["inputQ3"];
    $question4 = $_POST["inputQ4"];
    $question5 = $_POST["inputQ5"];
    $check_box = $_POST["inputcheckbox"];

    include_once("formdb.php");

    if($first_name == "" || $last_name == "" || $email_address == "" || $birthdate == "" || $password == "" || $confirm_password == "" || $question1 == "" || $question2 == "" || $question3 == "" || $question4 == "" || $question5 == "")
    {
        if($first_name == "")
        {
            echo "
                <div class='error-notice'>
                    <h3>fist name is missing!</h3>
                </div>
            ";
        }
        if($last_name == "")
        {
            echo "
                <div class='error-notice'>
                    <h3>last name is missing!</h3>
                </div>
            ";
        }
        if($email_address == "")
        {
            echo "
                <div class='error-notice'>
                    <h3>email address is missing!</h3>
                </div>
            ";
        }
        if($birthdate == "")
        {
            echo "
                <div class='error-notice'>
                    <h3>birthdate is missing!</h3>
                </div>
            ";
        }
        if($password == "" || $confirm_password == "")
        {
            echo "
                <div class='error-notice'>
                    <h3>password is missing!</h3>
                </div>
            ";
        }
    
        if($question1 == "" || $question2 == "" || $question3 == "" || $question4 == "" || $question5 == "")
        {
            echo "
                <div class='error-notice'>
                    <h3>please complete answering the security questions.</h3>
                </div>
            ";
        }

            echo "
                <a href='formreg.php'>
                    <div class='btn'>
                        <button>
                            back to the forms
                        </button>
                    </div>
                </a>
            ";
    }
        elseif($password != $confirm_password)
        {
            echo "
                <div class='error-notice'>
                    <h3>password does not match</h3>
                </div>
            ";

            echo "
                <a href='formreg.php'>
                    <div class='btn'>
                        <button>
                            back to the forms
                        </button>
                    </div>
                </a>
            ";
        }
        elseif($check_box == "")
        {
            echo "
                <div class='error-notice'>
                    <h3>you aren't 18 years of age yet, try again next time? (>_<)</h3>
                </div>
            ";

            echo "
                <a href='formreg.php'>
                    <div class='btn'>
                        <button>
                            back to the forms
                        </button>
                    </div>
                </a>
            ";
        }
        else 
        {
            $insertquery = "INSERT INTO tbl_user_info(first_name, last_name, email_address, birth_date, password, confirm_password, question_1, question_2, question_3, question_4, question_5) VALUES ('$first_name', '$last_name', '$email_address', '$birthdate', '$password', '$confirm_password', '$question1', '$question2', '$question3', '$question4', '$question5')";

            $query = mysqli_query($connect, $insertquery);

            echo "
            
            <div class='main'>
            <h1 class='form'>$first_name $last_name's Registration Information</h1>
            <br>
            <hr class='hr'>
                <div class='woah'>
                <fieldset>
                <legend><h1 class='header'>Personal Information</h1></legend>
                <div class='ajyl'>
                    <div class=''>
                        <label class='title'>first name:</label>
                        <u><p class='wandot'>$first_name</p></u>
                    </div>

                    <div class=''>
                        <label for='name'>last name:</label>
                        <u><p class='wandot'>$last_name</p></u>
                    </div>

                    <div class=''>
                        <label class='title'>e-mail address:</label>
                        <u><p class='wandot'>$email_address</p></u>
                    </div>

                    <div class=''>
                        <label class='title'>birthdate:</label>
                        <u><p class='wandot'>$birthdate</p></u>
                    </div>

                    <div class=''>
                        <label class='title'>password:</label>
                        <u><p class='wandot'>$password</p></u>
                    </div>

                    <div class=''>
                        <label class='title'>confirm password:</label>
                        <u><p class='wandot'>$confirm_password</p></u>
                    </div>
                </div>
                </fieldset>
                </div>

            <div class='wews'>
            <fieldset>
            <legend><h1 class='header'>Security Questions</h1></legend>
                <div class='ajyl'>
                    <div class=''>
                        <label class='title'>what is your mother's maiden name?</label>
                        <u><p class='wandot'>$question1</p></u>
                    </div>

                    <div class=''>
                        <label class='title'>what is the name of your first pet?</label>
                        <u><p class='wandot'>$question2</p></u>
                    </div>

                    <div class=''>
                        <label class='title'>what was your first pet?</label>
                        <u><p class='wandot'>$question3</p></u>
                    </div>

                    <div class=''>
                        <label class='title'>what elementary school did you attend?</label>
                        <u><p class='wandot'>$question4</p></u>
                    </div>

                    <div class=''>
                        <label class='title'>who was your childhood hero?</label>
                        <u><p class='wandot'>$question5</p></u>
                    </div>
                    </div>
                </fieldset>
                </div>

            <br>
            <div class='button'>
                <a href='formreg.php'>
                    <button class='btn'>
                            back to the forms
                    </button>
                </a>
            </div>
            </div>
            <br>
            ";
        }
    ?>
</body>
</html>