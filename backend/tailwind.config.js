import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                heading: ["Figtree", "sans-serif"],
                body: ["Inter", "sans-serif"],
            },
            colors: {
                primary: {
                    DEFAULT: "#06303E",
                    light: "#cce6eb",

                    dark: "#041f27",
                },
                secondary: {
                    DEFAULT: "#4C5F9A", // purple-600
                    light: "#a855f7", // purple-500
                    dark: "#6b21a8", // purple-800
                },
            },
        },
    },

    plugins: [forms],
};
