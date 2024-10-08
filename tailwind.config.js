/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue", "./public/js/*.js", "./public/json/*.json"],
    theme: {
        extend: {
            colors: {
                color1: "#172554", //bluedark
                color2: "#1e3a8a", //bluesoft
                color3: "#f59e0b", //gold
                color4: "#f9fafb", //white
            },
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
            },
            screens: {
                tablet: { max: "1024px" },
                phone: { max: "600px" },
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
