export default () => {
  const buttons = document.querySelectorAll(
    ".terms-expand"
  ) as NodeListOf<HTMLElement>;

  if (buttons.length === 0) return;

  import("../helpers/expand-handle").then((module) => {
    const expandHandle = module.default;
    expandHandle(buttons);
  });
};
