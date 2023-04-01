export default () => {
  const scrollBtn = document.querySelector('.scroll-top') as HTMLElement;

  scrollBtn.addEventListener('click', e=> {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    })
  })
}