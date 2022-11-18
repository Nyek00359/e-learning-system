const savetheme = document.getElementById('savetheme');


function Savetheme(){
    var save= mode.innerHTML;
          window.localStorage.setItem('style',"css/"+save+".css");
          alert("Theme saved");
  };
