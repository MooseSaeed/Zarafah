const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/views/**/*.blade.php",
        "./resources/views/admin/**/*.blade.php",
        "./resources/views/admin/posts/*.blade.php",
        "./resources/views/auth/*.blade.php",
        "./resources/views/components/*.blade.php",
        "./resources/views/layouts/*.blade.php",
        "./resources/views/posts/*.blade.php",
        "./resources/views/vendor/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
