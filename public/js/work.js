
const viewDoctorHours = (selectElement = null) =>{
    
    $('#error').text("")

    let doctorId = $("#form_doctor").val();
    let doctorName = (selectElement != null) ? selectElement.options[selectElement.selectedIndex].text : $("#form_doctor option:first").text();

    fetch(`/doctorWorkHours/${doctorId}`, {
        method: "POST",
        headers: {
            "X-CSRF-Token": document.querySelector('input[name=_token]').value
        }
    })
    .then((response) => {
        if(response.status == 200)
            return response.json()
        else
            throw new Error("Nie udało nam pobrać się godzin pracy lekarza")
    })
    .then((data) =>{

        let workHours = [
            data.beginMonday.substring(0,5) + " - " + data.endMonday.substring(0,5),
            data.beginTuesday.substring(0,5)  + " - " + data.endTuesday.substring(0,5),
            data.beginWednesday.substring(0,5)  + " - " + data.endWednesday.substring(0,5),
            data.beginThursday.substring(0,5)  + " - " + data.endThursday.substring(0,5),
            data.beginFriday.substring(0,5)  + " - " + data.endFriday.substring(0,5)
        ]

        $("#doctor").text(doctorName);

        $(".hours").each((index)=>{
            $(".hours").eq(index).text(workHours[index])
        })

    })
    .catch((error)=>{
        $('#error').text(error)
    })
}



// zaciągnięcie danych na początku wejścia na stronie na podstawie pierwszej opcji w select od doktorów
$("#doctor").text( $("#form_doctor option:selected").text() );
viewDoctorHours()