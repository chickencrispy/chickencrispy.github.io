<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="styles.css">
</head>


<style>
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}

.chat-container {
    width: 300px;
    height: 500px;
    border: 1px solid #ccc;
    background-color: #fff;
    display: flex;
    flex-direction: column;
}

.chat-box {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
    border-bottom: 1px solid #ccc;
}

.message {
    padding: 5px;
    margin-bottom: 10px;
    border-radius: 5px;
    position: relative;
}

.message.user1 {
    background-color: #dcf8c6;
    align-self: flex-end;
}

.message.user2 {
    background-color: #eaeaea;
    align-self: flex-start;
}

.message .translation {
    font-size: 0.9em;
    color: #666;
    margin-top: 5px;
    display: block;
}

#message-input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 10px;
    flex-shrink: 0;
}

#send-button {
    padding: 10px 20px;
    border: none;
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}
</style>

<body>
    <div class="chat-container">
        <div class="chat-box" id="chat-box">
            <!-- Messages will be displayed here -->
        </div>
        <input type="text" id="message-input" placeholder="Type a message">
        <button id="send-button">Send</button>
    </div>

    <script src="script.js"></script>
</body>
</html>

<script>


fetch('https://ipinfo.io/json')
.then(response => response.json())
.then(data => {
    console.log('Country: ' + data.country);
})
.catch(error => {
    console.error('Error fetching IPInfo data:', error);
});



document.addEventListener("DOMContentLoaded", () => {
    const chatBox = document.getElementById("chat-box");
    const messageInput = document.getElementById("message-input");
    const sendButton = document.getElementById("send-button");

    let user = "user1"; // Toggle between 'user1' and 'user2'

    sendButton.addEventListener("click", sendMessage);
    messageInput.addEventListener("keypress", (e) => {
        if (e.key === "Enter") {
            sendMessage();
        }
    });

    function sendMessage() {
        const message = messageInput.value.trim();
        if (message) {
            displayMessage(message, user);
            messageInput.value = "";
            //user = (user === "user1") ? "user2" : "user1"; // Switch user
        }
    }

    async function displayMessage(message, sender) {
        const messageElement = document.createElement("div");
        messageElement.classList.add("message", sender);
        messageElement.textContent = message;

        // Add translation below the message
        const translationElement = document.createElement("span");
        translationElement.classList.add("translation");
        translationElement.textContent = await translateMessage(message, 'id');
        messageElement.appendChild(translationElement);

        chatBox.appendChild(messageElement);
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    async function translateMessage(text, targetLang) {
        const response = await fetch(`https://api.mymemory.translated.net/get?q=${encodeURIComponent(text)}&langpair=en|${targetLang}`);
        const result = await response.json();
        return result.responseData.translatedText;
    }
});






</script>