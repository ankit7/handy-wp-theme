document.addEventListener('DOMContentLoaded', function (event) {
  const access_key = '3a3eaa6f93c4039ae69a0a35554eb58f';
  let prices = document.querySelectorAll('.product-price');
  let shippings = document.querySelectorAll('.product-shipping');
  let links = document.querySelectorAll('.product-link');

  const updater = (
    newPrice = '$169',
    newId = '83780',
    newShipping = 'Free Shipping'
  ) => {
    prices.forEach((el) => {
      el.innerText = newPrice;
    });
    shippings.forEach((el) => {
      el.innerText = newShipping;
    });
    links.forEach((el) => {
      el.href = `/?p=${newId}`;
    });
  };

  // get the API result via Fetch
  fetch(`https://api.ipstack.com/check?access_key=${access_key}`)
    .then((response) => response.json())
    .then((data) => {
      const country = data.country_code;
      const continent = data.continent_code;
      console.log(country);
      if (country === 'US') {
        return;
      } else if (country === 'NO') {
        updater('1895 NOK', '81918');
      } else if (country === 'GB') {
        updater('€199', '80985');
      } else if (country === 'CA') {
        updater('USD $249', '83780');
      } else if (country === 'AU') {
        updater('$169 USD', '121285', 'SHIPPING');
        // homeNotification = false;
      } else if (continent === 'EU') {
        updater('€189', '165562');
      } else {
        updater('$169', '124', 'SHIPPING');
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
});
