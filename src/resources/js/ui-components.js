export function initUiComponents() {
    // 1. Mobile Menu
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClosed = document.getElementById('menu-icon-closed');

    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIconOpen.classList.remove('hidden');
                menuIconOpen.classList.add('inline-flex');
                menuIconClosed.classList.remove('inline-flex');
                menuIconClosed.classList.add('hidden');
            } else {
                mobileMenu.classList.add('hidden');
                menuIconOpen.classList.add('hidden');
                menuIconOpen.classList.remove('inline-flex');
                menuIconClosed.classList.add('inline-flex');
                menuIconClosed.classList.remove('hidden');
            }
        });
    }

    // 2. Custom Dropdowns
    const dropdowns = document.querySelectorAll('.custom-dropdown');
    dropdowns.forEach(dropdown => {
        const trigger = dropdown.querySelector('.custom-dropdown-trigger');
        const content = dropdown.querySelector('.custom-dropdown-content');

        if (trigger && content) {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                // close others
                dropdowns.forEach(d => {
                    if (d !== dropdown) {
                        const otherContent = d.querySelector('.custom-dropdown-content');
                        if (otherContent && !otherContent.classList.contains('hidden')) {
                            closeDropdown(otherContent);
                        }
                    }
                });

                if (content.classList.contains('hidden')) {
                    openDropdown(content);
                } else {
                    closeDropdown(content);
                }
            });
        }
    });

    document.addEventListener('click', (e) => {
        dropdowns.forEach(dropdown => {
            const content = dropdown.querySelector('.custom-dropdown-content');
            if (content && !content.classList.contains('hidden') && !dropdown.contains(e.target)) {
                closeDropdown(content);
            }
        });
    });

    function openDropdown(content) {
        content.style.display = 'block';
        content.classList.remove('hidden');
        requestAnimationFrame(() => {
            content.classList.remove('opacity-0', 'scale-95');
            content.classList.add('opacity-100', 'scale-100');
        });
    }

    function closeDropdown(content) {
        content.classList.remove('opacity-100', 'scale-100');
        content.classList.add('opacity-0', 'scale-95');
        setTimeout(() => {
            content.style.display = 'none';
            content.classList.add('hidden');
        }, 200);
    }

    // 3. Modals
    const openModalButtons = document.querySelectorAll('[data-action="open-modal"]');
    const closeModalButtons = document.querySelectorAll('[data-action="close-modal"]');
    
    openModalButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const modalName = btn.getAttribute('data-modal');
            const modal = document.querySelector(`[data-modal-name="${modalName}"]`);
            if (modal) {
                openModal(modal);
            }
        });
    });

    closeModalButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const modalName = btn.getAttribute('data-modal');
            const modal = document.querySelector(`[data-modal-name="${modalName}"]`);
            if (modal) {
                closeModal(modal);
            }
        });
    });

    // Close on backdrop click
    document.querySelectorAll('.custom-modal').forEach(modal => {
        const backdrop = modal.querySelector('.custom-modal-backdrop');
        if (backdrop) {
            backdrop.addEventListener('click', () => {
                closeModal(modal);
            });
        }
    });

    function openModal(modal) {
        modal.style.display = 'block';
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-y-hidden');
        
        const backdrop = modal.querySelector('.custom-modal-backdrop');
        const panel = modal.querySelector('.custom-modal-panel');
        
        requestAnimationFrame(() => {
            if(backdrop) backdrop.classList.remove('opacity-0');
            if(panel) {
                panel.classList.remove('opacity-0', 'translate-y-4', 'sm:translate-y-0', 'sm:scale-95');
                panel.classList.add('opacity-100', 'translate-y-0', 'sm:scale-100');
            }
        });

        // Focus first input
        setTimeout(() => {
            const firstInput = modal.querySelector('input');
            if (firstInput) firstInput.focus();
        }, 100);
    }

    function closeModal(modal) {
        const backdrop = modal.querySelector('.custom-modal-backdrop');
        const panel = modal.querySelector('.custom-modal-panel');
        
        if(backdrop) backdrop.classList.add('opacity-0');
        if(panel) {
            panel.classList.remove('opacity-100', 'translate-y-0', 'sm:scale-100');
            panel.classList.add('opacity-0', 'translate-y-4', 'sm:translate-y-0', 'sm:scale-95');
        }
        
        setTimeout(() => {
            modal.style.display = 'none';
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-y-hidden');
        }, 300);
    }

    // Modal with errors should stay open
    document.querySelectorAll('.custom-modal').forEach(modal => {
        if (modal.hasAttribute('show') && modal.getAttribute('show') == '1') {
            openModal(modal);
        }
    });

    // 4. Fade-out messages
    const fadeMessages = document.querySelectorAll('.fade-out-message');
    fadeMessages.forEach(msg => {
        setTimeout(() => {
            msg.style.transition = 'opacity 0.5s';
            msg.style.opacity = '0';
            setTimeout(() => msg.remove(), 500);
        }, 2000);
    });

    // 5. FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const btn = item.querySelector('.faq-button');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');

        if (btn && content && icon) {
            btn.addEventListener('click', () => {
                const isOpen = item.getAttribute('data-open') === 'true';
                
                // close all others optionally
                faqItems.forEach(otherItem => {
                    if(otherItem !== item) {
                        otherItem.setAttribute('data-open', 'false');
                        otherItem.querySelector('.faq-content')?.classList.add('hidden');
                        const otherIcon = otherItem.querySelector('.faq-icon');
                        if(otherIcon) otherIcon.textContent = '+';
                    }
                });

                if (isOpen) {
                    item.setAttribute('data-open', 'false');
                    content.classList.add('hidden');
                    icon.textContent = '+';
                } else {
                    item.setAttribute('data-open', 'true');
                    content.classList.remove('hidden');
                    icon.textContent = '−';
                }
            });
        }
    });

    // 6. Header/Theme (previously in header.js)
    const initTheme = () => {
        const checkTheme = () => {
            if (localStorage.getItem('theme') !== 'light') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        };
        checkTheme();
        
        // Expose function globally for buttons that want to toggle theme
        window.toggleDarkMode = () => {
            const currentTheme = localStorage.getItem('theme');
            localStorage.setItem('theme', currentTheme === 'light' ? 'dark' : 'light');
            checkTheme();
        };
    };
    initTheme();
    // 7. Billing Toggle
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
}