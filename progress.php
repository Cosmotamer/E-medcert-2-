<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Modal Example</title>
  <style>
    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.5);
    }
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center">
  <div class="progresses">
    <div class="steps active" id="progress1">1</div> 
    <span class="line" id="line1"></span>
    <div class="steps" id="progress2">2</div>
    <span class="line" id="line2"></span>
    <div class="steps" id="progress3">3</div>
  </div>
  <div class="container d-flex justify-content-center align-items-center mt-3">
    <button id="toggle" class="btn btn-primary">Next</button>
  </div>
</div>

<!-- Modal -->
<div id="exampleModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Modal title</h2>
    <p>This is a basic modal example.</p>
    <button id="closeModalBtn" class="btn btn-secondary">Close</button>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var toggleButton = document.getElementById("toggle");
    var modal = document.getElementById("exampleModal");
    var closeModalBtn = document.getElementById("closeModalBtn");

    toggleButton.addEventListener("click", function() {
      modal.style.display = "block"; // Show the modal
    });

    closeModalBtn.addEventListener("click", function() {
      modal.style.display = "none"; // Hide the modal
    });

    // Close modal when close button is clicked
    document.querySelector("#exampleModal .close").addEventListener("click", function() {
      modal.style.display = "none"; // Hide the modal
    });

    // Close modal when clicking outside of it
    window.addEventListener("click", function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    });
  });
</script>

</body>
</html>
