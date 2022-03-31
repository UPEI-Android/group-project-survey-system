
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
   <style>
    * {
  box-sizing: border-box;
}

body {
  background-color: #DDF3FF;
  color: #fff;
  font-family: 'Muli', sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  overflow: hidden;
  padding: 10px;
  margin: 0;
}

h2 {
  margin: 10px 0 20px;
  text-align: center;
}

.container {
  background-color: white;
  box-shadow: 0px 2px 10px rgba(255, 255, 255, 0.2);
  padding: 20px;
  max-width: 100%;
  
}

.result-container {
  background-color: rgba(0, 0, 0, 0.4);
  display: flex;
  justify-content: flex-start;
  align-items: center;
  position: relative;
  font-size: 18px;
  letter-spacing: 1px;
  padding: 12px 0px;
  height: 50px;
  width: 100%;
}



.result-container .btn {
  position: absolute;
  top: 5px;
  right: 5px;
  width: 40px;
  height: 40px;
  font-size: 20px;
}

.social_icon {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 15px 0;
}


.filter {
    width: 85%;
    padding: 12px;
}

.icons {
    padding: 7px;
    margin: 15px;
    width: 47px;
    font-size: 28px;
    text-align: center;
    text-decoration: none;
    border-radius: 10px;
    color: #fff;
}



i.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
    background: #3b5998;
}

.fa-twitter {
    background: #2595ea;
}

.fa-whatsapp {
    background: #58b109;
}


.fa-envelope {
    background: #088aec;
}


table {
    color:#e3e3e3;
    padding: 10px;
    width:100%;
}

table th, table td {
    padding: 10px;
    text-align: left;
}

table tbody tr {
    background-color: #1c223b;
}
h1.header-custom {
padding: 31px 0px 16px;
font-size:53px;
text-align: center;
text-transform:capitalize;
color:black;
letter-spacing: 5px;
}

.user_detail {
    cursor: pointer;
    background-color:#2f2c4c;
    border: 0;
    border-radius: 2px;
    color: #909090;
    font-size:16px;
    padding: 10px 20px;
}
  </style> 
</head>
<body>



<div class="container">

      <h1 class="header-custom">SHARE</h1>
      
      <div class="result-container">
   
        <input type="text" value="http://127.0.0.1:8000/surveyRespond/{{$data}}" class="filter" id="share_url" placeholder="Filter Posts" readonly>
        
        <button class="btn ctoCb" id="clipboard">
          <i class="far fa-clipboard"></i>
        </button>
      </div>
   
      <div class="social_icons">
        <div class="social_icon">
            <a id="shareWithFb"><i class="fab fa-facebook icons"></i></a>
            <a id="shareWithTwitter"><i class="fab fa-twitter icons"></i></a>
            <a id="shareWithWhatsapp"><i class="fab fa-whatsapp icons"></i></a>
            <a id="shareWithMail"><i class="fas fa-envelope icons"></i></a>
            <input type="button" value="Go back!" onclick="history.back()">
          
        </div>
      </div>
    </div>
   
<!--     
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>      -->

    @yield('content')
        <script src="http://code.jquery.com/jquery-3.4.1.js"></script>        
    @stack('scripts')
   



<script>
var copiedLink = '';
    function copyToClipboard(element, btnElem) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).val()).select();
        document.execCommand("copy");
        $temp.remove();
        $(btnElem).html(`<i class="fa fa-link"> </i> `);
        setTimeout(() => {
            $(btnElem).html(`<i class="far fa-clipboard"> </i> `);
        }, 2000);
    }
    $(document).ready(function() {
        copiedLink = $('#share_url').val();
       
        $('#shareWithTwitter').click(function () {
        window.open("https://twitter.com/intent/tweet?url=" + copiedLink);
    });
    $('#shareWithFb').click(function () {
        window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink, 'facebook-share-dialog', "width=626, height=436");
    });
    $('#shareWithFb').click(function () {
        window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink, 'facebook-share-dialog', "width=626, height=436");
    });
    $('#shareWithMail').click(function () {
        var formattedBody = "This is survey link: " + (copiedLink);
        var mailToLink = "mailto:?subject= " + " Survey link&body=" + encodeURIComponent(formattedBody);
        window.location.href = mailToLink;
    });
    $('#shareWithWhatsapp').click(function () {
        var win = window.open('https://api.whatsapp.com/send?text=' + copiedLink, '_blank');
        win.focus();
    });
    $(document).on('click', '.ctoCb', function () {
        copyToClipboard($(this).parent().parent().find('input'), $(this));
    });
});
</script>

