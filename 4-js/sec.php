<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let student = {
            name: "John",
            age: 20,
            isAdmin: true,
            courses: ["html", "css", "js"],
            wife: null
        };

        console.log(student);
        console.log(student.name);
        console.log(student.age);
        console.log(student.courses[1]);
        console.log(student.wife);
        console.log(student.isAdmin);
        console.log(typeof student);

        console.log(student['name']);
        console.log(student.length);
        console.log(typeof student);


        student.isAdmin = false;
        console.log(student.isAdmin);           
        student['name'] = "peter";
        console.log(student.name);
    </script>
</body>
</html>