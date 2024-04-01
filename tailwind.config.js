/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "gray-bg": "#EFEFEF",
                "dark-blue": "#092C59",
                "medium-blue": "#2D5584",
                "light-blue": "#5380B1",
                "blue-windows": "#579ADD",
                "gold-rate": "#F1FF4D",
                "green-android": "#A6D864",
            },
            fontFamily: {
                Poppins: '["Poppins", "sans-serif"]',
            },
            height: {
                "1-tampilan-nav": "calc(100vh-80px)",
                "1-tampilan": "100vh",
            },
        },
    },
    plugins: [],
};
