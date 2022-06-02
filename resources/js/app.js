require("./bootstrap");

const messages_el = document.getElementById("messagelistli");
const username_input = document.getElementById("username");
const messages_input = document.getElementById("message_input");
const messages_form = document.getElementById("message_form");



const button = document.getElementById("message_send");

button.addEventListener("click", function (e) {
    e.preventDefault();

    let has_errors = false;
    if (username_input.value == "") {
        alert("Please enter a username");
        has_errors = true;
    }

    if (messages_input.value == "") {
        alert("Please enter a message");
        has_errors = true;
    }

    if (has_errors) {
        return;
    }
    const options = {
        method: "POST",
        url: "/send-message",

        data: {
            username: username_input.value,
            message: messages_input.value,
        },
        transformResponse: [
            function (data) {
                return data;
            },
        ],
    };

    axios(options);
});


// console.log(data);
window.Echo.channel("chat").listen(".message", (e) => {
    console.log(e.message);
   messages_el.innerHTML += `<li><span class="font-bold">${e.username}:</span> ${e.message}</li><hr>`;
});
