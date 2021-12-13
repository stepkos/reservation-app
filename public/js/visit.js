
console.log((Date.parse($('#visit_end').text()) - Date.now()) / 1000 / 60)

const visitDuration = $('#visit_duration').text() * 60;
let miliSeconds = ( Date.parse($('#visit_end').text()) - Date.now() ) / 1000;
let leftMinutes = Math.floor(miliSeconds / 60) % 60;

let leftSeconds = Math.floor((miliSeconds - leftMinutes * 60) % 60)

console.log(leftMinutes)
console.log(leftSeconds)

console.log(leftMinutes)



const updateMinutes = () =>{
    leftSeconds = (leftSeconds > 1) ? leftSeconds -= 1 : 59;

    if(leftSeconds == 59)
        leftMinutes-=1;

    $("#remains-time").text(`${leftMinutes} min ${leftSeconds} s`)


    let percentageCompletion = (100 * leftMinutes) / visitDuration;

    if(percentageCompletion < 50 && percentageCompletion > 10){
        $("#remains-time").css('color', '#ffbb00')
        $('#remains-p').css('color','#ffbb00')
    }
    else if(percentageCompletion <= 10){
        $("#remains-time").css('color', 'red')
        $('#remains-p').css('color','red')
    }

}

setInterval(updateMinutes, 1000)


