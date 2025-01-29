export const Post = `<div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Phone</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" >
<div class="mb-3">
        <label for="brand" class="form-label">Brand</label>
        <input type="text" class="form-control" id="brand" >
    </div>
    <div class="mb-3">
        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" id="model" >
    </div>
    <div class="mb-3">
        <label for="release" class="form-label">Release Year</label>
        <input type="number" class="form-control" id="release">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price">
    </div>
    <div class="mb-3">
        <label for="storage" class="form-label">Storage</label>
        <input type="number" class="form-control" id="storage" >
    </div>
    <div class="mb-3">
        <label for="color" class="form-label">Color</label>
        <input type="text" class="form-control" id="color" >
    </div>
    <div class="mb-3">
        <label for="screen" class="form-label">Screen Size</label>
        <input type="number" class="form-control" id="screen">
    </div>
    <div class="mb-3">
        <label for="camera" class="form-label">Camera</label>
        <input type="number" class="form-control" id="camera">
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" id = "post" class="btn-post btn btn-primary">Insert Phone</button>
</div>`;
