import confetti from "https://esm.run/canvas-confetti@1";

document.addEventListener("DOMContentLoaded", function () {
  const currencyButtons = document.querySelectorAll(".btn-currency");
  const amountButtons = document.getElementById("amount-buttons");
  const otherAmountInput = document.getElementById("other-amount");
  const donationForm = document.getElementById("donation-form");
  const emailInput = document.getElementById("email-donate");
  const donateButton = document.getElementById("donate-button");
  const paymentForm = document.getElementById("payment-donation");
  const collectedDonate = document.getElementById("collected-donate");
  const neededDonate = document.getElementById("needed-donate");

  const exchangeRates = {
    "Dollar ($)": 16000,
    "Euro (€)": 17000,
    "Rupiah (Rp)": 1,
  };

  const amounts = {
    "Dollar ($)": [0.5, 1, 2, 10],
    "Euro (€)": [1, 2.5, 4, 12],
    "Rupiah (Rp)": [5000, 20000, 50000, 100000],
  };

  // set collected and neede value (asume by API)
  // note: format depend on user input paw (asume Rupiah)
  const needed = parseInt(neededDonate.textContent.replace(/[^0-9]/g, ""));
  let collected = parseInt(collectedDonate.textContent.replace(/[^0-9]/g, ""));
  let selectedAmount;
  let selectedCurrency;

  // formatter to rb
  const formatToRupiah = (n) => {
    let duit;
    let symbol;

    if (n < 900) {
      duit = n;
      symbol = "";
    } else if (n < 900000) {
      duit = n / 1000;
      symbol = "rb";
    }

    return `${duit}${symbol}`;
  };

  // converting currency
  const convertCurrency = (currency, value, formatRupiah) => {
    switch (currency) {
      case "Dollar ($)":
        selectedCurrency = currency;
        return new Intl.NumberFormat("en-US", {
          style: "currency",
          currency: "USD",
        }).format(value);
      case "Euro (€)":
        selectedCurrency = currency;
        return new Intl.NumberFormat("de-DE", {
          style: "currency",
          currency: "EUR",
        }).format(value);
      case "Rupiah (Rp)":
        selectedCurrency = currency;
        return formatRupiah === "Rp"
          ? new Intl.NumberFormat("id-ID", {
              style: "currency",
              currency: "IDR",
            }).format(value)
          : formatToRupiah(Number(value));

      default:
        break;
    }
  };

  // handle currency button click
  currencyButtons.forEach((button) => {
    button.addEventListener("click", function () {
      currencyButtons.forEach((btn) => btn.classList.remove("btn-selected"));
      this.classList.add("btn-selected");

      updateAmounts(this.getAttribute("data-value"));
    });
  });

  // update donation amounts
  const updateAmounts = (currency) => {
    const amountValues = amounts[currency];
    const buttons = amountButtons.querySelectorAll(".btn-amount");

    // change currency format
    buttons.forEach((button, index) => {
      if (button.tagName.toLowerCase() === "button") {
        button.textContent = convertCurrency(currency, amountValues[index]);
        button.setAttribute("data-value", amountValues[index]);
      }
    });

    amountButtons
      .querySelectorAll(".btn-amount")
      .forEach((btn) => btn.classList.remove("btn-selected"));
    otherAmountInput.value = "";
  };

  // handle donation amount button click
  amountButtons.addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-amount")) {
      amountButtons
        .querySelectorAll(".btn-amount")
        .forEach((btn) => btn.classList.remove("btn-selected"));
      e.target.classList.add("btn-selected");
      otherAmountInput.value = "";
    }
  });

  // handle other amount input focus
  otherAmountInput.addEventListener("focus", () => {
    amountButtons
      .querySelectorAll(".btn-amount")
      .forEach((btn) => btn.classList.remove("btn-selected"));
  });

  // handle email input change
  emailInput.addEventListener("input", () => {
    checkDonateButtonState();
  });

  // check state of donate button
  const checkDonateButtonState = () => {
    const selectedCurrencyButton = document.querySelector(
      ".btn-currency.btn-selected"
    );
    const selectedAmountButton = amountButtons.querySelector(
      ".btn-amount.btn-selected"
    );
    donateButton.disabled =
      !selectedCurrencyButton ||
      !selectedAmountButton ||
      emailInput.value.trim() === "";
  };

  // handle form donation
  donationForm.addEventListener("submit", (e) => {
    e.preventDefault();

    selectedAmount =
      document
        .querySelector(".btn-amount.btn-selected")
        ?.getAttribute("data-value") || otherAmountInput.value;
    const email = emailInput.value;

    // input payment data
    document.getElementById("email-payment").textContent = email;
    document.getElementById("amount-payment").textContent = convertCurrency(
      selectedCurrency,
      selectedAmount,
      "Rp"
    );

    donationForm.reset();
    checkDonateButtonState();
  });

  //  payment and surprise 🎉
  paymentForm.addEventListener("click", (e) => {
    e.preventDefault();

    // payment processing
    let convertedAmount;
    if (selectedCurrency === "Dollar ($)") {
      convertedAmount = Number(selectedAmount) * exchangeRates["Dollar ($)"];
    } else if (selectedCurrency === "Euro (€)") {
      convertedAmount = Number(selectedAmount) * exchangeRates["Euro (€)"];
    } else {
      convertedAmount = Number(selectedAmount);
    }

    let updateCollected = new Intl.NumberFormat("id-ID", {
      style: "currency",
      currency: "IDR",
    }).format(Number(collected) + convertedAmount);

    collectedDonate.textContent = updateCollected;

    collected += convertedAmount;

    // change text color if collected >= needed
    if (collected >= needed) {
      collectedDonate.style = "color: green;";
    }

    // remove modal
    bootstrap.Modal.getInstance(
      document.getElementById("modal-payment")
    ).hide();

    confetti({
      particleCount: 150,
      spread: 60,
    });
  });

  // initialize UI state
  updateAmounts("Rupiah (Rp)");
  checkDonateButtonState();
});
