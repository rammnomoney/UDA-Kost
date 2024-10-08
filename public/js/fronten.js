/* Header */
const header = document.querySelector("header");
const mobileMenu = document.querySelector("#mobile-menu");

mobileMenu.addEventListener("click", () => {
  header.classList.toggle("active");
  mobileMenu.classList.toggle("active");
});

/* FAQ */
document.querySelectorAll('.faq .faq-item h3').forEach((header) => {
  header.addEventListener('click', () => {
    const faqItem = header.parentElement;
    faqItem.classList.toggle('faq-active');
  });
});
