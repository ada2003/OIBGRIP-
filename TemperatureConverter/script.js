const tempInput = document.getElementById('tempInput');
const unitSelect = document.getElementById('unitSelect');
const convertBtn = document.getElementById('convertBtn');
const resultInput = document.getElementById('resultInput');
const tempUnit = document.getElementById('tempUnit');
const resultUnit = document.getElementById('resultUnit');

convertBtn.addEventListener('click', function() {
  switch (unitSelect.value) {
    case 'celsiusToFahrenheit':
      tempUnit.textContent = 'celsius';
      resultUnit.textContent = 'fahrenheit';
      resultInput.value = (tempInput.value * 1.8 + 32).toFixed(2);
      break;
    case 'celsiusToKelvin':
      tempUnit.textContent = 'celsius';
      resultUnit.textContent = ' kelvin';
      resultInput.value = (tempInput.value * 1 + 273.15).toFixed(2);
      break;
    case 'fahrenheitToCelsius':
      tempUnit.textContent = 'fahrenheit';
      resultUnit.textContent = 'celsius';
      resultInput.value = ((tempInput.value - 32) / 1.8).toFixed(2);
      break;
    case 'fahrenheitToKelvin':
      tempUnit.textContent = '°fahrenheit';
      resultUnit.textContent = ' kelvin';
      resultInput.value = ((tempInput.value - 32) / 1.8 + 273.15).toFixed(2);
      break;
    default:
      console.error('Invalid conversion type');
  }
});