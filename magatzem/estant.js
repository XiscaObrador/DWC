function Estant(id){
    this.id=id;
    this.Paquet= null;
    this.entrada=null;
    this.sortida=null;


    this.printInfo = printInfo;
    function printInfo(){

        var text = this.id +"<br>" ;

        if (this.Paquet == null){
            text += "No hi ha paquet";
        }else{
            text += this.Paquet.getInfo() + "<br>" + this.entrada + "<br>" + this.sortida;
        }

        return text;

    }


    this.afegirPaquet = afegirPaquet;
    function afegirPaquet(p){
        this.Paquet = p;
        this.entrada= new Date();
    }


    this.recollirPaquet = recollirPaquet;
    function recollirPaquet(){
        this.Paquet=null;
        this.sortida = new Date();

    }

}