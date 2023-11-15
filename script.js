window.addEventListener('load', function () {
  const parentSelector = document.querySelector('.marquee');
  const clone = parentSelector.innerHTML;
  const firstElement = parentSelector.children[0];
  let i = 0;
  console.log(firstElement);
  parentSelector.insertAdjacentHTML('beforeend', clone);
  parentSelector.insertAdjacentHTML('beforeend', clone);
  parentSelector.insertAdjacentHTML('beforeend', clone);
  parentSelector.insertAdjacentHTML('beforeend', clone);
  parentSelector.insertAdjacentHTML('beforeend', clone);
  parentSelector.insertAdjacentHTML('beforeend', clone);
  parentSelector.insertAdjacentHTML('beforeend', clone);

  setInterval(function () {
    firstElement.style.marginLeft = `-${i}px`;
    if (i > firstElement.clientWidth) {
      i = 0;
    }
    i = i + 0.15;
  }, 0);
});



// function show Google Maps
function initMap(){
  const myLocate = {lat: 11.709130965635119, lng: 109.19762399602159}
  const map = new google.maps.Map(document.getElementById('map'),{
    center: myLocate,
    zoom: 16
  });

  const marker = new google.maps.Marker({
    position: myLocate,
    map: map,
    title: 'Amanoi'
  });
}


/*Gallery SwiperJS init*/
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper', {
      direction: 'horizontal',
      slidesPerView: 1,
      slidesPerGroup: 1,
      initialSlide: 1,
      grabCursor: true,
      loop: true,
      slideToClickedSlide: true,
      autoHeight: true,
    });
  });