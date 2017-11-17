module.exports = {
    extends: 'airbnb-base',
    plugins: ['import', 'html'],
    settings: {
        'html/html-extensions': ['.html', '.vue'],
    },
    rules: {
        'no-unused-expressions': ['error', { allowTernary: true }],
    },
    env: {
        jest: true,
        browser: true,
    },
};