/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            backgroundImage: {
                thumbnail: "url(/public/images/gestion_proyecto_image.jpg)",
            },
            fontFamily: {
                Montserrat: ["Montserrat", "serif"],
            },
        },
        colors: {
            logo: {
                900: "#1E3A8A",
                500: "#1E2A41",
            },
            title: {
                900: "#111827",
                200: "#374151",
            },
            bigTitle: {
                900: "#1E1E1E",
            },
            copyright: "#9CA3AF",
            borderLight: "#FFFDFD",
            borderStrokeLight: "#D1D5DB",
            error: {
                900: "#FF0000",
                600: "#FF3B3B",
                200: "#F78686",
                100: "#FFB1B1",
            },
            delete: "#C60101",
            titleLight: {
                900: "#F2E9E9",
            },
            desactivate: "#96A6D4",
            bgLight: "#F4F4F4",
            route: {
                900: "#4F46E5",
                700: "#4841BB",
                500: "#6F66FF",
            },
            green: {
                700: "#00D964",
                500: "#0FDF6F",
            },
        },
    },
    darkMode: "class",

    plugins: [],
};
