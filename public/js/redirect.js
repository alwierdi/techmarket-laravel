function openLogin() {
    window.location.href = "/Public/loginPage.html";
}

function openHome() {
    window.location.href = "/Public/dashboard.html";
}

function openProduct() {
    window.location.href = "/product";
}

function openCart() {
    window.location.href = "/cart";
}

const products = [
    {
        id: 1,
        name: "Razer Blackshark",
        price: 9000000,
        category: "Headset",
        image: "img/razer_blackshark.jpeg",
    },
    {
        id: 2,
        name: "Hyper X Cloud II Pink Edition",
        price: 10000000,
        category: "Headset",
        image: "img/HyperX_Cloud_II_Pink_HyperX_Headset_PK_1_15_05_2015_19_15.jpg",
    },
    {
        id: 3,
        name: "VortexSeries ONI R1",
        price: 800000,
        category: "Mouse",
        image: "img/ONI_R1.jpeg",
    },
    {
        id: 4,
        name: "VXE R1 Pro Max",
        price: 800000,
        category: "Mouse",
        image: "img/vxe_r1.jpeg",
    },
    {
        id: 5,
        name: "Fantech Maxfit 81",
        price: 800000,
        category: "Keyboard",
        image: "img/maxfit_81.jpeg",
    },
    {
        id: 6,
        name: "Ajazz AK820 Pro",
        price: 800000,
        category: "Keyboard",
        image: "img/ajazz_ak820.jpeg",
    },
    {
        id: 7,
        name: "Zowie XL2566K",
        price: 800000,
        category: "Monitor",
        image: "img/ZOWIE-XL2566K-1-600x600.jpg",
    },
    {
        id: 8,
        name: "MSI G244F",
        price: 800000,
        category: "Monitor",
        image: "img/msi_g244f.jpeg",
    },
    {
        id: 9,
        name: "DX Racer Drifting Series",
        price: 800000,
        category: "Gaming Chair",
        image: "img/DXRacer-DRIFTING-SERIES.png",
    },
    {
        id: 10,
        name: "Gaming Chair",
        price: 800000,
        category: "Gaming Chair",
        image: "img/OIP.jpeg",
    },
];

// category
function displayProducts(category) {
    const productSection = document.getElementById("product-section");
    productSection.innerHTML = "";

    products.forEach((product) => {
        if (product.category === category) {
            const productCard = document.createElement("div");
            productCard.classList.add("card-product");
            productCard.innerHTML = `
        <div class="img-product" onclick="openProduct()">
          <img src="${product.image}" alt="${product.name}">
        </div>
        <p>${product.name}</p>
        <p>Rp${product.price.toLocaleString()}</p>
      `;
            productSection.appendChild(productCard);
        }
    });

    const categoryLinks = document.querySelectorAll(".nav-link");
    categoryLinks.forEach((link) => {
        link.classList.remove("active");
        link.style.backgroundColor = "";
        link.style.color = "#000";
    });
}

const categoryLinks = document.querySelectorAll(".nav-link");
categoryLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
        event.preventDefault();
        const category = event.target.dataset.category;
        categoryLinks.forEach((l) => l.classList.remove("active"));
        event.target.classList.add("active");
        displayProducts(category);
    });
});

// Format IDR
function number_format(number, decimals, dec_point, thousands_sep) {
    // Convert the number to a string
    number = number.toString();

    // Split the number into integer and decimal parts
    let parts = number.split(".");

    // Format the integer part with thousand separators
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);

    // Combine the integer and decimal parts with the decimal separator
    return parts.join(dec_point);
}

// Card Product

const productContainers = document.querySelectorAll(".card-product");

products.forEach((product) => {
    const productContainer = productContainers;
    const imgElement = productContainer.querySelector(".img-product img");
    const nameElement = productContainer.querySelector("p:nth-child(2)");
    const priceElement = productContainer.querySelector("p:nth-child(3)");

    imgElement.src = product.image;
    imgElement.alt = product.name;
    nameElement.textContent = product.name;
    priceElement.textContent = `Rp${number_format(product.price, 0, ",", ".")}`;

    productContainer.querySelector(".img-product").onclick = () =>
        openProduct();
});

function number_format(number, decimals, dec_point, thousands_sep) {
    // Implementasikan fungsi number_format di sini
}
