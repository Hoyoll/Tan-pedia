import { Content } from "./model/Content.js";
import { Popup } from "./model/Popup.js";
document.addEventListener("DOMContentLoaded", Content.Load);
document.querySelector("#addPhone").addEventListener("click", Popup.Post);
Content.Table.addEventListener("click", (event) => {
    let target = event.target;
    if (target.classList.contains("btn-edit")) {
        Content.Detail(target.dataset.id);
    }
    if (target.classList.contains("btn-delete")) {
        Content.Delete(target.dataset.id);
    }
});
document.querySelector("#edit-modal").addEventListener("click", (event) => {
    let target = event.target;
    if (target.classList.contains("btn-edit")) {
        return Content.Edit(target.dataset.id);
    }
    if (target.classList.contains("btn-post")) {
        return Content.Post();
    }
});
