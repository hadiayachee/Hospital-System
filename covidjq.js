



$(function(){

    $("#close").click(()=>{
        $(".alert").slideUp(500)
    })


    var API="https://api.covid19api.com/summary";
    $.ajax({
        datatype:"json",
        url:API,
        success:function(data){
            console.log(data.Global)
            const {TotalConfirmed,TotalDeaths,TotalRecovered} = data.Global;
            // console.log(data.Global);
            $(".cases").html(TotalConfirmed);
            $(".deaths").html(TotalDeaths);
            $(".recover").html(TotalRecovered);
        }
    })

    $(".search").keypress(function (e) { 
        if(e.which == 13){
            var searchdata = $(".search").val();
            var searchengine = searchdata.substring(0,1).toUpperCase()+searchdata.substring(1).toLowerCase();
            $.ajax({
                datatype:"json",
                url:`https://covid-api.mmediagroup.fr/v1/cases?country=${searchengine}`,
                success:(data)=>{
                    console.log(data.All);
                    const {confirmed,deaths,recovered,population,continent,long,abbreviation,location} = data.All;
                    $(".conf").html(confirmed);
                    $(".dea").html(deaths);
                    $(".rec").html(recovered);
                    $(".population").html(population);
                    $(".continent").html(continent);
                    $(".long").html(long);
                    $(".Code").html(abbreviation);
                    $(".Loca").html(location);
                }
            })
        }

    });
})