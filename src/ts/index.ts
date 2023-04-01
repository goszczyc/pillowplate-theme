require("fslightbox");
import expandOffer from "./offer/expand-init";
import expandTerms from "./contact/expand-terms";
import scrollTop from "./scrollTop";
import burger from "./menu/burger";
import subMenu from "./menu/sub_menu";
import scrolled_menu from "./menu/scrolled_menu";
import expandDivisionsInit from "./contact/expand-divisions-init";
import map_init from "./map/map_init";
import collaborators from "./collaborators/collaborators";
import documents from "./menu/documents";

document.addEventListener("DOMContentLoaded", () => {
    documents();
    collaborators();
    map_init();
    expandOffer();
    expandTerms();
    scrollTop();
    burger();
    subMenu();
    scrolled_menu();
    expandDivisionsInit();
});
