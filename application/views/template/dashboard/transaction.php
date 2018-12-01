<div class="wrapper-dash">
  <nav>
    <ul class="sidenav">
      <li>
        <a href="">
          <i class="pull-left glyphicon glyphicon-home"></i>DASHBOARD
        </a>
      </li>
      <li>
        <a class="active" href="">TRANSACTION
          <i class="pull-left glyphicon glyphicon-tasks"></i>
        </a>
      </li>
      <li>
        <a href="">QUEUE
          <i class="pull-left glyphicon glyphicon-transfer"></i>
        </a>
      </li>
      <li>
        <a href="">SETTING
          <i class="pull-left glyphicon glyphicon-cog"></i>
        </a>
      </li>
    </ul>
  </nav>

   <div class="transac-content">
    <div class="container">  
        <table class="table table-borderless">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>ACCOUNT NAME</th>
                  <th>PASSWORD</th>
                  <th>TRANSACTION</th>
                  <th>TIME</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                    <td>Name</td>
                    <td>Password</td>
                    <td>Transaction</td>
                    <td>1:00PM-2:00PM</td>
                </tr>

                <tr>
                  <td>2</td>
                    <td>Name</td>
                    <td>Pass</td>
                    <td>Sample</td>
                    <td>12:00AM-5:00AM</td>
                </tr>
              </tbody>
        </table>
        <a class="btn-transact pull-right" href="" data-toggle="modal" data-target="#modalAdd">
          ADD
          <i class="pull-left glyphicon glyphicon-plus"></i>
        </a>
        <a class="btn-transact pull-right" href="" data-toggle="modal" data-target="#modalUpdate">
          UPDATE
          <i class="pull-left glyphicon glyphicon-edit"></i>
        </a>
        <a class="btn-transact pull-right" href="" data-toggle="modal" data-target="#myModal">
          DELETE
          <i class="pull-left glyphicon glyphicon-trash"></i>
       </a>
   </div>
  </div> 

<div class="modal fade" id="modalAdd" role="dialog">
  <div class="modal-dialog modal-s">
    <div class="border">
      <div class="modal-content">
      <div class="header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <div class="modal-body">
       <form>
        <div class="form-group">
          <i class="glyphicon glyphicon-user"></i>
            <input type="text" placeholder="Account name" name="accname" required>
        </div>
         <div class="form-group">
          <i class="glyphicon glyphicon-lock"></i>
            <input type="text" placeholder="Password" name="pass" required>
        </div>
         <div class="form-group">
            <i class="glyphicon glyphicon-tasks"></i>
            <input type="text" placeholder="Transaction Name" name="tname" required>
        </div>
         <div class="form-group">
          <i class="glyphicon glyphicon-time"></i>
            <input class="time" type="time" class="time"/>
            <label>TO</label> 
            <input class="time" type="time" class="time"/>
        </div>
       </form>       
      </div>
      <div class="footer">
          <button  id="btn-title"  data-dismiss="modal">ADD TRANSACTION</button> 
          <button id="btn-transac" data-dismiss="modal">ADD</button>
      </div>
    </div>
  </div>
 </div>
</div>  

<div class="modal fade" id="modalUpdate" role="dialog">
  <div class="modal-dialog modal-s">
    <div class="border">
      <div class="modal-content">
      <div class="header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <div class="modal-body">
       <form>
        <div class="form-group">
          <i class="glyphicon glyphicon-user"></i>
            <input type="text" placeholder="Account name" name="accname" required>
        </div>
         <div class="form-group">
            <i class="glyphicon glyphicon-tasks"></i>
            <input type="text" placeholder="Transaction Name" name="tname" required>
        </div>
         <div class="form-group">
          <i class="glyphicon glyphicon-time"></i>
            <input class="time" type="time" class="time"/>
            <label>TO</label> 
            <input class="time" type="time" class="time"/>
        </div>
       </form>       
      </div>
      <div class="footer">
          <button  id="btn-title-up"  data-dismiss="modal">UPDATE TRANSACTION</button> 
          <button id="btn-transac-up" data-dismiss="modal">UPDATE</button>
      </div>
    </div>
  </div>
 </div>
</div>
</div>

<script type="text/javascript">
  $('#btn-title').attr('disabled', 'disabled');
</script>