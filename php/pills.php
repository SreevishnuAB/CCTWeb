<ul class="nav nav-pills">
  <li class="nav-item active">
    <a class="nav-link active" data-toggle="pill" href="#home">Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#menu1">Events</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane container active" id="home">
  <a href='../php/downloadcsv.php?table=studdata' class="dl btn btn-lg" id="dl-details">Download Details</a>
    <?php include("displaytable.php"); ?>
  </div>
  <div class="tab-pane container fade" id="menu1">
  <a href='../php/downloadcsv.php?table=events' class="dl btn btn-lg" id="dl-events">Download Events</a>
    <?php include("displayevents.php");?>
  </div>
</div>