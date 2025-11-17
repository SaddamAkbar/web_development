<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="tweetDiv"></div>
    <script type="text/javascript">
        let tweetString = "";
        let tweets = [
            "Just setting up my twitter",
            "inviting coworkers",
            "working on a new feature",
            "debugging some code",
            "deploying to production"
        ];
        let i = 0;

        while (i < tweets.length) {
            // tweetString += `<p>${tweets[i]}</p>`;
            tweetString = tweetString + "<p>" + tweets[i] + "</p>";
            i++;
        }
        document.getElementById("tweetDiv").innerHTML = tweetString;
    </script>
</body>
</html>