/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            backgroundImage: {
                thumbnail: "url(/public/images/gestion_proyecto_image.jpg)",
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
            borderLight: "#FFFDFD",
            borderStrokeLight: "#D1D5DB",
        },
    },
    darkMode: "class",

    plugins: [],
};
