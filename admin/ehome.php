<?php require 'auth.php';?>
<?php require 'header.php';?>

<?php $aid=$_SESSION['SESS_ID'];?>

 <?php
        $query2="select * from chats where chat_status='0'";
        $res2=mysqli_query($conn,$query2);
        if($res2){
           if ($res2->num_rows > 0) { 
      ?>        

 <h4>Historial de chatbot</h4><br/>
 
      <span id="page_reload">     
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="panel panel-default card-view">
            <div class="" id="collapse_1p">
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered mb-0">
                    <thead>
                      <tr>
                        <th>Pregunta</th>
                        <th>Responder</th>
                        <th>Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query="select * from chats where chat_status='0'";
                        $res=mysqli_query($conn,$query);
                      while ($result=mysqli_fetch_array($res)) {
                        $question=$result['user'];
                        $qid=$result['id']; 
                    ?>
                    <form action="chat_query.php" method="post">
                    <tr>
                      <input type="hidden" name="qid" value="<?php echo $qid;?>">
                      
                      <td><?php echo $question;?></td>

                      <td><textarea rows="5" cols="40" name="answer"></textarea></td>
                      
                      <td>
                        <select id="action" name="action">
                            <option value="text" selected>Text</option>
                            <option value="query" >Query</option>
                        </select>
                      </td>
                      
                      <td><button class="btn btn-danger btn-sm" type="submit" name = "submit" value = "Submit">Enviar</button></td>

                      <td><button class="btn btn-danger btn-sm" type="button" onclick="delete_question(this.value)" value="<?php echo $qid;?>" name = "delete">Eliminar</button></td> 
                       
                    </tr>
                  </form>
                    
                    <?php } ?>
                    </tbody> 
                 </table>
              </div>
            </div>
          </div>
      </div>
  </div>
  </span>
<?php 
}else{ }
}
?>

<?php require 'footer.php';?>

<script type="text/javascript">

  function delete_question(value){
    //alert(value);

    $.ajax({
        url: 'delete_question.php',  
        data:{question_id:value},                         
        type: 'post',
        success: function(data){
            //alert(data);
            $("#page_reload").load(" #page_reload");
        }
     });
  }
</script>
