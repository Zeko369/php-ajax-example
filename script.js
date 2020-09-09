window.addEventListener("load", async () => {
  const res = await fetch("/api.php");
  const data = await res.json();

  const template = document.querySelector("#product");
  const list = document.querySelector("#items");

  for (const item of data) {
    const card = template.content.cloneNode(true);
    card.querySelector(".title").innerText = item;

    list.appendChild(card);
  }
});
