<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="pics/registration-form.png">
</head>
<body>
    <form action="handlereg.php" method="POST">
    <div class="body">
        <br>
        <fieldset>
            <legend><h1 class="header">Registration Form</h1></legend>
        <div class="first-body">

            <!-- first name div -->
        <div class=" ">
            <br>
            <label class="lezgoA">first name:</label>
            <input class ="box" type="text" name="inputFirstName">
        </div>
            <!-- first name div -->
        <br>
            <!-- last name div -->
        <div>
            <label class="lezgoA">last name:</label>
            <input type="text" name="inputLastName">
        </div>
            <!-- last name div -->
        <br>
            <!-- e-mail div -->
        <div>
            <label class="lezgoA">email address:</label>
            <input type="email" name="inputEmailAddress">
        </div>
            <!-- e-mail div -->
        <br>
            <!-- bday div -->
        <div>
            <label class="lezgoA">birthdate:</label>
            <input class="bdaybox" type="date" name="inputBday">
        </div>
            <!-- bday div -->
        <br>
            <!-- pass div -->
        <div>
            <label class="lezgoA">password:</label>
            <input type="password" name="inputPassword">
        </div>
            <!-- pass div -->
        <br>
            <!-- confirm pass div -->
        <div>
            <label class="lezgoA">confirm password:</label>
            <input type="password" name="inputCpass">
        </div>
        <br>
        </div>
            <!-- confirm pass div -->
        </fieldset>
        <br>

        <fieldset>
        <legend><h1 class="header">Security Questions</h1></legend>
        <div class="second-body">
        <div>
            <!-- question 1 div -->
        <div>
        <br>
            <label class="lezgo">what is your mother's maiden name?</label>
            <input type="text" name="inputQ1">
        </div>
            <!-- question 1 div -->
        <br><br>
            <!-- question 2 div -->
        <div>
            <label class="lezgo">what is the name of your first pet?</label>
            <input type="text" name="inputQ2">
        </div>
            <!-- question 2 div -->
        <br><br>
            <!-- question 3 div -->
        <div>
            <label class="lezgo">what was your first pet?</label>
            <input type="text" name="inputQ3">
        </div>
            <!-- question 3 div -->
        <br><br>
            <!-- question 4 div -->
        <div>
            <label class="lezgo">what elementary school did you attend?</label>
            <input type="text" name="inputQ4">
        </div>
            <!-- question 4 div -->
        <br><br>
            <!-- question 5 div -->
        <div>
            <label class="lezgo">who was your childhood hero?</label>
            <input type="text" name="inputQ5">
        </div>
            <!-- question 5 div -->
        <br>
        </div>
    </div>
    </fieldset>
    <br>

    <br>
    <div>
        <input type="checkbox" name="inputcheckbox">
        <label class="agree"><i>I agree that I'm <b><u>18 years</u></b> old and older ^___^</i></label>
    </div>
    <br>
    <p class="harang"><b>________________________</p></b>
    <div>
        <input class="btn" value="submit" type="submit" name="submitbutton">
    </div>
    <!-- <button onclick="history.back()">
            Go back
    </button> -->
    <br>
    </div>
</body>
</html>