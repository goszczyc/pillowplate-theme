export default () => {
  const buttons = document.querySelectorAll(
    ".expandable__btn"
  ) as NodeListOf<HTMLElement>;

  if(buttons.length === 0) return;
  
  import("../helpers/expand-handle").then(module => {
    const expandHandle = module.default;
    expandHandle(buttons);
  }
  )
};