import { Fetch } from "../http/Rest.js";
import { Popup } from "./Popup.js";
import { Table } from "./Table.js";
export class Content {
    static URL = "http://tan.pedia.test/phone/";
    static Table = document.querySelector("#content");
    static Reset() {
        return Content.Load();
    }
    static async Load() {
        return Fetch(Content.URL).then((html) => {
            Content.Table.innerHTML = html;
        });
    }
    static async Detail(id) {
        let url = Content.URL + id;
        return Fetch(url).then((html) => {
            return Popup.Hidrate(html);
        });
    }
    static async Edit(id) {
        let url = Content.URL + id;
        let header = {
            method: "PATCH",
            headers: {
                'Content-Type': 'application/json'
            },
            body: Popup.Save()
        };
        return Fetch(url, header).then((json) => {
            let response = JSON.parse(json);
            if (response.ok) {
                Content.Reset();
            }
        });
    }
    static async Delete(id) {
        let url = Content.URL + id;
        let header = {
            method: "DELETE",
            headers: {
                'Content-Type': 'application/json'
            }
        };
        return Fetch(url, header).then((json) => {
            let response = JSON.parse(json);
            if (response.ok) {
                Table.Remove(id);
            }
        });
    }
    static async Post() {
        let header = {
            method: "PATCH",
            headers: {
                'Content-Type': 'application/json'
            },
            body: Popup.Save()
        };
        return Fetch(Content.URL, header).then((json) => {
            let response = JSON.parse(json);
            if (response.ok) {
                Content.Reset();
            }
        });
    }
}
