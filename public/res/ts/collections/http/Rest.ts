export async function Fetch(url: string, header = {}) : Promise<string>
{   
    try {
        let response = await fetch(url, header)
        if (!response.ok) {
            throw new Error("Http error");
        }
        return await response.text()
    } catch (error) {
        return ""
    }
}