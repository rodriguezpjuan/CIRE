<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <h2 style="padding-left: 18px;">
    CIRE
  </h2>
  
  <a href="/home" class="w3-bar-item w3-button"><i class="fa fa-home"></i> - Inicio</a>
  <a href="/clientes" class="w3-bar-item w3-button"><i class="fa fa-id-card"></i> - Clientes</a>
  <button onclick="w3_close()" class="w3-bar-item w3-large" style="position: absolute; bottom: 20px;">
    <i class="fa fa-times"></i> - Cerrar 
  </button>
  <!--
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
  -->
</div>

<script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }

  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
</script>