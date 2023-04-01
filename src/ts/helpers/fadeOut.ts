export default (
  element: HTMLElement,
  display: string = "block",
  stopScroll: boolean = false
) => {
  if (stopScroll) {
    document.body.style.width = "unset";
    document.body.style.height = "unset";
    document.body.style.overflow = "unset";
  }

  element.style.display = display;
  element.animate(
    [
      { opacity: 1, transform: "translateY(0)" },
      { opacity: 0, transform: "translateY(-100px)" },
    ],
    {
      duration: 300,
      fill: "forwards",
      easing: "ease-out",
    }
  );
};
