async function getBitCoin() {
  const response = await fetch("https://api.coincap.io/v2/assets/bitcoin");
  const bitcoinValue = await response.json().then((corpo) => {
    const contactSection = document.getElementById("divTal");

    const valorInp = document.createElement("input");
    const bitCoinPrice = parseFloat(corpo.data.priceUsd).toFixed(2);

    valorInp.value = parseFloat(bitCoinPrice).toLocaleString("pt-br", {
      style: "currency",
      currency: "BRL",
    });
    valorInp.type = "text";
    valorInp.id = "valorBC";
    valorInp.name = "valorBC";
    valorInp.className = "form-control";
    // valorInp.disabled = "true";

    const iconBit = document.createElement("i");
    iconBit.className = "fa-brands fa-bitcoin fa-lg fa-fw";
    iconBit.ariaHidden = "true";

    contactSection.append(valorInp, iconBit);

    console.log(corpo.data.priceUsd);
  });
}
getBitCoin();
