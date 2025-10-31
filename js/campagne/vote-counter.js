document.addEventListener("DOMContentLoaded", () => {
  const buttons = [...document.querySelectorAll(".vote-card-button-large, .vote-card-button-small")];

  let voted = localStorage.getItem("voted");
  voted = voted === null ? -1 : parseInt(voted, 10);

  const get = i => parseInt(localStorage.getItem("count" + i) || "0", 10);
  const set = (i, val) => localStorage.setItem("count" + i, val);

  const counterEl = btn => btn.parentElement.querySelector(".vote-card-counter-text");
  const heartEl = btn => btn.querySelector("i");

  const paintAll = () => {
    buttons.forEach((btn, i) => {
      counterEl(btn).textContent = get(i) + " stemmen";
      heartEl(btn).style.color = (i === voted ? "red" : "black");
    });
  };

  paintAll();

  buttons.forEach((btn, i) => {
    btn.onclick = () => {
      if (voted === i) {
        set(i, Math.max(0, get(i) - 1));
        localStorage.removeItem("voted");
        voted = -1;
      } else {
        if (voted !== -1) set(voted, Math.max(0, get(voted) - 1));
        set(i, get(i) + 1);
        localStorage.setItem("voted", String(i));
        voted = i;
      }
      paintAll();
    };
  });
});
