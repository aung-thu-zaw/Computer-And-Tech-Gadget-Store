module.exports = {
    darkMode: false,
    daisyui: {
        themes: ["light"],
    },
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                primaryBackground: "#1D1D1D",
                secondaryBackground: "#484848",
                primaryText: "#CCCCCC",
                secondaryText: "#484848",
                accent: "#FF0000",
            },
            screens: {
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
            },
        },
    },
    plugins: [require("daisyui")],
};
