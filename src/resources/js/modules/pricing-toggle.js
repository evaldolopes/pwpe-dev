export default function pricingToggle() {
    return {
        billing: 'monthly',
        setBilling(mode) {
            this.billing = mode;
        },
    };
}
