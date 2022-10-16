let products = {
  data: [
    {
      productName: "Ho hoNG",
      category: "Hoa",
      price: "30",
      image: "hoa-tigon.jpg",
    },
    {
      productName: "Rose",
      category: "Hoa",
      price: "49",
      image: "hoa-hong.jpg",
    },
    {
      productName: "Hydrangeas",
      category: "Hoa",
      price: "99",
      image: "hoa-cam-tu-cau.jpg",
    },
    {
      productName: "Sun flower",
      category: "Hoa",
      price: "29",
      image: "hoa-huong-duong.jpg",
    },
    {
      productName: "Orchid",
      category: "Hoa",
      price: "129",
      image: "hoa-lan.jpg",
    },
    {
      productName: "Lotus flower",
      category: "Hoa",
      price: "89",
      image: "hoa-sen.jpg",
    },
    {
      productName: "Natural flower bird",
      category: "Hoa",
      price: "189",
      image: "",
    },
    {
      productName: "Tulips",
      category: "Hoa",
      price: "49",
      image: "hoa-tulip.jpg",
    },
  ],
};

for (let i of products.data) {
  //Create Card
  let card = document.createElement("div");
  //Card should have category and should stay hidden initially
  card.classList.add("card", i.category, "hide");
  //image div
  let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");
  //img tag
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);
  //container
  let container = document.createElement("div");
  container.classList.add("container");
  //product name
  let name = document.createElement("h5");
  name.classList.add(".products_name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);
  //price
  let price = document.createElement("h6");
  price.innerText = "$" + i.price;
  container.appendChild(price);

  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}

function filterProduct(value) {
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });


  let elements = document.querySelectorAll(".card");
  elements.forEach((element) => {
    if (value == "all") {
      element.classList.remove("hide");
    } else {
      if (element.classList.contains(value)) {
        element.classList.remove("hide");
      } else {
        element.classList.add("hide");
      }
    }
  });
}

document.getElementById("search").addEventListener("click", () => {
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".name");
  let cards = document.querySelectorAll(".card");

  elements.forEach((element, index) => {
    if (element.innerText.includes(searchInput.toUpperCase())) {
      cards[index].classList.remove("hide");
    } else {
      cards[index].classList.add("hide");
    }
  });
});

window.onload = () => {
  filterProduct("all");
};