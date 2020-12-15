function Paquet(id,propietari,pes){
    this.id = id;
    this.destinatari = propietari;
    this.pes = parseInt(pes);
    this.import = null;

    this.getInfo = getInfo;
    function getInfo(){

        var text;
    return this.id+"<br/>"+this.destinatari+"<br/>"+this.pes+"Kg" ;
    }
}


// boto de calcula pvp segons es pes i un boto que ordena per pes,
// dins array de magatzem ha de surtit posicio codi pes i destinatari i sa data, que aixo s'introdueix a traves des formulri
// amb es boto de entrada, hi ha d'ahver un altre boto de surtida, i dins sa matriu ha de qedar sa fetxa de surtida des boto, aixo tambe sa fa mb 
//so mateix formulari de entrada