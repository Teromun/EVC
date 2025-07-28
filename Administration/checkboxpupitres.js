//VOICES//

var S = "S";
var A = "A";
var F = "";
var T = "T";
var B = "B";
var H = "";
var SATB = "SATB";

var checkboxElemsSubmit = document.querySelectorAll(
  "input[class='submitmidi']"
);

//function Pupitre(ResultatVoices) {

let boxS = document.querySelector("input[class='midi S']");
boxS.addEventListener("change", function () {
  if (this.checked) {
    S += "1S2";
  } else if (this.checked == false) {
    S = S.replace("1S2", "");
  }
});

let boxA = document.getElementById("midiA");
boxA.addEventListener("change", function () {
  if (this.checked) {
    A += "1A2";
  } else if (this.checked == false) {
    A = A.replace("1A2", "");
  }
});

let boxF = document.getElementById("midiF");
boxF.addEventListener("change", function () {
  if (this.checked) {
    S = "";
    A = "";
    F = "F";
  } else if (this.checked == false) {
    S = "S";
    A = "A";
    F = "";
  }
});

let boxT = document.getElementById("midiT");
boxT.addEventListener("change", function () {
  if (this.checked) {
    T += "1T2";
  } else if (this.checked == false) {
    T = T.replace("1T2", "");
  }
});

let boxB = document.getElementById("midiB");
boxB.addEventListener("change", function () {
  if (this.checked) {
    B += "1B2";
  } else if (this.checked == false) {
    B = B.replace("1B2", "");
  }
});

let boxH = document.getElementById("midiH");
boxH.addEventListener("change", function () {
  if (this.checked) {
    B = "";
    T = "";
    H = "H";
  } else if (this.checked == false) {
    T = "T";
    B = "B";
    H = "";
  }
});

var checkboxElems = document.querySelectorAll("input.midi");
let voice = document.getElementById("voices");
console.log("check checkboxElems", voice);

console.log("lenght checkbox", checkboxElems.length);

for (var i = 0; i < checkboxElems.length; i++) {
  checkboxElems[i].addEventListener("change", function () {
    SATB = S + A + F + T + B + H;
    voice.setAttribute("value", SATB);
    let resultatVoices = "pupitres : " + voice["value"];
    console.log("voice", voice);
    console.log("resultatVoices", resultatVoices);
  });
}
// };

//let paragrapheS = document.querySelector("p.submitS");
//let paragrapheS2 = "<p class=\"submitS1\"><label for=\"submitmidiS1\">Soprane 1 :<\label><input type=\"file\" class=\"submitmidiS1\" id=\"submitmidiS1\" /></p>"
//function FichierPupitre(promptPupitre) {
//for (var i = 0; i < checkboxElems.length; i++) {
//  checkboxElems[i].addEventListener("change", function() {
//    var pupitres = voice.indexOf("S2")
//        if (pupitre !== -1){
//            let resultatFichierPupitre = paragrapheS.replace(paragrapheS, paragrapheS2);
//        }
//    }
//  )}
//}

// Pupitre(ResultatVoices)
//FichierPupitre(promptPupitre)
