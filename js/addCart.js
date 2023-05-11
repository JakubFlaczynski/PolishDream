class AddCart extends HTMLElement {
  constructor() {
    super();
    const shadowRoot = this.attachShadow({ mode: "closed" });
    let button = document.createElement("button");
    button.textContent = "Add to cart";
    button.classList.add("add-to-cart-btn", "btn");
    shadowRoot.innerHTML = `
        <style>
            .add-to-cart-btn {
            margin-top: 10px;
            width: 200px;
            height: 40px;
            font-size: 20px;
          }
          .btn {
            font-family: "Roboto", sans-serif;
            width: 200px;
            height: 40px;
            left: 562px;
            top: 641px;
            background: #fb8b24;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 28px;
            border: none;
            cursor: pointer;
            color: white;
            font-size: 25px;
          }
        </style>
      `;
    shadowRoot.append(button);
  }
}

customElements.define("add-cart", AddCart);
