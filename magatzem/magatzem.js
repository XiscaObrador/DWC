function Magatzem (n){
        this.nombreEstants = n;
        this.estants = new Array();

        this.crearMagatzem = crearMagatzem;

        function crearMagatzem() {
            for (var i = 0; i < this.nombreEstants; i++) {
                this.estants[i] = new Estant("Estanteria " + i);

            }

        }

        this.entrada = entrada;
        function entrada(posicio, paquet) {
        }

        this.sortida = sortida;
        function sortida(numEstant) {
        }

        this.imprimir = imprimir;
        function imprimir(){
		   var txt = "<table class='table table-bordered'><thead class='thead-dark'><tr>";
		    for(var i=0; i<this.nombreEstants; i++){
			    txt += "<th width='100px'>"+ i + "</th>";
		    }
		    txt +="</tr></thead><tbody></tr>";
		    for(var i=0; i<this.nombreEstants; i++){
			    var e = this.estants[i];
			    txt += "<td width='100px'>"+ e.printInfo() + "</td>";
		    }
		    txt += "</tr></tbody></table>";
		    document.getElementById("taula").innerHTML = txt;

            
        }

        this.afegirPaquetEstant = afegirPaquetEstant;

        function afegirPaquetEstant(p,posicio){

            var estant = this.estants[posicio];

            estant.afegirPaquet(p);
            
        }

        this.llevarPaquetEstant = llevarPaquetEstant;

        function llevarPaquetEstant(p,posicio){

            var estant = this.estants[posicio];

            estant.recollirPaquet(p);
            
        }
        this.calculaPreus = calculaPreus;

        function calculaPreus() {
        }

        this.ordrenaAscendent = ordrenaAscendent;

        function ordrenaAscendent() {
        }
    }