<?php ob_start();
require_once('header.php');
?>
<div id="userGuide">
<div class="row">
  <h1>Dashboard</h1>
</div>
  <div class="row container">
    <div class="col s12">
      <h2>User Guide</h2>
      <ul class="collapsible popout" data-collapsible="accordion">
        <li>
          <div class="collapsible-header active"><i class="material-icons">language</i>Introduction</div>
          <div class="collapsible-body"><p>Use the map to locate your way around Barrie and Orillia. </p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">navigation</i>Sharing Location</div>
          <div class="collapsible-body"><p>When viewing the 'Map' page, a prompt will display to share your location. After selecting 'Share Location' the map will adjust towards your area. </p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">location_on</i>Adding a Marker</div>
          <div class="collapsible-body"><p>Click on the map and drag the marker towards your liking. A form will display with fields to describe the area. The required fields on the form is the 'Name' and 'Description'. Click the 'Save Marker Details' link when completed.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">mode_edit</i>Editing a Marker</div>
          <div class="collapsible-body"><p>Under the 'Recent Markers' widget in Dashboard or in the 'Comment Log' page, select the 'Edit' button. </p>
          <p>All the fields are editable. After make the changes, click on the 'Save' button.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">location_off</i>Removing a Marker</div>
          <div class="collapsible-body">
            <p>There is two ways to remove a marker:</p>
            <p><strong>Map Page:</strong> Select a marker you would like to remove and click remove marker.</p>
            <p><strong>Dashboard:</strong> View the main 'Dashboard' page or 'Comment Log' page click on the last button 'Delete'.</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">invert_colors</i>Severity of Location</div>
          <div class="collapsible-body">
            <p>To indicate the importance of the marked area, a selection of colors is required to be selected.</p>
            <p><strong>Legend:</strong></p>
            <p><span class="green"></span> High</p>
            <p><span class="orange"></span> Medium</p>
            <p><span class="red"></span> Low</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">perm_phone_msg</i>Questions or Concerns</div>
          <div class="collapsible-body"><p>Call PAMP Solutions or Email <a href="mailto:pampsolutions@gmail.com">pampsolutions@outlook.com</a></p></div>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php
require_once('footer.php');
ob_flush();
?>
