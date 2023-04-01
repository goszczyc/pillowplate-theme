import animateHeight from "./animateHeight";

export default (buttons: NodeListOf<HTMLElement>) => {
  buttons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      const btn = e.currentTarget as HTMLElement;
      const contentId = btn.dataset.contentId;
      const content = document.querySelector(
        `#content-${contentId}`
      ) as HTMLElement;
      
      // Get content element initial height
      const initialHeight = content.offsetHeight;
      // Toggle height
      content.classList.toggle("h-0");
      btn.classList.toggle("expandable__btn--active");
      animateHeight(content, initialHeight);
    });
  });
};

