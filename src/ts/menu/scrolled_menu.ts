export default () => {
  const header = document.querySelector('.header') as HTMLElement;

  window.addEventListener('scroll', e => {
    if(window.scrollY > 80) {
      header.classList.add('py-4')
    } else {
      header.classList.remove('py-4')
    }
  })
}