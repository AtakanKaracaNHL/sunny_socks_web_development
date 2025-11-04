document.addEventListener("DOMContentLoaded", () => {
  const chatButton = document.getElementById("chat-button");
  const chatWindow = document.getElementById("chat-window");
  const closeChat = document.getElementById("close-chat");

  // Open het chatvenster alleen als op de button wordt geklikt
  chatButton.addEventListener("click", () => {
    chatWindow.style.display = "flex";
    chatButton.style.display = "none";
  });

  // Sluit knop
  closeChat.addEventListener("click", () => {
    chatWindow.style.display = "none";
    chatButton.style.display = "flex";
  });
});
