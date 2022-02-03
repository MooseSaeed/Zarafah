const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
