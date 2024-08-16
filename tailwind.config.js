/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.{html,js}", "./js/*.js"],
    theme: {
        extend: {
            colors: {
                color1: "#172554", //bluedark
                color2: "#1e3a8a", //bluesoft
                color3: "#d2a01b", //gold
                color4: "#f9fafb", //white
            },
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
            },
            screens: {
                tablet: { max: "1024px" },
                phone: {max : "600px"}
            },
            animation: {
                rotateNav: "rotateNav 400ms linear forwards",
            },
            keyframes: {
                rotateNav: {
                    "0%": { transform: "rotateZ(-90deg) rotateX(90deg) scale(0.1)" },
                    "100%": { transform: "rotateZ(0) rotateX(0deg) scale(1)", opacity: 1 },
                },
            },
        },
    },
    plugins: [],
};
