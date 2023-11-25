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
            copyright: "#9CA3AF",
            borderLight: "#FFFDFD",
            borderStrokeLight: "#D1D5DB",
            error: {
                900: "#FF0000",
                600: "#FF3B3B",
            },
            delete: "#C60101",
        },
    },
    darkMode: "class",

    plugins: [],
};
