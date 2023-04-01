export default (
  element: HTMLElement,
  display: string = "block",
  stopScroll: boolean = false
) => {
  if (stopScroll) {
    document.body.style.width = "100vw";
    document.body.style.height = "100vh";
    document.body.style.overflow = "hidden";
  }

  element.style.display = display;
  element.animate(
    [
      { opacity: 0, transform: "translateY(-100px)" },
      { opacity: 1, transform: "translateY(0)" },
    ],
    {
      duration: 300,
      fill: "forwards",
      easing: "ease-out",
    }
  );
};
