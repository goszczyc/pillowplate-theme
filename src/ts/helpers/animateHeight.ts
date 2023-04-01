function animateHeight(element, initialHeight:number, duration:number = 200) {
  // get content element final height
  let targetHeight = initialHeight > 0 ? 0 : element.offsetHeight;
  element.animate(
    [{ height: `${initialHeight}px` }, { height: `${targetHeight}px` }],
    {
      duration: 200,
    }
  );
}

export default animateHeight;