const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
            screens: {
                xs: '350px',
                sm: '480px',
                md: '768px',
                lg: '976px',
                xl: '1280px',
              },
            extend: {
            colors: {
                green: {
                    550: '#1EA813',
                },
                black:{
                    500: '#262626',
                },
                blue:{
                    550: '#131DAA',
                },
                red:{
                    550: '#AA131D'
                },
            },  
        },  
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
