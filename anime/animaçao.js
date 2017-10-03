 
      function(){
        var animation ='animated pulse';
        var animationfin  = '$('#yourElement').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', doSomething);';
        $('btn').on('click',function(){
          $('input [name=envia]').addClass(animation).one(animationfin,function(){
            $(this).removeClass(animation);
          });
        });
      });
      }
  