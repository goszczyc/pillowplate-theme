import animateHeight from "./animateHeight";

export default (buttons: NodeListOf<HTMLElement>) => {
  buttons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      const btn = e.currentTarget as HTMLElement;
      const content = btn.nextElementSibling as HTMLElement;
      // Get content element initial height
      const initialHeight = content.offsetHeight;
      // Toggle height
      content.classList.toggle("h-0");
      btn.classList.toggle('text-gray')
      btn.classList.toggle('border-gray')
      btn.classList.toggle('text-primary')
      btn.classList.toggle('border-primary')
      animateHeight(content, initialHeight);
    });
  });
};

