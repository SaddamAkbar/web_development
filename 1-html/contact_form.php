<html>

<head>
    <title>Form</title>
</head>

<body>


    <form action="" method="POST">
        <fieldset>
            <legend>Contact Form</legend>
            
            <p>Name: <input type="text" name=""
                    value="" placeholder='Name'></p>

            <p>Email: <input type="email"
                    name="" value="" placeholder="Email"></p>

            <p>Phone No: <input type="number" name=""></p>
            <p>Password: <input type="password" pattern="[0-9A-Za-z]+" name="" minlength="3" title="Only letters" maxlength="10"></p>

            <P>Stay Logged in: <input type="checkbox"></P>
            <p>Under 18: <input type="radio" name="age"></p>
            <p>Over 18: <input type="radio" name="age"></p>
            <p>DoB: <input type="date"></p>
            <p>Time: <input type="time"></p>

            <p>Country: <select name="" id="">
                    <option value="">--Select Country--</option>
                    <option>Pakistan</option>
                    <option>India</option>
                    <option>America</option>
                </select></p>

            <p><textarea rows="10" cols="50"></textarea></p>
            <p><input type="submit" value="Click me"></p>

        </fieldset>
    </form>

    <!-- video tag -->

    <video width="320" height="100" controls>
        <source src="1.mp4" type="video/mp4">
    </video>
    <!-- audio tag -->
    <audio width="320" height="100" controls>
        <source src="1.mp3" type="audio/mpeg">
    </audio>











</body>

</html>