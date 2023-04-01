export default () => {
  const divisions = document.querySelectorAll(
    "[href=show-division]"
  ) as NodeListOf<HTMLElement>;

  if (divisions.length === 0) return;

  import("../helpers/expand-divisions-handle").then((module) => {
    const expandDivision = module.default;
    expandDivision(divisions);
  });
};
