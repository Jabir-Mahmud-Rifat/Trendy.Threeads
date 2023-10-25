document.addEventListener('DOMContentLoaded', function() {
    var chatButton = document.getElementById("chatButton");
    var chatContainer = document.getElementById("chatContainer");
    var closeChat = document.getElementById("closeChat");

    chatButton.addEventListener("click", openChat);
    closeChat.addEventListener("click", closeChat);

    function openChat() {
        chatContainer.style.display = "block";
    }

    function closeChat() {
        chatContainer.style.display = "none";
    }

    function sendMessage(message) {
        var chatBody = document.getElementById("chatBody");
        var newMessage = document.createElement("p");
        newMessage.innerText = "You: " + message;
        chatBody.appendChild(newMessage);

        // Simulate bot's response (you can replace this with actual bot logic)
        var botResponse = document.createElement("p");
        botResponse.innerText = "Bot: This is a sample response.";
        chatBody.appendChild(botResponse);

        // Scroll to the bottom of the chat body
        chatBody.scrollTop = chatBody.scrollHeight;
    }
});
