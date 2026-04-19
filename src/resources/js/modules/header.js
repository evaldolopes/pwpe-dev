export default function siteHeader() {
    return {
        mobileMenu: false,
        darkMode: true,

        init() {
            this.darkMode = localStorage.getItem('theme') !== 'light';
            this.$watch('darkMode', (val) => {
                localStorage.setItem('theme', val ? 'dark' : 'light');
                document.documentElement.classList.toggle('dark', val);
            });
        },

        toggleMobileMenu() {
            this.mobileMenu = !this.mobileMenu;
        },

        toggleDarkMode() {
            this.darkMode = !this.darkMode;
        },
    };
}
