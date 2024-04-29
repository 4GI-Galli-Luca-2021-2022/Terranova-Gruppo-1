window.onload = function () {
  const signButtons = document.querySelectorAll(".sign-button");

  signButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Get service name
      const serviceName = this.parentNode.querySelector("h4").textContent;
      alert(serviceName);

      // Set the value of hidden input field
      document.getElementById("nome-contratto").value = serviceName;

      // Find the nearest parameterContainer
      const parameterContainer = this.closest(".newContract").querySelector(".parameterContainer");
      const form = parameterContainer.querySelector("form");

      if (!form.checkValidity()) {
        alert("Please fill in all required fields.");
        return;
      }

      const formData = new FormData(form);

      fetch("newContract.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          if (response.ok) {
            alert("Data Sent correctly");
            return response.text();
          }
          throw new Error("Network response was not ok.");
        })
        .then((data) => {
          console.log(data); // Log response from server
          // Handle success response from server, if needed
        })
        .catch((error) => {
          console.error("There was a problem with the fetch operation:", error);
          // Handle error
        });
    });
  });
};
