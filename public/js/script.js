const button = document.querySelector("button");

button.onsubmit = (event) => {
  event.preventDefault();
  const http = new XMLHttpRequest();
  const formElement = document.querySelector("form");
  const formData = new FormData(formElement);

  http.addEventListener("load", (event) => {
    alert(event.target.responseText);
  });
  http.addEventListener("error", () => {
    alert("Something wrong !!!");
  });
  http.open("POST", "utl");
  http.send(formData);
};
