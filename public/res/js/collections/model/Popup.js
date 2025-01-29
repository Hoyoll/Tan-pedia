import { Post } from "../widget/post.js";
export class Popup {
    static Modal = document.querySelector("#modal-content");
    static Hidrate(html) {
        Popup.Modal.innerHTML = html;
    }
    static Capture() {
        return {
            brand: document.querySelector("#brand"),
            model: document.querySelector("#model"),
            release: document.querySelector("#release"),
            price: document.querySelector("#price"),
            storage: document.querySelector("#storage"),
            color: document.querySelector("#color"),
            screen: document.querySelector("#screen"),
            camera: document.querySelector("#camera")
        };
    }
    static Save() {
        let Target = Popup.Capture();
        return JSON.stringify({
            brand: Target.brand.value,
            model: Target.model.value,
            release: Target.release.value,
            price: Target.price.value,
            storage: Target.storage.value,
            color: Target.color.value,
            screen: Target.screen.value,
            camera: Target.camera.value
        });
    }
    static Post() {
        Popup.Modal.innerHTML = Post;
    }
}
