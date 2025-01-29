import { Post } from "../widget/post.js";

export class Popup
{
    public static Modal: HTMLElement = document.querySelector("#modal-content")!

    public static Hidrate(html: string)
    {
        Popup.Modal.innerHTML = html
    }

    private static Capture(): Record<string, HTMLInputElement>
    {
        return {
            brand: document.querySelector("#brand")!,
            model: document.querySelector("#model")!,
            release: document.querySelector("#release")!,
            price: document.querySelector("#price")!,
            storage: document.querySelector("#storage")!,
            color: document.querySelector("#color")!,
            screen: document.querySelector("#screen")!,
            camera: document.querySelector("#camera")!
        }
    }

    public static Save(): string
    {
        let Target = Popup.Capture()
        return JSON.stringify({
            brand: Target.brand.value,
            model: Target.model.value,
            release: Target.release.value,
            price: Target.price.value,
            storage: Target.storage.value,
            color: Target.color.value,
            screen: Target.screen.value,
            camera: Target.camera.value
        })
    }

    public static Post(): void 
    {
        Popup.Modal.innerHTML = Post
    }
}