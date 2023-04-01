import fadeIn from "../helpers/fadeIn";
import fadeOut from "../helpers/fadeOut";
export default () => {
  const burger = document.querySelector('.burger') as HTMLElement;
  const menu = document.querySelector('.main-nav') as HTMLElement;

  burger.addEventListener('click', e=>{
    e.preventDefault();
    menu.classList.toggle('main-nav--active');
    if(menu.classList.contains('main-nav--active')) fadeIn(menu, 'flex', true);
    if(!menu.classList.contains('main-nav--active')) fadeOut(menu, 'flex', true);
  })
}