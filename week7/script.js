document.addEventListener("DOMContentLoaded", function() {
    // Simulate a delay (you can replace this with your actual loading logic)
    setTimeout(function() {
        document.getElementById("loadingScreen").style.display = "none";
        document.getElementById("content").style.display = "block";
    }, 10500); // Adjust the delay as needed
});
var whoAmI = [
            "<b>Name:</b> Marco Antonio M. Manlapaz",
            "<b>Age:</b> 20 yrs. old",
            "<b>Favorite Color:</b> Red/Black",
            "<b>Hobbies:</b> Playing online games, watching animes, going to the gym, and drawing",
            "<b>Nickname:</b> Marco"
        ];

        var whoAmIList = document.getElementById('whoAmI');
        whoAmI.forEach(function (item) {
            var listItem = document.createElement('li');
            listItem.innerHTML = item;
            whoAmIList.appendChild(listItem);
        });

        function showMyInfo() {
            var questionPart = document.getElementById('questionPart');
            var infoButton = document.getElementById('infoButton');

            if (questionPart.style.display === 'none') {
                questionPart.style.display = 'block';
                infoButton.innerHTML = 'Hide My Information';
            } else {
                questionPart.style.display = 'none';
                infoButton.innerHTML = 'Show My Information';
            }
        }

        function showSocialLinks() {
            var socialLinks = document.getElementById('socialLinks');
            if (socialLinks.style.display === 'none') {
                socialLinks.style.display = 'block';
            } else {
                socialLinks.style.display = 'none';
            }
        }
document.addEventListener('DOMContentLoaded', function() {
    alert("YOU ARE UNDER IN MY DOMAIN EXPANSION, MALEVONT SHRINE HAHAHAHHA");
});

function showDateTime() {
  var currentDateTime = new Date();
  var formattedDateTime = currentDateTime.toLocaleString();
  document.getElementById("dateTime").innerHTML = "Current Date and Time: " + formattedDateTime;
}