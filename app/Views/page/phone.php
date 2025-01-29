<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= out(base_url('res/css/bootstrap.css')) ?>">
    <title>Document</title>
</head>
<body>
<!-- Floating Button -->
<button id = "addPhone" data-bs-toggle="modal" data-bs-target="#edit-modal" class="position-fixed bottom-0 end-0 m-5 p-3 bg-primary text-white rounded shadow-lg">
        Add Phone
</button>
<div id = "content" class="table-responsive">
  <!-- Main content here -->
</div>
<!-- Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" id = "modal-content">
      <!-- Detail here -->
</form>
  </div>
</div>
<script src="<?= out(base_url('res/js/bootstrap/bootstrap.js')) ?>"></script>
<script src ="<?= out(base_url('res/js/collections/main.js')) ?>" type="module"></script>
</body>
</html>