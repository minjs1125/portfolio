// var(변수=값) valueX/value_x->내가 지은 이름
//run(함수=움직임)
// alret("경고합니다.");->명령

/* 
function pomulsun(x){alert(x*x);}
var x=prompt("원하는 수를 입력하세요.");
pomulsun(x);

alt + shifh + a = 전체 주석
ctrl + / = 한줄주석
*/


/*eq는 순서*/
//$()<<달라 = 제이쿼리입니다.()<< css의 선택자를 넣음
var n = 0;
function swap(){
    $("#mains>li").css("z-index",9);
    $("#mains>li").eq(n).css("z-index",10);
    if(n == 0){
        n = 1;
    }
    else if(n == 1){
        n = 2;
    }
    else if(n == 2){
        n = 0;
    }
}
/*위와 같은데 짧게 줄인 명령 
var n = 0;
function swap(){
    $("#mains>img").css("z-index",9);
    $("#mains>img").eq(n).css("z-index",10);
    if(n == 2) n = 0; 
    else n++;
}*/

setInterval(swap, 3000);

// $(".more_cont").hover(function(){},function(){})
//              호버일때 일어나는일 / 호버끝나면 일어나는일
$("#navs > :last-child").hover(function(){
//  $(".more_cont").show();
  $(".more_cont").stop().slideDown(200);
},function(){
//  $(".more_cont").hide();
 $(".more_cont").stop().slideUp(200);
})
             



