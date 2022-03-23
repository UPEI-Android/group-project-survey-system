

<!DOCTYPE html>
<html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style type="text/css">
   body 
   { background:   #DDF3FF; 
    
  
  min-height: 100vh
  }

  .main-bothside {
width:60%;
padding:2em 2em 2em;
margin: 0em auto;
-webkit-box-shadow:-2px 7px 37px 8px rgba(0, 0, 0, 0.2);
-moz-box-shadow:-2px 7px 37px 8px rgba(0, 0, 0, 0.2);
box-shadow:-2px 7px 37px 8px rgba(0, 0, 0, 0.2);
background:#fff;
}
h1.header-custom {
padding: 31px 0px 16px;
font-size:53px;
text-align: center;
text-transform:capitalize;
color:black;
letter-spacing: 5px;
}
.form-group{
    display: -webkit-flex;
    display: -webkit-box;
    display: flex;
  -webkit-box-pack: justify;
  
  -webkit-justify-content: space-between;
  justify-content: space-between;
}
.question-info p, label.form-check-label, .form-control-w3l p,.form-mid-w3ls p {
font-size: 15px;
color: #000;
padding-bottom: 0px;
}
.form-mid-types input[type="text"]
{
outline: none;
width: 100%;
color: #000;
font-size: 14px;
padding: .4em .8em;
border: 1px solid #000;
display: inline-block;
background: none;
letter-spacing: 2px;


box-sizing: border-box;
}

</style>
</head>
<body>

<h1 class="header-custom">
         {{$name}}
</h1>




<div class="main-bothside">
         <form action="#" method="post">
         
         <div class="question-info">
    @foreach($questions as $question)
     
    
  
       <p> {{$question->text}}</p>
        
       <div class="form-mid-types" id="po">
      @if($question->responseType == 'numeric')
      
       
       <label><input type="text" name="answer1"> </label>
       
       @elseif($question->responseType == 'text')

       <input type="text" class="form-control" placeholder="Enter the Answer" >
      
      
       @elseif($question->responseType == 'mcq')
       
      
       {{$question->options}}
       @foreach(explode(',', $question->options) as $fields) 
      <li> <label><input type="radio" name="answer3">     {{$fields}}  </label> </li>
@endforeach
      
       
      
       
       @endif
     @endforeach
    
  
    
  


</body>
</html>





