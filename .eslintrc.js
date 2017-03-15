module.exports = {
    root: true,
    parser: 'babel-eslint',
    parserOptions: {
        sourceType: 'module'
    },
    env: {
        browser: true,
    },
    extends: [
        'eslint:recommended',
        'airbnb-base'
    ],
    // required to lint *.vue files
    plugins: [
        'html'
    ],
    'rules': {
        'arrow-parens': ['error', 'as-needed'],
        'comma-dangle': ['error', 'never'],
        'indent': ['error', 4]
    }
};
