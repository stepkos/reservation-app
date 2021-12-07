let calendarDivs = document.getElementsByClassName('calendar_event');


let calendar = new Calendar({
    id: '#color-calendar',
    primaryColor:"#37aee6",
    theme:"glass",
    headerBackgroundColor:"#37aee6",

    dateChanged: (currentDate, DateEvents) => {
        for(let i = 0; i < calendarDivs.length; i++){
            let divDate = calendarDivs[i].getElementsByTagName('span')[1].innerHTML.substring(0,10);
            if(Date.parse(divDate + " 00:00:00") == Date.parse(currentDate)){
                calendarDivs[i].getElementsByTagName('span')[0].style.color = "#37aee6"
            }
        } 
    }
})

calendar.setEventsData([
    {
        start: '2021-12-17T06:00:00',
        end: '2021-12-18T20:30:00',
        name: 'Blockchain 101'
    }
])