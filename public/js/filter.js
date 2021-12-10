let visitDivs = $('.visit_card')
let visitsHolder = $("#visits_holder_history")

// domyślnie zaznaczone jest filtrowanie po dacie
let elementsToFilter = $( ".visit_card > div:nth-of-type(1) > span" )



const changeFilterType = () =>{
    let filterType = $("#select_history").val()

    switch(filterType){
        case "data": { elementsToFilter = $( ".visit_card > div:nth-of-type(1) > span" ); break; }
        case "doctor" : { elementsToFilter = $( ".visit_card > .visit_right > .right_text > .visit_doctor_name" ); break; }
        case "patient" : { elementsToFilter = $( ".visit_card > .visit_right > .right_text > .visit_pacient_name" ); break; }
        case "visit_type" : { elementsToFilter = $( ".visit_card > .visit_right > .right_text > .visit_type" ); break; }
    }
}


const filterVisits = () =>{


    let valueEntered = $("#filter_input").val()
    var re = new RegExp(`^${valueEntered}`);
    visitsHolder.empty()

    visitDivs.each((index)=>{  
        console.log(elementsToFilter.eq(index))
        if( elementsToFilter.eq(index).text().trim().match(re) !== null )
            visitDivs.eq(index).appendTo("#visits_holder_history")
    })

}