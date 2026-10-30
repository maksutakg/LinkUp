// Retrieve the value of the 'color-mode' key from local storage
var colorMode = localStorage.getItem('color-mode');

// Check if the value is valid and set it to 'auto' if not
if (!colorMode || (colorMode !== 'light' && colorMode !== 'dark')) {
  colorMode = 'auto';
  localStorage.setItem('color-mode', colorMode);
}

var isDarkMode = colorMode === 'dark' || (colorMode === 'auto' && window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);

// Paint the browser's blank canvas in the right scheme and exact background before any CSS loads (no white frame on F5 or navigation)
document.documentElement.style.colorScheme = colorMode === 'auto' ? 'light dark' : colorMode;
document.documentElement.style.backgroundColor = isDarkMode ? '#151824' : '#f5f6fa';
window.addEventListener('DOMContentLoaded', function () {
  document.documentElement.style.backgroundColor = '';
}, { once: true });
