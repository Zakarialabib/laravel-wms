const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
      
            screens: {
                xs: '350',
                sm: '480px',
                md: '768px',
                lg: '976px',
                xl: '1280px',
              },
                extend: {
            colors: {
                green: {
                    550: '#25D55F',
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
