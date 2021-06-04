//Classificação 1
function OcultaClass(opcaoSelecionada){
var inputClass = document.getElementById("inputClass");
    if(opcaoSelecionada == "categoria1"){
        //inputCidade.style.display = "inline";
        inputClass.style.display = "block";
        inputClass.disabled = false;
    }else{
        inputClass.style.display = "none";
    }
};    

//Classificação 2
function OcultaClass2(opcaoSelecionada2){
var inputClass2 = document.getElementById("inputClass2");
    if(opcaoSelecionada2 == "Criar"){
        //inputCidade.style.display = "inline";
        inputClass2.style.display = "block";
        inputClass2.disabled = false;
    }else{
        inputClass2.style.display = "none";
    }
};   

//Classificação 3
function OcultaClass3(opcaoSelecionada3){
var inputClass3 = document.getElementById("inputClass3");
    if(opcaoSelecionada3 == "Criar"){
        //inputCidade.style.display = "inline";
        inputClass3.style.display = "block";
        inputClass3.disabled = false;
    }else{
        inputClass3.style.display = "none";
    }
}; 

//Classificação 4
function OcultaClass4(opcaoSelecionada4){
var inputClass4 = document.getElementById("inputClass4");
    if(opcaoSelecionada4 == "Criar"){
        inputClass4.style.display = "block";
        inputClass4.disabled = false;
    }else{
        inputClass4.style.display = "none";
    }
};  