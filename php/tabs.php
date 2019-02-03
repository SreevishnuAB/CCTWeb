<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Details</a></li>
  <li><a data-toggle="tab" href="#menu1">Users</a></li>
  <li><a data-toggle="tab" href="#menu2">Events</a></li>
</ul>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <a href='../php/downloadcsv.php?table=studdata' class="dl btn btn-lg" id="dl-details">Download Details</a>
    <?php include("displaytable.php");?>
  </div>
  <div id="menu1" class="tab-pane fade">
    <!-- Trigger the modal with a button -->
    <div class="btn-container">
      <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#add-user-modal">Add User</button>
      <a class="dl btn btn-lg" id="dl-users" href='../php/downloadcsv.php?table=users'>Download Users</a>
    </div>
    <?php include("displayusers.php")?>
    <!-- Modal -->
    <div id="add-user-modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title" id="modalheader">Add User</h3>
          </div>
          <div class="modal-body">
            <form id="form2" action="adduser.php">
              <input class="formelements" id="user" type="text" placeholder="Enter username"><br>
              <input id="pwd" class="formelements" type="password" placeholder="Enter password"><br>
              <input class="add" id="adduser" type="submit" value="Add To Table">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <!-- Trigger the modal with a button -->
    <div class="btn-container">
      <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#add-event-modal">Add Event</button>
      <a href='../php/downloadcsv.php?table=events' class="dl btn btn-lg" id="dl-events">Download Events</a>
    </div>
    <?php include("displayevents.php")?>
    <!-- Modal -->
    <div id="add-event-modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title" id="modalheader">Add User</h3>
          </div>
          <div class="modal-body">
            <form id="form3" action="addevent.php">
              <input class="formelements" id="event" type="text" placeholder="Enter event"><br>
              <input class="formelements" id="eventdate" type="date" placeholder="Enter date"><br>
              <input class="add" id="addevent" type="submit" value="Add To Table">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>