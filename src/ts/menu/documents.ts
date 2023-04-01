export default () => {
    const menuItems = document.querySelectorAll(
        ".documents__menu-item--parent > a"
    ) as NodeListOf<HTMLElement>;
    if (menuItems.length === 0) return;

    menuItems.forEach((menuItem) => {
        menuItem.addEventListener("click", (e) => {
            e.preventDefault();
            if (window.innerWidth > 576) return;

            let target = e.currentTarget as HTMLElement;

            let subMenu = target.nextElementSibling;
            menuItems.forEach((menuItem) => {
                menuItem.nextElementSibling.classList.add("h-0");
            });

            subMenu.classList.toggle("h-0");
        });
    });
};
