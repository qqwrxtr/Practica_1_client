let appointmentForm = document.getElementById("appointment");

let message = document.getElementById("appointment-form-message");

let button = document.getElementById("appointment-form-button");

appointmentForm.addEventListener("submit", (e) => {
    e.preventDefault();
    button.setAttribute("disabled", true);

    setTimeout(() => {
        message.innerHTML = "🎉 Succes";
        message.classList.add("active")
    }, 1000)
});

