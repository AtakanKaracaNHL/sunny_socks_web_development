document.addEventListener("DOMContentLoaded", () => {
  let voted = localStorage.getItem("voted") ?? -1;
  const buttons = document.querySelectorAll(".vote-card-button-large, .vote-card-button-small");

  buttons.forEach((btn, i) => {
    const counter = btn.parentElement.querySelector(".vote-card-counter-text");
    const heart = btn.querySelector("i");
    let count = parseInt(localStorage.getItem("count" + i) || 0);

    counter.textContent = count + " stemmen";
    if (voted == i) heart.style.color = "red";

    btn.onclick = () => {
      if (voted == i) {
        count--;
        voted = -1;
        heart.style.color = "black";
        localStorage.removeItem("voted");
      } else {
        if (voted != -1) {
          const oldBtn = buttons[voted];
          const oldCounter = oldBtn.parentElement.querySelector(".vote-card-counter-text");
          const oldHeart = oldBtn.querySelector("i");
          let oldCount = parseInt(localStorage.getItem("count" + voted) || 0);
          oldCount--;
          oldCounter.textContent = oldCount + " stemmen";
          localStorage.setItem("count" + voted, oldCount);
          oldHeart.style.color = "black";
        }
        count++;
        voted = i;
        heart.style.color = "red";
        localStorage.setItem("voted", i);
      }

      counter.textContent = count + " stemmen";
      localStorage.setItem("count" + i, count);
    };
  });
});
