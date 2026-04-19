import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import siteHeader from './modules/header';
import pricingToggle from './modules/pricing-toggle';
import faqAccordion from './modules/faq-accordion';
import contactForm from './modules/contact-form';

window.Alpine = Alpine;

Alpine.plugin(collapse);
Alpine.data('siteHeader', siteHeader);
Alpine.data('pricingToggle', pricingToggle);
Alpine.data('faqAccordion', faqAccordion);
Alpine.data('contactForm', contactForm);

Alpine.start();
