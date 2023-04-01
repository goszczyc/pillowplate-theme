import L from "leaflet";
import "leaflet/dist/leaflet.css";
export default () => {
  const locations = document.querySelectorAll(
    "[data-lat-long]"
  ) as NodeListOf<HTMLElement>;

  if (locations.length === 0) return;

  let pins = [];

  const icon = L.icon({
    iconUrl: `${adminUrl.template_directory}/dist/images/pin.svg`,

    iconSize: [25, 36],
    iconAnchor: [12.5, 36],
    popupAnchor: [-3, -76],
  });

  locations.forEach((location) => {
    const coordinates = location.dataset.latLong.split(", ");
    if (coordinates.length !== 2) return;
    const lat = parseFloat(coordinates[0]);
    const long = parseFloat(coordinates[1]);

    pins.push({
      lat: lat,
      long: long,
    });
  });

  if (pins.length === 0) return;
  const view = pins[0];
  let map = L.map("map").setView([view.lat, view.long], 10);

  pins.forEach((pin) => {
    const marker = L.marker([pin.lat, pin.long], { icon: icon }).addTo(map);
  });

  L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
      '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
  }).addTo(map);
};
