const visitDuration = $('#visit_end').text() * 60;

let leftMinutes = $('#visit_end').text() * 60;
let helpSeconds = 60;


const updateMinutes = () =>{
    helpSeconds = (helpSeconds > 1) ? helpSeconds -= 1 : 59;

    if(helpSeconds == 59)
        leftMinutes-=1;

    $("#remains-time").text(`${leftMinutes} min ${helpSeconds} s`)


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


