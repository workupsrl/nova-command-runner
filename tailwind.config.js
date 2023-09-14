const path = require('path');

module.exports = {
    content: [
        "./resources/**/*.js",
        './resources/js/**/*.vue',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    important: '.command-runner',
    darkMode: 'class',
    safelist: [
    ],
};
