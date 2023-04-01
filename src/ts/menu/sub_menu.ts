import animateHeight from "../helpers/animateHeight";
export default () => {
  const buttons = document.querySelectorAll(
    ".show-submenu"
  ) as NodeListOf<HTMLElement>;

  buttons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      const current = e.currentTarget as HTMLElement;
      const subMenu = current.nextElementSibling as HTMLElement;

      const initialHeight = subMenu.offsetHeight;
      subMenu.classList.toggle("h-0");
      animateHeight(subMenu, initialHeight, 300);
    });
  });
};
