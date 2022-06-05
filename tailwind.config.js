 const colors = require('tailwindcss/colors')
const heropatterns = require("tailwindcss-hero-patterns/src/patterns")
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports =
{
    "purge": [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    "theme": {
        heroPatterns: {
          topography: heropatterns.circuitboard,
        },
        "colors": {
            'primary': {
                DEFAULT: 'f5bb19',
                '50': '#fffcf4',
                '100': '#fef8e8',
                '200': '#fdeec6',
                '300': '#fbe4a3',
                '400': '#f8cf5e',
                '500': '#f5bb19',
                '600': '#dda817',
                '700': '#b88c13',
                '800': '#93700f',
                '900': '#785c0c',
                '950': '#564106',
                '990': '#151001'
            },
            "background": colors.coolGray,
            "gray": colors.coolGray,
            "black": colors.black,
            "white": "#FFFFFF"
        },
        "extend": {
            "fontFamily": {
                "primary": ["Nunito Sans", ...defaultTheme.fontFamily.sans],
            },
            "maxWidth": {
                "1/3": "33%",
                "1/2": "50%",
                "1/4": "25%"
            },
            "minWidth": {
                "1/3": "33%",
                "1/2": "50%",
                "1/4": "25%"
            }
        }
    },
    "variants": {
        "extend": {}
    },
    "plugins": [
        require('tailwindcss-hero-patterns')
    ]
}