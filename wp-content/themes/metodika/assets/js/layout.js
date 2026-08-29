document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector(".header__burger");
  const menu = document.querySelector("#primary-menu");

  if (burger && menu) {
    burger.addEventListener("click", function () {

      this.classList.toggle("is-active");

      const expanded =
        this.getAttribute("aria-expanded") === "true" ? false : true;
      this.setAttribute("aria-expanded", expanded);
      const isOpen = menu.classList.toggle("toggled");
      document.body.classList.toggle("menu-open");
      const allParents = document.querySelectorAll(
        "#primary-menu .menu-item-has-children",
      );

      if (isOpen) {
        allParents.forEach(function (parent) {
          parent.classList.add("sub-menu-open");
        });
      } else {
        setTimeout(function () {
          allParents.forEach(function (parent) {
            parent.classList.remove("sub-menu-open");
          });
        }, 300);
      }
    });
  }

  const parents = document.querySelectorAll(
    "#primary-menu .menu-item-has-children > a",
  );
  parents.forEach(function (parentLink) {
    parentLink.addEventListener("click", function (e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        const parentLi = this.parentElement;
        parentLi.classList.toggle("sub-menu-open");
      }
    });
  });
});