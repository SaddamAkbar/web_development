<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1 id="typing-effect"></h1>  
<script>
const textElement = document.getElementById('typing-effect');
const phrases = ["Hello, world!", "Welcome to my website."];
let phraseIndex = 0;
let charIndex = 0;

function typeWriter() {
  if (charIndex < phrases[phraseIndex].length) {
    textElement.innerHTML += phrases[phraseIndex].charAt(charIndex);
    charIndex++;
    setTimeout(typeWriter, 100); // Adjust typing speed
  } else {
    // Optionally, move to the next phrase or erase and retype
    phraseIndex = (phraseIndex + 1) % phrases.length;
    charIndex = 0;
    setTimeout(() => {
      textElement.innerHTML = '';
      typeWriter();
    }, 2000); // Pause before typing the next phrase
    
  }
}

typeWriter();
</script>
</body>
</html>