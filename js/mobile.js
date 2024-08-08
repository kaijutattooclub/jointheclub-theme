document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.querySelector(
    '[data-collapse-toggle="mobile-menu-2"]',
  );
  const mobileMenu = document.getElementById("mobile-menu-2");

  toggleButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
    console.log("clicked");
    const expanded =
      toggleButton.getAttribute("aria-expanded") === "true" || false;
    toggleButton.setAttribute("aria-expanded", !expanded);
  });
});
