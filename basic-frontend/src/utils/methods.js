export function isDarkTheme() {
    let theme = localStorage.getItem('theme')
    return !(!theme || theme === 'light')
}