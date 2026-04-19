export default function contactForm() {
    return {
        loading: false,
        submit() {
            this.loading = true;
        },
    };
}
