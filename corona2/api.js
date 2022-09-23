$.getJSON('https://coronavirus-19-api.herokuapp.com/countries',dataN => {
    let Json = dataN;
    for(i=0;i<Json.length;i++){
        let negara = Json[i].country;
        if(negara === 'Indonesia'){
            $("#indoP").html(Json[i].cases);
            $("#indoM").html(Json[i].deaths);
            $("#indoS").html(Json[i].recovered);
        }
        
    }
})


$.getJSON('https://indonesia-covid-19.mathdro.id/api/provinsi/',dataL => {
    let Json = dataL;
    for(i=0;i<Json.data.length;i++){
        let prov = Json.data[i].provinsi;
        if(prov === 'Sumatera Barat'){
            $("#sumbarP").html(Json.data[i].kasusPosi);
            $("#sumbarM").html(Json.data[i].kasusMeni);
            $("#sumbarS").html(Json.data[i].kasusSemb);
        }
    }
})