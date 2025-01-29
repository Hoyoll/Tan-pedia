import { Fetch } from "../http/Rest.js";
import { Popup } from "./Popup.js";
import { Table } from "./Table.js";

export class Content {

    private static URL: string = "http://tan.pedia.test/phone/"

    public static Table: HTMLElement = document.querySelector("#content")!

    private static Reset()
    {
        return Content.Load()
    }

    public static async Load(): Promise<void>
    {
        return Fetch(Content.URL).then((html: string) => {
            Content.Table.innerHTML = html
        })
    }

    public static async Detail(id: string): Promise<void>
    {
        let url: string = Content.URL + id
        return Fetch(url).then((html: string) => {
            return Popup.Hidrate(html)
        })
    }

    public static async Edit(id: string): Promise<void> 
    {
        let url: string = Content.URL + id
        let header: object = {
            method: "PATCH",
            headers: {
                'Content-Type': 'application/json'
            },
            body: Popup.Save()
        }
        return Fetch(url, header).then((json: string) => {
            let response: Record<string, boolean> = JSON.parse(json)
            if (response.ok) {
                Content.Reset()                
            }
        })
    }

    public static async Delete(id: string): Promise<void>
    {
        let url: string = Content.URL + id
        let header = {
            method: "DELETE",
            headers: {
                'Content-Type': 'application/json'
            }
        }
        return Fetch(url, header).then((json: string) => {
            let response: Record<string, boolean> = JSON.parse(json)
            if (response.ok) {
                Table.Remove(id)  
            }
        })
    }

    public static async Post(): Promise<void>
    {
        let header: object = {
            method: "PATCH",
            headers: {
                'Content-Type': 'application/json'
            },
            body: Popup.Save()
        }
        return Fetch(Content.URL, header).then((json: string) => {
            let response: Record<string, boolean> = JSON.parse(json)
            if (response.ok) {
                Content.Reset()
            }
        })
    }
}