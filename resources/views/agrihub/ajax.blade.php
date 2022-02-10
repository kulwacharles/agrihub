<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Data Submit Through Ajax | 8Bityard</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
          <br/>
         <h3>Contact Form Data Submit Through <b>Ajax Request</b></h3>
         <div class="card">
            <form name="contact" method="post" id="contactForm">
               @csrf
               <div class="alert alert-success d-none" id="msg_div">
                <span id="res_message"></span>
               </div>
               <div class="card-header">Please fill up all the Field's.</div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-6">
                        <label for="Name"> Name :</label>
                        <input type="text" class="form-control" id="name" placeholder="Please enter name" required>
                     </div>
                     <div class="col-md-6">
                        <label for="Email">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="Please enter email" required>
                     </div>
                     <div class="col-md-6">
                        <label for="Phone">Phone :</label>
                        <input type="number" class="form-control" id="phone" placeholder="Please enter phone" required>
                     </div>
                     <div class="col-md-6">
                        <label for="Address">Message :</label>
                        <input type="text" class="form-control" id="message" placeholder="Please enter address" required>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <button type="submit" class="btn btn-block btn-info btn-sm">Save</button>
               </div>
               <br/>
         </div>
         </form>
      </div>
   </body>
</html>
<script type="text/javascript">
$('#contactForm').on('submit',function(event){
    event.preventDefault();
    // Get Alll Text Box Id's
    name = $('#name').val();
    email = $('#email').val();
    phone = $('#phone').val();
    message = $('#message').val();
 
    $.ajax({
      url: "{{url('order')}}", //Define Post URL
      type:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
        name:name,
        email:email,
        phone:phone,
        message:message,
      },
      //Display Response Success Message
      cache: false,
      success: function(response){
      $('#res_message').show();
        $('#res_message').html(response.msg);
        $('#msg_div').removeClass('d-none');
 
        document.getElementById("contactForm").reset();
        setTimeout(function(){
        $('#res_message').hide();
        $('#msg_div').hide();
        },4000);
   },
  });
});
</script>