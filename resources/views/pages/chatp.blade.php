<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>
  <div class="page-title-container">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 wow fadeIn">
            <i class="fa fa-pencil"></i>
            <h1>Chat de preguntas /</h1>
            <p>Haz una pregunta a nuestros especialistas</p>
         </div>
      </div>
   </div>
</div>

<div class="row">
<div class="col-sm-12 posts-1-box posts-1-box-best wow fadeInDown">
  <div class="container clearfix alinechat">   
    
    <div class="chat ">
      <div class="chat-header clearfix">
        <img src="assets/img/friends/fr-01.jpg" alt="avatar" />
        
        <div class="chat-about">
          <div class="chat-with">Chat con Dr. Jairo Ascencio</div>
          <div class="chat-num-messages">already 1 902 messages</div>
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->
      
      <div class="chat-history">
        <ul>
          <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
              <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
              
            </div>
            <div class="message other-message float-right">
              Hi Dr. Jairo, how are you? How is the project coming along?
            </div>
          </li>
          
          <li class="clearfix">
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i>Dr. Jairo</span>
              <span class="message-data-time">10:12 AM, Today</span>
            </div>
            <div class="message my-message">
              Are we meeting today? Project has been already finished and I have results to show you.
            </div>
          </li>
          
          <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
              <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
              
            </div>
            <div class="message other-message float-right">
              Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
            </div>
          </li>
          
          <li class="clearfix">
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i>Dr. Jairo</span>
              <span class="message-data-time">10:20 AM, Today</span>
            </div>
            <div class="message my-message">
              Actually everything was fine. I'm very excited to show this to our team.
            </div>
          </li>
          
          <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i>Dr. Jairo</span>
              <span class="message-data-time">10:31 AM, Today</span>
            </div>
            <i class="fa fa-circle online"></i>
            <i class="fa fa-circle online" style="color: #AED2A6"></i>
            <i class="fa fa-circle online" style="color:#DAE9DA"></i>
          </li>
          
        </ul>
        
      </div> <!-- end chat-history -->
      
      <div class="chat-message clearfix">
        <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
                
        <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
        <i class="fa fa-file-image-o"></i>
        
        <button>Send</button>

      </div> <!-- end chat-message -->
      
    </div> <!-- end chat -->
    
  </div> <!-- end container -->
</div>
</div>



	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>