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
            },
            fontFamily: {
                Poppins: '["Poppins", "sans-serif"]',
            },
        },
    },
    plugins: [],
};
