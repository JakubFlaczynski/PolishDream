document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".add-to-cart-btn");

  buttons.forEach((button) => {
    button.addEventListener("click", function () {
      const productId = this.getAttribute("data-id");

      // Send request to the server to add item to the cart
      fetch("./php/add_to_cart.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `product_id=${productId}`,
      })
        .then((response) => response.text()) // Using .text() temporarily to inspect the response
        .then((data) => {
          console.log(data); // Output raw response for debugging
          try {
            const jsonData = JSON.parse(data); // Attempt to parse JSON response
            if (jsonData.status === "success") {
              alert("Product added to cart");
            } else {
              alert(jsonData.message || "Error adding product to cart");
            }
          } catch (error) {
            console.error("Error parsing JSON:", error);
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    });
  });
});
