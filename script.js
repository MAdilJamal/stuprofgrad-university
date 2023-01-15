
var navLinks=document.getElementById("navLinks")
function showMenu(){
    navLinks.style.right="0";
}
function hideMenu(){
    navLinks.style.right="-40%";
}

var searchBox=document.getElementById("searchBox")
function showSearchBox(){
    searchBox.style.display="block";
}
function hideSearchBox(){
    searchBox.style.display="none";
}

function sendEmail(){
    Email.send({
        SecureToken: "b5622076-53d3-48c2-837b-092d010128ea",
        To: "jamal.adil33@gmail.com",
        From: document.getElementById("email").value,
        Subject: "New Contact Form Enquiry",
        Body: "Name: " + document.getElementById("name").value
            + "<br>Subject: " + document.getElementById("subject").value
            + "<br>Message: " + document.getElementById("message").value
    }).then(
        message => alert("Message sent successfully")
    );
}