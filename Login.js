document.getElementById("email-login-btn").addEventListener("click", function() {
    // Show email login options
    document.querySelector(".email-login").style.display = "block";
    document.querySelector(".phone-login").style.display = "none";
});

document.getElementById("phone-login-btn").addEventListener("click", function() {
    // Show phone login options
    document.querySelector(".phone-login").style.display = "block";
    document.querySelector(".email-login").style.display = "none";
});

document.getElementById("phone-login-submit").addEventListener("click", function() {
    // Send OTP logic here
    const phoneNumber = document.getElementById("phone").value;
    // Send OTP to the provided phone number via SMS or a backend API.
    // Show the OTP input field.
    document.querySelector(".otp-verification").style.display = "block";
});

document.getElementById("otp-verify").addEventListener("click", function() {
    // OTP verification logic here
    const otp = document.getElementById("otp").value;
    // Verify the OTP with your backend.
    // If successful, allow access to the application.
});
    const burgerIcon = document.querySelector(".burger-icon");
    const bars = document.querySelectorAll(".bar");
    const nav = document.querySelector(".nav"); // Select the navigation element
 
    burgerIcon.addEventListener("click", () => { 
    burgerIcon.classList.toggle("active");
    bars.forEach(bar => bar.classList.toggle("active"));
    nav.classList.toggle("active"); // Toggle the "active" class on the navigation element
    });
