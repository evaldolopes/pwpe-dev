export default function faqAccordion() {
    return {
        open: 0,
        items: [
            {
                q: 'Vocês fazem migração de site?',
                a: 'Sim. O ideal é transformar isso em CTA forte na home e também na página de hospedagem.',
            },
            {
                q: 'Posso contratar só a hospedagem?',
                a: 'Sim. O cliente pode contratar somente a hospedagem e publicar seu próprio projeto.',
            },
            {
                q: 'Vocês também criam o site?',
                a: 'Sim. A empresa pode vender hospedagem e criação de sites como soluções complementares.',
            },
            {
                q: 'Tem suporte humano?',
                a: 'Sim. Esse é um diferencial forte da marca e precisa aparecer desde a primeira dobra.',
            },
        ],
        toggle(index) {
            this.open = this.open === index ? null : index;
        },
    };
}
