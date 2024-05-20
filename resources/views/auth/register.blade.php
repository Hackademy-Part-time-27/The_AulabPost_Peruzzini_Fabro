<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Registrazione</title>
        <link rel="stylesheet" href="./responsiveRegistration.css">
        <script type="text/javascript" lang="javascript" src="./responsiveRegistaration.js"></script>
    </head>
       
    <body>
        <h1>Registrazione</h1>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <label for="fname">Nome:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="lname">Cognome:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="lname" name="lastname" placeholder="Enter your last name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="email">Email:</label>
                </div>
                <div class="col-90">
                    <input type="email" id="email" name="email" placeholder="it should contain @,.">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="mobile">telefono:</label>
                </div>
                <div class="col-90">
                    <input type="tel" id="mobile" name="mobile" placeholder="only 10 digits are allowed">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="dob">Data Di Nascita:</label>
                </div>
                <div class="col-90">
                    <input type="Date" id="dob" name="dob">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Indirizzo:</label>
                </div>
                <div class="col-90">
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="city">Città:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="city" name="city" maxlength="10">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="password">Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="password" name="password" maxlength="8">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Registered" onclick="SaveStudentDetails()">
            </div>  
        </div>  
    </body>
</html>