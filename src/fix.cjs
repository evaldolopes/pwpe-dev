const fs=require('fs'); 
const path='resources/js/ui-components.js'; 
let content=fs.readFileSync(path, 'utf8'); 
const lines=content.split('\n'); 
const ok=lines.slice(0, 229); 
ok.push(`    // 7. Billing Toggle
    const billingBtns = document.querySelectorAll('.billing-btn');
    const prices = document.querySelectorAll('.billing-price');
    billingBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            billingBtns.forEach(b => {
                b.classList.remove('bg-indigo-600', 'text-white');
                b.classList.add('text-gray-500', 'dark:text-gray-400');
            });
            btn.classList.add('bg-indigo-600', 'text-white');
            btn.classList.remove('text-gray-500', 'dark:text-gray-400');
            const period = btn.getAttribute('data-period');
            prices.forEach(p => {
                p.classList.toggle('hidden', p.getAttribute('data-show') !== period);
            });
        });
    });
}`);
fs.writeFileSync(path, ok.join('\n'), 'utf8');
