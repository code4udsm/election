
function printTime( ) {

    const now = new Date();
    let hour = now.getHours();
    let min = now.getDay();


    if(hour < 12) {
        document.writeln("<h1> Habari za Asubuhi!<h1>");
        if (hour < 8){ document.writeln("Voting time is not ready");}
    }

    if (hour >= 12) {

        hour = hour - 12;

        if (hour < 4) {
            document.writeln("<h1> Good afternoon! <h1>");
            document.writeln("<h1> Voting time has passed </h1>");
        }


        if (hour >= 4 && hour < 8) {
            document.writeln("<h1> Good evening! <h1>");
            document.writeln("<h1> Voting time has passed </h1>");
        }

        if (hour >= 8){
            document.writeln(name + " Mambo vipi");
            document.writeln("<h1> Habari za usiku <h1>" );
            document.write("Current time" + "</br>")
            document.writeln( now.getFullYear() + ":" + now.getUTCMonth()
                + ":" + now.getDate() + ":" + now.getHours() + ":" + now.getMinutes() + ":" +
                now.getSeconds()) }

    }


}


//setInterval(printTime(), 1000);
printTime();


